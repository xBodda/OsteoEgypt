@extends('layouts.control')

@section('title')
    Add Appointment Time
@endsection

@section('content')
<div class="mx-auto w-full -m-24">
          <div class="flex flex-wrap">
            <div class="w-full">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0"
              >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                    <h6 class="text-gray-700 text-xl font-bold">
                      Appointment Details
                    </h6>

                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <form method="POST">
                    @csrf
                    @if(Session::has('success'))
                        <div class="w-full bg-green-200 text-green-700 rounded px-6 py-4 text-md">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-red-500">:message</div>')) !!}
                    @endif
                    <h6
                      class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                    </h6>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Doctor
                          </label>
                          <select
                            name="doctor"
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          >
                            @foreach ($doctors as $doctor)
                              <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Appointment Type
                          </label>
                          <select
                            name="type"
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          >
                            @foreach ($types as $type)
                              <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="w-full lg:w-12/12 px-4">
                      <div class="relative w-full mb-3">
                        <label
                          class="block uppercase text-gray-600 text-xs font-bold mb-2"
                          htmlFor="grid-password"
                        >
                          Branch
                        </label>
                        <select
                          name="branch"
                          type="text"
                          class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                        >
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                      <h6
                        class="text-gray-400 text-sm mt-3 mb-3 font-bold uppercase w-full px-4"
                      >
                          Appointment Time
                      </h6>
                    <div id="time-slots">
                      <div class="parent flex flex-wrap">
                        <div class="w-full lg:w-5/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Date
                            </label>
                            <input required
                              type="date"
                              name="appointment_date[]"
                              class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            />
                          </div>
                        </div>
                        <div class="w-full lg:w-5/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Time
                            </label>
                            <input required
                              type="time"
                              name="appointment_time[]"
                              class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            />
                          </div>
                        </div>
                        <div class="w-full lg:w-2/12 px-4 mb-1">
                          <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            >
                              <div class="add-slot-title">Add Slot</div>
                            </label>
                            <button id="add-time-button" type="button" class="w-full p-3 border-0 outline-none bg-green-500 text-white rounded shadow hover:bg-green-600 active:bg-green-700 cursor-pointer"> 
                              <i class="fas fa-plus"></i>
                             </button>
                        </div>
                      </div>
                    </div>
                    <script>
                      let add_time_slots_container = $("#time-slots");
                      let add_time_slots_inputs = $("#time-slots").children();
                      let add_time_slots_button = $("#add-time-button");
                      add_time_slots_button.click(function(){
                        console.log(add_time_slots_inputs);
                        let clone = add_time_slots_inputs.clone();
                        clone.find('.add-slot-title').html('Remove');
                        clone.find('.fa-plus').removeClass('fa-plus').addClass('fa-minus');
                        clone.find('.bg-green-500').click(function(){
                          console.log( $(this).parent('.parent'));
                          $(this).parent().parent().remove();
                        });
                        clone.find('.bg-green-500').removeClass('hover:bg-green-600').addClass('hover:bg-red-600');
                        clone.find('.bg-green-500').removeClass('active:bg-green-700').addClass('active:bg-red-700');
                        clone.find('.bg-green-500').removeClass('bg-green-500').addClass('bg-red-500');
                        add_time_slots_container.append(clone);
                      });
                    </script>
                    <input type="submit" value="Submit" class="py-3 px-6 mx-4 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

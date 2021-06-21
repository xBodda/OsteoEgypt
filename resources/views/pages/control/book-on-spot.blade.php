@extends('layouts.control')

@section('title')
    Book On Spot
@endsection

@section('content')
<div class="mx-auto w-full -m-24" id="appointment_booking_page">
          <div class="flex flex-wrap" >
            <div class="w-full">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0"
              >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                    <h6 class="text-gray-700 text-xl font-bold">
                      Booking Details
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

                    <h6
                      class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
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
                            id="doctor"
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
                            id="visit_type"
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
                          id="location"
                          class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                        >
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <h6
                    class="text-gray-400 text-sm mt-9 mb-3 font-bold uppercase w-full px-4">
                        Personal Details
                    </h6>
                    <div id="time-slots">
                      <div class="parent flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Fullname
                            </label>
                            <input required
                              type="text"
                              name="fullname"
                              placeholder="Fullname here .."
                              class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            />
                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Phonenumber
                            </label>
                            <input required
                              type="text"
                              name="phonenumber"
                              placeholder="Phonenumber here .."
                              class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <h6
                    class="text-gray-400 text-sm mt-9 mb-3 font-bold uppercase w-full px-4">
                        Appointment Time
                    </h6>
                    <div id="time-slots">
                      <div class="parent flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Date
                            </label>
                            <select
                            name="date"
                            id="date"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                <option value="" selected disabled >Select a time...</option>
                            </select>
                          </div>
                        </div>

                      </div>
                    </div>
                    <input type="submit" value="Book Now" class="py-3 px-6 mx-4 mt-9 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                  </form>
                  
                </div>
                
              </div>

            </div>
          </div>
        </div>
@endsection

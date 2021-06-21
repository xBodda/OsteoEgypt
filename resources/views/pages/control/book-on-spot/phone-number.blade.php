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
                      Register Patient
                    </h6>
                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <form action="{{ route('book-on-spot-next') }}" method="POST">
                    @csrf
                    @if(Session::has('success'))
                        <div class="w-full bg-green-200 text-green-700 rounded px-6 py-4 text-md">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <h6
                      class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                    </h6>
                    <div id="time-slots">
                      <div class="parent flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Phone
                            </label>
                            <input required
                              type="text"
                              name="phone"
                              placeholder="Phone Number here .."
                              class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="submit" value="Next" class="py-3 px-6 mx-4 mt-4 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                  </form>
                  
                </div>
                
              </div>

            </div>
          </div>
        </div>
@endsection

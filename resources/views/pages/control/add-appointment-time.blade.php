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
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                          >
                          <option value="x">Mohamed Ashraf</option>
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
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                          >
                          <option value="x">Child Follow Up</option>
                        </select>
                        </div>
                      </div>
                    </div>

                    <h6
                      class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                    </h6>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Branch
                          </label>
                          <select
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"

                          >
                          <option value="x">Maadi</option>
                        </select>
                        </div>
                      </div>
                      <h6
                      class="text-gray-400 text-sm mt-3 mb-3 font-bold uppercase w-full px-4"
                    >
                        Appointment Time
                    </h6>
                      <div class="w-full lg:w-6/12 px-4">

                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Date
                          </label>
                          <input
                            type="date"
                            name="appointment_date"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            value="New York"
                          />
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Time
                          </label>
                          <input
                            type="time"
                            name="appointment_time"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            value="United States"
                          />
                        </div>
                      </div>
                    </div>
                    <input type="submit" value="Submit" class="py-3 px-6 mx-4 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

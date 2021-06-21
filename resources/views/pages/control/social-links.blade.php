@extends('layouts.control')

@section('title')
    Edit Social Links
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
                        Edit Social Links
                    </h6>

                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form action="{{url('/control/saveLinks')}}" method="POST">
                    {{csrf_field()}}
                    <h6
                      class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                    </h6>
                    <div class="flex flex-wrap mb-4">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            <i class="fab fa-facebook-f"></i> Facebook
                          </label>
                          <input type="text" name="facebook" value="{{ $links->facebook }}" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 outline-none"> 
                        </div>
                      </div>
                    </div>

                    <div class="flex flex-wrap mb-4">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                            <i class="fab fa-instagram"></i> Instagram
                            </label>
                            <input type="text" name="instagram" value="{{ $links->instagram }}" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 outline-none"> 
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-4">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                            </label>
                            <input type="text" name="linkedin" value="{{ $links->linkedin }}" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 outline-none"> 
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-4">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                            <i class="fab fa-twitter"></i> Twitter
                            </label>
                            <input type="text" name="twitter" value="{{ $links->twitter }}" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 outline-none"> 
                          </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap mb-4">
                        <div class="w-full lg:w-12/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-gray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                            <i class="fab fa-youtube"></i> Youtube
                            </label>
                            <input type="text" name="youtube" value="{{ $links->youtube }}" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 outline-none"> 
                          </div>
                        </div>
                    </div>
                    <input type="submit" value="Save Links" name="add" class="py-3 px-6 mx-4 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                    
                </form>
                </div>
              </div>
            </div>
          </div>

        </div>
@endsection

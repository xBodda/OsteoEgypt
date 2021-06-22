@extends('layouts.control')

@section('title')
    Add New Page
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
                        Add New Page
                    </h6>

                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form action="{{url('/control/addPage')}}" method="POST">
                    {{csrf_field()}}
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
                            Section
                          </label>
                          <select name="section"
                            type="text"
                            class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                          >
                            @foreach ($sections as $section)
                                <option value="{{$section->id}}">{{$section->name}}</option>
                            @endforeach
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
                            Page name
                          </label>
                          <input type="text" name="pageName" class="border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>
                      <h6
                      class="text-gray-400 text-sm mt-3 mb-3 font-bold uppercase w-full px-4"
                    >
                    </h6>
                    </div>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-gray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Page Content
                          </label>
                          <textarea id="summernote" rows="10" class="h-28" name="content"></textarea>
                        </div>
                      </div>
                      <h6
                      class="text-gray-400 text-sm mt-3 mb-3 font-bold uppercase w-full px-4"
                    >
                    </h6>
                    </div>
                    
                    <input type="submit" value="Add Page" name="add" class="py-3 px-6 mx-4 text-white bg-emerald-500 border-none outline-none rounded shadow-lg hover:bg-emerald-600 transition-colors cursor-pointer focus:bg-emerald-700">
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <script>
          $(document).ready(function() {
            $('#summernote').summernote();
          });
        </script>
@endsection

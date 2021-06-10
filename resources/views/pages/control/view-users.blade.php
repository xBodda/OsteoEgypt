@extends('layouts.control')

@section('title')
    Users
@endsection

@section('content')
<div class="flex flex-wrap">
            <div class="w-full mb-12">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-lg text-gray-700">
                        All Users
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <table
                    class="items-center w-full bg-transparent border-collapse"
                  >
                    <thead>
                      <tr>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Name
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Register date
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Phone
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Email
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Priority
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                        >
                          <img
                            src="{{ asset('assets/image/profile-img.jpg') }}"
                            class="h-12 w-12 bg-white rounded-full border"
                          />
                          <span class="ml-3 font-bold text-gray-600">
                            {{ $user->name }}
                          </span>
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          {{ $user->created_at }}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          01123456789
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                         {{ $user->email }}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          <i class="fas fa-circle text-red-600 mr-1"></i>
                          High
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                        >
                          <a
                            href="#"
                            class="text-gray-500 block py-1 px-3"
                            onclick="openDropdown(event,'table-light-1-dropdown')"
                          >
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div
                            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="table-light-1-dropdown"
                          >
                            <a
                              href="#"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                              >View Profile</a
                            ><a
                              href="#"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                              >Edit</a
                            ><a
                              href="#"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                              >Send Message</a
                            >
                            <div
                              class="h-0 my-2 border border-solid border-gray-100"
                            ></div>
                            <a
                              href="#"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-red-600 hover:text-white hover:bg-red-600"
                              >Suspend User</a
                            >
                          </div>
                        </td>
                      </tr>
                        @endforeach

                    </tbody>
                  </table>
                  <div class="p-5">
                  {{ $users->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

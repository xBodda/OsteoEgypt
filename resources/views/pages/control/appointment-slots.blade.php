@extends('layouts.control')

@section('title')
    Appointment Time Slots
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
                        Appointment Time Slots
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
                          Doctor
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Appointment Time
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Type
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Branch
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        >
                          Status
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-50 text-gray-500 border-gray-100"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($slots as $slot)
                        <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                        >
                          <img
                            src="{{ asset('storage/images/'.$slot->doctor->image) }}"
                            class="h-12 w-12 bg-white rounded-full border"
                          />
                          <span class="ml-3 font-bold text-gray-600">
                            {{ $slot->doctor->name }}
                          </span>
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          {{ date('l, Y/m/d h:i A',
                              strtotime($slot->appointment_time)
                              ) }}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          {{ $slot->type->name }}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          {{ $slot->branch->name }}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                          @if($slot->appointment)
                          <i class="fas fa-circle text-green-600 mr-1"></i>
                          Taken
                          @else
                          <i class="fas fa-circle text-yellow-500 mr-1"></i>
                          Free
                          @endif
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                        >
                          <a
                            class="text-gray-500 block py-1 px-3 cursor-pointer"
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
                              >View Full Details</a
                            ><a
                              href="{{ route('profile-about',$slot->doctor->id) }}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                              >View Doctor's Profile</a
                            >
                            <div
                              class="h-0 my-2 border border-solid border-gray-100"
                            ></div>

                            <a
                              href="#"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-red-600 hover:text-white hover:bg-red-600"
                              >Delete Slot</a
                            >
                          </div>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="px-5 py-4">
                    {{ $slots->links() }}
                  </div>
                </div>
              </div>
              <a href="{{ route('control-appointments') }}"><div class="p-4 bg-blue-500 table text-white mb-2 rounded shadow-lg hover:bg-blue-600 transition-colors">
                <i class="fas fa-table mr-1"></i> Booked Appointments
              </div></a>
              <a href="{{ route('control-add-time') }}"><div class="p-4 bg-emerald-500 table text-white rounded shadow-lg hover:bg-emerald-600 transition-colors">
                <i class="fas fa-plus mr-1"></i> Add Appointment Time
              </div></a>
            </div>
          </div>
@endsection

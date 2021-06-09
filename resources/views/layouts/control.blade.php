
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{ asset('assets/image/apple-icon.png') }}"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/master.css') }}" rel="stylesheet">
    <title>@yield('title') | OsteoEgypt</title>
  </head>
  <body class="text-blueGray-darkest antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href=""
          >
            OsteoEgypt
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block py-1 px-3"
                href="#"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="notification-dropdown"
              >
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else here</a
                >
                <div
                  class="h-0 my-2 border border-solid border-blueGray-100"
                ></div>
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </li>
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block"
                href="#"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('assets/image/profile-img.jpg') }}"
                  /></span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-responsive-dropdown"
              >
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else here</a
                >
                <div
                  class="h-0 my-2 border border-solid border-blueGray-100"
                ></div>
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href=""
                  >
                    OsteoEgypt
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                <input
                  type="text"
                  placeholder="Search"
                  class="px-3 py-2 h-12 border border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Section
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  href=""
                  class="text-xs uppercase py-3 font-bold block text-blueGray hover:text-blueGray-dark"
                >
                  <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                  Dashboard
                </a>
              </li>

              <li class="items-center">
                <a
                  href=""
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                  Settings
                </a>
              </li>

              <li class="items-center">
                <a
                  href=""
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  Page
                </a>
              </li>

              <li class="items-center">
                <a
                  href=""
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i
                    class="fas fa-map-marked mr-2 text-sm text-blueGray-300"
                  ></i>
                  Page
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Section
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                  href=""
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-fingerprint text-blueGray-300 mr-2 text-sm"
                  ></i>
                  Page
                </a>
              </li>

              <li class="items-center">
                <a
                  href=""
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"
                  ></i>
                  Page
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Section
            </h6>
            <!-- Navigation -->

            <ul
              class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
              <li class="items-center">
                <a
                  href=""
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-newspaper text-blueGray-300 mr-2 text-sm"
                  ></i>
                  Page
                </a>
              </li>

              <li class="items-center">
                <a
                  href=""
                  class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                >
                  <i
                    class="fas fa-user-circle text-blueGray-300 mr-2 text-sm"
                  ></i>
                  Page
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />

          </div>
        </div>
      </nav>
      <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href=""
              >Dashboard</a
            >
            <form
              class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
            >
              <div class="relative flex w-full flex-wrap items-stretch">
                <span
                  class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
                  ><i class="fas fa-search"></i
                ></span>
                <input
                  type="text"
                  placeholder="Search here..."
                  class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relativ bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"
                />
              </div>
            </form>
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a
                class="text-blueGray-500 block"
                href="#"
                onclick="openDropdown(event,'user-dropdown')"
              >
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('assets/image/profile-img.jpg') }}"
                  /></span>
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-dropdown"
              >
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Another action</a
                ><a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Something else </a
                >
                <div
                  class="h-0 my-2 border border-solid border-blueGray-100"
                ></div>
                <a
                  href="#"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Seprated link</a
                >
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-chillBlue md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                  >
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div
                          class="relative w-full pr-4 max-w-full flex-grow flex-1"
                        >
                          <h5
                            class="text-blueGray-400 uppercase font-bold text-xs"
                          >
                            Traffic
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            350,897
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                          >
                            <i class="far fa-chart-bar"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                  >
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div
                          class="relative w-full pr-4 max-w-full flex-grow flex-1"
                        >
                          <h5
                            class="text-blueGray-400 uppercase font-bold text-xs"
                          >
                            New users
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            2,356
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                          >
                            <i class="fas fa-chart-pie"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                        <span class="whitespace-nowrap"> Since last week </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                  >
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div
                          class="relative w-full pr-4 max-w-full flex-grow flex-1"
                        >
                          <h5
                            class="text-blueGray-400 uppercase font-bold text-xs"
                          >
                            Sales
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            924
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-chillBlue"
                          >
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                        <span class="whitespace-nowrap"> Since yesterday </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                  >
                    <div class="flex-auto p-4">
                      <div class="flex flex-wrap">
                        <div
                          class="relative w-full pr-4 max-w-full flex-grow flex-1"
                        >
                          <h5
                            class="text-blueGray-400 uppercase font-bold text-xs"
                          >
                            Performance
                          </h5>
                          <span class="font-semibold text-xl text-blueGray-700">
                            49,65%
                          </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                          <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                          >
                            <i class="fas fa-percent"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-sm text-blueGray-400 mt-4">
                        <span class="text-emerald-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                        <span class="whitespace-nowrap">
                          Since last month
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="w-full px-4">
                @yield('content')

            </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script>
        function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
    </script>
  </body>
</html>

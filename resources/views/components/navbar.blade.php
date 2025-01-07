<header  x-data="{ isOpen: false }" class="bg-white border-b-2 sticky top-0 z-50 scroll-m-0">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-2" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5 flex">
          <span class="sr-only">PT GEMA TRIMITRA ANDAlAN</span>
          <img class="h-8 w-auto" src="img/logo.png" alt="">
          <h1 class="p-1 ml-1 block font-semibold text-gray-900 md:block xl:text-base:block">PT GEMA TRIMITRA ANDALAN</h1>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button  @click="isOpen = !isOpen" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative">
          <button type="button" @click="isOpen = !isOpen" class="hover:underline hover:scale-110 decoration-red-500 decoration-2 underline-offset-32 hover:transition-all flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900" aria-expanded="false">
            Product
            <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </button>
          <div  
          x-show="isOpen"
          @click.outside="isOpen = false"
          x-transition:enter="transition ease-out duration-200m"
          x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 translate-y-1"
          class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
            <div class="p-4">
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                  </svg>
                </div>
                <div class="flex-auto">
                  <a href="/conveying-system" class="block font-semibold text-gray-900">
                    Conveying System
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Provides the best solutions for different packaging types </p>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                  </svg>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Palletizing System
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Improves efficiency and reduces costs</p>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  {{-- <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                  </svg> --}}
                 <svg class="size-6 text-gray-600 hover:" fill="#000000" height="200px" width="200px" version="1.1"  viewBox="0 0 512.003 512.003" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M85.337,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6c-14.142,0-25.6,11.458-25.6,25.6 S71.195,396.802,85.337,396.802z M85.337,362.668c4.717,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 c-4.716,0-8.533-3.817-8.533-8.533S80.62,362.668,85.337,362.668z"></path> <path d="M153.603,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6c-14.142,0-25.6,11.458-25.6,25.6 S139.461,396.802,153.603,396.802z M153.603,362.668c4.716,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 c-4.717,0-8.533-3.817-8.533-8.533S148.887,362.668,153.603,362.668z"></path> <path d="M221.87,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6s-25.6,11.458-25.6,25.6 S207.728,396.802,221.87,396.802z M221.87,362.668c4.716,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 c-4.717,0-8.533-3.817-8.533-8.533S217.154,362.668,221.87,362.668z"></path> <path d="M290.137,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6s-25.6,11.458-25.6,25.6 S275.995,396.802,290.137,396.802z M290.137,362.668c4.716,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 s-8.533-3.817-8.533-8.533S285.42,362.668,290.137,362.668z"></path> <path d="M358.403,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6s-25.6,11.458-25.6,25.6 S344.261,396.802,358.403,396.802z M358.403,362.668c4.716,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 s-8.533-3.817-8.533-8.533S353.687,362.668,358.403,362.668z"></path> <path d="M426.67,396.802c14.142,0,25.6-11.458,25.6-25.6s-11.458-25.6-25.6-25.6s-25.6,11.458-25.6,25.6 S412.528,396.802,426.67,396.802z M426.67,362.668c4.716,0,8.533,3.817,8.533,8.533s-3.817,8.533-8.533,8.533 s-8.533-3.817-8.533-8.533S421.954,362.668,426.67,362.668z"></path> <path d="M503.47,482.135h-17.067v-51.2h5.39c11.162,0,20.207-9.049,20.207-20.207v-79.053c0-10.086-7.399-18.424-17.063-19.938 v-30.306c0-10.282-7.342-18.849-17.067-20.758V21.335c0-4.713-3.82-8.533-8.533-8.533H42.67c-4.713,0-8.533,3.82-8.533,8.533 v239.338c-9.724,1.91-17.067,10.476-17.067,20.758v30.306C7.405,313.252,0,321.59,0,331.675v79.053 c0,11.158,9.054,20.207,20.215,20.207h5.388v51.2H8.537c-4.713,0-8.533,3.82-8.533,8.533s3.82,8.533,8.533,8.533h25.6h51.2 H426.67h51.2h25.6c4.713,0,8.533-3.82,8.533-8.533S508.183,482.135,503.47,482.135z M51.203,29.868h409.6v230.4H426.67V72.535 c0-4.713-3.82-8.533-8.533-8.533h-102.4H196.27H93.87c-4.713,0-8.533,3.82-8.533,8.533v187.733H51.203V29.868z M324.27,260.268 v-34.133c0-4.713-3.82-8.533-8.533-8.533H196.27c-4.713,0-8.533,3.821-8.533,8.533v34.133h-85.333v-179.2h85.333v34.133H170.67 v-8.533c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.821-8.533,8.533v34.133c0,4.713,3.82,8.533,8.533,8.533s8.533-3.82,8.533-8.533 v-8.533h17.067v25.6c0,4.713,3.82,8.533,8.533,8.533h25.6v25.6c0,4.713,3.82,8.533,8.533,8.533h51.2 c4.713,0,8.533-3.82,8.533-8.533v-25.6h25.6c4.713,0,8.533-3.821,8.533-8.533v-25.6h17.067v8.533c0,4.713,3.82,8.533,8.533,8.533 s8.533-3.82,8.533-8.533v-34.133c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.821-8.533,8.533v8.533H324.27V81.068h85.333v179.2 H324.27z M307.203,260.268h-102.4v-25.6h102.4V260.268z M307.203,149.335h-25.6h-51.2h-25.6V81.068h102.4V149.335z M238.937,166.402h34.133v17.067h-34.133V166.402z M34.137,281.431c0-2.259,1.837-4.096,4.096-4.096h4.437h51.2h102.4h119.467 h102.4h51.2h4.437c2.259,0,4.096,1.837,4.096,4.096v30.037H34.137V281.431z M17.067,410.728v-79.053 c0-1.73,1.411-3.14,3.149-3.14h5.388h460.8h5.39c1.734,0,3.14,1.406,3.14,3.14v79.053c0,1.734-1.406,3.14-3.14,3.14H477.87h-51.2 H85.337h-51.2H20.215C18.477,413.868,17.067,412.458,17.067,410.728z M418.137,430.935v51.2H93.87v-51.2H418.137z M42.67,482.135 v-51.2h34.133v51.2H42.67z M435.203,482.135v-51.2h34.133v51.2H435.203z"></path> </g> </g> </g> </g></svg>
                </div>
                <div class="flex-auto">
                  <a href="/case-packer" class="block font-semibold text-gray-900">
                    Case Packer
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Improve production efficiency and accuracy.</p>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  {{-- <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                  </svg> --}}
                  <svg class="size-6" fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>robot-arm</title> <path d="M30.663 14.423l-3.593-0.663c-0.221-0.426-0.597-0.774-1.084-0.95-0.061-0.022-0.123-0.041-0.185-0.057l-4.024-7.963c0.382-0.767 0.431-1.684 0.053-2.516-0.672-1.482-2.441-2.128-3.951-1.443l-15.015 6.125c-1.829 0.83-2.652 2.958-1.838 4.753 0.347 0.765 0.935 1.345 1.638 1.696l5.468 13.482 0.232 0.589c-1.059 0.98-1.722 2.382-1.722 3.939h10.734c0-2.964-2.403-5.367-5.367-5.367-0.010 0-0.019 0-0.029 0l-0.383-1.051 0.060 0.015-0.105-0.138-4.383-12.042-0.004-0.051 12.066-6.041 4.238 7.212c-0.006 0.016-0.013 0.031-0.018 0.047-0.033 0.092-0.059 0.185-0.078 0.279l-3.378 2.057 1.136 1.035 1.646 3.513 1.68 0.313-0.683-4.858 0.258-0.155c0.175 0.149 0.38 0.27 0.609 0.353 0.87 0.315 1.817-0.018 2.313-0.751l1.231 4.724 1.468-0.874 0.294-3.442 0.139 0.025 0.579-1.792zM3.867 7.875c1.294-0.214 2.516 0.661 2.73 1.955s-0.661 2.516-1.955 2.73-2.516-0.661-2.73-1.955c-0.214-1.294 0.661-2.516 1.955-2.73zM17.367 3.785c-0.16-0.967 0.494-1.88 1.461-2.040 0.78-0.129 1.524 0.271 1.867 0.938 0.020 0.039 0.038 0.078 0.055 0.118 0.002 0.004 0.003 0.008 0.005 0.011 0.016 0.039 0.031 0.078 0.045 0.119 0 0.001 0.001 0.002 0.001 0.003 0.013 0.039 0.025 0.080 0.035 0.12 0.002 0.009 0.004 0.018 0.006 0.026 0.010 0.041 0.019 0.082 0.025 0.124 0 0 0 0 0 0 0.030 0.181 0.031 0.361 0.007 0.534-0.104 0.749-0.683 1.377-1.468 1.507-0.029 0.005-0.057 0.009-0.085 0.012-0.009 0.001-0.018 0.002-0.027 0.003-0.019 0.002-0.039 0.004-0.058 0.005-0.011 0.001-0.022 0.001-0.032 0.002-0.018 0.001-0.035 0.002-0.052 0.002-0.011 0-0.022 0-0.034 0-0.017 0-0.034-0-0.051-0.001-0.011-0-0.022-0.001-0.033-0.001-0.017-0.001-0.034-0.002-0.051-0.003-0.011-0.001-0.021-0.002-0.032-0.003-0.019-0.002-0.037-0.004-0.055-0.006-0.009-0.001-0.018-0.002-0.027-0.003-0.027-0.004-0.053-0.008-0.080-0.013-0.001-0-0.001-0-0.002-0-0.026-0.005-0.053-0.011-0.079-0.017-0.009-0.002-0.018-0.005-0.027-0.007-0.017-0.004-0.035-0.009-0.052-0.014-0.010-0.003-0.021-0.006-0.031-0.009-0.016-0.005-0.031-0.010-0.047-0.015-0.011-0.004-0.021-0.007-0.032-0.011-0.015-0.005-0.030-0.011-0.045-0.017-0.010-0.004-0.021-0.008-0.031-0.012-0.015-0.006-0.030-0.013-0.045-0.019-0.010-0.004-0.020-0.009-0.029-0.013-0.016-0.007-0.032-0.015-0.048-0.023-0.008-0.004-0.016-0.008-0.024-0.012-0.023-0.012-0.047-0.025-0.069-0.038-0-0-0.001-0-0.001-0.001v0c-0.442-0.257-0.77-0.702-0.86-1.245z"></path> </g></svg>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Application of Various Robot
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Robotics applications cover multiple fields</p>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  {{-- <svg class="size-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                  </svg> --}}
                  <svg class="size-6" viewBox="0 0 15 15" version="1.1" id="warehouse" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.5,5c-0.0762,0.0003-0.1514-0.0168-0.22-0.05L7.5,2L1.72,4.93C1.4632,5.0515,1.1565,4.9418,1.035,4.685
                    S1.0232,4.1215,1.28,4L7.5,0.92L13.72,4c0.2761,0.0608,0.4508,0.3339,0.39,0.61C14.0492,4.8861,13.7761,5.0608,13.5,5z M5,10H2v3h3
                    V10z M9,10H6v3h3V10z M13,10h-3v3h3V10z M11,6H8v3h3V6z M7,6H4v3h3V6z"></path> </g></svg>
                </div>
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-gray-900">
                    Customized Small Automated Warehouse
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Improving storage efficiency and reducing costs.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="/services" class="hover:underline hover:scale-110 decoration-red-500 decoration-2 underline-offset-32 hover:transition-all text-sm/6 font-semibold text-gray-900">Services</a>
        <a href="#" class="hover:underline hover:scale-110 decoration-red-500 decoration-2 underline-offset-32 hover:transition-all text-sm/6 font-semibold text-gray-900">Careers</a>
        <a href="#" class="hover:underline hover:scale-110 decoration-red-500 decoration-2 underline-offset-32 hover:transition-all text-sm/6 font-semibold text-gray-900">Company</a>
        <div class="hidden lg:flex">
          <a href="#" class="text-sm/6 font-semibold text-white w-24 h-6 bg-red-700 flex items-center justify-center rounded-full hover:bg-red-800">Contact Us <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-show="isOpen"
     class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">PT GEMA TRIMITRA ANDAlAN</span>
            <img class="h-8 w-auto" src="img/logo.png" alt="">
          </a>
          <button @click="isOpen=!isOpen" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div x-data="{ isOn: false }" class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <div class="-mx-3">
                <button @click="isOn=!isOn" type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                  Product
                  <svg  :class="{'rotate-180': isOn, '': !isOn }" class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                  </svg>
                </button>
                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                <div x-show="isOn"
                 class="mt-2 space-y-2" id="disclosure-1">
                  <a href="/conveying-system" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Conveying System</a>
                  <a href="/services" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Palletizing System</a>
                  <a href="/case-packer" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Case Packer</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Application of Various Robot</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Customizd Automated Warehouse</a>
                </div>
              </div>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Services</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Careers</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> 
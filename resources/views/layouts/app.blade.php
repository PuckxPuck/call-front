@extends('layouts.base')

@section('body')
@if(Session::get('authenticated') == true)
    <div class="flex">
        <div
            class="h-[107vh] drawer-side bg-[#8900C4] text-neutral-content p-3 space-y-2 w-60 dark:bg-gray-900 dark:text-gray-100">
            <div class="flex items-center p-2 space-x-4">
                <img src="img/bmlogo.png" alt="" class="">
                {{-- <div>
			<h2 class="text-lg font-semibold">Leroy Jenkins</h2>
		</div> --}}
            </div>
            <div class="divide-y divide-gray-700">
                <ul class="pt-2 pb-4 space-y-1 text-sm">
                    <li class="dark:bg-gray-800 dark:text-gray-50">
                        <a rel="noopener noreferrer" href="{{ route('home') }}" class="flex items-center p-2 space-x-3 rounded-md">
                            <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>Dashboard</title>
                                    <g id="Dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="Container" x="0" y="0" width="24" height="24">
                                        </rect>
                                        <rect id="shape-1" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                            x="4" y="4" width="16" height="16" rx="2">
                                        </rect>
                                        <line x1="4" y1="9" x2="20" y2="9" id="shape-2"
                                            stroke="#fff" stroke-width="2" stroke-linecap="round"> </line>
                                        <line x1="9" y1="10" x2="9" y2="20" id="shape-3"
                                            stroke="#fff" stroke-width="2" stroke-linecap="round"> </line>
                                    </g>
                                </g>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a rel="noopener noreferrer" href="{{ route('logs') }}" class="flex items-center p-2 space-x-3 rounded-md">
                            <svg fill="#fff" class="w-5 h-5" height="200px" width="200px" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 296.938 296.938" xml:space="preserve" stroke="#fff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M208.924,188.481h-20.788v-20.215c5-5.883,8.861-12.365,12.098-18.87c1.267-0.226,2.7-0.642,3.961-1.244 c5.791-2.767,11.125-9.509,14.133-18.036c3.468-9.827,3.093-20.162-0.75-25.881c0.514-10.615,0.203-40.198-18.395-60.944 c-3.086-3.442-6.506-6.423-10.252-8.965C185.688,14.666,169.498,0,149.43,0c-19.75,0-37.762,14.317-41.314,33.575 c-7.074,4.054-13.037,9.307-17.735,15.734c-10.271,14.054-13.492,33.92-9.41,54.926c-5.297,5.275-6.436,14.558-2.444,25.882 c2.009,5.692,5.098,10.741,8.697,14.22c2.971,2.869,6.239,4.604,9.486,5.105c3.394,6.812,7.425,13.596,12.425,19.688v19.351H88.014 c-29.855,0-52.591,51.352-52.591,76.925c0,2.859,1.652,5.585,4.24,6.8c40.122,18.834,77.952,24.732,109.433,24.732 c16.571,0,31.385-1.586,43.841-3.776c39.228-6.896,63.791-20.516,64.818-21.093c2.322-1.306,3.76-4.006,3.76-6.67 C261.515,239.826,238.778,188.481,208.924,188.481z M97.421,116.427c3.23-3.784,12.414-15.094,18.051-27.587 c11.75,12.234,36.941,26.687,90.465,26.764c0.214,2.045,0.052,5.398-1.433,9.606c-1.983,5.617-4.846,8.586-6.152,9.442 c-1.524-0.5-3.18-0.494-4.716,0.038c-1.93,0.668-3.495,2.105-4.324,3.972c-7.938,17.861-23.51,38.719-40.843,38.719 c-9.131,0-17.571-5.784-24.823-13.869c3.477,0.661,6.659,0.881,9.301,0.881c0.327,0,0.643,0.066,0.953,0.061 c1.864,2.404,4.773,4.028,8.051,4.028h13.037c5.629,0,10.148-4.705,10.148-10.334v-3.208c0-5.629-4.52-10.458-10.148-10.458H141.95 c-3.72,0-6.965,2.133-8.744,5.108c-2.985,0.054-7.268-0.212-11.854-1.925C110.105,143.465,101.953,132.696,97.421,116.427z M149.433,14.745c8.807,0,15.624,4.409,20.418,11.23c-6.067-1.529-13.714-2.316-20.714-2.316v0.003 c-8,0.063-15.598,0.958-22.571,2.646C131.342,19.301,140.513,14.745,149.433,14.745z M102.139,58.01 c9.25-12.658,24.997-19.437,46.997-19.603v-0.003c16,0,30.136,4.939,38.896,14.679c13.147,14.621,14.91,36.817,14.862,47.761 c-39.053-0.483-59.581-9.094-70.018-16.352c-10.538-7.327-12.721-14.431-12.961-15.313c-0.607-3.776-3.995-6.305-7.793-6.024 c-3.848,0.289-6.789,3.651-6.789,7.51c0,6.797-5.107,16.561-10.75,24.988C92.565,80.717,95.077,67.672,102.139,58.01z M116.521,203.481c4.071,0,6.614-3.054,6.614-7.126v-12.893c8,5.337,16.029,8.663,25,8.663c9.24,0,18-3.524,26-9.149v13.379 c0,4.072,3.191,7.126,7.264,7.126h7.893l-40.823,31.927l-40.823-31.927H116.521z M190.383,278.671 c-33.137,5.827-83.967,7.346-139.946-17.624c2.258-20.604,18.398-52.314,33.973-56.772l59.518,46.548 c1.335,1.043,2.937,1.564,4.542,1.564c1.604,0,3.207-0.521,4.542-1.564l59.518-46.548c15.628,4.474,31.826,36.39,33.995,56.987 C238.392,265.165,218.32,273.759,190.383,278.671z">
                                    </path>
                                </g>
                            </svg>
                            <span>Call Center</span>
                        </a>
                    </li>
                    <li>
                        <a rel="noopener noreferrer" href="{{ route('report') }}" class="flex items-center p-2 space-x-3 rounded-md">
                            <svg class="w-5 h-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" stroke="#fff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <defs>
                                        <clipPath id="clip-insights">
                                            <rect width="32" height="32"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="insights" clip-path="url(#clip-insights)">
                                        <g id="Group_1718" data-name="Group 1718" transform="translate(-208 -468)">
                                            <g id="Group_1717" data-name="Group 1717">
                                                <g id="Group_1716" data-name="Group 1716">
                                                    <path id="Path_3714" data-name="Path 3714"
                                                        d="M235.9,471.449a3.524,3.524,0,0,0-2.594,5.925l-4.357,7.284a3.53,3.53,0,0,0-.877-.123,3.492,3.492,0,0,0-1.68.444l-3.372-3.372a3.488,3.488,0,0,0,.444-1.679,3.538,3.538,0,1,0-6.131,2.387l-4.358,7.284a3.477,3.477,0,0,0-.877-.123,3.568,3.568,0,1,0,2.594,1.15l4.357-7.284a3.53,3.53,0,0,0,.877.123,3.492,3.492,0,0,0,1.68-.444l3.372,3.372a3.488,3.488,0,0,0-.444,1.679,3.538,3.538,0,1,0,6.131-2.386l4.358-7.285a3.477,3.477,0,0,0,.877.123,3.537,3.537,0,1,0,0-7.075Zm-23.8,23.1a1.537,1.537,0,1,1,1.538-1.537A1.54,1.54,0,0,1,212.1,494.551Zm6.291-14.623a1.537,1.537,0,1,1,1.537,1.537A1.54,1.54,0,0,1,218.39,479.928Zm9.683,9.682a1.537,1.537,0,1,1,0-3.075,1.517,1.517,0,0,1,.777.219l.008.007.024.01a1.534,1.534,0,0,1-.809,2.839Zm7.828-13.086a1.517,1.517,0,0,1-.778-.219l-.007-.006-.014-.005a1.53,1.53,0,1,1,.8.23Z"
                                                        fill="#fff"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span>Reports</span>
                        </a>
                    </li>
                </ul>
                <ul class="pt-4 pb-2 space-y-1 text-sm">

                    <li>
                        <a  rel="noopener noreferrer" href="{{route('login')}}" class="flex items-center p-2 space-x-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                class="w-5 h-5 fill-current dark:text-gray-400">
                                <path
                                    d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z">
                                </path>
                                <rect width="32" height="64" x="256" y="232"></rect>
                            </svg>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex w-full flex-col">
            <div class="navbar  bg-[#8900C4] text-neutral-content ">
                <div class="navbar-start">

                </div>
                <div class="navbar-center">
                    <a class="btn btn-ghost normal-case text-xl">Call Eater - Admin Panel</a>
                </div>
                <div class="navbar-end">
                    <button class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <button class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="badge badge-xs badge-primary indicator-item"></span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="w-full  bg-white p-4">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset

                <div x-data="{show:false, progress:0}" 
                x-on:notify.window="show = true; setTimeout(() => { show = false }, 2000)" 
                x-show="show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"

                class="fixed overflow-x-hidden h-20 mt-10 mr-5 inset-0 z-50 flex justify-end">
                    <div class="flex flex-col justify-center w-full max-w-xs p-4 mb-4 text-black bg-[#d6a0ee] rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                        role="alert">
                        <div class="flex items-center">
                        <div
                            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-purple-500 bg-purple-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>
                        <div class="ml-3 text-sm font-normal">Successfully Updated</div>
                        <button @click="show = !show" type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-[#d6a0ee] text-white hover:text-white rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-[#8900C4] inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                            data-dismiss-target="#toast-success" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

    @if(Session::get('authenticated') == false)
    <div class="w-full  bg-white">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
    @endif
@endsection

{{-- 
@yield('content')
    
            @isset($slot)
                {{ $slot }}
            @endisset --}}

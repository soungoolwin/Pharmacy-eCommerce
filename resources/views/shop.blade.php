<x-layout>

    <div class="p-5">
        <div class="grid grid-cols-12 gap-4 grid-flow-row">
            <div class="p-6 col-span-3 lg:flex hidden">
                <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="px-4 py-2 bg-white">
                        <h2 class="text-xl font-bold">Filters</h2>
                    </div>
                    {{-- line through --}}
                    <div class="flex items-center">
                        <span class="w-full border-t border-dotted border-blue-dark"></span>
                    </div>
                    {{-- line through --}}
                    <div class="px-4 py-2">
                        <p>Category</p>
                        <div class="font-sans text-black bg-white flex items-center justify-center my-3">
                            <div class="border rounded overflow-hidden flex">
                                <input type="text" class="px-4 py-2" placeholder="Search...">
                                <button class="flex items-center justify-center px-4 border-l">
                                    <svg class="h-4 w-4 text-grey-dark" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="container px-5 mx-auto">
                            <div class="divide-y overflow-auto h-[300px]">
                                <div class="flex items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 jost-300 leading-none">Antibiotic</h1>

                                    </div>
                                </div>

                                <div class="flex items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 jost-300 leading-none">Baby Care</h1>

                                    </div>
                                </div>

                                <div class="flex items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 jost-300 leading-none">Cold and Fever</h1>

                                    </div>
                                </div>

                                <div class="flex items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 jost-300 leading-none">Face</h1>

                                    </div>
                                </div>

                                <div class="flex items-start space-x-3 py-6">
                                    <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                    <div class="flex flex-col">
                                        <h1 class="text-gray-700 jost-300 leading-none">Hair</h1>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="p-5 lg:col-span-9 col-span-12 w-[90%] mx-auto">
                <div class="flex justify-between my-3 px-2 z-10">
                    <div>
                        <p class="jost-300 text-[#B2B4C6]">1-20 of 462 results</p>
                    </div>
                    <div class="flex lg:hidden">
                        <div class="dropdown inline-block relative">
                            <button
                                class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                <span class="mr-1">Dropdown</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                <li class=""><a class="rounded-t bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                        href="#">
                                        <div class="flex items-start space-x-3 py-6">
                                            <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                            <div class="flex flex-col">
                                                <h1 class="text-gray-700 jost-300 leading-none">Antibiotic</h1>

                                            </div>
                                        </div>
                                    </a></li>
                                <li class=""><a class="bg-gray-200  py-2 px-4 block whitespace-no-wrap"
                                        href="#">
                                        <div class="flex items-start space-x-3 py-6">
                                            <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                            <div class="flex flex-col">
                                                <h1 class="text-gray-700 jost-300 leading-none">Baby Care</h1>

                                            </div>
                                        </div>
                                    </a></li>
                                <li class=""><a class="rounded-b bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                        href="#">
                                        <div class="flex items-start space-x-3 py-6">
                                            <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                            <div class="flex flex-col">
                                                <h1 class="text-gray-700 jost-300 leading-none">Cold and Fever</h1>

                                            </div>
                                        </div>
                                    </a></li>
                                <li class=""><a class="rounded-b bg-gray-200 py-2 px-4 block whitespace-no-wrap"
                                        href="#">
                                        <div class="flex items-start space-x-3 py-6">
                                            <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                            <div class="flex flex-col">
                                                <h1 class="text-gray-700 jost-300 leading-none">Face</h1>

                                            </div>
                                        </div>
                                    </a></li>
                                <li class=""><a
                                        class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                        href="#">
                                        <div class="flex items-start space-x-3 py-6">
                                            <input type="checkbox" class="border-gray-300 rounded h-3 w-3" />

                                            <div class="flex flex-col">
                                                <h1 class="text-gray-700 jost-300 leading-none">Hair</h1>

                                            </div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 ">
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                    <x-item-card />
                </div>
            </div>
        </div>
    </div>






</x-layout>

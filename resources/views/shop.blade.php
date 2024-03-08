<x-layout>

    <div class="p-5">
        <div class="grid grid-cols-12 gap-4 grid-flow-row grid-">
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
            <div class="p-5 lg:col-span-9 col-span-12">

            </div>
        </div>
    </div>




</x-layout>

<x-layout>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
        <div>
            <img src="{{ Vite::image('show.jpg') }}" alt="Hero Section Image" class="object-scale-down h-[300px] mx-auto">
        </div>
        <div class="mt-5 text-center lg:text-left">
            <h1 class="text-3xl jost-500">Sunscreen</h1>
            <h1 class="jost-500 mt-2">300.00 baht</h1>
            <p class="flex mt-2 justify-center lg:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-yellow-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                <span class="ml-5">3.0 | 9 reviews</span>
                <span class="ml-5">Write a Review</span>
            </p>
            <h1 class="mt-5">Check Stores Availability</h1>
            <h1 class="py-2 px-3 bg-[#F7F7FB] jost-300 mt-5 w-[300px] mx-auto lg:mx-0">Cash on Delivery Within 24 hours
            </h1>
            <div class="my-5">
                <span class="border py-2 px-3 rounded-md">-</span>
                <input type="text" value="1" class="w-[40px] text-center" />
                <span class="border py-2 px-3 rounded-md">+</span>
            </div>
        </div>
    </div>


    <div class="w-[75%] mx-auto">
        <div class="lg:flex hidden justify-center">
            <h1 class="px-[80px] py-[30px] border-b-2 border-[#77BFA3]">Details</h1>
            <h1 class="px-[80px] py-[30px]">Specifications</h1>
            <h1 class="px-[80px] py-[30px]">Reviews</h1>
        </div>

        <div class="flex lg:hidden justify-center mt-5">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="text-black border font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                type="button">Details<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <h1 class="jost-500 text-lg">Product Description</h1>
            <ul class="list-disc ml-5 my-3">
                <li class="jost-300 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tenetur
                    voluptate
                    inventore ratione optio in nam harum deleniti delectus qui, dolorem impedit ex rem voluptatum earum
                    quod voluptates porro accusantium doloribus amet.</li>
                <li class="jost-300 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tenetur
                    voluptate
                    inventore ratione optio in nam harum deleniti delectus qui, dolorem impedit ex rem voluptatum earum
                    quod voluptates porro accusantium doloribus amet.</li>
                <li class="jost-300 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tenetur
                    voluptate
                    inventore ratione optio in nam harum deleniti delectus qui, dolorem impedit ex rem voluptatum earum
                    quod voluptates porro accusantium doloribus amet.</li>

            </ul>
        </div>
    </div>
</x-layout>

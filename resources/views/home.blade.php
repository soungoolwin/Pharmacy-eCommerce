<x-layout>
    <x-hero-section />
    <x-promotion />
    <x-trendingtoday />
    <x-banner />

    <div class="flex flex-col items-center my-[100px]">
        <h1 class="text-3xl jost-500">NEWSLETTER</h1>
        <p class="mt-3 text-center">Trends, new arrivals, offers, sign-up to our newsletter and enjoy exclusive sales!
        </p>
        <div class="flex justify-center mt-3">
            <form class="flex items-center">
                <input type="email" placeholder="Enter your email"
                    class="border border-gray-300 px-4 py-2 rounded-l-md focus:outline-none focus:border-[#49b677]">
                <button type="submit"
                    class="bg-[#77BFA3] text-white px-4 py-2 rounded-r-md hover:bg-[#49b677] focus:outline-none focus:bg-[#49b677]">Send</button>
            </form>
        </div>
    </div>



    <footer class="relative bg-white py-10">
        <div class=" w-[80%] mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-4 grid-cols-2 gap-4">
                <div class="text-center">
                    <h1 class="text-lg jost-500 mb-3">YOUR ACCOUNT</h1>
                    <p class="jost-300 my-2">Personal info</p>
                    <p class="jost-300 my-2">Orders</p>
                    <p class="jost-300 my-2">Credit slips</p>
                    <p class="jost-300 my-2">Addresses</p>
                </div>
                <div class="text-center">
                    <h1 class="text-lg jost-500 mb-3">CUSTOMER SERVICE</h1>
                    <p class="jost-300 my-2">24/7</p>
                    <p class="jost-300 my-2">+(99) 12 34 56 78</p>
                    <p class="jost-300 my-2">example@gmail.com</p>
                </div>
                <div class="text-center">
                    <h1 class="text-lg jost-500 mb-3">OUR GUARANTEES </h1>
                    <p class="jost-300 my-2">Shipping in 3 days</p>
                    <p class="jost-300 my-2">Free return within 14 days</p>
                    <p class="jost-300 my-2">Secure Payment</p>
                </div>
                <div class="text-center">
                    <h1 class="text-lg jost-500 mb-3">OUR COMPANY</h1>
                    <p class="jost-300 my-2">Delivery</p>
                    <p class="jost-300 my-2">Legal notice</p>
                    <p class="jost-300 my-2">About us</p>
                    <p class="jost-300 my-2">Contact us</p>
                </div>
            </div>
        </div>
        <div class="flex justi">

        </div>
        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-b from-white to-green-200"></div>
    </footer>


</x-layout>

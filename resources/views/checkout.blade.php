<x-layout>
    <div class="w-[70%] mx-auto ">
        <p class="jost-300 border py-4 px-2 w-full rounded-md text-green-500">You added Paracetamol(500mg) to your
            shopping cart.</p>

        <div class="grid grid-cols-12 gap-2 grid-flow-row">
            <div class="p-5 lg:col-span-9 col-span-12 w-[90%] mx-auto">
                <div class="bg-[#FFFFFF] p-5">
                    <x-checkout-card />
                    <x-checkout-card />
                    <x-checkout-card />
                    <x-checkout-card />
                    <div class="mt-5">
                        <button class="px-5 py-3 bg-[#F7FAFA] border-red-300 rounded-lg text-red-400">
                            Delete all
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-6 col-span-3 lg:flex hidden">
                <div class="w-full mx-auto bg-white rounded-lg h-[450px] shadow-lg">
                    <div class="px-6 py-8">
                        <h2 class="text-2xl font-bold mb-6">Checkout</h2>

                        <!-- Discount Code Input Box -->
                        <div class="mb-6">
                            <label for="discount_code" class="block text-sm font-medium text-gray-700">Discount
                                Code</label>
                            <input type="text" id="discount_code" name="discount_code"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Order Summary -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-2">Order Summary</h3>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-gray-600">Subtotal</span>
                                <span class="text-sm">$99.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-gray-600">Discount</span>
                                <span class="text-sm">-$10.00</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-gray-600">VAT</span>
                                <span class="text-sm">$2.50</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-gray-600">Shipping Total</span>
                                <span class="text-sm">$5.00</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="text-lg font-semibold">Total</span>
                                <span class="text-lg font-semibold">$97.49</span>
                            </div>
                        </div>

                        <!-- Continue Button -->
                        <div class="mt-6">
                            <button
                                class="w-full bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">
                                Continue
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- don't miss section --}}
        <div>
            <div class="bg-white p-5">
                <h1 class="jost-500 text-2xl">Don't Miss</h1>
                <div class="grid grid-cols-2 justify-items-center w-[80%] mx-auto">
                    <x-item-card />
                    <x-item-card />
                </div>
            </div>
        </div>

    </div>
</x-layout>

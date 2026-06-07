<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex">
                        <div class="bg-white dark:bg-gray-800 mt-4 mr-2 flex-1 p-4 rounded">
                            <h1 class="text-xl">
                                AAPL 
                                <span class="text-sm">Apple Inc.</span>
                            </h1>
                            <h1 class="text-2xl font-semibold mt-4">$189.50</h1>
                            <p class="bg-[#EAF3DE] text-green-700 text-sm font-semibold rounded pl-2 w-[10rem]">+$2.30 <span>(+1.2%)</span> <span>today</span></p>
                            <div class="flex justify-between pb-4">
                                <div>
                                    <p>Open</p>
                                    <p>$187.20</p>
                                </div>
                                <div>
                                    <p>High</p>
                                    <p>$191.00</p>
                                </div>
                                <div>
                                    <p>Low</p>
                                    <p>$186.80</p>
                                </div>
                                <div>
                                    <p>Volume</p>
                                    <p>52.3M</p>
                                </div>
                                <div>
                                    <p>Market cap</p>
                                    <p>$2.9T</p>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h1>Chart</h1>
                            </div>
                            <hr>
                            <p class="text-sm pt-4">You currently own <span>10</span> shares of <span>AAPL</span> — current value <span>$1,895</span></p>
                        </div> 
                        <div class="bg-white dark:bg-gray-800 mt-4 mr-2 flex-1 p-4 rounded">
                            <div class="flex">
                                <button class="flex-1 border rounded bg-[#EAF3DE] text-green-700">Buy</button>
                                <button class="flex-1 border rounded">Sell</button>
                            </div>
                            <p>Number of shares</p>
                            <input type="number" class="bg-transparent rounded w-full"/>
                            <div class="bg-[#111827] p-4 rounded mt-2">
                                <div class="flex">
                                    <div class="flex-1">
                                        <p>Price per share</p>
                                        <p>Quantity</p>
                                    </div>
                                    <div class="flex-1">
                                        <p>$189.50</p>
                                        <p>5</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex font-semibold">
                                    <p class="flex-1">Total cost</p>
                                    <p class="flex-1">$947.50</p>
                                </div>
                            </div>
                            <div class="m-2">
                                <button class="border rounded w-full p-2">Buy 5 Shares</button>
                                <p class="text-center text-xs pt-4">Available balance: $8,420.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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
                            <div class="flex justify-between">
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
                            <p>You currently own <span>10</span> shares of <span>AAPL</span> — current value <span>$1,895</span></p>
                        </div> 
                        <div class="bg-white dark:bg-gray-800 mt-4 mr-2 flex-1 p-4 rounded">
                            <div class="flex">
                                <button class="flex-1 border rounded bg-[#EAF3DE] text-green-700">Buy</button>
                                <button class="flex-1 border rounded">Sell</button>
                            </div>
                            <p>Number of shares</p>
                            <input type="number" class="bg-transparent rounded w-full"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

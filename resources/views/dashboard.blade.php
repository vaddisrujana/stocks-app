<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 style="font-size: larger;font-weight: bolder;">{{ __("Portfolio overview") }}</h1>
                    
                    <div class="flex justify-between">
                        <div class="bg-white dark:bg-gray-800 p-5 rounded">
                            <p>{{ __("Cash balance")}}</p>
                            <h1>$8,420</h1>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-5 rounded">
                            <p>{{ __("Portfolio value")}}</p>
                            <h1>$8,420</h1>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-5 rounded">
                            <p>{{ __("Total profit/loss")}}</p>
                            <h1>$8,420</h1>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-5 rounded">
                            <p>{{ __("Total return")}}</p>
                            <h1>$8,420</h1>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 mt-4">
                        <h1 class="pr-2">{{__("My holdings")}}</h1>
                        <table class="w-full border-collapse">
                        <thead>
                            <tr class="border-b">
                            <th class="p-3 text-left">Symbol</th>
                            <th class="p-3 text-left">Company</th>
                            <th class="p-3 text-left">Shares</th>
                            <th class="p-3 text-left">Price</th>
                            <th class="p-3 text-left">Change</th>
                            <th class="p-3 text-left">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                            <td class="p-3 font-semibold">AAPL</td>
                            <td class="p-3">Apple Inc.</td>
                            <td class="p-3">10 shares</td>
                            <td class="p-3">$189.50</td>
                            <td class="p-3 text-green-600">+1.2%</td>
                            <td class="p-3">$1,895</td>
                            </tr>
                            <tr class="border-b">
                            <td class="p-3 font-semibold">TSLA</td>
                            <td class="p-3">Tesla Inc.</td>
                            <td class="p-3">5 shares</td>
                            <td class="p-3">$242.10</td>
                            <td class="p-3 text-red-600">-0.8%</td>
                            <td class="p-3">$1,210</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

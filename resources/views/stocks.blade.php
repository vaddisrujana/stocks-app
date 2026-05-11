<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 style="font-size: larger;font-weight: bolder;">{{ __("Stock market") }}</h1>
                    <div class="border p-2 rounded">
                    <input 
                        type="text" 
                        placeholder="Enter text"
                        class="bg-transparent outline-none w-full"
                        style="background:transparent !important"
                    />
                    </div>
                    <div class="bg-white dark:bg-gray-800 mt-4">
                        <table class="w-full border-collapse">
                        <thead>
                            <tr class="border-b">
                            <th class="p-3 text-left">Symbol</th>
                            <th class="p-3 text-left">Company</th>
                            <th class="p-3 text-left">Price</th>
                            <th class="p-3 text-left">Change</th>
                            <th class="p-3 text-left">Volume</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                            <td class="p-3 font-semibold">AAPL</td>
                            <td class="p-3">Apple Inc.</td>
                            <td class="p-3">$189.50</td>
                            <td class="p-3 text-green-600">+1.2%</td>
                            <td class="p-3">52.3M</td>
                            <td><a  href="{{ url('/stock') }}" class="border border-white rounded px-4 py-2">Trade</a></td>
                            </tr>
                            <tr class="border-b">
                            <td class="p-3 font-semibold">TSLA</td>
                            <td class="p-3">Tesla Inc.</td>
                            <td class="p-3">$242.10</td>
                            <td class="p-3 text-red-600">-0.8%</td>
                            <td class="p-3">31.1M</td>
                            <td><a  href="{{ url('/stock') }}" class="border border-white rounded px-4 py-2">Trade</a></td>
                            </tr>
                            <tr class="border-b">
                            <td class="p-3 font-semibold">GOOGL</td>
                            <td class="p-3">Alphabet Inc.</td>
                            <td class="p-3">$174.30</td>
                            <td class="p-3 text-green-600">+1.2%</td>
                            <td class="p-3">18.7M</td>
                            <td><a  href="{{ url('/stock') }}" class="border border-white rounded px-4 py-2">Trade</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

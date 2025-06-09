<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-4 sm:p-6 lg:p-8">
        <!-- Welcome Message -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 dark:from-blue-700 dark:to-indigo-800 text-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-2xl sm:text-3xl font-bold mb-2">Welcome To Sunsystems E-Pay</h2>
            <p class="text-lg opacity-90">Your financial overview at a glance. Let's manage your money effectively.</p>
        </div>

        <!-- Summary Cards Row -->
        <div class="grid auto-rows-min gap-6 md:grid-cols-3 mb-6">
            <!-- Total Balance Card -->
            <div class="relative aspect-video overflow-hidden rounded-xl bg-white dark:bg-zinc-800 shadow-xl p-6 flex flex-col justify-between items-start transition-transform duration-300 hover:scale-[1.02] cursor-pointer">
                <div class="flex items-center justify-between w-full mb-4">
                    <p class="text-zinc-500 dark:text-zinc-400 text-base font-medium">Current Balance</p>
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.592 1L17.5 9.5m-5.408-1.5H9.5a2.5 2.5 0 00-2.5 2.5v1.5M12 18h.01M17 12H7a2 2 0 00-2 2v2a2 2 0 002 2h10a2 2 0 002-2v-2a2 2 0 00-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-4xl font-extrabold text-blue-700 dark:text-blue-300">UGX 120,345<span class="text-2xl">.67</span></h3>
                <p class="text-xs text-green-500 mt-3 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    +5.2% since last month
                </p>
            </div>

            <!-- Total Income Card -->
            <div class="relative aspect-video overflow-hidden rounded-xl bg-white dark:bg-zinc-800 shadow-xl p-6 flex flex-col justify-between items-start transition-transform duration-300 hover:scale-[1.02] cursor-pointer">
                <div class="flex items-center justify-between w-full mb-4">
                    <p class="text-zinc-500 dark:text-zinc-400 text-base font-medium">Income This Month</p>
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8L11 3m-2 11V9m2 2l-4 4m-4 4H7a2 2 0 01-2-2v-2a2 2 0 012-2h4a2 2 0 012 2v2a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-4xl font-extrabold text-green-700 dark:text-green-300">UGX 300,200<span class="text-2xl">.00</span></h3>
                <p class="text-xs text-green-500 mt-3 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    +8.1% from target
                </p>
            </div>

            <!-- Total Expenses Card -->
            <div class="relative aspect-video overflow-hidden rounded-xl bg-white dark:bg-zinc-800 shadow-xl p-6 flex flex-col justify-between items-start transition-transform duration-300 hover:scale-[1.02] cursor-pointer">
                <div class="flex items-center justify-between w-full mb-4">
                    <p class="text-zinc-500 dark:text-zinc-400 text-base font-medium">Expenses This Month</p>
                    <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                    </svg>
                </div>
                <h3 class="text-4xl font-extrabold text-red-700 dark:text-red-300">UGX 1O,560<span class="text-2xl">.00</span></h3>
                <p class="text-xs text-red-500 mt-3 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    -2.5% over budget
                </p>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="bg-white dark:bg-zinc-800 p-6 rounded-xl shadow-xl mb-6">
            <h3 class="text-xl font-semibold mb-6 text-zinc-800 dark:text-zinc-100">Quick Actions</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <a href="{{ route('newpayment') }}" class="flex flex-col items-center justify-center p-4 rounded-lg bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-900 transition-colors duration-200 group quick-action-hover">
                    <svg class="w-10 h-10 mb-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v12m0 0l-4 4m0 0l4 4m4-4l-4 4m0 0l-4 4"/></svg>
                    <span class="font-medium text-center text-sm">New Payment</span>
                </a>

                <a href="{{ route('draft') }}" class="flex flex-col items-center justify-center p-4 rounded-lg bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-300 hover:bg-green-200 dark:hover:bg-green-900 transition-colors duration-200 group quick-action-hover">
                    <svg class="w-10 h-10 mb-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0l-4 4m4-4l-4-4m3-4h6a2 2 0 012 2v6a2 2 0 01-2 2h-6a2 2 0 01-2-2V7a2 2 0 012-2z"/></svg>
                    <span class="font-medium text-center text-sm">Drafts</span>
                </a>

                <a href="{{ route('pending') }}" class="flex flex-col items-center justify-center p-4 rounded-lg bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 hover:bg-purple-200 dark:hover:bg-purple-900 transition-colors duration-200 group quick-action-hover">
                    <svg class="w-10 h-10 mb-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="font-medium text-center text-sm">Pending</span>
                </a>

                <a href="{{ route('division') }}" class="flex flex-col items-center justify-center p-4 rounded-lg bg-orange-100 dark:bg-orange-900/40 text-orange-700 dark:text-orange-300 hover:bg-orange-200 dark:hover:bg-orange-900 transition-colors duration-200 group quick-action-hover">
                    <svg class="w-10 h-10 mb-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12A10 10 0 002 12c0 5.523 4.477 10 10 10a10 10 0 0010-10zm-9-4a9 9 0 00-9 9c0 4.97 4.03 9 9 9s9-4.03 9-9a9 9 0 00-9-9z"/></svg>
                    <span class="font-medium text-center text-sm">Division</span>
                </a>
            </div>
        </div>

        <!-- Recent Transactions Section -->

            <div class="space-y-4">
                <!-- Example Transaction Items -->
                <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-zinc-700 last:border-b-0">
                    <div class="flex items-center">
                        <div class="p-2 mr-3 bg-red-100 dark:bg-red-900/40 rounded-full">
                            <svg class="w-5 h-5 text-red-600 dark:text-red-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586l-1.293-1.293z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">Grocery Shopping</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">June 7, 2025</p>
                        </div>
                    </div>
                    <p class="text-red-600 dark:text-red-300 font-semibold">UGX 120.50</p>
                </div>

                <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-zinc-700 last:border-b-0">
                    <div class="flex items-center">
                        <div class="p-2 mr-3 bg-green-100 dark:bg-green-900/40 rounded-full">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">Freelance Payment</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">June 5, 2025</p>
                        </div>
                    </div>
                    <p class="text-green-600 dark:text-green-300 font-semibold">UGX 850.00</p>
                </div>

                <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-zinc-700 last:border-b-0">
                    <div class="flex items-center">
                        <div class="p-2 mr-3 bg-blue-100 dark:bg-blue-900/40 rounded-full">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4zm12 8V6H4v6h12z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">Electricity Bill</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">June 3, 2025</p>
                        </div>
                    </div>
                    <p class="text-red-600 dark:text-red-300 font-semibold">UGX 150.00</p>
                </div>

                <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-zinc-700 last:border-b-0">
                    <div class="flex items-center">
                        <div class="p-2 mr-3 bg-green-100 dark:bg-green-900/40 rounded-full">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">Refund from Store</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">June 1, 2025</p>
                        </div>
                    </div>
                    <p class="text-green-600 dark:text-green-300 font-semibold">UGX 45.00</p>
                </div>

                <div class="flex items-center justify-between py-3 border-b border-gray-100 dark:border-zinc-700 last:border-b-0">
                    <div class="flex items-center">
                        <div class="p-2 mr-3 bg-red-100 dark:bg-red-900/40 rounded-full">
                            <svg class="w-5 h-5 text-red-600 dark:text-red-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586l-1.293-1.293z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div>
                            <p class="font-medium text-zinc-800 dark:text-zinc-100">Dinner Out</p>
                            <p class="text-sm text-zinc-500 dark:text-zinc-400">May 30, 2025</p>
                        </div>
                    </div>
                    <p class="text-red-600 dark:text-red-300 font-semibold">UGX 80.00</p>
                </div>


            </div>
        </div>
    </div>
</x-layouts.app>

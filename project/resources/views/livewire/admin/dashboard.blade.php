
<div>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-2xl font-bold">Welcome to the Admin Dashboard!</h1>
                <p>Logged in as Admin ID: {{ auth()->guard('admin')->id() }}</p>
            </div>
        </div>
    </div>
    </div>>
</div>
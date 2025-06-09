<div>
@props(['title' => __('Log in')])

<form wire:submit="login">
    <div>
        <label for="id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Admin ID') }}</label>
        <input wire:model="id" id="id" type="number" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus autocomplete="off" />
        @error('id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mt-4">
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
        <input wire:model="password" id="password" type="password" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required />
        @error('password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="flex items-center justify-end mt-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Log in') }}
        </button>
    </div>
</form>
</div>
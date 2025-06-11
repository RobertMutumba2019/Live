<div>
    {{-- In work, do what you enjoy. --}}
    <div class="p-4 space-y-4">
    @if (session()->has('message'))
        <div class="bg-green-200 text-green-800 p-2 rounded">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save" class="flex gap-2">
        <input type="text" wire:model="name" placeholder="Location name" class="border p-2 rounded w-1/2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
    </form>

    <ul class="list-disc pl-6">
        @foreach ($places as $loc)
            <li>{{ $loc->name }}</li>
        @endforeach
    </ul>
    </div>

</div>

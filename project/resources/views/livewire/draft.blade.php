<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Saved Draft') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your saved drafts and attachments.') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
</br>
    <div class="flex justify-end">
        <flux:button type="submit" icon="paper-airplane" variant="primary" class="bg-blue-500 text-white hover:bg-blue-700 w-full">
            {{ __('Send for Approving') }}
        </flux:button>
    </div>
</br>
    <div class="flex justify-end">
        <flux:button type="submit" icon="paper-clip" variant="primary" class="bg-red-500 text-white hover:bg-red-700 w-full">
            {{ __('Attachments') }}
        </flux:button>
    </div>

</div>


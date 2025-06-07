<div>
    {{-- Be like water. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>
    </br>
    <h2>Payment Type: <span style="color: red; font-weight: bold;">Appointments Payment</span></h2>
</div>

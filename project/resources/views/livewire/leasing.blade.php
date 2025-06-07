<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>

    

    </br>

    <h2>Payment Type: <span style="color: red; font-weight: bold;">Leasing Payment</span></h2>
</div>

<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>

    </br>

    <h2>Payment Type: <span style="color: red; font-weight: bold;">TAX levied on imported Goods</span></h2>
</div>

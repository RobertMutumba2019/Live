<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>

    </br>

    <h2>Payment Type: <span style="color: red; font-weight: bold;">Payments generated from stores.</span></h2>
</div>

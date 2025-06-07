<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>
    </br>
    <h2>Reversal Payments: <span style="color: red; font-weight: bold;">Payment Reversals</span></h2>
</div>

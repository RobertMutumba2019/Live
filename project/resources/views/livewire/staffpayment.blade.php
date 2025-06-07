<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>

    </br>

    <h2>Payment Type: <span style="color: red; font-weight: bold;">Staff Payment paid at Branch</span></h2>
</div>

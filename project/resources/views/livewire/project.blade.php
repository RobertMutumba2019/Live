<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <flux:navlist.item 
    icon="arrow-left" 
    :href="route('newpayment')" 
    :current="request()->routeIs('newpayment')" 
    wire:navigate 
    class="hover:text-red-500 hover:font-bold">
    {{ __('Back to payment type') }}
    </flux:navlist.item>

    </br>

    <h2>Payment Type: <span style="color: red; font-weight: bold;">Project Payments</span></h2>
</br>

    <div class="flex flex-col gap-6">
    

    <!-- Session Status -->
    {{-- <x-auth-session-status class="text-center" :status="session('status')" /> --}}

    <form wire:submit="" class="flex flex-col gap-6">
         <!-- pName -->
        <div class="col-span-2 grid grid-cols-2 gap-4"> <flux:input
            wire:model="plocation"
            :label="__('Select Location/Division')"
            type="select"
            required
            placeholder="Select Location"
        />
         <!-- pselect currency -->
        <flux:input
            wire:model="pcurrency"
            :label="__('Currency')"
            type="select"
            required
            placeholder="Select Currency"
        />
        </div>
    
        


        <!-- pPayee Name -->
        <flux:input
            wire:model="pPayee"
            :label="__('Payee Name')"
            type="text"
            required
            autocomplete="name"
            placeholder="Name"
        />

         <!-- Payment Details -->
        <flux:input
            wire:model="pdetails"
            :label="__('Payment Details')"
            type="text"
            required
            placeholder="More Details required"
        />
        
         <!-- pPayment Date -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="pdate"
            :label="__('Payment Date')"
            type="date"
            required
        />

         <!-- pInvoice date -->
        <flux:input
            wire:model="pinvoice date"
            :label="__('Invoice date')"
            type="date"
            required
        />
        </div>

         <!-- pNature of payment -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="pnature"
            :label="__('Nature of Payment')"
            type="select"
            required
            autocomplete="name"
            placeholder="Select"
        />

         <!-- pLPO No -->
        <flux:input
            wire:model="plpo"
            :label="__('LPNO No')"
            type="text"
            required
            
            placeholder="LPNO."
        />
        </div>

         <!-- pDelivery Note no-->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="pnote"
            :label="__('Delivery Note no.')"
            type="text"
            required
            
            placeholder="Delivery Note."
        />
        
        <!-- pInvoice Reference-->
        <flux:input
            wire:model="pref"
            :label="__('Invoice Ref/FDN')"
            type="text"
            required
            
            placeholder=""
        />
        </div>
    </br>
        <h2><strong>Payment</strong></h2>
        {{-- <--line--> --}}
        <div class="col-span-2 grid grid-cols-5 gap-4 items-end"><flux:input
            wire:model="pline"
            :label="__('line')"
            type="number"
            required
        />
        {{-- <--pcost center--> --}}
        <flux:input
            wire:model="pcost"
            :label="__('Cost-center')"
            type="select"
            required
            placeholder="select"
        />

        

        {{-- ptax --}}
        <flux:input
            wire:model="ptax"
            :label="__('Tax')"
            type="number"
            required
            placeholder=""
        />
        {{-- pQty --}}

        <flux:input
            wire:model="pqty"
            :label="__('Qty')"
            type="number"
            required
            placeholder=""
        />

        
        {{-- punit price --}}
        <flux:input
            wire:model="punitprice"
            :label="__('Unit Price (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
         {{-- pTotal --}}
        <flux:input
            wire:model="pTotal)"
            :label="__('Total (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
        </div>
        {{-- <--pPayment Description--> --}}
        <flux:input
            wire:model="pdescription"
            :label="__('Payment Description')"
            type="text"
            required
            placeholder="Make a Description"
        />
        <div class="flex justify-end">
            <flux:button type="submit" variant="primary" class="bg-red-500 text-white hover:bg-red-700 w-full">
               {{ __('Add line') }}
            </flux:button>
        </div>    

    </br>

        <div class="flex items-left justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Compute') }}
            </flux:button>
        </div>
    </form>
    </div>



</div>

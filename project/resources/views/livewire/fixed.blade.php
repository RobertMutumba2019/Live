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

    <h2>Payment Type: <span style="color: red; font-weight: bold;">Fixed asset Payment</span></h2>
</br>
    <div class="flex flex-col gap-6">
    

    <!-- Session Status -->
    {{-- <x-auth-session-status class="text-center" :status="session('status')" /> --}}

    <form wire:submit="" class="flex flex-col gap-6">
         <!-- fName -->
        <div class="col-span-2 grid grid-cols-2 gap-4"> <flux:input
            wire:model="flocation"
            :label="__('Select Location/Division')"
            type="select"
            required
            placeholder="Select Location"
        />
         <!-- fselect currency -->
        <flux:input
            wire:model="fcurrency"
            :label="__('Currency')"
            type="select"
            required
            placeholder="Select Currency"
        />
        </div>
    
        


        <!-- fPayee Name -->
        <flux:input
            wire:model="fPayee"
            :label="__('Payee Name')"
            type="text"
            required
            autocomplete="name"
            placeholder="Name"
        />

         <!-- fPayment Details -->
        <flux:input
            wire:model="fdetails"
            :label="__('Payment Details')"
            type="text"
            required
            placeholder="More Details required"
        />
        
         <!-- fPayment Date -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="fdate"
            :label="__('Payment Date')"
            type="date"
            required
        />

         <!-- fInvoice date -->
        <flux:input
            wire:model="finvoice date"
            :label="__('Invoice date')"
            type="date"
            required
        />
        </div>

         <!-- fNature of payment -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="fnature"
            :label="__('Nature of Payment')"
            type="select"
            required
            autocomplete="name"
            placeholder="Select"
        />

         <!-- fLPO No -->
        <flux:input
            wire:model="flpo"
            :label="__('LPNO No')"
            type="text"
            required
            
            placeholder="LPNO."
        />
        </div>

         <!-- fDelivery Note no-->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="fnote"
            :label="__('Delivery Note no.')"
            type="text"
            required
            
            placeholder="Delivery Note."
        />
        
        <!-- fInvoice Reference-->
        <flux:input
            wire:model="fref"
            :label="__('Invoice Ref/FDN')"
            type="text"
            required
            
            placeholder=""
        />
        </div>
    </br>
        <h2><strong>Payment</strong></h2>
        {{-- <--fline--> --}}
        <div class="col-span-2 grid grid-cols-5 gap-4 items-end"><flux:input
            wire:model="fline"
            :label="__('line')"
            type="number"
            required
        />
        {{-- <--fcost center--> --}}
        <flux:input
            wire:model="fcost"
            :label="__('Cost-center')"
            type="select"
            required
            placeholder="select"
        />

        

        {{-- ftax --}}
        <flux:input
            wire:model="ftax"
            :label="__('Tax')"
            type="number"
            required
            placeholder=""
        />
        {{-- fQty --}}

        <flux:input
            wire:model="fqty"
            :label="__('Qty')"
            type="number"
            required
            placeholder=""
        />

        
        {{-- funit price --}}
        <flux:input
            wire:model="funitprice"
            :label="__('Unit Price (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
         {{-- fTotal --}}
        <flux:input
            wire:model="fTotal)"
            :label="__('Total (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
        </div>
        {{-- <--fPayment Description--> --}}
        <flux:input
            wire:model="fdescription"
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

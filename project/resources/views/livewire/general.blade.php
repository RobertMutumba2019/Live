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
   <h2>Payment Type: <span style="color: red; font-weight: bold;">General HQ Payment</span></h2>
   </br>
   <div class="flex flex-col gap-6">
    

    <!-- Session Status -->
    {{-- <x-auth-session-status class="text-center" :status="session('status')" /> --}}

    <form wire:submit="" class="flex flex-col gap-6">
         <!-- Name -->
        <div class="col-span-2 grid grid-cols-2 gap-4"> <flux:input
            wire:model="location"
            :label="__('Select Location/Division')"
            type="select"
            required
            placeholder="Select Location"
        />
         <!-- select currency -->
        <flux:input
            wire:model="currency"
            :label="__('Currency')"
            type="select"
            required
            placeholder="Select Currency"
        />
        </div>
    
        


        <!-- Payee Name -->
        <flux:input
            wire:model="Payee"
            :label="__('Payee Name')"
            type="text"
            required
            autocomplete="name"
            placeholder="Name"
        />

         <!-- Payment Details -->
        <flux:input
            wire:model="details"
            :label="__('Payment Details')"
            type="text"
            required
            placeholder="More Details required"
        />
        
         <!-- Payment Date -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="date"
            :label="__('Payment Date')"
            type="date"
            required
        />

         <!-- Invoice date -->
        <flux:input
            wire:model="invoice date"
            :label="__('Invoice date')"
            type="date"
            required
        />
        </div>

         <!-- Nature of payment -->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="nature"
            :label="__('Nature of Payment')"
            type="select"
            required
            autocomplete="name"
            placeholder="Select"
        />

         <!-- LPO No -->
        <flux:input
            wire:model="lpo"
            :label="__('LPNO No')"
            type="text"
            required
            
            placeholder="LPNO."
        />
        </div>

         <!-- Delivery Note no-->
        <div class="col-span-2 grid grid-cols-2 gap-4"><flux:input
            wire:model="note"
            :label="__('Delivery Note no.')"
            type="text"
            required
            
            placeholder="Delivery Note."
        />
        
        <!-- Invoice Reference-->
        <flux:input
            wire:model="ref"
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
            wire:model="line"
            :label="__('line')"
            type="number"
            required
        />
        {{-- <--cost center--> --}}
        <flux:input
            wire:model="cost"
            :label="__('Cost-center')"
            type="select"
            required
            placeholder="select"
        />

        

        {{-- tax --}}
        <flux:input
            wire:model="tax"
            :label="__('Tax')"
            type="number"
            required
            placeholder=""
        />
        {{-- Qty --}}

        <flux:input
            wire:model="qty"
            :label="__('Qty')"
            type="number"
            required
            placeholder=""
        />

        
        {{-- unit price --}}
        <flux:input
            wire:model="unitprice"
            :label="__('Unit Price (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
         {{-- Total --}}
        <flux:input
            wire:model="Total)"
            :label="__('Total (VAT Inc)')"
            type="number"
            required
            placeholder=""
        />
        </div>
        {{-- <--Payment Description--> --}}
        <flux:input
            wire:model="description"
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

<div>
    {{-- In work, do what you enjoy. --}}
    <h2><strong>International Payment</strong></h2>
        <flux:navlist variant="outline">
            <flux:navlist.group>
                <flux:navlist.item icon="arrow-long-right" :href="route('vat-goods')" :current="request()->routeIs('vat-goods')" wire:navigate>
                    {{ __('VAT on imported Goods') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('tax-goods')" :current="request()->routeIs('tax-goods')" wire:navigate>
                    {{ __('Tax Levied on imported Goods') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('vat-services')" :current="request()->routeIs('vat-services')" wire:navigate>
                    {{ __('VAT on imported services') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
    <h2><strong>External Payment</strong></h2>
        <flux:navlist variant="outline">
            <flux:navlist.group>
                <flux:navlist.item icon="arrow-long-right" :href="route('general')" :current="request()->routeIs('general')" wire:navigate>
                    {{ __('General HQ Payment') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('fixed')" :current="request()->routeIs('fixed')" wire:navigate>
                    {{ __('Fixed') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('leasing')" :current="request()->routeIs('leasing')" wire:navigate>
                    {{ __('Leasing') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('mortage')" :current="request()->routeIs('mortage')" wire:navigate>
                    {{ __('Mortage') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('project')" :current="request()->routeIs('project')" wire:navigate>
                    {{ __('Project') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('donations')" :current="request()->routeIs('donations')" wire:navigate>
                    {{ __('Donations') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('appointments')" :current="request()->routeIs('appointments')" wire:navigate>
                    {{ __('Appointments') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('dividend')" :current="request()->routeIs('dividend')" wire:navigate>
                    {{ __('Dividend') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('store-payment')" :current="request()->routeIs('store-payment')" wire:navigate>
                    {{ __('Store Payment') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
    <h2><strong>Internal Payment</strong></h2>
        <flux:navlist variant="outline">
            <flux:navlist.group>
                <flux:navlist.item icon="arrow-long-right" :href="route('gl')" :current="request()->routeIs('gl')" wire:navigate>
                    {{ __('Gl to Gl payment') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('staff')" :current="request()->routeIs('staff')" wire:navigate>
                    {{ __('Staff') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-long-right" :href="route('staffpayment')" :current="request()->routeIs('staffpayment')" wire:navigate>
                    {{ __('Staff Payment') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
    <h2><strong>Reversal</strong></h2>
        <flux:navlist variant="outline">
            <flux:navlist.group>
                <flux:navlist.item icon="arrow-long-right" :href="route('reversal')" :current="request()->routeIs('reversal')" wire:navigate>
                    {{ __('Reversal') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
</div>
<div>


        <flux:navlist variant="outline">
                <flux:navlist.group>


                    <flux:navlist.item icon="plus" :href="route('newpayment')" :current="request()->routeIs('newpaymentpayment')" wire:navigate>
                      {{ __('New Payment') }}
                    </flux:navlist.item>

                     <flux:navlist.item icon="folder-open" :href="route('draft')" :current="request()->routeIs('draft')" wire:navigate>
                      {{ __('Draft') }}
                    </flux:navlist.item>

                    <flux:navlist.item icon="check" :href="route('approve')" :current="request()->routeIs('approve')" wire:navigate>
                      {{ __('Approved') }}
                    </flux:navlist.item>
                    <flux:navlist.item icon="arrows-right-left" :href="route('pending')" :current="request()->routeIs('pending')" wire:navigate>
                      {{ __('Pending') }}
                    </flux:navlist.item>
                    <flux:navlist.item icon="x-circle" :href="route('rejected')" :current="request()->routeIs('rejected')" wire:navigate>
                      {{ __('Rejected') }}
                    </flux:navlist.item>




                </flux:navlist.group>

            </flux:navlist>
 </div>

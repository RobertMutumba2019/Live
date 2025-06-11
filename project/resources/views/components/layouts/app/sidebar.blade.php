<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('SUNSYSTEMS E-PAY')" class="grid">

                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Home') }}</flux:navlist.item>
                <flux:navlist.item icon="user" :href="route('suppliers')" :current="request()->routeIs('suppliers')" wire:navigate icon:trailing="plus">{{ __('Suppliers') }}</flux:navlist.item>
                <flux:navlist.item icon="building-storefront" :href="route('budget')" :current="request()->routeIs('budget')" wire:navigate icon:trailing="plus">{{ __('Budget') }}</flux:navlist.item>
                <flux:navlist.item icon="document-chart-bar" :href="route('chart')" :current="request()->routeIs('chart')" wire:navigate icon:trailing="plus">{{ __('Chart of Accounts') }}</flux:navlist.item>
                <flux:navlist.item icon="queue-list" :href="route('u-r-a')" :current="request()->routeIs('u-r-a')" wire:navigate icon:trailing="plus">{{ __('URA Exemption List') }}</flux:navlist.item>
                <flux:navlist.item icon="banknotes" :href="route('payment')" :current="request()->routeIs('payment')" wire:navigate icon:trailing="plus">{{ __('Payment') }}</flux:navlist.item>
                <flux:navlist.item icon="tag" :href="route('category')" :current="request()->routeIs('category')" wire:navigate icon:trailing="plus">{{ __('Category List') }}</flux:navlist.item>
                <flux:navlist.item icon="command-line" :href="route('audit')" :current="request()->routeIs('audit')" wire:navigate>{{ __('Audit Trial') }}</flux:navlist.item>
                <flux:navlist.item icon="arrow-path-rounded-square" :href="route('exchange')" :current="request()->routeIs('exchange')" wire:navigate>{{ __('Exchange Rate') }}</flux:navlist.item>
                <flux:navlist.item icon="identification" :href="route('nature')" :current="request()->routeIs('nature')" wire:navigate>{{ __('Nature of Payment Rate') }}</flux:navlist.item>
                <flux:navlist.item icon="users" :href="route('users')" :current="request()->routeIs('users')" wire:navigate icon:trailing="plus">{{ __('Users') }}</flux:navlist.item>
                <flux:navlist.item icon="user-plus" :href="route('rights')" :current="request()->routeIs('rights')" wire:navigate>{{ __('User Rights & Priveleges') }}</flux:navlist.item>
                <flux:navlist.item icon="arrow-down-circle" :href="route('role')" :current="request()->routeIs('role')" wire:navigate icon:trailing="plus">{{ __('User role') }}</flux:navlist.item>
                <flux:navlist.item icon="clipboard-document-check" :href="route('approval')" :current="request()->routeIs('approval')" wire:navigate icon:trailing="plus">{{ __('Approval Level') }}</flux:navlist.item>
                <flux:navlist.item icon="clipboard-document-check" :href="route('kisasi')" :current="request()->routeIs('kisasi')" wire:navigate icon:trailing="plus">{{ __('Form Level') }}</flux:navlist.item>
                
       


                </flux:navlist.group>

            </flux:navlist>

            <flux:spacer />

            

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>

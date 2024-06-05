<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mpesa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Initiate Mpesa Payment') }}
                            </h2>
                    
                           
                        </header>
                    
                        
                    
                        <form method="post" action="{{ route('stk_push') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                    
                            <div>
                                <x-input-label for="amount" :value="__('amount')" />
                                <x-text-input id="amount" name="amount" type="number" class="mt-1 block w-full" 
                              placeholder="1"  required autofocus autocomplete="amount" />
                                <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                            </div>
                    
                            <div>
                                <x-input-label for="phonenumber" :value="__('Phone Number')" />
                                <x-text-input id="phonenumber" name="phonenumber" type="text" class="mt-1 block w-full" 
                                 required placeholder="254792009556" autocomplete="phonenumber" />
                                <x-input-error class="mt-2" :messages="$errors->get('phonenumber')" />
                    
                               
                            </div>
                            <div>
                                <x-input-label for="account_number" :value="__('Account Number')" />
                                <x-text-input id="account_number" name="account_number" type="text" class="mt-1 block w-full" 
                              placeholder="ABC"  required autofocus autocomplete="account_number" />
                                <x-input-error class="mt-2" :messages="$errors->get('account_number')" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Send') }}</x-primary-button>
                    
                              
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>

           

          
        </div>
    </div>
</x-app-layout>

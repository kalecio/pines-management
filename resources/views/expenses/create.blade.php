<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Criar nova conta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" action="{{ route('expenses.store') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('post')
                    <div>
                        <x-input-label for="description" value="Descricao" />
                        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description')" required autofocus autocomplete="description" />
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </div>
                    <div>
                        <x-input-label for="payment_date" value="Pago em" />
                        <x-text-input id="payment_date" name="payment_date" type="date" class="mt-1 block w-full" :value="old('payment_date')" required autofocus autocomplete="payment_date" />
                        <x-input-error class="mt-2" :messages="$errors->get('payment_date')" />
                    </div>
                    <div>
                        <x-input-label for="due_date" value="Vence em" />
                        <x-text-input id="due_date" name="due_date" type="date" class="mt-1 block w-full" :value="old('due_date')" required autofocus autocomplete="due_date" />
                        <x-input-error class="mt-2" :messages="$errors->get('due_date')" />
                    </div>
                    <div>
                        <x-input-label for="amount" value="Valor" />
                        <x-text-input id="amount" name="amount" type="number" class="mt-1 block w-full" :value="old('amount')" required autofocus autocomplete="amount" />
                        <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                    </div>
                    <div>
                        <x-input-label for="category_id" value="Categoria" />
                        <x-select-input id="category_id" name="category_id" type="text" class="mt-1 block w-full" :value="old('category_id')" :options="$categories" required autofocus autocomplete="category_id" />
                        <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<div class="max-w-7xl mx-auto py-15 px-4">

    <x-slot name="header">
        Criar Registro
    </x-slot>

    @include('includes.message')

    <form action="" wire:submit.prevent="createExpense" class="w-full max-w-7xl mx-auto">
        <div class="flex flex-wrap -mx-3 mb-6">

            <p class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descrição Registro</label>
                <input type="text" name="description" wire:model="description"
                class="block appearance-none w-full bg-gray-200 border @error('description') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            @error('description')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror
            </p>


            <p class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor do Registro</label>
                <input type="text" name="amount" wire:model="amount"
                class="block appearance-none w-full bg-gray-200 border @error('amount') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            @error('amount')
            <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror

            </p>


            <p class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tipo do Registro</label>
                <select name="type" id="" wire:model="type" class="block appearance-none w-full bg-gray-200 border @error('type') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="">Selecione o tipo do registro: Entrada ou Saída...</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>

            @error('type')
             <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
            @enderror
            </p>

            <p class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Foto Comprovante</label>
                <input type="text" name="expense_date" wire:model="expenseDate"
                class="block appearance-none w-full bg-gray-200 border @error('expense_date') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                @error('expense_date')
                <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
                @enderror
            </p>

            <p class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Foto Comprovante</label>
                <input type="file" name="photo" wire:model="photo"
                class="block appearance-none w-full bg-gray-200 border @error('photo') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                @if ($photo)
                <img class="my-3" src="{{$photo->temporaryUrl()}}" alt="" width="150">
                @endif


                @error('photo')
                <h5 class="text-red-500 text-xs italic">{{$message}}</h5>
                @enderror
            </p>

        </div>
        <div class="w-full py-4 px-3 mb-6 md:mb-0">

            <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Criar Registro</button>
        </div>

    </form>
</div>

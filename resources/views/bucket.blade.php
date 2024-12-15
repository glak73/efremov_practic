<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bucket') }}
        </h2>
    </x-slot>

    <div style="display: flex;flex-wrap: wrap; justify-content: center;">
        @foreach ($products as $product)
        <div style="display: flex; width: fit-content; flex-direction: column; margin:4px; background-color:gainsboro;">
            <h2>Наименование товара: <br/> {{ $product->title }}</h2>
            <h2>Описание товара: <br/> {{ $product->description }}</h2>
            <div style="width: -webkit-fill-available; display: flex; flex-direction: column;">
                <x-dropdown>
                    <x-slot name="trigger"><label style="background-color: white"><x-secondary-button>Опции:</x-secondary-button></label></x-slot>
                    <x-slot name="content">
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    @endforeach
    </div>

</x-app-layout>
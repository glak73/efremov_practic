<x-app-layout>
    <div style="display: flex; width: fit-content; flex-direction: column; margin:4px; background-color:gainsboro;">
        <h2>Наименование товара: <br /> {{ $product->title }}</h2>
        <h2>Описание товара: <br /> {{ $product->description }}</h2>
        <h2>Картинка товара: <br /> <img src="{{   asset('storage/' . $product->primary_image) }}" alt="image"> </img></h2>
        <div style="width: -webkit-fill-available; display: flex; flex-direction: column;">
            <x-responsive-nav-link>
                <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">{{ __('Удалить') }}</button>
                </form>
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.edit', $product->id)" :active="request()->routeIs('products.edit', $product->id)">
                {{ __('Редактировать') }}
            </x-responsive-nav-link>

        </div>
    </div>
</x-app-layout>

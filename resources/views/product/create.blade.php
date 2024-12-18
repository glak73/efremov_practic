<x-app-layout>
    <x-slot name="header">
        <!-- Заголовок слота -->
    </x-slot>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Создать продукт</h1>

        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name='title' placeholder="Название продукта" id="title"
                   value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name='description' placeholder="Описание продукта" id="description"
                   value="{{ old('description') }}">
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <input type="number" name='price' placeholder="Цена" id="price"
                   value="{{ old('price', '') }}">
        </div>

        <div class="form-group">
            <label for="product_image">Картинка</label>
            <input type="file" name="product_image" class="form-control input-sm">
        </div>

        <button type="submit">Отправить</button>
    </form>
</x-app-layout>

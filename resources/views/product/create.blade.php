<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Создать продукт</h1>
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name='title' placeholder="Название продукта" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name='description' placeholder="Описание продукта" id="tidescriptiontle">
        </div>

        <div class="form-group">
            <label for="description">price</label>
            <input type="number" name='price' placeholder="price" id="price">
        </div>

        <div class="form-group">
            <label for="description">Картинка</label>
            <input type="file" name="product_image" class="form-control input-sm">
        </div>
        <button type="submit" onclick="event.preventDefault();
        this.closest('form').submit();">Отправить</button>
    </form>
</x-app-layout>

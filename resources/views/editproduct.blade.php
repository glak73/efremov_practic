<x-app-layout>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @method('PATCH')
        @csrf
        <h1>Создать продукт</h1>
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name='title' placeholder="{{$product->title}}" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name='description' placeholder="{{$product->description}}" id="tidescriptiontle">
        </div>
        <button type="submit">Изменить</button>
    </form>
</x-app-layout>
    
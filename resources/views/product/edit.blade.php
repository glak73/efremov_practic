<x-app-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <h1>отредактировать продукт</h1>
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name='title' value="{{ $product->title }}" id="title">
        </div>
        <div class="form-group">
            <h2>Картинка товара: <br /> <img src="{{ asset('storage/' . $product->primary_image) }}" alt="image">
                </img></h2>
            <label for="product_image">обновить изображение</label>
            <input type="file" name="primary_image" class="form-control input-sm">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name='description' value="{{ $product->description }}" id="tidescriptiontle">
        </div>
        <button type="submit">Изменить</button>
    </form>
</x-app-layout>

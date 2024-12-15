<form action="{{route('products.store')}}" method="POST">
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
    <button type="submit">Отправить</button>
</form>
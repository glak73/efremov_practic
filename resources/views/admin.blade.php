@extends('layouts.main')
@section('content')
<div class="admin_main">
    <section class="setion_admin_up">
        <div class="section_admin_up_text">
            <a href="#" class="text-admin">Посетители</a>
            <a href="#" class="text-admin">Анализ</a>
            <a href="#" class="text-admin">Статистика</a>
        </div>
    </section>
    <section class="setion_admin_statistics">
        <h1 class="h1-admin-text">Статистика</h1>
        <img src="{{ asset('images/Groupst.svg') }}" class="setion_admin_statistics">
    </section>
    <section class="setion_admin_table_of_all_products"> <!--в эту таблицу должа входить полная информация о товаре -->
        <table class='wrapper-main__block-table'>
            <tr>
                <th>Название товара</th>
                <th>Тип товара</th>
                <th>Количество</th>
                <th>Страна</th>
                <th>Цена ₽</th>
                <th>Цена в розницу ₽</th>
                <th>Удалить</th>
            </tr>

            <tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["type"] . "</td>
                <td>" . $row["quantity"] . "</td>
                <td>" . $row["price"] . "₽" . "</td>
                <td>" . $row["quantity"] * $row["price"] . "₽" . "</td>
                <td>" . $row["quantity"] * $row["price"] . "₽" . "</td>
                <td>
                    <form method='post' class="delete-button" action='delete-data.php'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input class='content__admin-button' type='submit' value=' '>
                    </form>
                </td>
            </tr>
        </table>
    </section>
    <section class="setion_admin_add_product">
        <form class="form-add-data" action="add-data.php" method="post">
            <div class="form_name_1">
            <label class="form__label" for="name">Название товара</label>
            <input class="form__text" type="text" id="name" name="name">
            </div><div class="form_name_1">
            <label class="form__label" for="type">Тип товара</label>
            <input class="form__text" type="text" id="type" name="type">
            </div><div class="form_name_1">
            <label class="form__label" for="quantity">Количество на складе</label>
            <input class="form__text" type="text" id="quantity" name="quantity">
            </div><div class="form_name_1">
            <label class="form__label" for="quantity">Количество проданого</label>
            <input class="form__text" type="text" id="quantity" name="quantity">
            </div><div class="form_name_1">
            <label class="form__label" for="price">Цена ₽</label>
            <input class="form__text" type="text" id="price" name="price">
            </div><div class="form_name_1">
            <label class="form__label" for="price">Цена в розницу ₽</label>
            <input class="form__text" type="text" id="image_filename" name="image_filename">
            </div>
            <button class="catalog-admin">Сохранить</button>
        </form>
    </section>
</div>

</div>
@endsection
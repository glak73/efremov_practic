<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="./css/header_style.css">
    <link rel="stylesheet" href="./css/admin-user_style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>@yield('title')</title>
</head>

<body>


    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header_nav-up">
                    <ul class="header_nav_list-up">
                        <li><a href=""><img src="./images/marker_icon.svg" alt=""
                                    class="icon_img"></a>Москва</li>
                        <li class="header_nav_first_item-up"><a href="" class="header_nav_item-up">Бренды</a></li>
                        <li class="header_nav_item-up"><a href="" class="header_nav_item-up">Доставка</a>
                        </li>
                        <li class="header_nav_item-up"><a href="" class="header_nav_item-up">Возврат</a></li>
                        <li class="header_nav_item-up"><a href="" class="header_nav_item-up">Документация</a>
                        </li>
                        <li class="header_nav_item-up"><a href="" class="header_nav_item-up">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <header class="header">
            <div class="container">
                <div class="header_nav">
                    <ul class="header_nav_list">
                        <div class="logo_text">
                            <img src="./images/logo.svg" alt="" class="logo_img">
                            SroyRay
                        </div>
                        <div class="catalog">
                            <a href="" class="catalog_text">
                                <img src="./images/logo_catalog.svg" alt="" class="logo_catalog-img">
                                Каталог
                            </a>
                        </div>
                        <div class="search">
                            <form id="form" class="search_form">
                                <input type="search" id="query" name="q" placeholder="Поиск">
                                <button><img src="./images/search.svg" class="search_img" alt=""></button>
                            </form>
                        </div>
                        <div class="profile">
                            <a href=""><img src="./images/profile.svg" alt="" class="profile_img"></a>
                            <a href="" class="profile">Профиль</a>
                        </div>
                        <div class="orders">
                            <a href=""><img src="./images/orders.svg" alt="" class="orders_img"></a>
                            <a href="" class="orders">Заказы</a>
                        </div>
                        <div class="basket">
                            <a href=""><img src="./images/basket.svg" alt="" class="basket_img"></a>
                            <a href="" class="basket">Корзина</a>
                        </div>
                    </ul>
                </div>
            </div>
        </header>
        <header class="header">
            <div class="container">
                <div class="header_nav-down">
                    <ul class="header_nav_list-down">
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Акции</a></li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Строительные
                                материалы</a></li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Керамическая плитка</a>
                        </li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Краски</a></li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Сантехника</a></li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Напольные покрытия</a>
                        </li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Инструменты</a></li>
                        <li class="header_nav_item-down"><a href="" class="header_nav_item-down">Обои</a></li>
                        <li class="header_nav_last_item-down"><a href="" class="header_nav_item-down">Окна</a></li>
                    </ul>
                </div>
            </div>
        </header>
        @yield('content')

    </div>
</body>

</html>
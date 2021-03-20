<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voerro Tutorial - Shopping Cart w/ Vue.js 2 & Vuex</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar is-primary">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    Voerro Shopping Cart Tutorial
                </a>

                <div class="navbar-burger burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu"> 
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="">
                            Cart (0)
                        </a>

                        <div class="navbar-dropdown is-boxed is-right">
                            <a class="navbar-item" href="">
                                Cart is empty
                            </a>

                            <hr class="navbar-divider">

                            <a class="navbar-item" href="">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="section content">
            <h1>Our Products</h1>
            <products-list></products-list>
        </div>
        <cart-dropdown></cart-dropdown>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
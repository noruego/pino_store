<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div id="main_menu">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-6">
                <nav class="navbar navbar-default navbar-fixed-top" style="background-color: whitesmoke">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">Inicio</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-center">
                                <li><a href="/category">Categorias</a></li>
                                <li><a href="/discount_cupon">Cupones</a></li>
                                <li><a href="/payment_method">Metodos</a></li>
                                <li><a href="/product_order">Ordenes de compra</a></li>
                                <li><a href="/product">Productos</a></li>
                                <li><a href="/provider">Provedores</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../login.php">Login</a></li>
                            </ul>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <br><br><br><br>
    @yield('list')
    @yield('add')
    @yield('update')
    </body>
</html>

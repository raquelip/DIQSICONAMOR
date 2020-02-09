<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIQ'SI</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/cssh/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/cssh/responsive.css') }}">

    <script type="text/javascript" src="jsh/jquery.js"></script>
    <script type="text/javascript" src="jsh/main.js"></script>
</head>
<body>

    <section class="hero">
        <header>
            <div class="wrapper">
                <a href="#"><img src="{{asset('/imgh/logo.png')}}" class="logo" alt="" titl=""/></a>
                <a href="#" class="hamburger"></a>
                <nav>
                    <ul>
<<<<<<< HEAD
                        <li><a href="{{ url('otra',[2])}}">Productos</a></li>
                        <li><a href="#">Aniversario</a></li>
                        <li><a href="#">Cumpleaños</a></li>
                        <li><a href="#">Flores</a></li>
                        <li><a href="#">Personalizados</a></li>
=======
                        <li><a href="{{ url('otra',[5])}}">Buy</a></li>
                        <li><a href="#">Rent</a></li>
                        <li><a href="#">Sell</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
>>>>>>> 380e4b12bb6b75ed5d950cba2509cf0074e6740d
                    </ul>
                    @if(Auth::guest())
                    <a href="{{url('/login')}}" class="login_btn">Login</a>
                    @else
                    <a href="/" class="login_btn">{{Auth::user()->name}}</a>
                    @endif
                </nav>
            </div>
        </header><!--  end header section  -->

            <section class="caption">
                <h2 class="caption">DIQ'SI</h2>
                <h3 class="properties">....con amor</h3>
            </section>
    </section><!--  end hero section  -->


    <section class="search">
        <div class="wrapper">
            <form action="#" method="post">
                <input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
                <input type="submit" id="submit_search" name="submit_search"/>
            </form>
            <a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
        </div>

        <div class="advanced_search">
            <div class="wrapper">
                <span class="arrow"></span>
                <form action="#" method="post">
                    <div class="search_fields">
                        <input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

                        <hr class="field_sep float"/>

                        <input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
                    </div>
                    <div class="search_fields">
                        <input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

                        <hr class="field_sep float"/>

                        <input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
                    </div>
                    <input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
                    <input type="submit" id="submit_search" name="submit_search"/>
                </form>
            </div>
        </div><!--  end advanced search section  -->
    </section><!--  end search section  -->


    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                @foreach($produ as $pro)
                <li>
                    <a href="#">
                        <img src="{{$pro->Imagen}}" alt="" title="" class="property_img"/>
                    </a>
                    <span class="price">{{$pro->Precio}}</span>
                    <div class="property_details">
                        <h1>
                            <p>{{$pro->Nomproducto}}</p>
                        </h1>
                        <p>{{$pro->Descripcion}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="more_listing">
                <a href="#" class="more_listing_btn">View More Listings</a>
            </div>
        </div>
    </section>  <!--  end listing section  -->

    <footer>
        <div class="wrapper footer">
            <ul>

                <li class="about">
                    <p >Somos una marca de regalos que con mucha ilusión busca recordarte lo mágicos que somos con pequeños detalles. Creamos y diseñamos cada uno de los regalos con mucho cariño y nos emociona muchísimo poder ayudarte a encontrar el detalle perfecto para esas personas especiales que quieres tanto.</p>
                    <p>¡Gracias por permitirnos ser parte de tus momentos más importantes!</p>
                    <ul>
                        <li><a href="https://www.facebook.com/diq.si.9?epa=SEARCH_BOX" class="facebook" target="_blank"></a></li>
                      
                        <li><a href="https://www.instagram.com/diqsiklz/?fbclid=IwAR0ibWFjONmJYcVztXg_71TfZSnQh8mLX3Wwo4FEAAH3mrAQZ5ER3VTj6kI" class="instagram" target="_blank"></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="copyrights wrapper">
            Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.
        </div>
    </footer><!--  end footer  -->
    
</body>
</html>
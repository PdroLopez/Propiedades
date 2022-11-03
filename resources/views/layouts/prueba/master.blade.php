
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.prueba.meta')
@include('layouts.prueba.css')
</head>
<body>

    <div class="super_container">
        <div class="super_overlay"></div>
        <header class="header">
            <div class="header_bar d-flex flex-row align-items-center justify-content-start">
                <div class="header_list">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            {{-- <div><i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <span>+546 990221 123</span> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                            <span>+56 9 6907590</span>
                        </li>

                        <li class="d-flex flex-row align-items-center justify-content-start">
                            {{-- <div><i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <span>+546 990221 123</span> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                              </svg>
                            <span>3 Nte. 428, Viña del Mar, Valparaíso</span>
                        </li>

                        <li class="d-flex flex-row align-items-center justify-content-start">
                            {{-- <div><i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <span>+546 990221 123</span> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                            <span>axtell@gmail.com</span>
                        </li>
                    </ul>

                </div>
                <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
                    <div class="social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="log_reg d-flex flex-row align-items-center justify-content-start">
                    <ul class="d-flex flex-row align-items-start justify-content-start">

                        <li><a href="#"> Entrar</a></li>
                        <li><a href="#">Registrar</a></li>
                    </ul>
                </div>
            </div>


            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                <a href="index.html" class="brand-logo">
                    <img alt="Logo"  width="100%;" height="auto;" src="{{asset ('assets/media/logos/axtell.png')}}" />
                </a>                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li class=""><a href="index.html">Inicio</a></li>
                        <li><a href="about.html">Acerca de</a></li>
                        <li><a href="listings.html">Lista de Propiedades</a></li>
                        <li><a href="contact.html">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            @yield('content')
        </header>
        <div class="home">

            <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider owl-loaded">






            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2262px, 0px, 0px); transition: all 1.2s ease 0s; width: 5278px;"><div class="owl-item cloned" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item cloned" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item active" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item cloned" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div><div class="owl-item cloned" style="width: 754px;"><div class="slide">
           <img src="{{asset('assets/media/logos/axtell.png') }}" />
            <div class="home_container">
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="home_content">
            <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
            <div class="home_price_tag">$ 482 900</div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>

            <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            </div>


    </div>
    <div class="container">
        <div class="row">
        <div class="col">
        <div class="section_title_container text-center">
        <div class="section_subtitle">the best deals</div>
        <div class="section_title"><h1>Featured Properties</h1></div>
        </div>
        </div>
        </div>
        <div class="row featured_row">

        <div class="col-lg-4">
        <div class="listing">
        <div class="listing_image">
        <div class="listing_image_container">
        <img src="images/listing_1.jpg" alt="">
        </div>
        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
        <div class="tag tag_house"><a href="listings.html">house</a></div>
        <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
        </div>
        <div class="tag_price listing_price">$ 217 346</div>
        </div>
        <div class="listing_content">
        <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
        <img src="images/icon_1.png" alt="">
        <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
        </div>
        <div class="listing_info">
        <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
        <li class="property_area d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_2.png" alt="">
        <span>2500 sq ft</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_3.png" alt="">
        <span>2</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_4.png" alt="">
        <span>5</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_5.png" alt="">
        <span>2</span>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="listing">
        <div class="listing_image">
        <div class="listing_image_container">
        <img src="images/listing_2.jpg" alt="">
        </div>
        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
        <div class="tag tag_house"><a href="listings.html">house</a></div>
        <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
        </div>
        <div class="tag_price listing_price">$ 515 957</div>
        </div>
        <div class="listing_content">
        <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
            <img alt="Logo"  width="100%;" height="auto;" src="{{asset ('assets/media/logos/prueba2.jpg')}}" />
            <a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
        </div>
        <div class="listing_info">
        <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
        <li class="property_area d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_2.png" alt="">
        <span>1234 sq ft</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_3.png" alt="">
        <span>2</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_4.png" alt="">
        <span>5</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_5.png" alt="">
        <span>2</span>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="listing">
        <div class="listing_image">
        <div class="listing_image_container">
        <img src="images/listing_3.jpg" alt="">
        </div>
        <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
        <div class="tag tag_house"><a href="listings.html">house</a></div>
        <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
        </div>
        <div class="tag_price listing_price">$ 375 255</div>
        </div>
        <div class="listing_content">
        <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
        <img src="images/icon_1.png" alt="">
        <a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
        </div>
        <div class="listing_info">
        <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
        <li class="property_area d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_2.png" alt="">
        <span>2000 sq ft</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_3.png" alt="">
        <span>2</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_4.png" alt="">
        <span>5</span>
        </li>
        <li class="d-flex flex-row align-items-center justify-content-start">
        <img src="images/icon_5.png" alt="">
        <span>2</span>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        {{-- @yield('content')


    <div class="home">

    <div class="home_slider_container">
    <div class="owl-carousel owl-theme home_slider">

    <div class="slide">
   <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
    <div class="home_container">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="home_content">
    <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
    <div class="home_price_tag">$ 482 900</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="slide">
   <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
    <div class="home_container">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="home_content">
    <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
    <div class="home_price_tag">$ 482 900</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="slide">
   <img src="{{asset('assets/media/logos/prueba2.jpg') }}" />
    <div class="home_container">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="home_content">
    <div class="home_title"><h1>1243 Main Avenue Left Town</h1></div>
    <div class="home_price_tag">$ 482 900</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>
    </div>

    <div class="search">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="search_container">
    <div class="search_title">Find your home</div>
    <div class="search_form_container">
    <form action="#" class="search_form" id="search_form">
    <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
    <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
    <input type="text" class="search_input" placeholder="Property type" required="required">
    <input type="text" class="search_input" placeholder="No rooms" required="required">
    <input type="text" class="search_input" placeholder="Location" required="required">
    </div>
    <button class="search_button">submit listing</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="featured">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="section_title_container text-center">
    <div class="section_subtitle">the best deals</div>
    <div class="section_title"><h1>Featured Properties</h1></div>
    </div>
    </div>
    </div>
    <div class="row featured_row">

    <div class="col-lg-4">
    <div class="listing">
    <div class="listing_image">
    <div class="listing_image_container">
    <img src="images/listing_1.jpg" alt="">
    </div>
    <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
    <div class="tag tag_house"><a href="listings.html">house</a></div>
    <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
    </div>
    <div class="tag_price listing_price">$ 217 346</div>
    </div>
    <div class="listing_content">
    <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
    <img src="images/icon_1.png" alt="">
    <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
    </div>
    <div class="listing_info">
    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
    <li class="property_area d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_2.png" alt="">
    <span>2500 sq ft</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_3.png" alt="">
    <span>2</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_4.png" alt="">
    <span>5</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_5.png" alt="">
    <span>2</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>

    <div class="col-lg-4">
    <div class="listing">
    <div class="listing_image">
    <div class="listing_image_container">
    <img src="images/listing_2.jpg" alt="">
    </div>
    <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
    <div class="tag tag_house"><a href="listings.html">house</a></div>
    <div class="tag tag_rent"><a href="listings.html">for rent</a></div>
    </div>
    <div class="tag_price listing_price">$ 515 957</div>
    </div>
    <div class="listing_content">
    <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
    <img src="images/icon_1.png" alt="">
    <a href="single.html">4812 Haul Road Saint Paul, MN 55102</a>
    </div>
    <div class="listing_info">
    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
    <li class="property_area d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_2.png" alt="">
    <span>1234 sq ft</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_3.png" alt="">
    <span>2</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_4.png" alt="">
    <span>5</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_5.png" alt="">
    <span>2</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>

    <div class="col-lg-4">
    <div class="listing">
    <div class="listing_image">
    <div class="listing_image_container">
    <img src="images/listing_3.jpg" alt="">
    </div>
    <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
    <div class="tag tag_house"><a href="listings.html">house</a></div>
    <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
    </div>
    <div class="tag_price listing_price">$ 375 255</div>
    </div>
    <div class="listing_content">
    <div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
    <img src="images/icon_1.png" alt="">
    <a href="single.html">4067 Wolf Pen Road Mountain View, CA 94041</a>
    </div>
    <div class="listing_info">
    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
    <li class="property_area d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_2.png" alt="">
    <span>2000 sq ft</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_3.png" alt="">
    <span>2</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_4.png" alt="">
    <span>5</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_5.png" alt="">
    <span>2</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="map_section container_reset">
    <div class="container">
    <div class="row row-xl-eq-height">

    <div class="col-xl-7 order-xl-1 order-2">
    <div class="map">
    <div id="google_map" class="google_map">
    <div class="map_container">
    <div id="map"></div>
    </div>
    </div>
    </div>
    </div>

    <div class="col-xl-5 order-xl-2 order-1">
    <div class="map_section_content">
    <div class="map_overlay">
    <svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
    </svg>
    </div>
    <div class="section_title_container">
    <div class="section_subtitle">the best deals</div>
    <div class="section_title"><h1>Choose a location</h1></div>
    </div>
    <div class="locations_list d-flex flex-column align-items-start justify-content-start">
    <label class="location_contaner" data-lat="25.794923" data-lng="-80.133661">
    <input type="radio" name="location_radio">
    <span></span>
    Downtown Miami
    </label>
    <label class="location_contaner" data-lat="41.872883" data-lng="-87.660943">
    <input type="radio" name="location_radio">
    <span></span>
    Chicago
    </label>
    <label class="location_contaner" data-lat="40.779528" data-lng="-73.960561">
    <input type="radio" name="location_radio" checked>
    <span></span>
    Manhattan - New York
    </label>
    <label class="location_contaner" data-lat="34.082539" data-lng="-118.380126">
    <input type="radio" name="location_radio">
    <span></span>
    West Hollywood
    </label>
    <label class="location_contaner" data-lat="38.910263" data-lng="-77.020496">
    <input type="radio" name="location_radio">
    <span></span>
    Washington
    </label>
    <label class="location_contaner" data-lat="39.296713" data-lng="-76.634918">
    <input type="radio" name="location_radio">
    <span></span>
    Maryland
    </label>
    <label class="location_contaner" data-lat="37.806964" data-lng="-122.411291">
    <input type="radio" name="location_radio">
    <span></span>
    San Francisco
    </label>
    <label class="location_contaner" data-lat="33.627738" data-lng="-117.909449">
    <input type="radio" name="location_radio">
    <span></span>
    Orange County
    </label>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="hot">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="section_title_container text-center">
    <div class="section_subtitle">the best deals</div>
    <div class="section_title"><h1>Today's Hot Deal</h1></div>
    </div>
    </div>
    </div>
    <div class="row hot_row row-eq-height">

    <div class="col-lg-6">
    <div class="hot_image">
    <div class="background_image" style="background-image:url(images/hot.jpg)"></div>
    <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
    <div class="tag tag_house"><a href="listings.html">house</a></div>
    <div class="tag tag_sale"><a href="listings.html">for sale</a></div>
    </div>
    </div>
    </div>

    <div class="col-lg-6">
    <div class="hot_content">
    <div class="hot_deal">
    <div class="tag_price">$ 562 346</div>
    <div class="hot_title"><a href="#">Villa for sale</a></div>
    <div class="prop_location d-flex flex-row align-items-start justify-content-start">
    <img src="images/icon_1.png" alt="">
    <span>280 Doe Meadow Drive Landover, MD 20785</span>
    </div>
    <div class="prop_text">
    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
    </div>
    <div class="prop_agent d-flex flex-row align-items-center justify-content-start">
    <div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
    <div class="prop_agent_name"><a href="#">Maria Smith,</a> Agent</div>
    </div>
    </div>
    <div class="prop_info">
    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_2_large.png" alt="">
    <div>
    <div>1234</div>
    <div>sq ft</div>
    </div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_3_large.png" alt="">
    <div>
    <div>2</div>
    <div>baths</div>
    </div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_4_large.png" alt="">
    <div>
    <div>5</div>
    <div>beds</div>
    </div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_5_large.png" alt="">
    <div>
    <div>2</div>
    <div>garages</div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="testimonials container_reset">
    <div class="container">
    <div class="row row-eq-height">

    <div class="col-xl-6">
    <div class="testimonials_image">
    <div class="background_image" style="background-image:url(images/testimonials.jpg)"></div>
    <div class="testimonials_image_overlay"></div>
    </div>
    </div>

    <div class="col-xl-6">
    <div class="testimonials_content">
    <div class="section_title_container">
    <div class="section_subtitle">the best deals</div>
    <div class="section_title"><h1>Clients testimonials</h1></div>
    </div>

    <div class="testimonials_slider_container">
    <div class="owl-carousel owl-theme test_slider">

    <div class="test_slide">
    <div class="test_quote">"They helped us find our home"</div>
    <div class="test_text">
    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
    </div>
    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
    </div>

    <div class="test_slide">
    <div class="test_quote">"They helped us find our home"</div>
    <div class="test_text">
    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
    </div>
    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
    </div>

    <div class="test_slide">
    <div class="test_quote">"They helped us find our home"</div>
    <div class="test_text">
    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
    </div>
    <div class="test_author"><a href="#">Cristinne Smith</a>, Client</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <footer class="footer">
    <div class="footer_content">
    <div class="container">
    <div class="row">

    <div class="col-xl-3 col-lg-6 footer_col">
    <div class="footer_about">
    <div class="footer_logo"><a href="#">my<span>home</span></a></div>
    <div class="footer_text">
    <p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in.</p>
    </div>
    <div class="social">
    <ul class="d-flex flex-row align-items-center justify-content-start">
    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    <div class="footer_submit"><a href="#">submit listing</a></div>
    </div>
    </div>

    <div class="col-xl-3 col-lg-6 footer_col">
    <div class="footer_column">
    <div class="footer_title">Information</div>
    <div class="footer_info">
    <ul>

    <li class="d-flex flex-row align-items-center justify-content-start">
    <div><img src="images/phone-call.svg" alt=""></div>
    <span>+546 990221 123</span>
    </li>

    <li class="d-flex flex-row align-items-center justify-content-start">
    <div><img src="images/placeholder.svg" alt=""></div>
    <span>Main Str, no 23, New York</span>
    </li>

    <li class="d-flex flex-row align-items-center justify-content-start">
    <div><img src="images/envelope.svg" alt=""></div>
    <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81e9eef2f5e8efe6c1e2eeeff5e0e2f5afe2eeec">[email&#160;protected]</a></span>
    </li>
    </ul>
    </div>
    <div class="footer_links usefull_links">
    <div class="footer_title">Usefull Links</div>
    <ul>
    <li><a href="#">Testimonials</a></li>
    <li><a href="#">Listings</a></li>
    <li><a href="#">Featured Properties</a></li>
    <li><a href="#">Contact Agents</a></li>
    <li><a href="#">About us</a></li>
    </ul>
    </div>
    </div>
    </div>

    <div class="col-xl-3 col-lg-6 footer_col">
    <div class="footer_links">
    <div class="footer_title">Properties Types</div>
    <ul>
    <li><a href="#">Properties for rent</a></li>
    <li><a href="#">Properties for sale</a></li>
    <li><a href="#">Commercial</a></li>
    <li><a href="#">Homes</a></li>
    <li><a href="#">Villas</a></li>
    <li><a href="#">Office</a></li>
    <li><a href="#">Residential</a></li>
    <li><a href="#">Appartments</a></li>
    <li><a href="#">Off plan</a></li>
    </ul>
    </div>
    </div>

    <div class="col-xl-3 col-lg-6 footer_col">
    <div class="footer_title">Featured Property</div>
    <div class="listing_small">
    <div class="listing_small_image">
    <div>
    <img src="images/listing_1.jpg" alt="">
    </div>
    <div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
    <div class="listing_small_tag tag_house"><a href="listings.html">house</a></div>
    <div class="listing_small_tag tag_sale"><a href="listings.html">for sale</a></div>
    </div>
    <div class="listing_small_price">$ 562 346</div>
    </div>
    <div class="listing_small_content">
    <div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
    <img src="images/icon_1.png" alt="">
    <a href="single.html">280 Doe Meadow Drive Landover, MD 20785</a>
    </div>
    <div class="listing_small_info">
    <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_3.png" alt="">
    <span>2</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_4.png" alt="">
    <span>5</span>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
    <img src="images/icon_5.png" alt="">
    <span>2</span>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="footer_bar">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
    <div class="copyright order-md-1 order-2">
    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    </div>
    <nav class="footer_nav order-md-2 order-1 ml-md-auto">
    <ul class="d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About us</a></li>
    <li><a href="listings.html">Listings</a></li>
    <li><a href="blog.html">News</a></li>
    <li><a href="contact.html">Contact</a></li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>
    </div> --}}
    @include('layouts.prueba.js')
</body>
</html>

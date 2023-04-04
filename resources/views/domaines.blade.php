<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le bon tâcheron</title>
    <link rel='stylesheet' href="{{ asset('assets/css/global.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/css/structure.css') }}">
    <link rel='stylesheet' href="{{ asset('assets/css/loans3.css') }}">


    <link rel='stylesheet' href="{{ asset('assets/css/style_demo.css') }}">
</head>
<div id="Header_wrapper">
    <header id="Header">

        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <div class="logo">
                            <a id="logo"
                                data-height="60" data-padding="15"><img class="logo-main scale-with-grid"
                                    src="{{ asset('assets/images/loans3-logo-retina.png') }}"
                                    data-retina="{{ asset('assets/images/loans3-logo-retina.png') }}"
                                    data-height="44" data-no-retina></a>
                        </div>
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-menu" class="menu menu-main">
                                    <li>
                                        <a href="/"><span>Accueil</span></a>
                                    </li>
                                    <li>
                                        <a href="/domaines"><span>Domaines</span></a>
                                    </li>
                                    <li>
                                        <a href="/mission"><span>Notre mission</span></a>
                                    </li>
                                    {{-- <li>
                                        <a href="/tacherons"><span>Espace tâcheron</span></a>

                                                <ul class="sub-menu mfn-megamenu mfn-megamenu-4">
                                                    <li> <a href="/ancienstacherons"><span>Connexion tâcheron</span></a> </li>
                                                    <li> <a href="/inscriptiontacheron"><span>Inscripton tâcheron</span></a> </li>
                                                </ul>
                                    </li> --}}
                                    <li>
                                        <a href="/contact"><span>Contact</span></a>
                                    </li>

                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i
                                    class="icon-menu-fine"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<body>
    <div class="section mcb-section mcb-section-8b3rtt6vo" id="contact"
        style="background-image:url({{ asset('assets/images/loans3-footerbg.png') }});background-repeat:no-repeat;background-position:center bottom">
        <div class="section_wrapper mcb-section-inner">
            <div class="wrap mcb-wrap mcb-wrap-3z8nbpvqn one valign-top clearfix">
                <div class="mcb-wrap-inner">
                    <div class="column mcb-column mcb-item-5j5ta1iq7 one column_image">
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper"><img class="scale-with-grid"
                                    src="{{ asset('assets/images/loans3-footer-icon.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section mcb-section-w06u3wy4b" id="howitworks" style="padding-top:75px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-2yf7g0dc5 one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-7okqmnkoy one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h2>Domaines d'activité
                                                <br> (disponibles)
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column mcb-item-igi122vue one column_divider">
                                        <hr class="no_line" style="margin:0 auto 30px">
                                    </div>
                                </div>
                            </div>

                            @guest
                                {{-- The user is not authenticated... --}}
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Electricité</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-qnvy6ty8y one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-i2cwotkdo one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon2.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Plomberie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-8snw94unu one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-roesrz04z one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon3.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Peinture</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Energie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Vidange</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Pressing</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Ménuiserie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Maçonnerie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/register">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Tollier</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endguest

                            @auth
                                {{-- // The user is authenticated... --}}

                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/electricite">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Electricité</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-qnvy6ty8y one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-i2cwotkdo one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/plomberie">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon2.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Plomberie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-8snw94unu one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-roesrz04z one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/peinture">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon3.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Peinture</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/energie">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Energie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/vidange">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Vidange</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/pressing">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Pressing</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/menuiserie">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Ménuiserie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/maconnerie">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Maçonnerie</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap mcb-wrap-u53m440m9 one-third valign-top clearfix"
                                    style="padding:0 4%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column mcb-item-6yexo2r5h one column_icon_box">
                                            <div class="icon_box icon_position_top no_border">
                                                <a class href="/tollier">
                                                    <div class="image_wrapper"><img
                                                            src="{{ asset('assets/images/loans3-icon1.png') }}"
                                                            class="scale-with-grid">
                                                    </div>
                                                    <div class="desc_wrapper">
                                                        <h4 class="title">Tollier</h4>
                                                        <div class="desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth

                </div>
            </div>
            <div class="column_attr clearfix align_center mobile_align_center" style="border-radius:20px;">
                <hr class="no_line" style="margin:0 auto 35px">

                <p>
                    Le bon tâcheron by <a href="/https://www.econsulting.bf/"><u>E-consulting</u></a>.
                </p>
                <p>
                    Revenir à l'<a href="/"><u>Accueil</u></a>.
                </p>
            </div>
</body>

</html>

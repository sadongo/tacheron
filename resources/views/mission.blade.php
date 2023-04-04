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
                <div class="column mcb-column mcb-item-ddjhz6987 one column_column">
                    <div class="column_attr clearfix align_center" style="padding:0 5%;">
                            <h2>Notre mission
                            </h2>
                            <div class="column mcb-column mcb-item-psgu3ptqg one column_column">
                                <div class="column_attr clearfix">
                                    <hr class="no_line" style="margin:0 auto 20px">
                                    <hr class="no_line" style="margin:0 auto 50px">
                                    <p>
                                        <strong>Nous vous aidons à trouvez la bonne personne por vos tâches. Plus besoin de vous déplacer pour trouvez un techniciens!
                                            Nous l'avons déjà fais pour vous permettre de gagner en temps tout en restant
                                            sur place</strong> <a href="/inscription"> <u><strong> Inscrivez-vous</u></strong></a>
                                    </p>
                                    <p>
                                        <strong>Faites-nous confiance !</strong>
                                   </p>
                                </div>
                            </div>


                            <p>
                                Revenir à l'<a href="/"><u>Accueil</u></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

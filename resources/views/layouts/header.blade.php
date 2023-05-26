<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le bon tâcheron | @yield('title')</title>

        <!-- Favicons -->
    <link rel="shortcut icon" href="content/loans3/images/favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Montserrat:300,400,400italic,500,700,700italic,900'>

        <!-- CSS -->
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
                            {{-- <div class="top_bar_left clearfix"> --}}
                            <div>
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

                                            @guest
                                            <li>
                                                <a href="/"><span>Accueil</span></a>
                                            </li>
                                            <li>
                                                <a href="/domaines"><span>Domaines</span></a>
                                            </li>
                                            <li>
                                                <a href="/mission"><span>Notre mission</span></a>
                                            </li>

                                            @endguest
  																					@auth

                                             <li>
                                               <a href="/home"><span>Accueil</span></a>
                                             </li>

                                            <li>
                                                <a href="/dashboard"><span>Tableau de bord</span></a>
                                            </li>
                                            <li>
                                                <a href="/espacetacheron"><span>Espace tâcheron</span></a>
                                            </li>

                                            <li>
                                                <a href="/formtacheron"><span>Mon entreprise</span></a>
                                            </li>

  																					@endauth
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
<div>
    @yield('content')
</div>
        @include('layouts.footer')

@extends('layouts.header')

@section('title')
  Accueil
@endsection
@section('content')
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Mot de passe') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir du mot de passe') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">

                <x-button class="ml-4">
                    {{ __('Se connecter') }}
                </x-button>

                @if (Route::has('password.request'))
                <div class="ml-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                </div>
                @endif

            </div>
           <hr class="mt-4">


        </form>
        <div class="flex items-end justify-end mt-4">
            <a class="rounded-md" href="{{ route('register') }}">
              <x-button >
                 {{ __('Créer un nouveau compte') }}
              </x-button>
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>
@endsection

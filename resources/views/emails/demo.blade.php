@component('mail::message')
    Objet du mail : {{ $demo['sender_subject'] ?? "Mail d'un visiteur" }}

    Contenu du mail : {{ $demo['body'] }}

    Nom de l'envoyeur :
    {{ $demo['sender'] }}

    Email de l'envoyeur : {{ $demo['sender_email'] }}

@endcomponent

@component('mail::message',['subcopy'=>'okkokok'])

<h1> New mail has arrived </h1>

<p>Bom dia  , aqui {{$user->name}} .. tens um novo email </p>

@component('mail::button',['url'=>'visum.dev'])

Ver aqui

@endcomponent


@endcomponent





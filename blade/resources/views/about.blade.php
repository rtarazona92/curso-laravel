@extends('layouts.landing')


@section('titulo', 'About')

@section('cuerpo')
    <h1>Nosotros</h1>
    @component('_componests.card')
        @slot('$titulo', 'Mision')
        @slot('$contenido', 'Lorem ipsun..!!')
    @endcomponent

    @component('_componests.card')
        @slot('$titulo', 'Mision')
        @slot('$contenido')
            <h3>Ejemplo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus iure, libero, architecto maxime sint, soluta voluptate nihil incidunt inventore molestias similique corrupti accusantium quia veritatis pariatur cupiditate excepturi! Iure, officiis!</p>
        @endslot
    @endcomponent

@endsection
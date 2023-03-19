@extends('app')
@section('title')
    Noticias
@endsection
@section('contenido')
<h1 class="bg-titulo px-12 py-6 mt-5 text-white font-bold uppercase text-4xl inline-block">Noticias </h1>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 container mx-auto">
    @foreach ($news as $new )
    <div class="rounded-xl border-rose-700 mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('uploads/' . $new->urlimg) }}" alt="{{$new->title}}">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-xl my-8 text-titulo">{{$new->title}}</p>
            <div class="flex justify-between">
                <p class="text-center font-semibold text-base text-rosa">Fuente: <span class="text-gray-700">{{$new->autor}}</span></p> 
                <p class="text-center font-semibold text-base text-rosa">Fecha: <span class="text-gray-700"> {{$new->date->format('d-m-Y')}}</span></p> 
            </div>
            <div class="grid place-items-center mt-8" >
                <a  class="text-center font-semibold rounded-lg uppercase bg-rosa px-6 py-4 text-white" href="{{$new->url}}">Ver más</a>                  
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
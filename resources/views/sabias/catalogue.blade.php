@extends('app')
@section('contenido')

<h1 class="bg-amarillo-header px-12 py-6 mt-5 text-white font-bold uppercase text-4xl inline-block">Curiosidades </h1>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 container mx-auto">
    @foreach ($sabias as $sabia )
    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="{{$sabia->title}}">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">{{$sabia->title}}</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="{{$sabia->url}}">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>
    @endforeach
</div>
@endsection



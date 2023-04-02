@extends('app')
@section('title')
    Sabias
@endsection

@section('contenido')
<h1 class="bg-amarillo-header px-12 py-6 mt-5 text-white font-bold uppercase text-4xl inline-block">Curiosidades </h1>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 container mx-auto">
    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Modelos animales para el estudio del autismo</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.uv.mx/iice/files/2017/11/MODELOS-ANIMALES.pdf">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Autismo y Sexualidad (2018)</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.uv.mx/personal/jmanzo/2018/09/04/autismo-y-sexualidad/">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">El autismo y los dispositivos electrónicos (2017).</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.cyd.conacyt.gob.mx/?p=articulo&id=269">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Un segundo espectro del autismo: de la conducta a la neurona (2019)</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.uv.mx/eneurobiologia/vols/2019/23/Manzo/HTML.html">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Neurobiología del autismo</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.uv.mx/personal/jmanzo/files/2021/11/Metodo-de-caso.-Una-opcion-de-formacion-en-investigacion.pdf">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Diagnostico TEA adaptándonos a la nueva realidad</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://revistas.upch.edu.pe/index.php/RNP/article/view/4034/4587">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">TEA en la educación regular</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.redalyc.org/pdf/802/80242935009.pdf">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white"> aspectos etiológicos, diagnósticos y terapéuticos</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.medigraphic.com/pdfs/imss/im-2017/im172n.pdf">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>

    <div class="rounded-xl bg-bg-cyan mb-7 mt-8">
        <div class="overflow">
            <img src="{{ asset('img/interes_bg.jpg' ) }}" alt="">
        </div>
        <div class="p-2 overflow-hidden">
            <p class="text-center font-bold uppercase text-2xl m-0  text-white">Los trastornos del espectro autista (TEA)</p>
                <a  class="flex justify-center gap-2 mt-4 font-semibold rounded-lg uppercase bg-rosa  px-6 py-4  text-white" href="https://www.adolescenciasema.org/ficheros/PEDIATRIA%20INTEGRAL/Trastorno%20del%20Espectro%20Autista.pdf">Ver más
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                      </svg>
                </a>                 
        </div>
    </div>


</div>
@endsection
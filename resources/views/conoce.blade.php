@extends('app')
@section('title')
    Conocenos
@endsection

@section('contenido')
<h2 class="uppercase font-bold text-4xl text-titulo text-center">De la teoría a la práctica: ciencia y tecnología para el autismo.
<div class="container mx-auto">
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <div class="bg-bg-itsx ">
                <h3 class="text-center text-white text-3xl">ITSX</h3>
            </div>  
        </div>
        <div>
            <div class="bg-bg-uv">
                <h3 class="text-center text-white text-3xl">UV</h3>
            </div>
        </div>
        <div>
            <div class="bg-bg-profes">
                <h3 class="text-center text-white text-3xl">Profesores colaboradores</h3>
            </div>
            <div class="grid md:grid-cols-3">
                <div class="col-span-2 pl-5">
                    <p class="text-text-profes text-lg" >María Salomé Alejandre Apolinar</p>
                    <p class="text-text-profes text-lg" >Hugo Amores Pérez</p>
                    <p class="text-text-profes text-lg" >Irma Angélica García González</p> 
                </div>
                <div class="overflow-hidden"> 
                    <img src="{{ asset('img/LogoITSX.png') }} " alt="logo" class="h-24 object-contain w-16">       
                </div>
            </div>
        </div>
        <div>
            <div class="bg-bg-profes">
                <h3 class="text-center text-white text-3xl">Profesores colaboradores</h3>
            </div>
            <div class="grid md:grid-cols-3">
                <div class="col-span-2 pl-5">
                    <p class="text-text-profes text-lg">Dr. Luis Isauro García Hernández</p>        
                    <p class="text-text-profes text-lg">Dr. Jorge Manzo Denes</p>        
                    <p class="text-text-profes text-lg">Dra. Rebeca Toledo Cárdenas</p> 
                    <p class="text-text-profes text-lg">Dra. Maria Elena Hernández Aguilar</p>
                    <p class="text-text-profes text-lg">Dra. Deissy Herrera Covarrubias</p>
                    <p class="text-text-profes text-lg">Dr. Genaro Alfonso Coria Avila</p>
                </div>
                <div class="overflow-hidden"> 
                    <img src="{{ asset('img/LogoUV.png') }}" alt="logo uv" class="h-24 object-contain w-16">       
                </div>
            </div>
        </div>
        <div>
            <div class="bg-bg-colaborador">
                <h3 class="text-center text-white text-3xl">Alumnos colaboradores</h3>
            </div>        
            <div class="pl-5">
                <p class="text-text-profes text-lg">Alberto Michell Hernández Ortega</p>
                <p class="text-text-profes text-lg">Aldrich Arath Irisson Aburto</p>
                <p class="text-text-profes text-lg">Luis Alberto Jiménez Villa</p>
                <p class="text-text-profes text-lg">Luis Fernando Antonio De La Luz</p>
            </div>
        </div>
    <div>
    </div>
</div>        
{{-- <div class="mt-6">
    <div class="bg-bg-agradecimientos">      
        <h3 class="text-center text-white text-3xl">Agradecimientos:</h3>
    </div>
    
</div> --}}
</div>    
@endsection
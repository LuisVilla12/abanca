@extends('app')
@section('title')
    Material de apoyo
@endsection

@section('contenido')
    <div class="mt-5 grid md:grid-cols-2">
        <div id=""
            class="eleccionPC_padre p-5 grid place-items-center text-center bg-bg-padre hover:cursor-pointer eleccionPC_padre bg-titulo-activo">
            <h2 class="uppercase text-white font-medium my-5 mx-0 text-3xl">Padres y Tutores</h2>
        </div>
        <div id=""
            class="eleccionPC_hijo p-5 grid place-items-center text-center bg-bg-padre hover:cursor-pointer eleccionPC_hijo">
            <h2 class="uppercase text-white font-medium my-5 mx-0 text-3xl">Infantes</h2>
        </div>
    </div>
    <section class="container mx-auto">
        <div class="grid md:grid-cols-3 gap-2">
            <p id="btnEnlaces"
                class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-btn-activo  text-2xl font-semibold md:w-auto  hover:cursor-pointer enlaces">
                Enlaces</p>
            <p id="btnVideos"
                class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer videos">
                Videos</p>
            <p id="btnDocumentos"
                class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer documentos">
                Documentos</p>
        </div>
        <div class="md:grid md:grid-cols-4 md:gap-2  container">
            <div class="bg-yellow-200 h-1 my-3"></div>
            <div class="bg-yellow-200 h-1 my-3"></div>
            <div class="bg-yellow-200 h-1 my-3"></div>
            <div class="bg-yellow-200 h-1 my-3"></div>
        </div>
        {{-- Contenedor de materiales --}}
        <div class="materiales">
            {{-- Tutores --}}
            <div id="tutores">
                <div class="cat1__enlace block">
                    <div class="mb-6">
                        <div class="grid grid-cols-4 ">
                            <div class="bg-enlace-t-uno py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">Enseñar las emociones a peques con TEA
                                </h2>
                            </div>
                            <div class="bg-enlace-d-uno col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">El objetivo es hacer
                                    pedagogía sobre el TEA y ofrecer información veraz y fiable a padres y profesionales
                                    acerca del espectro del autismo.</p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.tuytea.es/post/ensenar-las-emociones-a-peques-con-tea?fbclid=IwAR0PJjYamunPL2lX3p20LbN8viGW2_dLqoqrcIRJZlrFrNqFVFm_PPTjI48"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- Enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-dos py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">TRABAJAR VOCABULARIO Y LENGUAJE,
                                    MATERIALES DESCARGABLES
                                </h2>
                            </div>
                            <div class="bg-enlace-d-dos col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Material didáctico sobre
                                    vocabulario y lenguaje, para desarrollar el habla.
                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://autismonavarra.com/materiales-y-enlaces-de-interes/trabajar-vocabulario-y-lenguaje-autismo/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- Enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-tres py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">PLANTILLAS DE TARJETAS DE PICTOGRAMAS
                                </h2>
                            </div>
                            <div class="bg-enlace-d-tres col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Materiales didácticos,
                                    sobre actividades de la vida cotidiana y juegos interactivos para el aprendizaje.
                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://auticmo.com/plantillas-de-pictogramas-descarga-gratis/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-uno py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">NAVEGADOR ESPECIALMENTE PARA NIÑOS
                                    AUTISTAS
                                </h2>
                            </div>
                            <div class="bg-enlace-d-uno col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Navegador web (en inglés)
                                    diseñado específicamente para niños y adolescentes con trastornos del espectro autista,
                                    trastornos generalizados del desarrollo y PDD-NOS

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://zacbrowser.com/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="cat2__video hidden ">
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach ($videosP as $video)
                            <div class="mb-8 mt-2">
                                <h3 class="text-center uppercase text-2xl text-titulo-video font-semibold my-4">
                                    {{ $video->title }}</h3>
                                <iframe src="https://www.youtube.com/embed/{{ $video->url }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="w-full min-h-32"></iframe>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="cat3__documento hidden ">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">Modelos animales</h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/iice/files/2017/11/MODELOS-ANIMALES.pdf" target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">LEA: APLICACIÓN WEB PARA
                                ESTIMULAR LA LECTOESCRITURA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://eduscientia.com/index.php/journal/article/download/74/56" target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">UNA OPCIÓN DE FORMACIÓN
                                PARA LA INVESTIGACIÓN
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/personal/jmanzo/files/2021/11/Metodo-de-caso.-Una-opcion-de-formacion-en-investigacion.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">AUTISMO: MITOS Y REALIDADES
                                CIENTÍFICAS
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.medigraphic.com/pdfs/veracruzana/muv-2014/muv141f.pdf" target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">AUTISMO Y SEXUALIDAD
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/personal/jmanzo/files/2018/09/Autismo-y-Sexualidad.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">UN SEGUNDO ESPECTRO DEL
                                AUTISMO: DE LA CONDUCTA A LA NEURONA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/eneurobiologia/vols/2019/23/Manzo/Manzo-23(10)150119.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">EL USO DEL PERRO EN EL
                                TRATAMIENTO DEL TRASTORNO ESPECTRO AUTISTA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.researchgate.net/profile/Pedro-Paredes-Ramos/publication/259175816_Use_of_dog_in_the_treatment_of_Autism_Spectrum_Disorder/links/00b4952a1e92a6e283000000/Use-of-dog-in-the-treatment-of-Autism-Spectrum-Disorder.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">EL CEREBELO EN EL AUTISMO
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.researchgate.net/publication/222109241_The_cerebellum_in_Autism"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">REDUCCIÓN EN EL UMBRAL
                                CUTÁNEO A VON FRAY EN NIÑOS CON AUTISMO DESPUÉS DE UN AÑO DE ESTIMULACIÓN TACTIL Y EMOCIONAL
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.scielo.org.mx/scielo.php?pid=S1665-50442021000300085&script=sci_arttext&tlng=en"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">PATRONES DE MOVIMIENTO EN
                                CAMPO ABIERTO DE LA RATA CON CONDUCTA AUTISTA SOMETIDA A ESTIMULACIÓN MUSICAL
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/eneurobiologia/vols/2018/20/Monje/Monje-Reyna%20et-al-9(20)050118.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">INCREMENTO DE RECEPTORES
                                ENDOCANABINOIDES CEREBELARES TRAS ESTIMULACIÓN MUSICAL DE RATAS CON AUTISMO INDUCIDO
                                POSTNATALMENTE
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/eneurobiologia/vols/2019/23/Monje/Monje-23(10)250219.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">MOZART PARA EL AUTISMO:
                                CUANTIFICACIÓN DE PARÁMETROS CARDIORRESPIRATORIOS DURANTE LA ESCUCHA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://www.uv.mx/eneurobiologia/vols/2020/28/Nu%C3%B1ez-Arcos/Nu%C3%B1ez-Arcos11(28)131220.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Infantes --}}
            <div id="infantes" class="hidden">
                <div class="cat1__enlace block">
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-uno py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">ENSEÑAR LAS EMOCIONES A PEQUES CON
                                    TEA
                                </h2>
                            </div>
                            <div class="bg-enlace-d-uno col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">El objetivo es hacer
                                    pedagogía sobre el TEA y ofrecer información veraz y fiable a padres y profesionales
                                    acerca del espectro del autismo.

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.tuytea.es/post/ensenar-las-emociones-a-peques-con-tea?fbclid=IwAR0PJjYamunPL2lX3p20LbN8viGW2_dLqoqrcIRJZlrFrNqFVFm_PPTjI48"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-dos py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">TU MAESTRA A DOMICILIO
                                </h2>
                            </div>
                            <div class="bg-enlace-d-dos col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Tiene la finalidad de
                                    compartir información relacionada al autismo y a la educación, así como actividades,
                                    recursos y estrategias que puedan llevar a la práctica de una manera sencilla pero
                                    significativa.
                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.facebook.com/107177897601478/posts/484424323210165/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-tres py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">AUTISMO INFANTIL ESPAÑA
                                </h2>
                            </div>
                            <div class="bg-enlace-d-tres col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Es un portal informativo
                                    para padres de niños con necesidades especiales

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.facebook.com/groups/2445430412213881/permalink/4813199828770249/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-uno py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">APRENDIZAJE PROCEDIMENTAL EN EL
                                    AUTISMO
                                </h2>
                            </div>
                            <div class="bg-enlace-d-uno col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">El aprendiz está sujeto
                                    a una gran cantidad de estimulación sensorial que tiene que percibir, procesar e
                                    interpretar, para finalmente responder.

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.uv.mx/personal/jmanzo/2019/12/08/aprendizaje-procedimental-en-el-autismo/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-dos py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">EL AUTISMO Y LOS BENEFICIOS DE LA
                                    ESTIMULACIÓN SENSORIAL
                                </h2>
                            </div>
                            <div class="bg-enlace-d-dos col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">El autismo es una
                                    alteración del desarrollo neural que se refleja en modificaciones significativas de la
                                    conducta infantil.

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.uv.mx/personal/jmanzo/2019/10/25/el-autismo-y-los-beneficios-de-la-estimulacion-sensorial/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-tres py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">MODELOS ANIMALES PARA ESTUDIAR EL
                                    AUTISMO
                                </h2>
                            </div>
                            <div class="bg-enlace-t-tres col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Las investigaciones
                                    sobre el origen del autismo han concluido que la causa fundamental se debe a
                                    alteraciones en diversas áreas del cerebro durante el desarrollo infantil.

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.uv.mx/cienciauv/blog/modelos-animales-para-el-estudio-del-autismo/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-uno py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">AUTISMO Y SEXUALIDAD
                                </h2>
                            </div>
                            <div class="bg-enlace-d-uno col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Aunque la conducta
                                    sexual y la fisiología de la reproducción son temas que han sido estudiados por décadas,
                                    sigue siendo un problema complejo aún no resuelto.

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.uv.mx/personal/jmanzo/2018/09/04/autismo-y-sexualidad/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>
                    {{-- enlace --}}
                    <div class="mb-6">
                        <div class="grid grid-cols-4  ">
                            <div class="bg-enlace-t-dos py-3 px-4">
                                <h2 class="uppercase text-center text-white text-3xl">AUTISMO EN TIEMPOS DE CORONAVIRUS
                                </h2>
                            </div>
                            <div class="bg-enlace-d-dos col-span-2 py-3 px-4">
                                <p class="grid place-items-center text-justify text-white text-lg">Las personas con autismo
                                    tienden a mantener una rutina estable y los cambios súbitos de rutina los llevan a
                                    diferentes niveles de estrés

                                </p>
                            </div>
                            <div class="grid place-items-center py-3 px-4">
                                <a href="https://www.uv.mx/personal/jmanzo/2020/05/25/autismo-en-tiempos-de-coronavirus/"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer ">Ver</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="cat2__video hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach ($videosI as $video)
                            <div class="mb-8 mt-2">
                                <h3 class="text-center uppercase text-2xl text-titulo-video font-semibold my-4">
                                    {{ $video->title }}</h3>
                                <iframe src="https://www.youtube.com/embed/{{ $video->url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen class="w-full h-60"></iframe>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="cat3__documento hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ÁLBUM DE CASA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://autismonavarra.com/wp-content/uploads/2015/09/Mi-%C3%A1lbum-de-casa.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ETIQUETAR COMIDA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://autismonavarra.com/wp-content/uploads/2015/09/Etiquetar-comidas-por-Amaya-%C3%81riz.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ETIQUETAR JUEGUETES
                            </h2>
                            <div class="grid place-items-center">
                                <a href="" target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-uno">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ETIQUETAR ROPA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://autismonavarra.com/wp-content/uploads/2016/11/Etiquetar-juguetes-por-Amaya-%C3%81riz.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-dos">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ME GUSTA/NO ME GUSTA
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://autismonavarra.com/wp-content/uploads/2015/09/Me-gusta-no-me-gusta-MODELO.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                        {{-- doc --}}
                        <div class="grid place-items-center py-8 px-5 bg-tres">
                            <h2 class="uppercase font-bold text-4xl text-center mb-8 text-white">ETIQUETAR ANIMALES
                            </h2>
                            <div class="grid place-items-center">
                                <a href="https://autismonavarra.com/wp-content/uploads/2016/11/Etiquetar-animales.pdf"
                                    target="_blank"
                                    class="text-center text-white mt-4 p-3 rounded-xl py-3 px-6   bg-bg-padre text-2xl font-semibold md:w-auto hover:cursor-pointer">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const btnPadrePC = document.querySelector('.eleccionPC_padre');
            const btnHijoPC = document.querySelector('.eleccionPC_hijo');

            console.log(btnPadrePC);
            console.log(btnHijoPC);

            // Contenedores generales
            const contenedorPadrePC = document.querySelector('#tutores');
            const contenedorHijoPC = document.querySelector('#infantes');
            console.log(contenedorHijoPC);
            console.log(contenedorPadrePC);

            // botones de categorias
            const btnEnlaces = document.querySelector('#btnEnlaces');
            const btnVideos = document.querySelector('#btnVideos');
            const btnDocumentos = document.querySelector('#btnDocumentos');
            console.log(btnEnlaces);
            console.log(btnVideos);
            console.log(btnDocumentos);

            // contenedores de categorias
            const categoriaEnlaces = document.querySelectorAll('.cat1__enlace');
            const categoriaVideos = document.querySelectorAll('.cat2__video');
            const categoriaDocumentos = document.querySelectorAll('.cat3__documento');
            console.log(categoriaEnlaces);
            console.log(categoriaVideos);
            console.log(categoriaDocumentos);

            botones();

            function botones() {
                btnPadrePC.onclick = function() {
                    console.log('btnPadre')
                    contenedorPadrePC.classList.add('block');
                    contenedorPadrePC.classList.remove('hidden');
                    contenedorHijoPC.classList.remove('block');
                    contenedorHijoPC.classList.add('hidden');
                    btnPadrePC.classList.remove('bg-bg-padre');
                    btnPadrePC.classList.add('bg-titulo-activo');
                    btnHijoPC.classList.remove('bg-titulo-activo');
                }
                btnHijoPC.onclick = function() {
                    console.log('btnHijo')
                    contenedorPadrePC.classList.remove('block');
                    contenedorPadrePC.classList.add('hidden');
                    contenedorHijoPC.classList.remove('hidden');
                    contenedorHijoPC.classList.add('block');
                    btnPadrePC.classList.remove('bg-titulo-activo');
                    btnPadrePC.classList.add('bg-bg-padre');
                    btnHijoPC.classList.add('bg-titulo-activo');
                }
                btnEnlaces.onclick = function() {
                    console.log('btn Enlace')
                    btnEnlaces.classList.remove('bg-bg-padre');
                    btnEnlaces.classList.add('bg-btn-activo');
                    btnVideos.classList.remove('bg-btn-activo');
                    btnVideos.classList.add('bg-bg-padre');
                    btnDocumentos.classList.remove('bg-btn-activo');
                    btnDocumentos.classList.add('bg-bg-padre');
                    // categoriaEnlaces.classList.remove('hidden');
                    // categoriaEnlaces.classList.add('block');
                    // categoriaVideos.classList.remove('block');
                    // categoriaVideos.classList.add('hidden');
                    // categoriaDocumentos.classList.remove('block');
                    // categoriaDocumentos.classList.add('hidden');

                    categoriaEnlaces.forEach(function(ce) {
                        ce.classList.remove('hidden');
                        ce.classList.add('block');
                    });
                    categoriaVideos.forEach(function(cv) {
                        cv.classList.remove('block');
                        cv.classList.add('hidden');
                    });
                    categoriaDocumentos.forEach(function(cd) {
                        cd.classList.remove('block');
                        cd.classList.add('hidden');
                    });
                }
                btnVideos.onclick = function() {
                    console.log('btn Videos')
                    btnEnlaces.classList.remove('bg-btn-activo');
                    btnEnlaces.classList.add('bg-bg-padre');
                    btnVideos.classList.remove('bg-bg-padre');
                    btnVideos.classList.add('bg-btn-activo');
                    btnDocumentos.classList.remove('bg-btn-activo');
                    btnDocumentos.classList.add('bg-bg-padre');
                    // categoriaVideos.classList.remove('hidden');
                    // categoriaVideos.classList.add('block');
                    // categoriaEnlaces.classList.remove('block');
                    // categoriaEnlaces.classList.add('hidden');
                    // categoriaDocumentos.classList.remove('block');
                    // categoriaDocumentos.classList.add('hidden');

                    categoriaEnlaces.forEach(function(ce) {
                        ce.classList.remove('block');
                        ce.classList.add('hidden');
                    });
                    categoriaVideos.forEach(function(cv) {
                        cv.classList.remove('hidden');
                        cv.classList.add('block');
                    });
                    categoriaDocumentos.forEach(function(cd) {
                        cd.classList.remove('block');
                        cd.classList.add('hidden');
                    });
                }
                btnDocumentos.onclick = function() {
                    console.log('btn Documentos')
                    btnEnlaces.classList.remove('bg-btn-activo');
                    btnEnlaces.classList.add('bg-bg-padre');
                    btnVideos.classList.remove('bg-btn-activo');
                    btnVideos.classList.add('bg-bg-padre');
                    btnDocumentos.classList.remove('bg-bg-padre');
                    btnDocumentos.classList.add('bg-btn-activo');
                    // categoriaDocumentos.classList.remove('hidden');
                    // categoriaDocumentos.classList.add('block');
                    // categoriaEnlaces.classList.remove('block');
                    // categoriaEnlaces.classList.add('hidden');
                    // categoriaVideos.classList.remove('block');
                    // categoriaVideos.classList.add('hidden');

                    categoriaEnlaces.forEach(function(ce) {
                        ce.classList.remove('block');
                        ce.classList.add('hidden');
                    });
                    categoriaVideos.forEach(function(cv) {
                        cv.classList.remove('block');
                        cv.classList.add('hidden');
                    });
                    categoriaDocumentos.forEach(function(cd) {
                        cd.classList.remove('hidden');
                        cd.classList.add('block');
                    });
                }
            }
        });
    </script>
@endpush

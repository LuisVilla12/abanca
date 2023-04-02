const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'rompecabezas-1': "url('/img/Rompecabezas/1.png')",
                'rompecabezas-2': "url('/img/Rompecabezas/2.png')",
                'rompecabezas-3': "url('/img/Rompecabezas/3.png')",
              },
            colors: {
                'primario': '#5185FF',
                'secundario': '#819ee0',
                'terciario': 'rgb(145, 178, 253)',
                'negro': '#000',
                'header':'#73c5ea',
                'footer':'#015989',
                'copy':'#00283a',
                'gris': '#484349',
                'grisClaro': '#F2F2F2',
                'azul': '#0da6f3',
                'rojo': '#cb0000',
                'verde':'#329f00',
                'negro': '#1a1b15',
                'titulo':'#007A7A',
                'recuadros':'#BDECF2',
                'botones':'#FF558',
                'amarillo':'#FDBD35',
                'bg-padre':'#F2B4C1',
                'titulo-activo':'#A5D7E2',
                'btn-activo':'#95C11F',
                'titulo-enlace':'#6a9eba',
                'enlace':'#F4BAB9',
                'titulo-video':'#606060',
                'video':'#7a5aa2',
                'bg-itsx':'#63c5ea',
                'bg-uv':'#fcb424',
                'bg-profes':'#ea4b8b',
                'text-profes':'#27798f',
                'bg-colaborador':'#7f59b0',
                'bg-agradecimientos':'#9b8ab0',
                'rosa':'#ff5589',
                'cyan-transparente':'#f0ffff',
                'amarillo-header':'#f9b14a',
                'bg-cyan':'#80d5d2',
                'uno':'#7a5aa2',
                'dos':'#009cc5',
                'tres':'#f59b06',
                'enlace-t-uno':'#eb566e',
                'enlace-d-uno':'#f1b300',
                'enlace-t-dos':'#9ac432',
                'enlace-d-dos':'#80d5d2',
                'enlace-t-tres':'#6a9eba',
                'enlace-d-tres':'#f4bab9',
              }
        },
       
    },

    plugins: [require('@tailwindcss/forms')],
};


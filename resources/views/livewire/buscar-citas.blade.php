<div>   
    <div class=" pt-1 mb-6">
        <div class="max-w-7xl mx-auto">
            <form wire:submit.prevent='leerDatosFormulario'>
                <label 
                    class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                    for="termino">Fecha de Búsqueda
                </label>
                    <div class="md:grid md:grid-cols-4 justify-between">
                        <div class="col-span-3 gap-4">
                            <div class="">
                                <input 
                                    id="termino"
                                    type="date"
                                    wire:model="termino"
                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-ful p-4 w-full"
                                />
                            </div>
                        </div>
            
                        <div class="flex ">
                            <input 
                                type="submit"
                                class="bg-pink-700 hover:bg-pink-700 transition-colors  text-sm font-bold px-10  rounded cursor-pointer uppercase w-full md:w-auto text-white"
                                value="Buscar"
                            />
                        </div>
                    </div>
               
            </form>
        </div>
    </div>
</div>


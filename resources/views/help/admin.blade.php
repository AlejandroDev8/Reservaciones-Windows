<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Preguntas Frecuentes') }}
        </h2>
    </x-slot>
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:py-6 lg:py-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 text-gray-900 bg-white md:flex lg:flex justify-between items-center text-wrap rounded-lg">
                    <section class="space-y-3 text-wrap">
                        <h2 class="text-2xl font-bold">
                            ¿Cómo acepto o rechazo una solicitude de reservación?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">
                            Para aceptar o rechzar una solicitud de reservación, en tu pestaña de "Todas las
                            solicitudes", tendrás 2 botones, 1 de color azul y otro de color rojo.
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            El botón de color azul es para aceptar la solicitud de reservación y el botón de color rojo
                            es para rechazar la solicitud de reservación.
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            Si das clic en el botón de color azul, la solicitud de reservación pasarás a una nueva
                            pestaña donde verás toda la información de la solicitud de reservación.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
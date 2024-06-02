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
                            ¿Cómo puedo reservar una sala?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">
                            Para reservar una sala en el sistema de reservación de salas del Tecnologico Nacional de
                            México, Campus
                            Ciudad Valles debes seguir los siguientes pasos:
                        </p>
                        <p class="text-sm text-gray-500 font-bold">
                            1. Dirigete a la sección de "Solicitar Reservación".
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            2. Te aparecerá un formulario que tendrás que llenar con la información de la reservación.
                        </p>
                        <p class="text-sm text-gray-500 font-bold">
                            3. Una vez que hayas llenado el formulario, da clic en el botón de "Enviar".
                        </p>
                        <h2 class="text-2xl font-bold">
                            ¿Puedo editar una reservación ya hecha?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">
                            No, no puedes editar una reservación ya hecha.
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            Si deseas hacer cambios en una reservación ya hecha, tendrás que cancelarla y hacer una
                            nueva
                            reservación.
                        </p>
                        <h2 class="text-2xl font-bold">
                            ¿Cómo puedo cancelar una reservación?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">
                            Para cancelar una reservación en el sistema de reservación de salas del Tecnologico Nacional
                            de México,
                            Campus Ciudad Valles debes seguir los siguientes pasos:
                        </p>
                        <p class="text-sm text-gray-500 font-bold">
                            1. Dirigete a la sección de "Mis Reservaciones".
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            2. Busca la reservación que deseas cancelar y da clic en el botón de "Cancelar".
                        </p>
                        <p class="text-sm text-gray-500 font-bold">
                            3. Confirma la cancelación de la reservación.
                        </p>
                        <h2 class="text-2xl font-bold">
                            ¿Puedo solicitar la misma sala para el mismo día?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">
                            No, no puedes solicitar la misma sala para el mismo día.
                        </p>
                        <p class="text-sm text-gray-600 font-bold">
                            Si a la hora de solicitar una sala en el formulario de reservación, sale un error en la
                            fecha de incio o
                            fecha de fin, es porqué esa sala ya está reservada para esa fecha.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
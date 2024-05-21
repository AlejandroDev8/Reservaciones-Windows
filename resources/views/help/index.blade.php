<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Preguntas Frecuentes') }}
        </h2>
    </x-slot>
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:py-6 lg:py-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-white md:flex justify-between items-center">
                    <section class="leading-10 space-y-3 text-wrap">
                        <h2 class="text-xl font-bold">
                            ¿Cómo puedo crear una cuenta?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">Para crear una cuenta en el sistema de reservación de
                            salas del
                            Tecnologico Nacional de México, Campus Ciudad Valles debes seguir los siguientes pasos:
                        </p>
                        <p class="text-sm text-gray-500 font-bold">1. Dirigite donde dice "Registrarse", ahí aparecerá
                            un pequeño
                            formulario que tendrás que llenar para poder registrarte.
                        </p>
                        <p class="text-sm text-gray-500 font-bold">2. Una vez que hayas llenado el formulario, recibirás
                            un correo
                            electrónico de confirmación para activar tu cuenta.
                        </p>
                        <h2 class="text-xl font-bold">
                            ¿Como verifico mi cuenta?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">Para verificar tu cuenta, debes seguir los siguientes
                            pasos:
                        </p>
                        <p class="text-sm text-gray-500 font-bold">1. Revisa tu correo electrónico (el que ocupaste para
                            tu
                            registro), ahí encontrarás un correo de confirmación.
                        </p>
                        <p class="text-sm text-gray-500 font-bold">2. Abre el correo y da click en el enlace de
                            confirmación.
                        </p>
                        <h2 class="text-xl font-bold">
                            ¿Qué hago si no recuerdo mi contraseña?
                        </h2>
                        <p class="text-sm text-gray-600 font-bold">Si no recuerdas tu contraseña, puedes recuperarla
                            siguiendo los
                            siguientes pasos:
                        </p>
                        <p class="text-sm text-gray-500 font-bold">1. Dirigete a la página de inicio de sesión o
                            registrarse y da
                            click en "¿Olvidaste
                            tu contraseña?".
                        </p>
                        <p class="text-sm text-gray-500 font-bold">2. Ingresa tu correo electrónico y da click en
                            "Enviar enlace de
                            restablecimiento".
                        </p>
                        <p class="text-sm text-gray-500 font-bold">3. Revisa tu correo electrónico, ahí encontrarás un
                            correo con un
                            enlace para restablecer tu contraseña.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
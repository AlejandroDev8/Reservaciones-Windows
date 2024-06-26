<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}" novalidate>
    @csrf
    <x-input-error :messages="str_replace('email', 'correo electrónico', $errors->get('email'))" class="mt-2" />
    <x-input-error :messages="str_replace('password', 'contraseña', $errors->get('password'))" class="mt-2" />
    <!-- Email Address -->
    <div>
      <x-input-label for="email" :value="__('Correo Eléctronico')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autofocus autocomplete="username" />

    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Contraseña')" />

      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
      <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
          class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
      </label>
    </div>

    <div class="flex justify-between my-5">

      <x-link href="{{ route('register') }}">
        Crear Cuenta
      </x-link>

      <x-link href="{{ route('password.request') }}">
        Olvidaste tu contraseña
      </x-link>

    </div>
    <x-primary-button class="w-full justify-center">
      {{ __('Inicar Sesión') }}
    </x-primary-button>
  </form>
</x-guest-layout>
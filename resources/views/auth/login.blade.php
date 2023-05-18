<style>


h1 {
    font-weight:500;
    color: #4DD0E1;
    text-align: center;
    padding-top: 50px;
}

.contenedor {
    background-color: white;
    width: 870px;
    height: 450;
    border-radius: 15px;
    box-shadow: 5px 5px 5px 2px rgba(74, 74, 74, 0.4);
}

.contenido {
    display: flex;
    justify-content: center;
}

.form {
    display: grid;
    align-content: center;
    padding-left:80px;
    margin-bottom: 50px;
}

.text {
    font-size: 16px;
    height: 30px;
    width: 265px;
    border-radius: 5px;
    padding-left:80px;    
    text-align: left;
}

.form label {
    font-size: 16px;
    padding: 0px 6px;
}

.links {
    display: flex;
    justify-content: space-between;
}

.link {
    font-weight: lighter;
    font-size: 14px;
    text-decoration: none;
    color: rgba(47, 41, 41, 0.5);
}

.boton {
    font-size: 16px;
    font-weight: bolder;
    background-color: #4DD0E1;
    color: #3B3B3B;
    border: none;
    border-radius: 10px;
    height: 35px;
    width: 280px;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
    
}

.img {
    margin-left: 50px;
    margin-bottom: 45px
}

.boton:hover{
    filter: brightness(80%);
    transition: filter .2s;
    cursor:pointer;
    color: white;
}
</style>

<x-guest-layout>

    <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div class="flex items-center mt-5">
                

                        
                <x-jet-button class="ml-11">
                    {{ __('Iniciar sesión') }}
                </x-jet-button>
                </div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __(' ¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                        
        </form>
    </x-jet-authentication-card>
    
</x-guest-layout>

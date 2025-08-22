<section class="mb-4">
    <header class="mb-3">
        <h2 class="h5">
            {{ __('Alterar Senha') }}
        </h2>

        <p class="text-muted small">
            {{ __('Certifique-se de usar uma senha longa e aleatória para manter sua conta segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <x-input-label for="update_password_current_password" :value="__('Senha Atual')" />
            <x-text-input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="form-control" 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="text-danger small mt-1" />
        </div>

        <div class="mb-3">
            <x-input-label for="update_password_password" :value="__('Nova Senha')" />
            <x-text-input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="form-control" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="text-danger small mt-1" />
        </div>

        <div class="mb-3">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar Senha')" />
            <x-text-input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="form-control" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="text-danger small mt-1" />
        </div>

        <div class="d-flex align-items-center gap-3">
            <x-primary-button class="btn btn-primary">{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p 
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="small text-muted mb-0"
                >{{ __('Salvo.') }}</p>
            @endif
        </div>
    </form>
</section>

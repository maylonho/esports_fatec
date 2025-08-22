<section class="mb-4">
    <header class="mb-3">
        <h2 class="h5">
            {{ __('Informações do Perfil') }}
        </h2>

        <p class="text-muted small">
            {{ __('Atualize as informações do seu perfil e seu endereço de e-mail.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input 
                id="name" 
                name="name" 
                type="text" 
                class="form-control" 
                :value="old('name', $user->name)" 
                required 
                autofocus 
                autocomplete="name" 
            />
            <x-input-error class="text-danger small mt-1" :messages="$errors->get('name')" />
        </div>

        <div class="mb-3">
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input 
                id="email" 
                name="email" 
                type="email" 
                class="form-control" 
                :value="old('email', $user->email)" 
                required 
                autocomplete="username" 
            />
            <x-input-error class="text-danger small mt-1" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="small text-muted">
                        {{ __('Seu endereço de e-mail não está verificado.') }}

                        <button 
                            form="send-verification" 
                            class="btn btn-link btn-sm p-0 align-baseline"
                        >
                            {{ __('Clique aqui para reenviar o e-mail de verificação.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="small text-success fw-semibold mt-1">
                            {{ __('Um novo link de verificação foi enviado para seu endereço de e-mail.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <x-primary-button class="btn btn-primary">{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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

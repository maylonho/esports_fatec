<section class="mb-4">
    <header class="mb-3">
        <h2 class="h5 text-danger">
            Excluir Conta
        </h2>

        <p class="text-muted small">
            Uma vez que sua conta for excluída, todos os seus recursos e dados serão apagados permanentemente. Antes de prosseguir, faça o download de quaisquer informações que deseja manter.
        </p>
    </header>

    <!-- Botão que abre o modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
        Excluir Conta
    </button>

    <!-- Modal Bootstrap -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="confirmDeleteLabel">Tem certeza de que deseja excluir sua conta?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body">
                        <p>Após a exclusão, todos os seus dados serão removidos permanentemente. Digite sua senha para confirmar.</p>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="Senha" 
                            required
                        >
                        @if ($errors->userDeletion->isNotEmpty())
                            <div class="text-danger small mt-1">
                                {{ $errors->userDeletion->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Excluir Conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

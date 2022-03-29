
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar-se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label >Titulo:</label>

                            <div class="col-md-6">
                                <input type="text" name="titulo">
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label >Conteúdo:</label>

                            <div class="col-md-6">
                                <textarea id="" col="30" row="50" name="corpo"></textarea>
                            </div>
                        </div>
                            <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

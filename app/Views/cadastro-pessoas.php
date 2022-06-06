    <div class="row">
        <div class="col">
            <h2>Cadastro de Pessoas</h2>
        </div>
    </div>

    <form method="post" action="gravar">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nome: </label>
                    <input type="text" class="form-control" name="nome"
                    value="<?= isset($pessoa['nome']) ? $pessoa['nome'] : "" ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Profissão: </label>
                    <input type="text" class="form-control" name="profissao"
                    value="<?= isset($pessoa['profissao']) ? $pessoa['profissao'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Idade: </label>
                    <input type="text" class="form-control" name="idade"
                    value="<?= isset($pessoa['idade']) ? $pessoa['idade'] : "" ?>">
                </div>
            </div>
        </div>
        <input type="hidden" name="id"
        value="<?= isset($pessoa['id']) ? $pessoa['id'] : "" ?>">
        <div class="row">
            <div class="col-6">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mt-3" type="button">enviar</button>
                </div>
            </div>    
        </div>
    </form>
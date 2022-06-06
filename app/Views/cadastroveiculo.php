<div class="row">
        <div class="col">
            <h2>Cadastro de Pessoas</h2>
        </div>
    </div>

    <form method="post" action="gravar">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">modelo: </label>
                    <input type="text" class="form-control" name="modelo"
                    value="<?= isset($veiculo['modelo']) ? $veiculo['modelo'] : "" ?>">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">marca: </label>
                    <input type="text" class="form-control" name="marca"
                    value="<?= isset($veiculo['marca']) ? $veiculo['marca'] : "" ?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">ano: </label>
                    <input type="text" class="form-control" name="ano"
                    value="<?= isset($veiculo['ano']) ? $veiculo['ano'] : "" ?>">
                </div>
            </div>
        </div>
        <input type="hidden" name="id"
        value="<?= isset($veiculo['id']) ? $veiculo['id'] : "" ?>">
        <div class="row">
            <div class="col-6">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mt-3" type="button">enviar</button>
                </div>
            </div>    
        </div>
    </form>

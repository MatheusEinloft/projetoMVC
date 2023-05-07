<link href="<?= URL ?>/public/css/style.css" rel="stylesheet">
<body>
    <form class="formContato">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome completo</label>
                <input type="nome" class="form-control" id="inputEmail4" placeholder="Fulano de tal">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="meuemail@gmail.com">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Telefone</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="(00)00000-0000">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" placeholder="ex: São paulo">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEstado">Estado</label>
                <select id="inputEstado" class="form-control">
                    <option selected>Escolher...</option>
                    <option>RS</option>
                    <option>RN</option>
                    <option>SP</option>
                    <option>SC</option>
                    <option>PR</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>RJ</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="inputCEP">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>

</html>
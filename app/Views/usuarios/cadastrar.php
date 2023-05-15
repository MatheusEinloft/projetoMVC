<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small>Preencha o formulário abaixo para fazer seu cadastro.</small></p>

            <form name="cadastrar" method="POST" action="<?= URL?>/usuarios/cadastrar" class="mt-4">
                <div class="form-group"> 
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?=$dados['nome']?>" class="form-control" required>
                </div>
                
                <div class="form-group"> 
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="text" name="email" id="email" value="<?=$dados['email']?>" class="form-control" required>
                </div>

                <div class="form-group"> 
                    <label for="email">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" id="senha" value="<?=$dados['senha']?>" class="form-control" required>
                </div>

                <div class="form-group"> 
                    <label for="confirma_senha">Confirme a senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirma_senha" id="confirma_senha" value="<?=$dados['confirma_senha']?>" class="form-control" required>
                </div> 

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                
                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>

                </div>    

            </form>
        </div>
    </div>
</div>
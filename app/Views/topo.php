<link href="<?= URL ?>/public/css/style.css" rel="stylesheet">
<header class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <a class="navbar-brand" href="<?= URL ?>">Projeto MVC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>" data-tooltip="tooltip" title="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>/public/Views/sobre" data-tooltip="tooltip" title="Sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>/public/Views/contato" data-tooltip="tooltip" title="contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-tooltip="tooltip" title="darkmode">Dark Mode</a>
                        </li>
                        
                    </ul>
                    <span class="navbar-text">
                        <a class="btn btn-info" href="<?= URL ?>public/usuarios/cadastrar" data-tooltip="tooltip" title="Não tem uma conta? Cadastre-se">Cadastre-se</a>
                        <a class="btn btn-info" href="#" data-tooltip="tooltip" title="Tem uma conta? Faça login">Entrar</a>
                    </span>
                </div>
            </nav>
        </div>
    </header>
</body>

</html>
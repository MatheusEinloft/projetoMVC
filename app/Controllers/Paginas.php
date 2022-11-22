<?php

class Paginas extends Controller
{

    public function index()
    {
        //modo de simplificar em passar as informações para a view, colocando as descrições tudo dentro do array $dados
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];
        //ele puxa o metodo view da controller que esta sendo extendida na class, passa os parametros dentro do " () " e o mesmo ira validar 
        $this->view('paginas/home', $dados);
    }

    public function sobre()
    {
        $dados = [
            'tituloPagina' => 'Página Sobre nós'
        ];

        $this->view('paginas/sobre', $dados);
    }

    public function contato()
    {
        $dados = [
            'tituloPagina' => 'Página de Contatos'
        ];

        $this->view('paginas/contato', $dados);
    }
}

<?php

class Paginas extends Controller
{

    public function index($dados)
    {
        //modo de simplificar em passar as informações para a view, colocando as descrições tudo dentro do array $dados
        $dados = [
            'tituloPagina' => 'Página Inicial'
        ];
        //ele puxa o metodo view da controller que esta sendo extendida na class, passa os parametros dentro do " () " e o mesmo ira validar 
        $this->view('paginas/home', $dados);
    }
    //teste git
    public function sobre($dados)
    {
        $dados = [
            'tituloPagina' => 'Página Sobre nós'
        ];

        $this->view('paginas/sobre', $dados);
    }

    public function contato($dados)
    {
        $dados = [
            'tituloPagina' => 'Página de Contatos'
        ];

        $this->view('paginas/contato', $dados);
    }

    public function produtos($dados)
    {
        $dados = [
            'tituloPagina' => 'Lista de Produtos'
        ];
        $this->view($dados);
    }

    public function suporte($dados)
    {
        $dados = [
            'tituloPagina' => 'Qual sua duvida?'
        ];
        $this->view($dados);
    }

    public function calculadora()
    {
        $dados = [
            'tituloPagina' => 'Calculadora'
        ];
        $this->view($dados);
    }

    public function darkMode($on = true){
        
    }
}

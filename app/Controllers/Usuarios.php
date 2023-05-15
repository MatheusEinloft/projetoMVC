<?php

class Usuarios extends Controller {

    public function cadastrar(){

        $formulario = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
         if(isset($formulario)){
            $dados = [ 
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha']),
            ];   
        } else {
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
            ];
        }
        
        $this->view('usuarios/cadastrar', $dados);
    }
}
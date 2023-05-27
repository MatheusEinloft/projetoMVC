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

            if(empty($formulario['nome'])){
                $dados['nome_erro'] =  'Preencha o campo nome';
            }

            if(empty($formulario['email'])){
                $dados['email_erro'] =  'Preencha o campo email';
            }

            if(empty($formulario['senha'])){
                $dados['senha_erro'] =  'Preencha o campo senha';
            } elseif (strlen($formulario['senha'] < 6)) {
                $dados['senha_erro'] =  'A senha deve ter no minimo 6 caracteres';
            }

            if(empty($formulario['confirma_senha'])){
                $dados['confirma_senha_erro'] =  'Confirme a senha';
            } elseif ($formulario['confirma_senha'] != $formulario['senha']) {
                $dados['confirma_senha_erro'] =  'As duas senhas precisam ser iguais';
            }

            if(Checa::checarNome($formulario['nome'])){
                $dados['nome_erro'] = 'O nome informado é invalido';
            }

            if(Checa::checarEmail($formulario['email'])){
                $dados['email_erro'] = 'O email informado é invalido';
            }

            if(!in_array("", $formulario)){
                echo 'Pode realizar o cadastro';
            }

        } else {
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
            ];
        }
    //todo
    //criar um token para esse usuario que foi cadastrado, assim todas as vezes que ele solicitar alguma requisição, iremos utilizar o token dele para liberar os acessos        
        $this->view('usuarios/cadastrar', $dados);
    }
}

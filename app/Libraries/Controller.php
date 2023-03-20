<?php
/*
 * Controlador base
 * Carrega os modelos e as views
 */
class Controller
{

        //carrega os modelos
    public function model($model)
    {
        require_once '../app/Models/' . $model . '.php';
        return new $model;
    }

        //carrega as views
    public function view($view, $dados = [])
    {
        $arquivo = ('../app/Views/' . $view . '.php');
        //valida se o arquivo realmente existendo, existindo ele requere o arquivo
        if (file_exists($arquivo)) :
            require_once $arquivo;
        else :
            die('O arquivo de view não existe!');
        endif;
    }~;

    public function calculadora($primeiroValor, $segundoValor){
        $primeiroValor;
    }
}

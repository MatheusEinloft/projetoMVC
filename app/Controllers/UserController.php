<?php
    class UserController {

        //Metodo para atualizar a preferência de modo escuro do usuário 
        public function updateDarkModePreference($userId,$darkMode){
            $userModel = new UserModel;
            $result = $userModel->updateDarkModePreference($userId, $darkMode);

            if($result){
                //Atualização bem-sucedida, redirecionar ou exibir mensagem de sucesso
            } else {
                //Falha na atualização, redirecionar ou exibiri mensagem de erro 
            }
        }
    }
?>
            //todo:isso é apenas rascunho, concluir as tarefas com o tempo

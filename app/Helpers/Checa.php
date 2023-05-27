<?php

class Checa 
{

    public static function checarNome($nome)
    {
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)){
            
            return true;

        } else {
            
            return false;
        }
    }
    public static function checarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            return true;

        } else {

            return false;

        }

    }



}
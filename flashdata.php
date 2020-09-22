<?php
/** 
*Temporary data in the session
*@author Wellington Alves <well.alves090@gmail.com>
*@version 0.1
*/
class Flashdata {
    /**
     * Function responsible for creating a flash session
     * @param String $data
     * @param String $value
     * @return void
     * 
     */
    public static function set(string $data, string $value) {
        $_SESSION[$data] = $value;
    }
    /**
     * Function to get the value of the flash session
     * @param String $data
     * @return String/Boolean
     */
    public static function get(string $data) {
        if(isset($_SESSION[$data])) {
            $valor = $_SESSION[$data];
            unset($_SESSION[$data]);
            return $valor;
        }
        else {
            return false;
        }
    }
}
?>
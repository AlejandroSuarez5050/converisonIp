<?php
class conversionesController{
    public function decBi(){
        require ("app/views/decimalBinario.php");
    }
    public function biDec(){
        require ("app/views/binarioDecimal.php");
    }

    public function decimalBinario(){
        if(isset($_POST)){
            $ip1=decbin($_POST['ip1']);
            $ip2=decbin($_POST['ip2']);
            $ip3=decbin($_POST['ip3']);
            $ip4=decbin($_POST['ip4']);


            echo "La ip es $ip1 . $ip2 . $ip3 . $ip4";
        }

        else{
            echo "no metiste nada";
        }
    }
    public function binarioDecimal(){
        if(isset($_POST)){
            $ip1=bindec($_POST['ip1']);
            $ip2=bindec($_POST['ip2']);
            $ip3=bindec($_POST['ip3']);
            $ip4=bindec($_POST['ip4']);
            echo "La ip es $ip1 . $ip2 . $ip3 . $ip4";
        }

        else{
            echo "no metiste nada";
        }
    }
}
?>
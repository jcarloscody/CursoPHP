<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        if(Documento::validacaoCPF($numero)){ //essa é forma para acessar metodo statico
            $this->numero = $numero;
        }else{
            throw new Exception("CPF  invalido", 1); //gera uma fatal erro
            
        }
        
    }

    //METODO STATIC
    public static function validacaoCPF($cpf):bool{//posso usar este metodo em qq lugar ou dentro da classe
        
        if(empty($cpf)) {//verifica se o numero foi informado
            return false;
        }
        
        //tira as mascaras
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}


//Duas formas

//Primeira
$cpf = new Documento();
$cpf->setNumero("11474333486");

var_dump($cpf->getNumero());


//Segunda
var_dump(Documento::validacaoCPF("18236892050"));
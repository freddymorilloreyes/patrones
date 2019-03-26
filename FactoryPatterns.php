<?php
//patrones de diseño

/*
Este patron define una interfaz para crear un objeto
 pero, deja que las subclases decidan que clase instanciar 

Permite a una clase ceder al instanciacion a las subclases
*/
class SerVivo{
    
    public $extremidades;
     public static function crear($tipo, $extremidades)
     {
        switch ($tipo) {
            case 'humano':
                return new Humano($extremidades);
                break;
            case 'canino':
                return new Canino($extremidades);
                break;
            default:
                echo new Exception("la clase $tipo no pertenece a ningunser vivo");
                break;
        }
     }

     public function getTipo()
     {
         return get_class($this);
     }

}

class Humano extends SerVivo
{
    public function __construct($extremidades){
        $this->$extremidades=$extremidades;
    }
}

class Canino extends SerVivo
{
    public function __construct($extremidades){
        $this->$extremidades=$extremidades;
    }
}

$humano= SerVivo::crear('humano',4);
echo $humano->getTipo()." este ser vivo tiene ".$humano->extremidades." extremidades<br>";
var_dump($humano->extremidades);
$can= SerVivo::crear('canino',5);
echo $can->getTipo()." este ser vivo tiene ".$can->extremidades." extremidades<br>";

?>
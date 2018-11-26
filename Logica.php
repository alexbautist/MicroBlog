<?php

class Logica {

    private $bd;

//    public function __construct()
//    {
//    $this->bd = new Connection();
//    }

    public function readMessages() {
        $mes = $this->bd->select("select contenu from messages");
        foreach ($mes as $k) {
            echo '<blockquote><p>' . $k['contenu'] . '</p>
               <footer>Mauris arcu</footer>
                    </blockquote>';
        }
    }
    
    
    
    
}

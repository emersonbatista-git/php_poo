<?php
require_once 'lobo.php';
class cachorro extends lobo {
    function emitirSom() {
        echo "Au Au Au Au!</br>";
    }

    function reagirfrase($frase) {
        if ($frase == "Toma Comida" || $frase =="Olá") {
            echo "Abanar e Latir</br>";
        }
        else {
            echo "Rosnar</br>";
        }


    }

    function reagirHora($hora, $min) {
        if ($hora <12) {
            echo "Abanar<br>";
        }
        elseif ($hora >= 18) {
            echo "Ignorar<br>";
        }
        else {
            echo "Abanar e latir</br>";
        }

    }

     function reagirDono($dono) {
        if ($dono) {
            echo "Abanar<br>";
            
        }else {
            echo "Rosnar e latir<br>";
        }

    }

     function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso<10) {
                echo"Abanar<br>";
            } else{
                echo"Latir<br>";
            }
        } else {
            if ($peso < 10) {
                echo "Rosnar<br>";
            }else {
                echo "Ignorar<br>";
            }

        }

    }


    
}

?>
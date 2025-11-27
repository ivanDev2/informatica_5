//calcolatrice per faer somma, moltiplicazione, divisione e sottrazione tra due numeri

<?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operazioni = $_POST['operazioni'];

    switch ($operazioni) {
        case 'somma':
            $result = $num1 + $num2;
            echo "La somma di $num1 e $num2 è: $result";
            break;
        case 'sottrazione':
            $result = $num1 - $num2;
            echo "La sottrazione di $num1 e $num2 è: $result";
            break;
        case 'moltiplicazione':
            $result = $num1 * $num2;
            echo "La moltiplicazione di $num1 e $num2 è: $result";
            break;
        case 'divisione':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "La divisione di $num1 e $num2 è: $result";
            } else {
                echo "Errore: Divisione per zero non consentita.";
            }
            break;
        default:
            echo "Operazione non valida.";
            break;
    }
        
?> 


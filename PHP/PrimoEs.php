tabella pitagorica in PHP

<table>

    <?php

    //tabella pitagorica 
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $prodotto = ($i + 1) * ($j + 1);
            echo "<td>$prodotto</td>";
        }
        echo "</tr>";
    }

    ?>
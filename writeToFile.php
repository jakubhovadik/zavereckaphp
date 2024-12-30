<?php

function ulozDoSouboru($nazevSouboru, $data){

    $f = fopen($nazevSouboru, "a");

    if ($f){
        fwrite($f, $data);
        fclose($f);
    } else {
        echo "Soubor se nepodařilo otevřít.";
        exit;
    }
}

?>

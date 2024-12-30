<?php

include "writeToFile.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $vek = $_POST["vek"];
    $mesto = $_POST["mesto"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $upozorneni = isset($_POST["upozorneni"]) ? 'Ano' : 'Ne';
    $motocykl = $_POST["motocykl"];
    $zkusenosti = $_POST["zkusenosti"];
    $ridicak = isset($_POST["ridicak"]) ? 'Ano' : 'Ne';

    $soubor = "data.txt";
    $emailExistuje = false;

    if (file_exists($soubor)) {
        $f = fopen($soubor, "r");
        while (($radek = fgets($f)) !== false) {
            $data = explode("|", trim($radek));
            if (isset($data[4]) && $data[4] === $email) {
                $emailExistuje = true;
                break;
            }
        }
        fclose($f);
    }

    if ($emailExistuje) {
        header("Location: index.php?error=exists");
        exit;
    } else {
        $data = "$jmeno|$prijmeni|$vek|$mesto|$email|$telefon|$upozorneni|$motocykl|$zkusenosti|$ridicak\n";
        ulozDoSouboru($soubor, $data);

        header("Location: index.php?success=1");
        exit;
    }
}
?>

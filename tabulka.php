<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>JAWACLUB</title>
    <link rel="stylesheet" href="styly.css">
</head>
<body>

<nav>
    <div>
        <a href="uvod.php">ÚVOD |</a>
        <a href="index.php">REGISTRACE |</a>
        <a href="tabulka.php">ČLENOVÉ |</a>
        <a href="vyhledavani.php">VYHLEDAT</a>
    </div>
</nav>

<article>
    <h1>TABULKA ČLENŮ</h1>

    <table>

        <tr bgcolor="#90ee90">
            <td>Jméno</td>
            <td>Přijmení</td>
            <td>Věk</td>
            <td>Město</td>
            <td>E-mail</td>
            <td>Telefon</td>
            <td>Upozornění</td>
            <td>Motocykl</td>
            <td>Zkušenosti</td>
            <td>Řidičák</td>
        </tr>



    <?php

    if (file_exists("data.txt")){
        $f = fopen("data.txt", "r");
        while (($radek = fgets($f)) !== false){
            $data = explode("|", trim($radek));
            echo "<tr>";
            foreach ($data as $item){
                echo "<td>" . $item . "</td>";
            }
            echo "</tr>";
        }
        fclose($f);
    } else{
        echo "<tr><td colspan='7'>Nikdo není registrován</td></tr>";
    }

    ?>

</table>
</article>

<footer class="tabulky">

    <p>Jakub Hovadík 3.A</p>

</footer>
</body>
</html>
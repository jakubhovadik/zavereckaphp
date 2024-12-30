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
    <h1>Vyhledat pomocí itemů</h1>

    <form method="post" action="vyhledavani.php">
        <label>Město <br><input type="text" name="zadaneMesto"><br><br></label>

        <label>Motocykl<br>
            <select name="zadanyMotocykl" required>
                <option value="Jawa Pionýr">Jawa Pionýr</option>
                <option value="Babetta 207">Babetta 207</option>
                <option value="Babetta 210">Babetta 210</option>
                <option value="Babetta 215">Babetta 215</option>
                <option value="Babetta 225">Babetta 225</option>
                <option value="Jawa 50">Jawa 50</option>
                <option value="Jawa 100">Jawa 100</option>
                <option value="Jawa 125">Jawa 125</option>
                <option value="Jawa 175">Jawa 175</option>
                <option value="Jawa 250">Jawa 250</option>
                <option value="Jawa 250 B">Jawa 250 B</option>
                <option value="Jawa ČZ 250">Jawa ČZ 250</option>
                <option value="Jawa 350">Jawa 350</option>
                <option value="Jawa 350 OHV">Jawa 350 OHV</option>
                <option value="Jawa 500">Jawa 500</option>
                <option value="Jawa 500 OHV">Jawa 500 OHV</option>
            </select><br><br>

            <button type="submit">Vyhledat</button>
    </form>

    <h2>Výsledky vyhledávání</h2>
    <table>

        <tr bgcolor="#90ee90">
            <th>Jméno</th>
            <th>Příjmení</th>
            <th>Věk</th>
            <th>Město</th>
            <th>E-mail</th>
            <th>Telefon</th>
            <th>Upozornění</th>
            <th>Motocykl</th>
            <th>Zkušenosti</th>
            <th>Řidičák</th>
        </tr>



        <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $zadaneMesto = $_POST["zadaneMesto"];
            $zadanyMotocykl = $_POST["zadanyMotocykl"];

            $f = fopen("data.txt", "r");
            while (($radek = fgets($f)) !== false) {
                $data = explode("|", trim($radek));

                $jmeno = $data[0];
                $prijmeni = $data[1];
                $vek = $data[2];
                $mesto = $data[3];
                $email = $data[4];
                $telefon = $data[5];
                $upozorneni = $data[6];
                $motocykl = $data[7];
                $zkusenosti = $data[8];
                $ridicak = $data[9];

                $rovnaMesto = empty($zadaneMesto) || $mesto === $zadaneMesto;
                $rovnaMotocykl = empty($zadanyMotocykl) || $motocykl === $zadanyMotocykl;

                if ($rovnaMesto && $rovnaMotocykl){
                    echo "<tr>
                <td>". $jmeno ."</td>
                <td>". $prijmeni ."</td>
                <td>". $vek ."</td>
                <td>". $mesto ."</td>
                <td>". $email ."</td>
                <td>". $telefon ."</td>
                <td>". $upozorneni ."</td>
                <td>". $motocykl ."</td>
                <td>". $zkusenosti ."</td>
                <td>". $ridicak ."</td>

            </tr>";
                }
            }
            fclose($f);
        }

        ?>
    </table>
</article>

<footer class="tabulky">

    <p>Jakub Hovadík 3.A</p>

</footer>

</body>
</html>


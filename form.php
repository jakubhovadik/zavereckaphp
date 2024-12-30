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
    <h1>REGISTRACE DO JAWACLUB</h1>

    <form method="post" action="saveData.php">

        <label> <b>Jméno *</b> <br><input type="text" name="jmeno" required><br><br></label>
        <label> <b>Příjmení *</b> <br><input type="text" name="prijmeni" required><br><br></label>
        <label> <b>Věk *</b> <br> <input type="number" name="vek" required><br><br></label>
        <label> <b>Město trvalého bydliště *</b> <br> <input type="text" name="mesto" required><br><br></label>
        <label> <b>e-mail *</b> <br><input type="email" name="email" required><br><br></label>
        <label> <b>Telefonnní číslo</b> <br><input type="text" name="telefon" minlength="9" maxlength="9"><br><br></label>
        <label> <b>Chci dostávat upozornění o akcích POUZE na e-mail</b> <br><input type="checkbox" name="upozorneni"><br><br></label>
        <label> <b>Váš motocykl *</b> <br>
            <select name="motocykl" required>
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
            </select>
        </label><br>

        <p><b>Mé zkušenosti s opravováním *</b> </p>

        <div >
            <label><b>|</b> Žádné<input type="radio" name="zkusenosti" value="neznalý"><b>|</b></label>
            <label>Učím se<input type="radio" name="zkusenosti" value="učí se"><b>|</b></label>
            <label>Párkrát jsem opravoval<input type="radio" name="zkusenosti" value="začátečník"><b>|</b></label>
            <label>Většinu zvládám<input type="radio" name="zkusenosti" value="pokročilý"><b>|</b></label>
            <label>Zvládl bych stroj opravit<input type="radio" name="zkusenosti" value="technik"><b>|</b><br><br></label>
        </div>

        <label> <b>Mám řidičský průkaz na můj typ motocyklu</b> <br><input type="checkbox" name="ridicak"><br><br></label>
        <label><b>Souhlasím se zveřejněním informací na našem webu</b><br><input type="checkbox" required><br><br></label>
        <button type="submit" name="odeslat">Odeslat</button><br>
    </form>
</article>

<footer>

<p>Jakub Hovadík 3.A</p>

</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Portal Spolecznosciowy - moje konto</h1>
    </div>
    <div id="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>Muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "portal");
        $query = mysqli_query($conn,"SELECT imie,nazwisko,opis,zdjecie FROM Osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6");
        while($wynik = mysqli_fetch_row($query)){
            echo <<<CMT
            <div class='generowany'>
            <div class='zdjecie'> <img src='$wynik[3]' alt='przyjaciel'></div>
            <div class='opis'><h3>$wynik[0] $wynik[1]</h3> <p>Ostatni wpis: $wynik[2]</p></div>
            "<div class='linia'><hr></div>"
            </div>
            CMT;
        }
       
        mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">Strone wykonal:00000</div>
    <div id="stopka2"><a href="ja@portal.pl">Napisz do mnie</a></div>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Portal Społecznościowy - moje konto</h1>
    </header>
    <main>
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $conn=mysqli_connect('localhost', 'root', '', 'fb2');
            $sql='SELECT imie, nazwisko, opis, zdjecie from osoby WHERE hobby_id=1 OR hobby_id=2 OR hobby_id=6;
            ';
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
                echo '<div>'.'<span id="foto">'.'<img src="'.$row['zdjecie'].'" alt="przyjaciel">'.'</span>';
                echo '<span id="opis">'.'<h3>'.$row['imie'].' '.$row['nazwisko'].'</h3>';
                echo '<p>'."Ostatni wpis: ".$row['opis'].'</p>'.'</span>'.'</div>';
                echo '<div id="linia">'.'<hr>'.'</div>';
            }

            mysqli_close($conn);
        ?>
    </main>
    <footer>
        <div id="lewy">
            <span>Stronę wykonał: 0000000</span>
        </div>
        <div id="prawy">
            <a href="mailto:ja@portal.pl">napisz do mnie</a>
        </div>
        </footer>
</body>
</html>
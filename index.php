<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III Homework Task</title>
</head>

<body>

    <h2>Loops</h2>
    <h4 style="color: green;">-------- III.I. Task --------</h4>
    <!-- Sugeneruokite 300 atsitiktinių skaičių nuo 0 iki 300, 
    atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
    kiek tarp jų yra didesnių už 150. Skaičiai didesni nei 275 
    turi būti atspausdinti skliausteliuose” [ ] “ -->

    <?php
    $arry = [];
    $number = 0;
    $count = 0;

    for ($i = 0; $i < 300; $i++) {
        $number = rand(0, 300);
        array_push($arry, $number);
        if ($number > 150) {
            $count++;
        }
        if ($number > 275) {
            echo "[" . $number . "] ";
        } else {
            echo $number . " ";
        }
    }
    echo "<br>Bigger than 150: " . $count;
    ?>

    <h4 style="color: green;">-------- III.II. Task --------</h4>
    <!-- Vienoje eilutėje atspausdinkite visus skaičius nuo 
    1 iki 3000, kurie dalijasi iš 77 be liekanos. 
    Skaičius atskirkite kableliais. Po paskutinio skaičiaus 
    kablelio neturi būti. -->
    <?php
    $number = 0;
    $strRes = "";
    for ($i = 77; $i < 300; $i += 77) {
        $number = rand(0, 3000);
        //php vietoj + naudojama .
        $strRes .= $number . ", ";
    }
    echo substr($strRes, 0, -2);
    ?>

    <h4 style="color: green;">-------- III.III. Task --------</h4>
    <!-- Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * * -->
    <?php
    for ($i = 0; $i < 11; $i++) {
        $simb = "";
        for ($j = 0; $j < 11; $j++) {
            $simb .= "* ";
        }
        echo $simb . "<br>";
    }
    ?>

    <h4 style="color: green;">-------- III.IV. Task --------</h4>
    <!-- Prieš tai nupieštam kvadratui nupieškite istrižaines zaigzdute pakeisdami kitu simboliu. (reikės išsiaiškinti, kaip atvaizduoti tekstą HTML)
* * * * * * * 
* * * * * * * 
* * * * * * * 
* * * * * * *
* * * * * * * 
* * * * * * * 
* * * * * * *  -->

    <?php
    $simb;
    for ($i = 0; $i < 20; $i++) {
        $simb = "";
        for ($a = 0; $a < 20; $a++) {
            if (($i === $a) || ($i + $a) === 19) {
                // (10 - (i + a) == 1)) {
                $simb .= "@ ";
            } else {
                $simb .= "* ";
            }
        }
        echo $simb . "<br>";
    }
    ?>

    <h4 style="color: green;">-------- III.V. Task --------</h4>
    <!-- Metam monetą. Monetos kritimo rezultatą imituojam 
    Math.random() funkcija, kur 0 yra herbas, o 1 - skaičius. 
    Monetos metimo rezultatus išvedame į ekraną atskiroje 
    eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
    Suprogramuokite tris skirtingus scenarijus kai monetos 
    metimą stabdome:
    Iškritus herbui;
    Tris kartus iškritus herbui;
    Tris kartus iš eilės iškritus herbui; -->

    <?php
    function No1()
    {
        // $coin;
        echo "---- First scenario ----";
        while (true) {
            $coin = rand(0, 1);
            if ($coin === 0) {
                $coin = "H";
            } else {
                $coin = "S";
            }
            echo "<br>" . $coin . "<br>";

            if ($coin === "H") {
                echo "<br>Iskrito herbas, stabdoma<br>";
                break;
            }
        }
    }

    function No2()
    {
        echo "---- Second scenario ----<br>";
        $count = 0;
        while (true) {
            $coin = rand(0, 1);

            if ($coin == 0) {
                $coin = "H";
                $count++;
            } else {
                $coin = "S";
            }
            echo $coin . "<br>";

            if ($count == 3) {
                echo "Herbas iskrito 3 kartus, stabdoma<br>";
                break;
            }
        }
    }

    function No3()
    {
        echo "---- Third scenario ----<br>";
        $i = 0;
        $count = 0;
        while (true) {
            $coin = rand(0, 1);

            if ($coin == 0) {
                $coin = "H";
                $count++;
            } else {
                $coin = "S";
            }
            echo $coin . "<br>";

            if ($coin == "S") {
                $count = 0;
            }

            if ($count == 3) {
                echo "Herbas is eiles iskrito tris kartus, stabdoma";
                break;
            }
        }
    }

    No1();
    No2();
    No3();
    ?>

    <h4 style="color: green;">-------- III.VI. Task --------</h4>
    <!-- Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų 
    kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
    Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir 
    “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite 
    funkcija Math.random(). Žaidimą laimi tas, kas greičiau 
    surenka 222 taškus. Partijas kartoti tol, kol kažkuris 
    žaidėjas pirmas surenka 222 arba daugiau taškų. -->

    <?php
    $petras;
    $kazys;
    $sumaPetras = 0;
    $sumaKazys = 0;
    while (true) {
        $petras = rand(10, 20);
        $sumaPetras += $petras;
        if ($sumaPetras >= 222) {
            echo "<br>Partija laimejo: Petras<br>";
            break;
        }

        $kazys = rand(5, 25);
        $sumaKazys += $kazys;

        if ($sumaKazys >= 222) {
            echo "Partija laimejo: Kazys<br>";
            break;
        }
    }
    echo "Petro tasku suma: " . $sumaPetras . "<br>";
    echo "Kazio tasku suma: " . $sumaKazys . "<br>";
    ?>

    <h4 style="color: green;">-------- III.VII. Task --------</h4>
    <!-- Reikia nupaišyti pilnavidurį rombą, taip pat, 
    kaip ir pilnavidurį kvadratą 
    (https://lt.wikipedia.org/wiki/Rombas), 
    kurio aukštis 21 eilutė. -->

    <?php
    $simb;
    for ($i = 0; $i < 21; $i++) {
        $simb = "";
        for ($a = 0; $a < 21; $a++) {
            if ((($a + $i) > 10) &&
                (($a - $i) < 10) &&
                (($i - $a) < 10) &&
                (($a + $i) < 30)
            ) {
                $simb .= "x ";
            } else {
                $simb .= "* ";
            }
        }
        echo $simb . "<br>";
    }
    ?>

    <h4 style="color: green;">-------- III.VIII. Task --------</h4>
    <!-- Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite 
    pasinaudodami Math.random() funkcija. Vinies ilgis 8.5cm 
    (pilnai sulenda į lentą). “Įkalkite” 5 vinis mažais smūgiais. 
    Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia 
    smūgių. “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis 
    vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite 
    Math.random() funkcija tikimybei sumodeliuoti), kad smūgis 
    nepataikys į vinį. Suskaičiuokite kiek reikia smūgių. -->

    <?php
    function no4() {
        $i = 0;
        echo ("<br>I dalis. Mazi smugiai<br>");
        for ($a = 0; $a < 5; $a++) {
            $length = 85;
            $count = 0;
            echo("<br>---- " . ($a + 1) . " VINIS -----<br>SMUGIAI<br>");
            while ($i <= $length) {
                $depth = rand(5, 20);
                $length = $length - $depth;
                echo($depth . " mm<br>");
                if ($length <= 0) {
                    echo("Vinis ikalta " . $count . " smugiais<br>");
                    break;
                }
                $count++;
            }
        }
    }

    function no5() {
        $i = 0;
        $status = true;
        echo("<br>----------------------------------------------------<br>");
        echo("<br>II dalis. Dideli smugiai<br>");
        for ($a = 0; $a < 5; $a++) {
            $length = 85;
            $count = 0;
            $count2 = 0;
            echo("---- " . ($a + 1) . " VINIS -----<br>---- Smugiai ----<br>");
            while ($i <= $length) {
                $depth = rand(20, 30);
                $possibility = rand(0, 1);
                if ($possibility === 1) {
                    $status = true;
                    echo("nepataikyta<br>");

                }
                if ($possibility === 0) {
                    $status = false;
                }

                if ($status === true) {
                    $count2++;
                }
                if ($status === false) {
                    $length = $length - $depth;
                    echo("pataikyta, ikalta: " . $depth . " mm<br>");
                    $count++;
                    if ($length <= 0) {
                        echo("Vinis ikalta " . $count . " smugiais<br>");
                        echo("Nepataikyta: " . $count2 . " smugiai(-u)<br>");
                        break;
                    }
                }
            }
        }
    }

    no4();
    no5();
?>




</body>

</html>
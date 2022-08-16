<?php
$page = $_GET['action'] ?? null;
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast-Przeprowadzki</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f09a000b46.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="cointener">

        <div id="menu-main-up">
            <a href="?action=">
                <div id="logo">LOGO</div>
            </a>
            <a href="?action=null">

            </a>
            <a href="?action=">
                <div class="menu-main"><i class="fa-solid fa-house"></i> Strona Główna</div>
            </a>
            <a href="?action=page1">
                <div class="menu-main"><i class="fa-solid fa-briefcase"></i> Jak działamy?</div>
            </a>
            <a href="?action=page2">
                <div class="menu-main"><i class="fa-regular fa-calendar-check"></i> Dostępność</div>
            </a>
            <a href="?action=page3">
                <div class="menu-main"><i class="fa-regular fa-calendar-plus"></i> Ustal termin</div>
            </a>
            <a href="?action=page4">
                <div class="menu-main"><i class="fa-solid fa-circle-question"></i> Pomoc</div>
            </a>
            <div id="login">LOGOWANIE!!!!</div>
        </div>


        <?php if($page === 'page1'):   ?>
        <h1>Jak to działa?</h1>


        <div id="mid-top">
            <img src="photo/dzialamy.jpg"><br /><br />
            <b>1. Sprawdź czy są wolne terminy </b><br /><br />
            <b>2. Stwórz konto</b><br /><br />
            <b>3. Zaklep termin przeprowadzki</b><br /><br />
            <b>4. Ciesz się nowym mieszkaniem!</b><br /><br />
            <div id="left-mid-top">
                Ile możesz zaoszczędzićz Fast-przeprowadzki?<br /> <img src="photo/kolo.png" width="100px" height=" 100px">                <br />

                Koszt transportu motocykla Romet Black City 125 z Krakowa do Londynu według zwykłych stawek cennikowych <b>wynosi około 1,10 zł/km czyli około 1800 zł.</b><br /><br />

                <b>Z Fast-przeprowadzki motocykl został przewieziony przez firmę, która i tak miała jechać tą trasą, ale miała jeszcze puste miejsce na 1 motocykl.</b><br /><br />
                <h5>Cena wyniosła 600 zł, a więc niemal 70% mniej.</h5><br /><br />
                <b>Tysiące przewoźników w 1 miejscu czeka na ciebie!</b>
            </div>
            <div id="right-mid-top">
                <img src="photo/oplaca.jpg" width="750px">

            </div>



        </div>
        <div id="mid-dziala">

            <br /><br />
            <br />
            
            <img src="photo/oplaca.png">
            <br /><h1>To się opłaca!</h1><br />
            <h2>Jeżeli znajdziesz niższą ofertę niż nasza zwrócimy ci różnice!</h2>
            <br /><br />
            <img src="photo/dlonie.jpg" width="100px" height="100px;">

        </div>
        <div id="mid-footer">
            <h3>Sprawdź nasze oferty!</h3>
        </div>



        <?php elseif($page === 'page2'):   ?>
        <img src="photo/dostepnosc.png"><br /><br />
        <h1>Sprwadź dostępność dla swojego miasta!</h1>
        <div id="top-dostepnosc">
            <div id="left-top-dostepnosc"><br /><br />
                <h4>Szukaj miasta!</h4>
                <form method="post">
                    <br /><br />
<h3>Wpisz swoją miejscowość</h3><br /><br /><br />
                    <input type="text" name="city" placeholder="Miasto" id="form-city"><br /><br />
                    <input type="submit" value="Sprwadź!" id="from-city-button">

                </form>
                <br /><br />
                <h6>*Dostępność jedynie we największych miastach oraz 50km od tego miasta!</h6>
            </div>
            <div id="right-top-dostepnosc">
                <?php
                $city=$_POST['city']??null;
                $con=new mysqli("localhost","root","","przeprowadzki");
                $searchcity=mysqli_query($con,"SELECT DISTINCT `miejscowosc` FROM terminy");
                
                $search=mysqli_query($con,"SELECT `miejscowosc`,`dostepnosc`,`data-wykonania`,`czas-wykonania` FROM `terminy` WHERE `miejscowosc`='$city' ORDER BY `data-wykonania`");
                
                if($city==null){
                    
                    echo"<h3>Miasta w jakich działamy!</h3>";
                    while($feels=mysqli_fetch_array($searchcity)){
                        echo"<br/><il><li><b>$feels[0]</b></li></il> <br/>";
                    } ;
                } else {
                    while($feel=mysqli_fetch_array($search)){
                        echo"
                        <div id='free-termin'> 
                        
                       <div id='city-termin'> <b>Miejscowość:</b> $feel[0] </div>
                       <div id='activ-termin'> <b>Termin:</b> $feel[1]</div>
                       <div id='data-job-termin'> <b>Dnia:</b> $feel[2]</div>
                       <div id='time-job-termin'> <b>O godzienie:</b> $feel[3]:00</div>
 
                        </div>                        
                        ";
                    }
                }
                
                ;?>

            </div>
            
        </div>
        <div id="mid-dostepnosc"><center><img src="photo/kalendarz.png" id="img-dostepnosc"></center></div>
        <div id="footer-dostepnosc">ss</div>


        <?php elseif($page === 'page3'):   ?>
        <img src="photo/uwaga.webp" id="img-warming" width="100px">
        <div id="word-warming">Uwaga!<br /> Ustalając termin Pamiętaj, że jednorazowo możesz zmienić termin bezpłatnie!<h6>*Kojena zmiana jest już płatna!</h6>
        </div>
        <div id="top-select">
            <h1>Wybierz termin przeprowadzki!</h1><br /><br />

            <?php
            $today = date("Y-m-d");
            echo"            
            <form method='post'>
                <input type='text' name='city-termin' id='city-termin-form' placeholder='Miejscowość'><br/><br/>
                <h4>Wybierz termin</h4><br/>
                <input type='date' id='start' name='trip-start' min='$today' max='2023-12-31'><br/><br/>
                
                <h4>Wybierz czas</h4><br/>
                <input type='text'' id='start' name='appt' placeholder='10 lub 18 'min='9' max='19'><br/><br/>
                <h4>Numer telefonu</h4><br/>
                <input type='number'' id='start' name='number-phone' placeholder='np. 333333333' min='0' max='999999999'><br/>
                <input type='submit' value='Ustal termin' id='button-city-termin'>
            </form>";
            $place=$_POST['city-termin']??null;
            $data=$_POST['trip-start']??null;
            $time=$_POST['appt']??null;
            $phone=$_POST['number-phone']??0;
            $con=new mysqli("localhost","root","","przeprowadzki");
            $ws=mysqli_query($con,"SELECT  `miejscowosc`,`data-wykonania`,`czas-wykonania` FROM `terminy` WHERE `miejscowosc`='$place' AND `data-wykonania`='$data' AND `czas-wykonania`='$time';");
            
            $st=mysqli_fetch_array($ws);
            if($place==null){}else{
            if($st==true){ 
                echo"<span id='wrong'><br/></br/>Prawdopodobnie istnieje taki termin w naszej bazie <br/> Przejdź do zakładki <b>DOSTĘPNOŚĆ</b>, aby sprawdzić jakie terminy są zajęte!</span>";
            }else{
                if($time==10 || $time ==18 ){
                    if($phone !=0){
                    $pol = "INSERT INTO `terminy` (`dostepnosc`, `miejscowosc`, `data`, `data-wykonania`, `czas-wykonania`, `number-phone`) VALUES ('zajęty', '$place', '$today', '$data', '$time','$phone');" ;
                    echo"<h2>Twój termin został przez nas zarejstrowany!</h2>";
             $aa=mysqli_query($con,$pol);
                unset($place);
                unset($data);
                unset($time);
                unset($today);
                    }else{
                        echo"<span id='wrong'><br/></br/>Nie wpisałeś numeru telefonu!</span>";
                    }


            }else{
                    echo"<h2>Czas został źle podany 10 lub 18</h2>";
                }
            }
            }
                
            mysqli_close($con);
            ?>

        </div>
        <div id="mid-select">
            <?php
                
            ?>
        </div>
        <div id="footer-select">
            <h3>Brakuje wolnych miejsc na twój termin?</h3><br /><br />
            <b>Skontakuj się z nami przejdź do zakładki Pomoc</b>
        </div>
        <?php elseif($page === 'page4'):   ?>
        <h1>Jeżeli nie ma wolnych terminów <br />
            <img src="photo/fast.png">
            <br /> Skontaktuj się z nami <br />
            <img src="photo/skontakuj.jpg.crdownload"><br />
            Tel. +48 32 843 12 23 <br /> Bądź drogą online po przez :<br /> E-mail: wymarzonytelefon@o2.pl <br /> <br /> Nasza siedziba <br /> Tarnobrzeg <br /> Ul. Dobrego Pana 63
        </h1>
        <?php else: ?>

        <div id="main-top"><img src="bus.png"></div>
        <div id="main-left">
            <br /><br />
            <h1>Znajdź tani i bezpieczny transport</h1><br /><br />
            <h4>Tylko sprawdzeni przewoźnicy</h4>
            <br /><br /><br />
            <?php
            $con=new mysqli("localhost","root","","przeprowadzki");
            $result = mysqli_query($con,"SELECT `nazwa-firmy`,`opis-firmy`,`ocena`,`ilosc-polubien` FROM `nazwy`");
 
            while($row = mysqli_fetch_array($result)){
                Echo" 
                    <b>$row[0]</b> <br/><br/> $row[1]  <br/> $row[2]/5 <br/> $row[3]tys. ocen </li><br/><br/>       
                ";
                
                
            }

                

            mysqli_close($con);
            ?>
        </div>

        <div id="main-right">

            <h2>Zapisz się na bezpłatne newsletter</h2><br /><br />
            <div id="form">
                <br />
                <b>Darmowe powiadomienia o promocjach!</b><br /><br />
                <form method="post">
                    <h3>Wpisz swój Email</h3><br /><br />
                    <input type="email" name="email" placeholder="Email" id="form-city"><br /><br />
                    <h3>Wpisz swoje Imię</h3><br /><br />
                    <input type="text" name="imie" placeholder="Imię" id="form-city"><br />
                    <input type="submit" value="Sprwadź!" id="from-city-button">

                </form>
                <br /><br />

            </div>
        </div>
        <div id="main-footer">
            <div class="footer-block"><i class="fa-brands fa-creative-commons-nc"></i> <br />Rejestracja oraz wystawianie ogłoszeń <b>są darmowe.</b></div>
            <div class="footer-block"><i class="fa-solid fa-users-between-lines"></i><br /> W Fast-Przeprowadzki zlecisz transport <b>zweryfikowanym przewoźnikom.</b></div>
            <div class="footer-block"><i class="fa-solid fa-piggy-bank"></i> <br />Możesz oszczędzić<b> nawet 500PLN*</b></div>
            <div class="footer-block"><b><i class="fa-solid fa-bolt-lightning"></i><br /> Szybkość</b></div>
        </div>



    </div>
    <?php endif; ?>
    <div id="footer">Prace wykonał!@#$%</div>
</body>

</html>

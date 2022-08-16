<?php
$page = $_GET['action'] ?? null;
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darmowa porównywarka Smartfonów</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f09a000b46.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="animation.css">
</head>


<body>
    <div id="box">
        <div id="menu">
            <div id="logo">LOGO</div>
            <div id="form">
                <form method="post" id="Search">
                    <input type="text" name="key" placeholder="Wyszukaj w serwisie" id="menu-text">
                    <input type="submit" value="Wyszukaj!" id="menu-button">
                </form>
            </div>

            <div id="block-menu">
                <a href="?action=null">
                    <div class="box-menu"><i class="fa-solid fa-house"></i> Strona główna</div>
                </a>
                <a href="?action=page1">
                    <div class="box-menu"><i class="fa-brands fa-buffer"></i> Porównywarka</div>
                </a>
                <a href="?action=page2">
                    <div class="box-menu"><i class="fa-solid fa-circle-question"></i> Pomoc </div>
                </a>
            </div>
        </div>

        <div id="mid">
            <?php if($page === 'page1'):   ?>
            <div id="chcek">
                <form method="post">
                    <input type="text" name="phone" placeholder="Marka" id="inpute">


                    <input type="number" name="ROM" placeholder="Ilość Pamięci ROM np. 8,16,32,64,128" id="inpute">
                    <input type="number" name="RAM" placeholder="Ilość Pamięci RAM np. 2,4,6,8" id="inpute">

                    <input type="text" name="battery" placeholder="Bateria np. 3000,4000,5000" id="inpute">
                    <input type="text" name="money" placeholder="Kwota np. 500,600,1000,2000" id="inpute">

                    <input type="submit" value="Filtruj " id="inpute-button"><i class='fa-solid fa-magnifying-glass'></i>
                </form>
            </div>
            <?php
            $phone=$_POST['phone']??null;
            $ROM=$_POST['ROM']??null;
            $RAM=$_POST['RAM']??null;
            $battery=$_POST['battery']??null;
            $money=$_POST['money']??null;
            $con=mysqli_connect('localhost','root','','telefony');

if($money !== null and $ROM || $RAM || $battery || $phone == null ){
  $pyt=mysqli_query($con,"SELECT `phone`,`modelephone`,`ROM`,`RAM`,`battery`,`money`, `picture` FROM `telefony` WHERE `money` <= $money " );
while($rs= mysqli_fetch_array($pyt)){

echo"<center>
<div id='block-phone'>
<img src='picture/$rs[6]'> <div id='marc'> $rs[0] $rs[1] <i class='fa-brands fa-apple'></i></div>

<div class='storage'> Pamięć ROM <br/><b> $rs[2] </b> <i class='fa-solid fa-memory'></i><h6> *Pamięć użytkowa</h6></div> 


<div class='storage'>  Pamięć RAM <br/><b> $rs[3]</b> <i class='fa-solid fa-memory'></i><h6> *Pamięć przstrzenna</h6> </div>


<div id='bat'>Pojemność baterii <br/><b>$rs[4]Mah</b><br/><i class='fa-solid fa-battery-empty'></i></div>
<div id='cash'> <i class='fa-solid fa-coins'></i>Koszt : <b>$rs[5]</b> PLN </div>
  


</div> </center> 
";  
    
} }
elseif($phone !== null and $ROM || $RAM || $battery || $money == null ){
  $pyt=mysqli_query($con,"SELECT `phone`,`modelephone`,`ROM`,`RAM`,`battery`,`money`, `picture` FROM `telefony` WHERE `phone`='$phone' " );
while($rs= mysqli_fetch_array($pyt)){

echo"
<center>
<div id='block-phone'>
<img src='picture/$rs[6]'> <div id='marc'> $rs[0] $rs[1] <i class='fa-brands fa-apple'></i></div>

<div class='storage'> Pamięć ROM <br/><b> $rs[2] </b> <i class='fa-solid fa-memory'></i><h6> *Pamięć użytkowa</h6></div> 


<div class='storage'>  Pamięć RAM <br/><b> $rs[3]</b> <i class='fa-solid fa-memory'></i><h6> *Pamięć przstrzenna</h6> </div>


<div id='bat'>Pojemność baterii <br/><b>$rs[4]Mah</b><br/><i class='fa-solid fa-battery-empty'></i></div>
<div id='cash'> <i class='fa-solid fa-coins'></i>Koszt : <b>$rs[5]</b> PLN </div>
  


</div> </center>  
";  
    
} }           
elseif($phone ||$ROM || $RAM || $battery || $money !== null){
    

$pyt=mysqli_query($con,"SELECT `phone`,`modelephone`,`ROM`,`RAM`,`battery`,`money`, `picture` FROM `telefony` WHERE `phone`='$phone' AND `ROM`<= $ROM AND `RAM`<= $RAM AND `battery`<= $battery AND `money` <= $money " );
while($rs= mysqli_fetch_array($pyt)){

echo"
<center>
<div id='block-phone'>
<img src='picture/$rs[6]'> <div id='marc'> $rs[0] $rs[1] <i class='fa-brands fa-apple'></i></div>

<div class='storage'> Pamięć ROM <br/><b> $rs[2] </b> <i class='fa-solid fa-memory'></i><h6> *Pamięć użytkowa</h6></div> 


<div class='storage'>  Pamięć RAM <br/><b> $rs[3]</b> <i class='fa-solid fa-memory'></i><h6> *Pamięć przstrzenna</h6> </div>


<div id='bat'>Pojemność baterii <br/><b>$rs[4]Mah</b><br/><i class='fa-solid fa-battery-empty'></i></div>
<div id='cash'> <i class='fa-solid fa-coins'></i>Koszt : <b>$rs[5]</b> PLN </div>
  


</div> </center>  
";
}

}else{
$pyt=mysqli_query($con,"SELECT `phone`,`modelephone`,`ROM`,`RAM`,`battery`,`money`,`picture` FROM `telefony` " );
while($rs= mysqli_fetch_array($pyt)){

echo" 
<center>
<div id='block-phone'>
<img src='picture/$rs[6]'> <div id='marc'> $rs[0] $rs[1] <i class='fa-brands fa-apple'></i></div>

<div class='storage'> Pamięć ROM <br/><b> $rs[2] </b> <i class='fa-solid fa-memory'></i><h6> *Pamięć użytkowa</h6></div> 


<div class='storage'>  Pamięć RAM <br/><b> $rs[3]</b> <i class='fa-solid fa-memory'></i><h6> *Pamięć przstrzenna</h6> </div>


<div id='bat'>Pojemność baterii <br/><b>$rs[4]Mah</b><br/><i class='fa-solid fa-battery-empty'></i></div>
<div id='cash'> <i class='fa-solid fa-coins'></i>Koszt : <b>$rs[5]</b> PLN </div>
  


</div> </center>  ";
}            
}
            ?>
            <?php elseif ($page === 'page2'): ?>
            <h1>Jeżeli nadal nie znalazłeś swojego wymarzonego telefonu <br /> <br /> Skontaktuj się z nami <br /> Tel. +48 32 843 12 23 <br /> Bądź drogą online po przez :<br /> E-mail: wymarzonytelefon@o2.pl <br /> <br /> Nasza siedziba <br /> Tarnobrzeg <br /> Ul. Dobrego Pana 63 </h1>
            <?php else: ?>
            <div id="down-menu">
                <div id="s">
                    <h2>Sprawdź urządzenie</h2>
                </div>
                <div id="efect-down"><?php $model=$_POST['number-IMI'] ?? null;  echo"Smartfon realme GT 5G 12/256GB Racing Yellow "; ?></div>
                <div id="form-down">
                    <form method="post" action="?action=page1">
                        <input type="text " name="number-IMI" placeholder="Wpisz Model Smartfona" id="text-down-menu">
                        <input type="submit" value="Sprawdź!" id="button-down-menu">
                    </form>
                </div>
            </div>
            <div class="block-main">
                <h1 id="is">Najlepsza porównywarka smartfonow!</h1><br /><br />
                <h3>Chcesz wybrać smartfon dla siebie? <br /><br /> Skorzystaj z naszej bezpłatnej porównywarki</h3><br />

                <?php
            $keys = $_POST['key'] ?? null;
            var_dump($keys);
                echo"Tutaj wyświetla się zawartość pierwszego formularza!";
            ?>
                <br /> <br />


                <h5>Nasza porównywarka telefonów jest bardzo intuicyjna w obsłudze. Na samej górze umieściliśmy zestaw filtrów, dzięki którym możesz swobodnie przeszukiwać i porównywać modele o zbliżonych parametrach - takich, jakie potrzebujesz. Udostępniamy Ci filtrowanie modeli po nazwie producenta. Możesz również znaleźć wybrany telefon wpisując w odpowiednie pole jego nazwę.</h5>


            </div>
            <div class="block-main">
                <br />
                <div id="color-form-news">
                    <br /><br />
                    <h3>Zapisz się, aby dostawać więcej ofert z smartfonami</h3>
                    <form method="post" action="porownywarka.php">
                        <input type="text" name="imie" placeholder="Twoje Imię" class="form-news"><br />
                        <input type="email" name="text" placeholder="Twój Email" class="form-news"><br />
                        <input type="submit" value="Wyślij" id="button-news">
                    </form>
                    <?php
                    $imie=$_POST['imie']??null;
                    $email=$_POST['text']??null;
                    $con=mysqli_connect('localhost','root','','telefony');
                    $ws=mysqli_query($con,"SELECT email FROM `newsletter` WHERE `email`='$email';");
                    
                    $st=mysqli_fetch_array($ws);
                    if($st == true){
                     
                        echo"<div id='napis-form'>Istnieje taki email w naszej bazie danych</div>";
                    }
                    else{
                       $send="INSERT INTO `newsletter`( `imie`, `email`) VALUES ('$imie','$email') ";
                        mysqli_query($con,$send);
                        echo"Dodano do bazy danych";
                      }
                    
                    ?>
                </div>
            </div>

            <?php endif; ?>
            <div id="down"> Praca wykonana przez %$#@! <i class="fa-solid fa-code"></i></div>
        </div>

    </div>

</body>

</html>

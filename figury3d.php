<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
    
<div id="menuTop"></div>

<div class="hero-image">
  <div class="hero-text">
    <h2>Obliczator 3000 - policzmy pola i obwody figur</h2>
    <p>Wybierz figurę i wpisz dane</p>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Szczescian')">Sześcian</button>
      <button class="tablinks" onclick="openCity(event, 'Prostopadloscian')">Prostopadłościan</button>
      <button class="tablinks" onclick="openCity(event, 'Kula')">Kula</button>
      <button class="tablinks" onclick="openCity(event, 'Walec')">Walec</button>
      <button class="tablinks" onclick="openCity(event, 'Stozek')">Stożek</button>
    </div>

    <div id="Szczescian" class="tabcontent">
    <form method="POST" action="">
    <p>Podaj A</p>
    <input type="text" name="a" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $a = $_POST['a'];

    echo "Pole powierzchni= " . (6*($a*$a)) . "<br>";
    echo "Objętość= " . ($a*$a*$a);
    ?>
    </div>

    <div id="Prostopadloscian" class="tabcontent">
    <form method="POST" action="">
    <p>Podaj Długość Boku a</p>
    <input type="text" name="boka" size="10">
    <p>Podaj Długość Boku b</p>
    <input type="text" name="bokb" size="10">
    <p>Podaj Długość Boku c</p>
    <input type="text" name="bokc" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $boka = $_POST['boka'];
    $bokb = $_POST['bokb'];
    $bokc = $_POST['bokc'];

    echo "Pole powierzchni= " . ((2*($boka*$bokb))+(2*($boka*$bokc))+(2*($bokc*$bokb))) . "<br>";
    echo "Objętość= " . ($boka*$bokb*$bokc);
    ?>
    </div>

    <div id="Kula" class="tabcontent">
    <form method="POST" action="">
    <p>Podaj Promień</p>
    <input type="text" name="promien" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $promien = $_POST['promien'];

    echo "Pole powierzchni= " . (4*(M_PI*($promien*$promien))) . "<br>";
    echo "Objętość= " . ((4*(M_PI*($promien*$promien*$promien)))/3);
    ?>
    </div>

    <div id="Walec" class="tabcontent">
    <form method="POST" action="">
    <p>Podaj Promień</p>
    <input type="text" name="promien" size="10">
    <p>Podaj Wysokość</p>
    <input type="text" name="wysokosc" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $promien = $_POST['promien'];
    $wysokosc = $_POST['wysokosc'];

    echo "Pole powierzchni= " . ((2*(M_PI*($promien*$promien)))+((2*(M_PI*($promien)))*$wysokosc)) . "<br>";
    echo "Objętość= " . ((2*(M_PI*($promien*$promien)))*$wysokosc);
    ?>
    </div>

    <div id="Stozek" class="tabcontent">
    <form method="POST" action="">
    <p>Podaj Promień</p>
    <input type="text" name="promien" size="10">
    <p>Podaj Wysokość</p>
    <input type="text" name="wysokosc" size="10">
    <p>Podaj l</p>
    <input type="text" name="l" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $promien = $_POST['promien'];
    $wysokosc = $_POST['wysokosc'];
    $l = $_POST['l'];

    echo "Pole powierzchni= " . ((M_PI*($promien*$promien))+((M_PI*($promien))*$l)) . "<br>";
    echo "Objętość= " . (((M_PI*($promien*$promien))*$wysokosc)/3);
    ?>
    </div>
      
  </div>
</div>

</body>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
 <script>
 $(document).ready(function(){
   
   $('#menuTop').load("menuTop.html");

});   
</script>

</html> 

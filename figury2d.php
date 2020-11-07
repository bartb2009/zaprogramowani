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
      <button class="tablinks" onclick="openCity(event, 'Trojkat')">Trójkąt równoboczny</button>
      <button class="tablinks" onclick="openCity(event, 'Kwadrat')">Kwadrat</button>
      <button class="tablinks" onclick="openCity(event, 'Kolo')">Koło</button>
      <button class="tablinks" onclick="openCity(event, 'Prostokat')">Prostokąt</button>
      <button class="tablinks" onclick="openCity(event, 'Rownoleglobok')">Rownoległobok</button>
      <button class="tablinks" onclick="openCity(event, 'Trojkat2')">Trójkąt różnoboczny</button>
      <button class="tablinks" onclick="openCity(event, 'Trapez')">Trapez</button>
    </div>
      
      
        <div id="Trojkat" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku</p>
        <input type="text" name="bok" size="10">
        <p>Podaj Wysokość</p>
        <input type="text" name="wysokosc" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $bok = $_POST['bok'];
        $wysokosc = $_POST['wysokosc'];

        echo "Obwód= " . ((3*$bok)) . "<br>";
        echo "Pole= " . ((($bok*$bok)*(sqrt(3)))/4);
        ?>
        </div>

        <div id="Kwadrat" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku</p>
        <input type="text" name="bok" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $bok = $_POST['bok'];

        echo "Obwód= " . (4*$bok) . "<br>";
        echo "Pole= " . ($bok*$bok);
        ?>
        </div>

        <div id="Kolo" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Promień</p>
        <input type="text" name="promien" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $promien = $_POST['promien'];

        echo "Obwód= " . (2*(M_PI*$promien)) . "<br>";
        echo "Pole= " . (M_PI*($promien*$promien));
        ?>
        </div>

        <div id="Prostokat" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku a</p>
        <input type="text" name="boka" size="10">
        <p>Podaj Długość Boku b</p>
        <input type="text" name="bokb" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $boka = $_POST['boka'];
        $bokb = $_POST['bokb'];

        echo "Obwód= " . ((2*$boka)+(2*$bokb)) . "<br>";
        echo "Pole= " . ($boka*$bokb);
        ?>
        </div>

        <div id="Rownoleglobok" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku a</p>
        <input type="text" name="boka" size="10">
        <p>Podaj Długość Boku b</p>
        <input type="text" name="bokb" size="10">
        <p>Podaj Wysokość</p>
        <input type="text" name="wysokosc" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $boka = $_POST['boka'];
        $bokb = $_POST['bokb'];
        $wysokosc = $_POST['wysokosc'];

        echo "Obwód= " . ((2*$boka)+(2*$bokb)) . "<br>";
        echo "Pole= " . ($boka*$wysokosc);
        ?>
        </div>

        <div id="Trojkat2" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku a</p>
        <input type="text" name="boka" size="10">
        <p>Podaj Długość Boku b</p>
        <input type="text" name="bokb" size="10">
        <p>Podaj Długość Boku c</p>
        <input type="text" name="bokc" size="10">
        <p>Podaj Wysokość</p>
        <input type="text" name="wysokosc" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $boka = $_POST['boka'];
        $bokb = $_POST['bokb'];
        $bokc = $_POST['bokc'];
        $wysokosc = $_POST['wysokosc'];

        echo "Obwód= " . ($boka+$bokb+$bokc) . "<br>";
        echo "Pole= " . (($boka*$wysokosc)/2);
        ?>
        </div>

        <div id="Trapez" class="tabcontent">
        <form method="POST" action="">
        <p>Podaj Długość Boku a</p>
        <input type="text" name="boka" size="10">
        <p>Podaj Długość Boku b</p>
        <input type="text" name="bokb" size="10">
        <p>Podaj Długość Boku c</p>
        <input type="text" name="bokc" size="10">
        <p>Podaj Długość Boku d</p>
        <input type="text" name="bokd" size="10">
        <p>Podaj Wysokość</p>
        <input type="text" name="wysokosc" size="10">
        <input type="submit" value="Oblicz">
        </form>
        <?php
        $boka = $_POST['boka'];
        $bokb = $_POST['bokb'];
        $bokc = $_POST['bokc'];
        $bokd = $_POST['bokd'];
        $wysokosc = $_POST['wysokosc'];

        echo "Obwód= " . ($boka+$bokb+$bokc+$bokd) . "<br>";
        echo "Pole= " . ((($boka+$bokb)*$wysokosc)/2);
        ?>
        </div>
      

  </div>
</div>

    


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
</body>
</html> 

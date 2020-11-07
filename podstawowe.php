<html>
    
<head>
    
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head> 
<body>
    
<div id="menuTop"></div>
    
<div class="hero-image">
  <div class="hero-text">
    <form method="POST" action="">
    <input type="text" name="liczba1" size="10">
    <select name="znak">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
    </select>
    <input type="text" name="liczba2" size="10">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $znak = $_POST['znak'];
    switch ($znak)
    {
     case "+":
       echo "<strong>WYNIK DODAWANIA: </strong>" . $liczba1 . " + " . $liczba2 . " = " . ($liczba1+$liczba2);
       break;
     case "-":
       echo "<strong>WYNIK ODEJMOWANIA: </strong>" . $liczba1 . " - " . $liczba2 . " = " . ($liczba1-$liczba2);
       break;
     case "*":
       echo "<strong>WYNIK MNOŻENIA: </strong>" . $liczba1 . " * " . $liczba2 . " = " . ($liczba1*$liczba2);
       break;
     case "/":
       echo "<strong>WYNIK DZIELENIA: </strong>" . $liczba1 . " / " . $liczba2 . " = " . ($liczba1/$liczba2);
       break;
    }
    ?>
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
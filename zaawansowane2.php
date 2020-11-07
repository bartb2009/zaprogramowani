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
    <h4>!!!UWAGA!!! - przy wpisywaniu liczb do zaokrąglenia wyżywaj KROPKI "." ZAMIAST PRZECINKA ","</h4>
    <input type="text" name="liczba1" size="10">
    <input type="text" name="liczba2" size="10">
    <select name="znak">
    <option>potega</option>
    <option>zaokraglanie</option>
    </select>
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $znak = $_POST['znak'];
    switch ($znak)
    {
     case "potega":
       echo $liczba1 . " <strong>DO POTĘGI </strong>" . $liczba2 . " = " . (pow($liczba1, $liczba2));
       break;
     case "zaokraglanie":
       echo "<strong>ZAOKRĄGLANIE DO</strong> " . $liczba2 . " miejsc po przecinku = " . (round($liczba1, $liczba2));
       break;
    }
    ?>
    
  </div>
</div>
<a href="index.php"><button>Menu Obliczatora</button></a>
</body>
    
     <script>
 $(document).ready(function(){
   
   $('#menuTop').load("menuTop.html");

});   
</script>
</html>
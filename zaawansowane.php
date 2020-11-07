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
    <option>kwadrat</option>
    <option>szczescian</option>
    <option>pierwiastek</option>
    </select>
    <input type="submit" value="Oblicz">
    </form>
    <?php
    $liczba1 = $_POST['liczba1'];
    $znak = $_POST['znak'];
    switch ($znak)
    {
     case "kwadrat":
       echo "<strong>KWADRAT Z: </strong>" . ($liczba1) . " = " . ($liczba1*$liczba1);
       break;
     case "szczescian":
       echo "<strong>SZEŚCIAN Z: </strong>" . ($liczba1) . " = " . ($liczba1*$liczba1*$liczba1);
       break;
     case "pierwiastek":
       echo "<strong>PIERWIASTEK Z: </strong>" . ($liczba1) . " = " . (sqrt($liczba1));
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
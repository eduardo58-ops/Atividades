 <?php 
    if(empty($_POST["n1"] || $_POST["n2"] || $_POST["n3"])){
      echo "Lançe todas as notas para o calculo";
      echo "<br><a href=\"index.php\">Novo calculo da média</a>";
      exit;
      
    }

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $m = ($n1 + $n2 + $n3)/3;
     
    if ($m>=7 ){
      echo "<h1>Aprovado: " .$m."</h1>";
    }else{
      echo "<h1>Infelizmente te falta QI sua nota é ".$m.", por favor não reproduza!<br>
        A humanidade agradece!</h1>";
    }    
?>
<a href="index.php">Novo calculo</a>
 <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

  $m = ($n1 + $n2+ $n3)/3;

  if ($m>=7) {
  echo "Passou de ano!";
  
  }else {
    echo "Reprovado";
  }

?>
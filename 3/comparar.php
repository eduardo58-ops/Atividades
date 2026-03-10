 <?php
     if ($_SERVER["request_method"] =="post") {
    $n1 = $_POST['N1'] ?? null;
    $n2 = $_POST['N2'] ?? null;
    $n3 = $_POST['N3'] ?? null;
     }
    if (!is_numeric($n1) || !is_numeric($n2) || !is_numeric($n3)) {

        echo "Insira suas notas";
      exit;
    }
?>
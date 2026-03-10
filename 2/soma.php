 <?php
     if ($_SERVER["request_method"] =="post"){
    $n1 = $_POST['N1'] ?? null;
    $n2 = $_POST['N2'] ?? null;

    if (!is_numeric($n1) || !is_numeric($n2)) {

        echo "Insira apenas numeros.";
        exit;
    }

    $soma = $n1 + $n2;
    echo "a soma de $n1 e $n2 é: $soma";

     }

    ?>
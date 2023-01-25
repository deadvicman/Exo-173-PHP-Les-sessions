<?php

if (isset($_POST['color'])){
    $color = $_POST['color'];
    echo "Vous avez choisi du :  " . $color;
    echo "<body style='background-color: $color;'>";
    $_SESSION['color'] = $color;
}
else{
    echo 'Aucune couleur a été choisie';
}
?>

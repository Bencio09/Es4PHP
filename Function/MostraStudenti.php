<?php
    $materie = array();
    $nominativo = "";
    $genere = "";
    $genere2 = "";

    echo var_dump($_GET);
   
    if (isset($_GET["name2"])) {
        $nominativo = $_GET["name"]. " " .$_GET["name2"]. " " .$_GET["surname"];
    }elseif (!isset($_GET["name2"])) {
        $nominativo = $_GET["name"]. " " .$_GET["surname"];
    }
    


    if ($_GET["gender"] == "M"){
        $genere = "o";
        $genere2 = "e ";
    }elseif($_GET["gender"] == "F"){
        $genere = "a";
        $genere2 = "essa ";
    }
    if (!isset($_SESSION["DATI"])){
        $_SESSION["DATI"] = "";
    }
    $count = 0;
    $materie2 = "";
    if(isset($_GET["ita"])){
        $count++;
        $materie2= $materie2.$_GET["ita"];
        
    }elseif(isset($_GET["mate"])){
        $count++;
        $materie2= $materie2.$_GET["mate"];
     
    }elseif(isset($_GET["tel"])){
        $count++;
        $materie2= $materie2.$_GET["tel"];
       
    }elseif(isset($_GET["inf"])){
        $count++;
        $materie2= $materie2.$_GET["inf"];
       
    }elseif(isset($_GET["tpsit"])){
        $count++;
        $materie2= $materie2.$_GET["tpsit"];
       
    }elseif(isset($_GET["sist&reti"])){
        $count++;
        $materie2= $materie2.$_GET["sist&reti"];
        
    }elseif(isset($_GET["ing"])){
        $count++;
        $materie2= $materie2.$_GET["ing"];
        
    }
    if($count >= 3){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " è stat" . $genere . " non ammess" . $genere. '/n';
    }elseif($count <= 2){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " è stat" . $genere . " ammess" . $genere . " con debito in " . $materie2;
    }elseif($count == 0){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " è stat" . $genere . " ammess" . $genere;
    }

    $_SESSION["DATI"] = $_SESSION["DATI"] . $dati;

        echo $_SESSION["DATI"];
    
?>


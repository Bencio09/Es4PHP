<?php
    error_reporting(E_ALL & ~E_WARNING);
    $nominativo = "";
    $genere = "";
    $genere2 = "";

    echo var_dump($_SESSION);
   
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
    $materie = "";
    if(isset($_GET["ita"])){
        $count++;
        $materie= $materie.$_GET["ita"];
      
    }
    if(isset($_GET["mate"])){
        $count++;
        $materie= $materie.$_GET["mate"];
     
    }
    if(isset($_GET["tel"])){
        $count++;
        $materie= $materie.$_GET["tel"];
       
    }
    if(isset($_GET["inf"])){
        $count++;
        $materie= $materie.$_GET["inf"];
       
    }
    if(isset($_GET["tpsit"])){
        $count++;
        $materie= $materie.$_GET["tpsit"];
       
    }
    if(isset($_GET["sist&reti"])){
        $count++;
        $materie= $materie.$_GET["sist&reti"];
        
    }
    if(isset($_GET["ing"])){
        $count++;
        $materie= $materie.$_GET["ing"];
        
    }

    if($count >= 3){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " non è stat" . $genere . " ammess" . $genere;
        echo "<br>";
    }elseif($count <= 2){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " è stat" . $genere . " ammess" . $genere . " con debito in " . $materie;
        echo "<br>";
    }elseif($count == 0){
        $dati = "L" . $genere . " student" . $genere2 . $nominativo . " è stat" . $genere . " ammess" . $genere;
        echo "<br>";
    }

    $_SESSION["DATI"] = $_SESSION["DATI"] . $dati;


    echo "
        <div class='container' id='ins' style='margin-top: 10%;'>
            $_SESSION[DATI]
            <button type='button' class='btn btn-success' href='../Index.php'>Esito Finale</button>
        </div>

    ";
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            error_reporting(E_ALL & ~E_WARNING);
        ?>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/MyStyle.css">
        
    </head>
    <body>
        <div class="container" id="ins" style="margin-top: 10%;">
            <?php
                echo "
                    <form action=$_SERVER[PHP_SELF] method='GET'>
                        <div style='margin-left: 25%;'>
                            <table>
                                <tr>
                                    <th style='border: 15px solid transparent;'><label>NOME: </label></th>
                                    <th style='border: 15px solid transparent;'><input type='text' required name='name' value=''></th>
                                </tr>
                                <br>
                                <tr>
                                    <th style='border: 15px solid transparent;'><label>SECONDO NOME: </label></th>
                                    <th style='border: 15px solid transparent;'><input type='text' name='name2' value=''></th>
                                </tr>
                                <br>
                                <tr>
                                    <th style='border: 15px solid transparent;'><label>COGNOME: </label></th>
                                    <th style='border: 15px solid transparent;'><input type='text' name='surname'required value=''></th>
                                </tr>
                                <br>
                                <br>
                            </table>
                        </div>
                        <div style='margin-left: 25%;'>
                            <table>
                                <tr>
                                    <th style='border: 15px solid transparent;'><input type='radio' name='male'> MASCHIO</th>
                                </tr>
                                <tr>
                                    <th style='border: 15px solid transparent;'><input type='radio' name='female'> FEMMINA</th>
                                </tr>
                            </table>
                        </div>
                        <div style='margin-left: 12.5%;'>
                            <table>
                                <tr>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='ita'> ITALIANO</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='mate'> MATEMATICA</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='inf'> INFORMATICA</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='tel'> TELECOMUNICAZIONI</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='ing'> INGLESE</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='tpsit'> TPSIT</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='sist&reti'> SISTEMI E RETI</th>
                                </tr>
                            </table>
                        </div>
                        <div  style='margin-left: 45%; padding-bottom: 3%;'>
                        <input class='btn-primary' style='border-radius: 5px;' type='submit' value='Esito Scrutinio'>
                        </div>
                    </form>
                ";
                $materie = array();
                $nominativo = array();
                //echo var_dump($_GET);
                if (isset($_GET["name2"])) {
                    $nominativo = $_GET["name"]. " " .$_GET["name2"]. " " .$_GET["surname"];
                }elseif (!isset($_GET["name2"])) {
                    $nominativo = $_GET["name"]. " " .$_GET["surname"];
                }
                
                
                if(isset($_GET["ita"])){
                    $materie[$_GET["ita"]];
                }elseif(isset($_GET["mate"])){
                    $materie[$_GET["mate"]];
                }elseif(isset($_GET["tel"])){
                    $materie[$_GET["tel"]];
                }elseif(isset($_GET["inf"])){
                    $materie[$_GET["inf"]];
                }elseif(isset($_GET["tpsit"])){
                    $materie[$_GET["tpsit"]];
                }elseif(isset($_GET["sist&reti"])){
                    $materie[$_GET["sist&reti"]];
                }elseif(isset($_GET["ing"])){
                    $materie[$_GET["ing"]];
                }
                if(count($materie) >= 3){
                    if (isset($_GET["male"])) {
                        $studenti[$nominativo] = " non ammesso";
                    }elseif(isset($_GET["female"])){
                        $studenti[$nominativo] = " non ammessa";
                    }
                }elseif(count($materie) <= 2){
                    if (isset($_GET["male"])) {
                        $studenti[$nominativo] = " ammesso";
                    }elseif(isset($_GET["female"])){
                        $studenti[$nominativo] = " ammessa";
                    }
                }
            ?>
            
        </div>
    </body>
</html>
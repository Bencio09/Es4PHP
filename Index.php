<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start()
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
                                    <th style='border: 15px solid transparent;'><input type='text' required name='name'></th>
                                </tr>
                                <br>
                                <tr>
                                    <th style='border: 15px solid transparent;'><label>SECONDO NOME: </label></th>
                                    <th style='border: 15px solid transparent;'><input type='text' name='name2'></th>
                                </tr>
                                <br>
                                <tr>
                                    <th style='border: 15px solid transparent;'><label>COGNOME: </label></th>
                                    <th style='border: 15px solid transparent;'><input type='text' name='surname'required></th>
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
                $studenti[$nominativo];
                $nominativo = $_GET["name"]." ".$_GET["surname"];
                $nMaterie[]//deve inserire le materie nell'array
                if(){
                    
                }
            ?>
            
        </div>
    </body>
</html>
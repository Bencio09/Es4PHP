<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            //error_reporting(E_ALL & ~E_WARNING);
        ?>
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/MyStyle.css">
        
    </head>
    <body>
        <div class="container" id="ins" style="margin-top: 10%;">
                    <form action='./Function/MostraStudenti.php' method='GET'>
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
                                    <th style='border: 15px solid transparent;'><input type='radio' name='gender' value='M'> MASCHIO</th>
                                </tr>
                                <tr>
                                    <th style='border: 15px solid transparent;'><input type='radio' name='gender' value='F'> FEMMINA</th>
                                </tr>
                            </table>
                        </div>
                        <div style='margin-left: 12.5%;'>
                            <table>
                                <tr>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='ita' value='Italiano'> ITALIANO</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='mate' value='Matematica'> MATEMATICA</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='inf' value='Informatica'> INFORMATICA</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='tel' value='Telecomunicazioni'> TELECOMUNICAZIONI</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='ing' value='Inglese'> INGLESE</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='tpsit' value='TPSIT'> TPSIT</th>
                                    <th style='border: 15px solid transparent;'><input type='checkbox' name='sist&reti' value='Sistemi e Reti'> SISTEMI E RETI</th>
                                </tr>
                            </table>
                        </div>
                        <div  style='margin-left: 45%; padding-bottom: 3%;'>
                        <input class='btn-primary' style='border-radius: 5px;' type='submit' value='Esito Scrutinio'>
                        </div>
                    </form>
        </div>
    </body>
</html>
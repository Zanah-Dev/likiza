<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2021 DBota
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/BotaDiana/likiza
 * @since         1.0.0
 */
?>
<html lang="pl">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        {Firstname} {Lastname}, <br />
        <br />
        Twój wniosek o nadgodziny został zatwierdzony. Poniżej, detale:
        <table border="0">
            <tr>
                <td>Data &nbsp;</td><td>{Date}</td>
            </tr>
            <tr>
                <td>Czas trwania &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Przyczyna &nbsp;</td><td>{Cause}</td>
            </tr>
        </table>
        <hr>
        <h5>*** Ta wiadomość została wygenerowana automatycznie, prosimy nie odpowiadać na tę wiadomość ***</h5>
    </body>
</html>

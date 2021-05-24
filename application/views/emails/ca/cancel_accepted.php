<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2021 DBota
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/BotaDiana/likiza
 * @since      0.6.1
 */
?>
<html lang="ca">
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
        Benvolgut/da {Firstname} {Lastname}, <br />
        <br />
        <p>La teva petició de cancel·lació s'ha acceptat i la petició d'absència s'ha cancel·lat.</p>
        <table border="0">
            <tr>
                <td>Des de &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>Fins &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Tipus &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Motiu &nbsp;</td><td>{Cause}</td>
            </tr>
            <tr>
                <td>Darrer comentari &nbsp;</td><td>{Comments}</td>
            </tr>
        </table>
        <hr>
        <h5>*** Això és um missatge generat automàticament, si us plau no responguis a aquest missage ***</h5>
    </body>
</html>

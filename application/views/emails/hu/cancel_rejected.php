<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2021 DBota
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/BotaDiana/likiza
 * @since      0.6.1
 */
?>
<html lang="hu">
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
        Kedves {Lastname} {Firstname}, <br />
        <br />
        <p>Sajnos a törlési kérelmedet nem hagyták jóvá. A szabadság kérelmed jelenleg az eredeti Elfogadott állapotban van.</p>
        <p>Kérlek keresd meg a vezetődet/felettesedet ezzel kapcsolatosan.</p>
        <table border="0">
            <tr>
                <td colspan="2">{StartDate}-tól&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td colspan="2">{EndDate}-ig&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Típus &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Ok &nbsp;</td><td>{Cause}</td>
            </tr>
            <tr>
                <td>Utolsó hozzászólás &nbsp;</td><td>{Comments}</td>
            </tr>
        </table>
        <hr>
        <h5>*** Ez egy automatikus üzenet, kérlek ne válaszolj rá ***</h5>
    </body>
</html>

<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2021 DBota
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/BotaDiana/likiza
 * @since         1.0.0
 */
?>
<html lang="tr">
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
        {Firstname} {Lastname}, talep edilen bir izin süresini iptal etti. Aşağıdaki <a href="{BaseUrl}leaves/{LeaveId}">detaylara</a> bakınız:<br />
        <table border="0">
            <tr>
                <td>x itibariyle &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>x tarihine kadar&nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Tür &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Süre &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Bakiye &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Neden &nbsp;</td><td>{Reason}</td>
            </tr>
            <tr>
                <td>Son Yorum &nbsp;</td><td>{Comments}</td>
            </tr>
            <tr>
                <td><a href="{BaseUrl}requests/cancellation/accept/{LeaveId}">İptal işlemini onayla</a> &nbsp;</td>
                <td><a href="{BaseUrl}requests?cancel_rejected={LeaveId}">İptal işlemini reddet</a></td>
            </tr>
        </table>
        <br />
        <p>İzin talebini doğrulamadan önce <a href="{BaseUrl}hr/counters/collaborators/{UserId}">izin süreci bakiyesini</a> kontrol edebilirsiniz.</p>
        <hr>
        <h5>*** Bu otomatik olarak oluşturulmuş bir mesajdır, lütfen bu mesaja cevap vermeyin ***</h5>
    </body>
</html>

<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bbalet/jorani
 * @since         0.1.0
 */
?>
<html lang="ar">
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
        <p><a href="{BaseURL}"> يرجى استخدام هذه المعلومات الغرض الولوج الى النظام.</a></p>
        <table border="0">
            <tr>
                <td>الدخول</td><td>{Login}</td>
            </tr>
            <tr>
                <td>كلمة المرور</td><td>{Password}</td>
            </tr>
        </table>
        <p><a href="http://jorani.org/how-to-change-my-password.html" title="Link to documentation" target="_blank">حال تأمين الإتصال، يمكنك تغيير كلمة المرور، وكما مبين هنا.</a></p>
        <hr>
        <h5>*** هذه الرسالة كتبت اوتوماتيكياً، يرجى عدم الإجابة عليها ***</h5>
    </body>
</html>

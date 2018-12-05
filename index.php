<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php 
$str='sandi';
$strleng= strlen($str)-1;
$revstr='';
for($i=$strleng;$i>=0;$i--)
{
 $revstr.=$str[$i];
}
if($revstr==$str)
{
    echo 'plindrome';
}
 else {
    echo 'not palindrome';    
}

?> 


    </body>
</html>

<?php

// mail($to,$subject,$message);

$result = mail("webmaster@weber.am","Թեստային նամակ","Կայքից ստացված տվյալներ՝ \r\nԱնուն - ".$_POST['name'].", \r\nԳաղտնաբառ - ".$_POST['pass'].", \r\nԱրդյո՞ք թանկ է ժամանակը Ձեզ համար - ".$_POST['time'].", \r\nՔանի՞ ժամ եք աշխատում օրվա մեջ - ".$_POST['worktime']." ժամ, \r\nՆամակ - ".$_POST['message']."");

if ($result) {
    echo 'Նամակը հաջողությամբ ուղարկված է';
} else {
    echo 'Նամակը չի ուղարկվել';
}

?>

<?php

//function __autoload($class)
//{
//    require __DIR__."/".str_replace('\\','/',$class).'.php';
//}
use App\Models\HasEmail;
use App\Models\User;
require __DIR__.'/autoload.php';

$users=User::findAll();

//$res=$db->execute('CREATE TABLE foo (id SERIAL)');
function sendEmail(\App\Model $user, string $message)
{
    echo 'The message is sent to '.$user->email;
}

sendEmail($users[0],'Hello');

//echo '<pre>'.print_r($users,1).'</pre>';
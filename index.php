<?php

//function __autoload($class)
//{
//    require __DIR__."/".str_replace('\\','/',$class).'.php';
//}
//use App\Models\User; //First case
//use App\Model;    //For using parent class
use App\Models\HasEmail; //For using interface
use App\Models\User;

require __DIR__.'/autoload.php';

$users=User::findAll();

//$res=$db->execute('CREATE TABLE foo (id SERIAL)');
echo '<pre>'.print_r($users,1).'</pre>';


//function sendMail(User $user, string $message) //class
//function sendMail(Model $user, string $message) //Parent class Model
function sendMail(App\Models\HasEmail $user, string $message) //Interface
{
    echo 'The message is sent to '.$user->email;
}



sendMail($users[0],'Hello'); //Success!
//sendMail('test@mail.ru','Hello'); //Fatal error! (Because the first argument must be class type, but not a string)

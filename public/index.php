<?php 
use app\database\entity\UserEntity;
use app\database\model\User;

require "../app/database/Connection.php";

require '../vendor/autoload.php';
//require __DIR__ . '/../vendor/autoload.php';

    $user = new User;
    $userEntity = new UserEntity;
    $userEntity->firstName = 'Jean Neptalia';
    $userEntity->lastName = 'Dabady';
    $userEntity->email = 'JeanNeptalia@gmail.com.br';
    $userEntity->setPasswordHash('1234');
    $user->create($userEntity);
    //$users =  $user->all('id,firstName, lastName, email');
   // print_r($users)  ;
    //var_dump($users)  ;


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($users as $user):  ?>
        <li>
            <?php echo $user->firstName; ?>
            <?php echo $user->lastName; ?>
            ------
            <?php if($user->emailIsValid()): ?>
                <?php echo $user->email; ?>
            <?php else: ?>
                email invalid
            <?php  endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html> -->
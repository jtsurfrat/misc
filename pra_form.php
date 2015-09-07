<?php 


//login form, post
//first name required & lastname required , gender, state
//post back to 
//password hst to be 10 characters and last 2 have to be numbers
//if pass is invalid echo invalid echo invalid password
// array of username with a password 

// john smith   abcdefg12
// suzan stuff  duckduc222
// mark mark    baconbacon12

// if seccessullf login, echo welcome name, you are male or female

$username_array = ["John Smith" => "abcdefg12",
                "Suzan_Stuff" => "duckduc222",
                "mark_mark"  => "baconbacon12"
                ];

$username = '';
$message = '';

if(isset($_GET['username'])){
    $username = $_GET['username'];
    $message .= $username;
}

if(isset($_GET['password'])){
    $password = $_GET['password'];
    echo $password;
}
if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
    echo $gender;
}


// ***********************************************************************
//   checks username matches password
//// ***********************************************************************


if(isset($_GET['username']) && isset($_GET['password'])){
    if(array_key_exists($_GET['username'], $username_array)){
        if($username_array[$_GET['username']] == $_GET['password']){
            continue;
        } else {
            echo "password doesn't match";
        }
    } else {
        echo "username doesn't exist";
    }
}
$opt = '';
$states = ['bacon', 'az', 'ca'];

foreach($states as $state){
    $opt .= "<option>$state</option>";
}
if(isset($_GET['states'])){
    $this_state = $_GET['states'];
    echo $this_state;
}
// if array key exits
// if value in form == array key


// if(array_key_exists($_GET['username'], $username_array)){
//     if($username_array['key'] == $_GET['password']){
//         echo "dog";
//     }
// }

// if(array_key_exists($_GET['username'], $username_array)){
//     if($username_array[$_GET['username']] == $_GET['password']){
//         echo "dog";
//     } elseif($username_array[$_GET['username']] != $_GET['password']) {
//         echo "Password doesn't match username";
//     }
// }


// if(array_key_exists($_GET['username'], $username_array)){
//     if($username_array['key'] == $_GET['password']){
//         echo "dog";
//     }
// }




 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <form action="pra_form.php" method="GET">
         <label>Username: <input type="text" name="username"></label>
         <label>Password: <input type="text" name="password"></label>
         <label>Female: <input type="radio" name="gender" value="female"></label>
         <label>Male: <input type="radio" name="gender" value="male"></label>
         <select name="states">
             <?= $opt;?>
         </select>
          <input type="submit" value="submit">

        </form>
        <?= $message ;?>
        
    </body>
</html>
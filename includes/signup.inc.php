<?php

// if (isset($_POST["submit"])) {

//     $FirstName = $_POST["FirstName"];
//     $LastName = $_POST["LastName"];
//     $Email = $_POST["Email"];
//     $tel = $_POST["Tel"];
//     $Passdwd = $_POST["Passdwd"];


//     require_once 'conn.inc.php';
//     require_once 'function.inc.php';

//     if (emptyInputSignup($FirstName, $LastName, $Email, $tel, $Passdwd) !== true) {
//         header("location: ../signup.php?error=emtyinput");
//         exit();
//     }
//     if (invalidFirstName($FirstName) !== false) {
//         header("location: ../signup.php?error=invalidFirstName");
//         exit();
//     }
//     if (invalidLastName($LastName) !== false) {
//         header("location: ../signup.php?error=invalidLastName");
//         exit();
//     }
//     if (invalidtel($tel) !== false) {
//         header("location: ../signup.php?error=invalidtel");
//         exit();
//     }
//     if (invalidEmail($Email) !== false) {
//         header("location: ../signup.php?error=invalidEmail");
//         exit();
//     }
//     if (invalidpassword($passdrd) !== false) {
//         header("location: ../signup.php?error=invalidpassword");
//         exit();
//     }
//     if (EmailExists($Email, $Email) !== false) {
//         header("location: ../signup.php?error=Emailtaken");
//         exit();
//     }

//     createUser($conn, $FirstName, $LastName, $Email, $tel, $Passdwd);
    

// } else {
//     header("location: ../signup.php");
//     exit();
// }

<?php


// function emptyInputSignup($FirstName, $LastName, $Email, $Tel, $Passdwd)
// {
//     if (empty($FirstName) || empty($LastName) || empty($Email) || empty($Tel) || empty($Passdwd)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function invalidFirstName($FirstName)
// {
//     if (!preg_match("/^[a-zA-Z0-9]*$/", $FirstName)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function invalidLastName($LastName)
// {
//     if (!preg_match("/^[a-zA-Z0-9]*$/", $LastName)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function invalidtel($Tel)
// {
//     if (!preg_match("/^[0-9]*$/", $Tel)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function invalidEmail($Email)
// {
//     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function invalidpassword($Passdwd)
// {
//     if (!preg_match(("/^[a-zA-Z0-9]{8,]$/"), $Passdwd)) {
//         $result = true;
//     } else {
//         $result = false;
//     }
//     return $result;
// }

// function EmailExists($conn, $Email)
// {
//     $sql = "SELECT * FROM perssonel WHERE Email = ?;";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../signup.php?error=Emailtaken");
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "s", $Email);
//     mysqli_stmt_execute($stmt);

//     $resultData = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($resultData)) {
//         return $row;
//     } else {
//         $result = false;
//         return $result;
//     }

//     mysqli_stmt_close($stmt);
// }

// function createUser($conn, $FirstName, $LastName, $Email, $tel, $passwrd)
// {
//     $sql = "INSERT INTO perssonel (FirstName, LastName, Email, tel, passwrd) VALUES (?, ?, ?, ?, ?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../signup.php?error=Emailtaken");
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "sssss", $FirstName, $LastName, $Email, $tel, $passwrd);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("location: ../signup.php?error=none");
//     exit();
// }

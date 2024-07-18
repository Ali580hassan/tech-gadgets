<?php

// Connect to the database
$connect = mysqli_connect("localhost", "root", "", "tech");

if ($connect === false) {
    die("Error in connection: " . mysqli_connect_error());
} else {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $message= "your request is submit";
    // Prepare an SQL statement
    $form = "INSERT INTO `tech gadgets` (`id`, `username`, `email`, `password`, `phone`) VALUES (NULL, '$username', '$email', '$password', '$phone')";

    // Execute the SQL statement
    if (mysqli_query($connect, $form)) {
        // header("location:index.html");
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "Error: " . $form . "<br>" . mysqli_error($connect);
    }

    // Close the database connection
    mysqli_close($connect);
}

?>

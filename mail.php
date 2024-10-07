<?php



if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "These are the datebtat the user submitted:";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $message

    header("Location: ../index.html");
}
else{
    header("Location: ../index.html");
} 
}

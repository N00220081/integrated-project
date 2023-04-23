<?php
require "../etc/config.php";

try {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if(!$_SERVER['REQUEST_METHOD'] === "POST") {
        throw new Exception("Invalid request");
    }

    $data = $_POST;

    $validator = new StoryValidator($data);
    $imageRequired = true;
    $valid = $validator->validate($imageRequired);

    if(!$valid) {
        $errors = $validator->errors();

        $_SESSION["form-data"] = $data;
        $_SESSION["form-errors"] = $errors;

        header("Location: story_create.php");
    }
    else {
        echo "Form data is valid";
    }
}
catch (Exception $e) {
    die('Caught exception: ' $e->getMessage());
}
?>
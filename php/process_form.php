<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);

    // Process the form data as needed
    // For demonstration purposes, let's just display the submitted data
    echo "Name: $name<br>";
    echo "Phone: $phone<br>";

    // You can add more processing logic here, such as saving to a database

    // Display a success message
    echo "Form Submitted Successfully!";
}
?>

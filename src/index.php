<?php
function sanitize_input($input) {
    $sanitized_input = htmlspecialchars($input);
    $sanitized_input = trim($sanitized_input);
    $sanitized_input = stripslashes($sanitized_input);

    return $sanitized_input;
}

function validate_name($input) {
    if (strlen($input) > 100) {
        return "Invalid format: Name too long";
    }

    return $input;
}

function validate_email($input) {

}

function validate_subject($input) {

}

function validate_message($input) {

}

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    echo sanitize_input($_POST["name"]);
}
?>

<html>
    <body>
        <form action="index.php" method="post">
            <label>Name:</label>
            <input type="text" name="name">

            <label>Email:</label>
            <input type="email" name="email">

            <label>Subject:</label>
            <input type="text" name="subject">

            <label>Message:</label>
            <textarea cols="20" rows="5" name="message"></textarea>

            <button type=submit>Submit the form</button>

        </form>
    </body>
</html>
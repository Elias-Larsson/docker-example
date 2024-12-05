<?php
function sanitize_input($input)
{
    $sanitized_input = htmlspecialchars($input);
    $sanitized_input = trim($sanitized_input);
    $sanitized_input = stripslashes($sanitized_input);

    return $sanitized_input;
}

function validate_name($input)
{
    if (strlen($input) > 100) {
        return "Invalid format: Name too long";
    }

    return $input;
}

function validate_email($input) {}

function validate_subject($input) {}

function validate_message($input) {}

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
    echo sanitize_input($_POST["name"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <main>
        <aside>
            <h1>Menu</h1>
            <ul>
                <li class="list">Lista1</li>
                <li class="list">Lista1</li>
                <li class="list">Lista1</li>
            </ul>
        </aside>

        <section>
            <div class="taskItem">
                <p>task</p>
            </div>
            <div class="taskItem">
                <p>task</p>
            </div>
        </section>

    </main>
</body>

</html>
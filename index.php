<?php // VALIDATION class

// Step 1 - check if user's data has been submitted
if (isset($_POST['submit'])) {
    //check if the POST request for the submit button has been set
    // when the button is submit, it will send its value 'submit' to $_POST[value]
    // then if(isset()) will be true
    // this is validating entries
    echo 'Form submitted';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorial</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <!-- when you submit this form it will submit to current file -->
            <label>Username:</label>
            <input type="text" name="username">
            <label>Email:</label>
            <input type="text" name="email">
            <input type="submit" value="submit" name="submit">
        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Club</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color:#BB8FCE;">
    <div class="container">
        <h2>Login Club</h2>
        <div class="form-container">
            <form action="process_login.php" method="post">
                <div class="input-container">
                    <div class="input-name">
                        <input type="text" name="student_code" placeholder="Student ID" class="text-name">
                    </div>

                    <div class="input-name">
                        <input type="password" name="pass" placeholder="Password" class="text-name">
                    </div>
                </div>

                <div class="button-container">
                    <input type="submit"  value="Login" class="button" onclick="location.href='./saruul/index.php';" name="login">
                    <input type="button" value="Cancel" class="button" onclick="location.href='index.html';" >
                </div>
            </form>
        </div>
    </div>
</body>

</html>

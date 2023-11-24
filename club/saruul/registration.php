<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iuu.duguilan.mn</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validateForm() {
            var password = document.forms["registrationForm"]["p"].value;
            var confirmPassword = document.forms["registrationForm"]["cp"].value;

            if (password !== confirmPassword) {
                alert("Password and Confirm Password must match");
                return false;
            }
        }
    </script>
</head>

<body style="background-color:#BB8FCE;">
    <div class="container">
        <h2>Registration Club</h2>
        <div class="form-container">
            <form name="registrationForm" action="process_form.php" method="post" onsubmit="return validateForm()">
                <div class="input-name">
                    <input type="text" name="fname" placeholder="Firstname" class="name">
                </div>

                <div class="input-name">
                    <input type="text" name="lname" placeholder="Lastname" class="name">
                </div>

                <div class="input-name">
                    <select name="kurs" id="kurs">
                        <option value="k1">1 course</option>
                        <option value="k2">2 course</option>
                        <option value="k3">3 course</option>
                        <option value="k4">4 course</option>
                    </select>
                </div>

                <div class="input-name">
                    <select name="merg" id="merg">
                        <option value="Agriculture, General">Agriculture, General</option>
                        <option value="m2">Agribusiness Operations</option>
                        <option value="m3">Agricultural Business & Management</option>
                        <option value="m4">Agricultural Economics</option>
                        <option value="m5">Food Sciences & Technology</option>
                        <option value="m6">Human Resources Management</option>
                        <option value="m7">Marketing Management & Research</option>
                        <option value="m8">Actuarial Science</option>
                        <option value="m9">Machine Tool Technology</option>
                    </select>
                </div>

                <div class="input-name">
                    <input type="text" name="ocode" id="ocode" placeholder="Student id" class="text-name">
                </div>

                <div class="input-name">
                    <input type="password" name="p" placeholder="Password" class="text-name">
                </div>

                <div class="input-name">
                    <input type="password" name="cp" id="cp" placeholder="Confirm password" class="text-name">
                </div>

                <div class="input-name">
                    <input type="submit" name="submit" value="Sign up" class="button">
                    <input type="button" value="Cancel" onclick="location.href='/login.php';" class="button">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

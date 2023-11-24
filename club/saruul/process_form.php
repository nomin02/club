<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $fname = isset($_POST["fname"]) ? mysqli_real_escape_string($conn, $_POST["fname"]) : '';
    $lname = isset($_POST["lname"]) ? mysqli_real_escape_string($conn, $_POST["lname"]) : '';
    $kurs = isset($_POST["kurs"]) ? mysqli_real_escape_string($conn, $_POST["kurs"]) : '';
    $merg = isset($_POST["merg"]) ? mysqli_real_escape_string($conn, $_POST["merg"]) : '';
    $ocode = isset($_POST["ocode"]) ? mysqli_real_escape_string($conn, $_POST["ocode"]) : '';
    $p = isset($_POST["p"]) ? mysqli_real_escape_string($conn, $_POST["p"]) : '';

    // Using prepared statements for better security
    $stmt = $conn->prepare("INSERT INTO student (firstname, lastname, course, class_n, student_code, pass) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fname, $lname, $kurs, $merg, $ocode, $p);

    // Execute the prepared statement
    $stmt->execute();

    if ($stmt->affected_rows > 0) {

        // Display alert message
        echo '<script>alert("Registration successful. Redirecting to login form.");</script>';

        // Redirect to the login form after a short delay
        echo '<script>
                setTimeout(function() {
                    window.location.href = "login.php";
                }, 2000); // 2000 milliseconds (2 seconds) delay
              </script>';
        exit();
    } else {
        // Log errors instead of displaying them to users
        error_log("Error: " . $stmt->error);
        echo "Error: Unable to insert data.";
    }

    $stmt->close();
}

$conn->close();
?>

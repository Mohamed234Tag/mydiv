<?php
if (isset($_POST['user'], $_POST['password'], $_POST['email'])) {
    $user = $_POST['user'];
    $password = $_POST["password"];
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "Error: Invalid email address.";
        exit();
    }

    $conn = new mysqli("localhost", "root", "", "sign-in");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email already exists
   // Check if email already exists
$checkEmailStmt = $conn->prepare("SELECT * FROM `sign-table` WHERE Mail = ?");
$checkEmailStmt->bind_param("s", $email);
$checkEmailStmt->execute();
$checkEmailResult = $checkEmailStmt->get_result();

    if ($checkEmailResult->num_rows > 0) {
        echo "Error: Email address already exists.";
        exit();
    }

    // Insert data using prepared statement
    $stmt = $conn->prepare("INSERT INTO `sign-table` (Name, Mail, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $password);

    if ($stmt->execute()) {
        echo "<h1>Data inserted successfully!</h1>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit();
} else {
    echo "Error: Form data is not set.";
}
?>

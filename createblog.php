<?php
session_start();
include ("connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO blogs (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New blog created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
</head>
<body>

<h2>Create a New Blog</h2>
<form method="post" action="">
    Title: <input type="text" name="title" required><br><br>
    Content: <br><textarea name="content" rows="10" cols="30" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

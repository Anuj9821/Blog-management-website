<?php
session_start();
include ("connect.php");
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <div style="txt-align:center; padding:15%;">

    <p style="font-size:50px; font-weigth:bold;">

    Hello <?php 
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $query=mysqli_query($conn,"SELECT users.* FROM `users` WHERE users.email='$email'");

            while($row=mysqli_fetch_array($query)){
                echo $row['firstName'].''.$row['lastName'];  
            }
        }
    ?>

</p>
<a href="logout.php">Logout</a>
<a href="createblog.php">create</a>
    </div>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <div style="txt-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");

                        while ($row = mysqli_fetch_array($query)) {
                            echo $row['firstName'] . ' ' . $row['lastName'];
                        }
                    }
                    ?>
        </p>
        <a href="logout.php">Logout</a>
        <a href="createblog.php">Create Blog</a>
    </div>

    <div style="margin: 0 auto; width: 80%;">
        <h2>All Blogs</h2>
        <?php
        // Query to fetch all blogs
        $blogs_query = mysqli_query($conn, "SELECT * FROM blogs");

        // Check if there are any blogs
        if (mysqli_num_rows($blogs_query) > 0) {
            // Loop through each blog and display its title and content
            while ($blog_row = mysqli_fetch_array($blogs_query)) {
                echo "<div style='margin-bottom: 20px;'>";
                echo "<h3>" . $blog_row['title'] . "</h3>";
                echo "<p>" . $blog_row['content'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No blogs found.";
        }
        ?>
    </div>

</body>

</html>

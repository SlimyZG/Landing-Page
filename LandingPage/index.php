<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Student Information</h1>
    </div>
    <div class="content">
        <div style="text-align:left;">
            <h3>Student Details:</h3>
            <?php
                $name = "Prince Rennier Philip Pag-awayan";
                $age = 21;
                $course = "BSIT";
                $email = "slimyzg82@gmail.com";
                $contact = "09201971766";
                $profile_img = "profile.jpg";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Age:</strong> $age</p>";
                echo "<p><strong>Course:</strong> $course</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Contact Info:</strong> $contact</p>";
                echo "<img src='$profile_img' alt='Profile Photo' class='profile-img'>";
            ?>
            <a href="contact.php" class="btn" style="margin-top:20px;">Contact Me Here</a>
        </div>
    </div>
</body>
</html>
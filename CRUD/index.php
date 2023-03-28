<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>login form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="scripts/responsive.js"></script>
</head>

<body>
    <div class="container">
        <h1>Sign up to Dashboard</h1>
        <form method="POST"  action="">
        <div class="form-group">
                <label for=""> USER ID</label>
                <input type="text" class="form-control" name="fname" required>
            </div>
        <div class="form-group">
                <label for=""> First name</label>
                <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="form-group">
                <label for=""> Last name</label>
                <input type="text" class="form-control" name="lname" required>
            </div>
            <div class="form-group">
                <label for=""> username</label>
                <input type="text" class="form-control" name="uname" required>
            </div>
            <div class="form-group">
                <label for=""> Email </label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for=""> Intake </label>
                <select id="intake" class="form-control" name="intake">
                    <option value=""></option>
                    <option value="Year 4">Year 4</option>
                    <option value="Year 3">Year 3</option>
                    <option value="January 2022">January 2022</option>
                    <option value="May 2022">May 2022</option>
                    <option value="September 2022">September 2022</option>
                    <option value="January 2023">January 2023</option>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Course of Study </label>
                <select id="course"class="form-control" name="course">
                    <option value=""></option>
                    <option value="IBT">IBT</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Global Challenges">Global Challenges</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="BEL">BEL</option>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Password</label>
                <input type="password" class="form-control" name="pswd" required>
            </div>
            <input type="submit" class="btn" value="submit" name="submit" onclick="alert('Recored successfully!!')"> &nbsp;<input type="reset" class="btn1" value="Reset">
        </form>
    </div>
</body>

</html>
<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $intake = $_POST['intake'];
    $course = $_POST['course'];
    $pswd = $_POST['pswd'];

    $insert_qry = " INSERT INTO users values(null, '$fname', '$lname', '$uname','$email','$intake','$course','$pswd') ";
    $result = $conn -> query($insert_qry);
    if($result){
        header("location: retrieve.php");
        }
    }else{
        echo mysqli_error($conn);
    }
?>
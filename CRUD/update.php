<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>update form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="scripts/responsive.js"></script>
</head>

<body>
    <div class="container">
        <h1>Update Your Information</h1>
        <form method="POST"  action="">
        <div class="form-group">
                <label for=""> First name</label>
                <input type="text" class="form-control" placeholder="" name="fname" required>
            </div>
            <div class="form-group">
                <label for=""> Last name</label>
                <input type="text" class="form-control" placeholder="" name="lname" required>
            </div>
            <div class="form-group">
                <label for=""> username</label>
                <input type="text" class="form-control" placeholder="" name="uname" required>
            </div>
            <div class="form-group">
                <label for=""> Email </label>
                <input type="email" class="form-control" placeholder="" name="email" required>
            </div>
            <div class="form-group">
                <label for=""> Intake </label>
                <select id="intake" class="form-control" placeholder="" name="intake">
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
                <select id="course"class="form-control" placeholder=""name="course">
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
                <input type="password" class="form-control" placeholder="" name="pswd" required>
            </div>
            <input type="submit" class="btn" value="Update" name="submit" onclick="alert('Recored successfully!!')"> &nbsp;<input type="reset" class="btn1" value="Reset">
        </form>
    </div>
</body>

</html>
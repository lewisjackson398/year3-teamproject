<?php
// Initialize the session
require_once('membershipsql.php');
include('makeHeader.php');
include('makeNav.php');
echo makeHeader();
echo makeNav();
?>

<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Membership</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <br><br>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Looking to start a membership?.</h1>
    </div>
    <div class="wrapper">
            <h2>Sign Up</h2>
            <p>Please fill this form to create a membership.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($name_error)) ? 'has-error' : ''; ?>">
                    <label>Name</label>
                    <input type="text" name="complete_name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"><?php echo $name_error; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($contact_erorr)) ? 'has-error' : ''; ?>">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>">
                    <span class="help-block"><?php echo $contact_erorr; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($address_erorr)) ? 'has-error' : ''; ?>">
                    <label>Email Address</label>
                    <input type="email" name="address" class="form-control" value="<?php echo $address; ?>">
                    <span class="help-block"><?php echo $address_erorr; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
</body>

</html>
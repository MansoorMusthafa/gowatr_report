<!DOCTYPE html>
<html lang="en">
<?php require "conn.php"; ?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      rel="icon"
      href="https://aiui-admin.wordpressthemeshub.com/images/favicon.ico"
    />

    <title>AIUI Admin - Log in</title>

    <link rel="stylesheet" href="./css/Login/login.css" />

    <!-- Bootstrap 4.0-->
    <link
      rel="stylesheet"
      href="./assets/vendor_components/bootstrap/dist/css/bootstrap.min.css"
    />

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="./css/bootstrap-extend.css" />

    <!-- Theme style -->
    <link rel="stylesheet" href="./css/master_style.css" />

    <!-- AIUI Admin skins -->
    <link rel="stylesheet" href="./css/skins/_all-skins.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- <body class="hold-transition login-page bg-img" style="background-image:url(../images/error/bg-3.jpg);"> -->
  <body class="hold-transition login-page bg-img login_body">


	
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = isset($_POST["email"]) ? mysqli_real_escape_string($conn, $_POST["email"]) : "";
    $password = isset($_POST["password"]) ? mysqli_real_escape_string($conn, $_POST["password"]) : "";
	$password = md5($password);
    $rememberMe = isset($_POST["remember_me"]) ? $_POST["remember_me"] : "";

    $errors = array();

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (empty($errors)) {
        // Replace with your actual database connection details


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to select user with provided email and password
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
		echo $sql ;
        $stmt = mysqli_query($conn, $sql);
        
		$num_row = mysqli_num_rows($stmt);
        // Check if user exists
        if ($num_row == 1) {
            echo "User authenticated successfully!";
            
            if ($rememberMe == "on") {
                // Set a cookie to remember the user's email for 30 days
                setcookie("remember_user", $email, time() + (86400 * 30), "/");
            }

            // Redirect or perform any other actions after successful validation
             header("Location: index");
            // exit();
        } else {
            echo "Invalid email or password";
        }

        $conn->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

    <div class="container h-p100">
      <div class="row align-items-center justify-content-md-center h-p100">
        <div class="col-lg-4 col-md-8 col-12">
          <div class="login-box rounded ">
            <div class="login-box-body">
              <!-- <h3 class="text-center">Get started with Us</h3>
					<p class="login-box-msg">Sign in to start your session</p> -->
              <div class="img_container d-flex align-items-center justify-content-center"><img src="./assets/Images/GoWatr_logo.png" class="img_logo" /></div>

              <form
                action=""
                method="post"
                class="form-element"
              >
                <div class="form-group has-feedback">
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Email"
                    value="<?php echo isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : ''; ?>"

                  />
                  <!-- <span class="ion ion-email form-control-feedback"></span> -->
                </div>
                <div class="form-group has-feedback">
                  <input
                    type="password"
                    name="password"  
                    class="form-control"
                    placeholder="Password"
                 
                  />
                  <!-- <span class="ion ion-locked form-control-feedback"></span> -->
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="checkbox">
                      <input type="checkbox" name="remember_me" id="basic_checkbox_1" />
                      <label for="basic_checkbox_1">Remember Me</label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-6">
                    <div class="fog-pwd text-right">
                      <!-- <a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br> -->
                      <a href="javascript:void(0)"> Forgot pwd?</a><br />
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-12 text-center">
                    <button
                      type="submit"
                      class="btn btn-info btn-block margin-top-10"
                    >
                      SIGN IN
                    </button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>

              <div class="margin-top-30 text-center">
                <p>
                  Don't have an account?
                  <a href="register" class="text-info m-l-5">Sign Up</a>
                </p>
              </div>
            </div>
            <!-- /.login-box-body -->
          </div>
          <!-- /.login-box -->
        </div>
      </div>
    </div>

    <!-- jQuery 3 -->
    <script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- popper -->
    <script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>

</html>

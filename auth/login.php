<!DOCTYPE html>
<html lang="en">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login | Branches</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <link href="../images/head.jpg" rel="icon" type="image/jpg" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F17945;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .login-card {
            max-width: 600px;
            width: 100%;
        }
      </style>
</head>
<body>

    <div class="container login-container">
        <div class="card login-card">
            <div class="row g-0">
                <div class="col-md-6 card-left d-flex justify-content-center align-items-center">
                    <img src="../images/login.jpg" alt="Logo" class="card-logo">
                </div>
                <div class="col-md-6">
                    <div class="card-body mt-4">
                        <h5 class="card-title text-center fw-bold mt-4">Login</h5>
                        <form action="login-process.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email/Username</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email or username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                        </form>
                        <a href="register.php" class="text-sm">Don't have an account? Register here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascript files-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="../js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>

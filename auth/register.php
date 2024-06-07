<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
    <div class="container register-container">
        <div class="card register-card">
            <div class="row g-0">
                <div class="col-md-6 card-left d-flex justify-content-center align-items-center">
                    <img src="../img/login.jpg" alt="Logo" class="card-logo">
                </div>
                <div class="col-md-6">
                    <div class="card-body mt-4">
                        <h5 class="card-title text-center fw-bold mt-4">REGISTER</h5>
                        <form action="registration-proccess.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Valid Email">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Your Password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3" name="register">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
    <div class="container login-container">
        <div class="card login-card">
            <div class="row g-0">
                <div class="col-md-6 card-left d-flex justify-content-center align-items-center">
                    <img src="../img/login.jpg" alt="Logo" class="card-logo">
                </div>
                <div class="col-md-6">
                    <div class="card-body mt-4">
                        <h5 class="card-title text-center fw-bold mt-4">Login</h5>
                        <form action="login-proccess.php" method="POST">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

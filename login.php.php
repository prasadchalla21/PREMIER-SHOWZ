<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Prevents scrolling on smaller screens */
            font-family: Arial, sans-serif; /* Set a default font family */
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .navbar {
            background-color: transparent !important; /* Make the navbar background transparent */
            margin-bottom: 20px;
            padding: 20px 0; /* Increased padding */
        }

        .navbar-collapse {
            justify-content: center;
        }

        .navbar-nav .nav-item .nav-link {
            color: white !important;
            font-size: 18px; /* Increased font size */
            margin: 10px; /* Increased margin */
        }

        .login-box {
            max-width: 400px;
            padding: 20px;
            border-radius: 5px;
            z-index: 1;
            background: none; /* Remove the background */
            box-shadow: none; /* Remove the box shadow */
        }

        .login-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-logo a {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .login-card-body {
            text-align: center;
        }

        .login-box-msg {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Background Video -->
    <video src="images/blood.mp4" autoplay muted loop></video>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navigation content -->
        <!-- Static navigation items -->
    </nav>

    <!-- Login Box -->
    <div class="login-box">
        <div class="login-logo">
            <a href="./index.php"><b>Patient</b> Login</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to check your results</p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name='patient_id' class="form-control" placeholder="Patient ID" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name='password' class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            <!-- Error message -->
                        </div>
                        <div class="col-12">
                            <a href="register.php" class="btn btn-secondary btn-block">Signup</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

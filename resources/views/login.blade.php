<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);">
    
    <div class="container h-75 d-flex flex-column justify-content-around w-50 border p-3">

        <div class="row g-3 mb-2">
            <h1 class="col-12 display-3 text-center text-dark">Login</h1>
        </div>


        <form class="row g-3" action="" method="post">

            <div class="col-12 mb-2">
                <label for="username" class="form-label text-dark ms-3 fw-bold">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="col-12 mb-2">
                <label for="password" class="form-label text-dark ms-3 fw-bold">Password</label>
                <input type="password" class="form-control" id="password">
            </div>

            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-dark ms-3">Sign in</button>
            </div>

        </form>
    </div>





    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
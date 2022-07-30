<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-success">
    <div class="row">
        <h1 style="font-size: 30px; margin-top: 20px; font-family:cursive;color: white;" class="text-center">Selamat Datang di Website Sistem Informasi Perpustakaan</h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-md-3">
                <div class="card" style="margin-top: 50px;">
                <div class="card-body">
                    <span style="font-size: 25px; font-weight: 500; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Form Login</span>
                    <form action="crud.php" method="POST" style="margin-top: 40px;">
                    <div class="form-group mb-3">
                        <label class="mb-2" style="font-family:cursive">Nim</label>
                        <input type="text" style="font-family: cursive;" class="form-control" name="nim" placeholder="masukkan nim">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" style="font-family:cursive">Password</label>
                        <input type="password" style="font-family: cursive;" class="form-control" name="password" placeholder="masukkan password">
                    </div>
                    
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
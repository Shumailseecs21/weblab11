<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Attendance Recorder-Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url("{{ asset('media/background.png') }}");
            background-size: 1550px;

        }

        nav.navbar {
            font-weight: bolder;
            background-color: #001059; /* Custom navbar background color */
        }
        nav a{
            color: white;

        }


        header {
            background-color: #001059;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h2 {
            color: #001059;
        }

        p {
            color: #001059;
        }

        section {
            padding: 20px;
            background-color: #65719b;
        }

        .container {
            width: 60%;
            /*left: 20%;*/
            margin-top: 13%;
            font-weight: bolder;
            filter: blur(0px);
        }
        a.btn{
            background-color: #001059;
            color: white;
            border: 5px #001059;
        }
        a.btn:hover{
            background-color:#65719b;
            color: #001059;
            border: 5px #001059;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="./welcome.blade.php">Attendance Recorder</a>
</nav>
<div class="container">
    <header>
        <h1>Attendance Recorder</h1>
    </header>
    <section>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <a href="{{url("/login")}}" class="btn">Login</a>
        </form>
    </section>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>

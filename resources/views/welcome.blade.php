<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Attendance Recorder</title>
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
            background-color: #001059;
        }

        nav a {
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Attendance Recorder</a>
        <a href="{{ url('/login') }}" class="btn btn-outline-success my-2 my-sm-0 ml-auto">Login</a>
</nav>
<div class="container">
    <header>
        <h1>Attendance Recorder</h1>
    </header>
    <section>
        <h2>Welcome to the Attendance Recorder!</h2>
        <p>This is a simple introduction to the attendance recorder system. You can record and manage attendance using
            this system.</p>
    </section>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>

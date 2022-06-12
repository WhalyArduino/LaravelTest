<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
    body {
        font-family: 'PrintAble4U', 'Nunito', sans-serif;
        font-size: 25px;
        color: white;
    }

    .fontA {
        font-size: 20px
    }
    </style>
</head>

<body class="antialiased" style='background-color: #6e7db6'>
    <div class="container" style="margin-top: 10%">
        <div class="row">
            <div class="col d-flex flex-row justify-content-center">
                <img src="{{url('Images/Logo.png')}}" style="width: 20%" />
            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-2"> </div>
            <div class="col" style="width: 50%">
                Login to your Account
            </div>
            <div class="col-2"> </div>
        </div>

        <form>
            <div class="row mt-2">
                <div class="col-2"> </div>
                <div class="col">
                    <input type="text" class="form-control fontA" placeholder="Username" name="username">
                </div>
                <div class="col-2"> </div>
            </div>

            <div class="row mt-3">
                <div class="col-2"> </div>
                <div class="col">
                    <input type="password" class="form-control fontA" placeholder="Password">
                </div>
                <div class="col-2"> </div>
            </div>

            <div class="row" style="margin-top: 2.5%">
                <div class="col-3"> </div>
                <div class="col d-grid gap-2">
                    <a href='{{route("Register")}}' class='btn btn-info btn-block fontA'>
                        Login
                    </a>
                </div>
                <div class="col-3"> </div>
            </div>

            <div class="row fontA" style="margin-top: 0.5%">
                <div class="col-3"> </div>
                <div class="col d-flex flex-row justify-content-center">
                    <a href='{{route("Register")}}' class='link-dark'>
                        Register
                    </a>
                </div>
                <div class="col-3"> </div>
            </div>
        </form>
    </div>
</body>

</html>
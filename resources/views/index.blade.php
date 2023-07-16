<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/jquery.min.js"></script>
    <script>
        // Realtime Asyncrhonos
        // $(document).ready(function() {
        // setInterval(() => {
        //     $('#count').load("{{ url('count') }}")
        //     console.log($('#count').html())
        // }, 1000);
        // })
    </script>
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 align-items-center text-center">

                <h1 class="fw-bold text-danger">DIDIMO</h1>
                <p>Digital Diabetes Monitoring</p>

                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="">Cahaya</h3>
                        <h1 class="fw-bold" id="count">0.00</h1>
                    </div>
                </div>
                <div class="d-grid mt-4">
                    <a href="/reset" class="btn btn-danger">Reset</a>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' 'unsafe-eval'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,500;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>News</title>
    <link rel="icon" href="newsletter.png">
</head>

<body>
    <nav class="navbar navbar-info" style="background-color: #63cbd3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html" style="color: #677289; font-weight: bold; font-family: 'Newsreader', serif; font-size: 30px;">
                <img src="newsletter.png" alt="" width="50" height="40" class="d-inline-block align-text-top rounded-circle">
                Tech Around the World
            </a>
        </div>
    </nav>


    <div class="container my-3 d-flex flex-column justify-content-center align-items-center" id="letter">
    </div>

</body>
<script src="js/app.js"></script>

</html>


<!-- Permissions-Policy: interest-cohort=()  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC FRAMEWORK</title>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">PHPMVCFRAMEWORK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

            </ul>
            <ul class="navbar-nav mr-right"">
            <li class='nav-item my-2 my-sm-0'>
                <a href=" /login" class="nav-link my-2 my-sm-0">Login</a>
                </li>
                <li class='my-2 my-sm-0'>
                    <a href="/register" class="nav-link my-2 my-sm-0">register</a>
                </li>
            </ul>
    </nav>
    <div class="container">
        {{content}}
    </div>
</body>

</html>
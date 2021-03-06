
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php?page=channel-product">Channel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php?page=afnan-product">Afnan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php?page=alaia-product">Alaia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php?page=burbery-product">Burbery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php?page=calvin-product">Calvin Kalein</a>
                </li>
            </ul>
            <form action="home.php?search-name=<?php echo $_GET['search-name'] ?>" class="d-flex" method="get">
                <input type="text" class="form-control me-2" id="search-name" placeholder="Search" name="search-name">
                <button class="btn btn-outline-success ml-2" type="submit" >Search</button>
            </form>
        </div>
    </div>
</nav>
<?php //session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>day-14</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php if (isset($_SESSION['id'])) {?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">

                <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
                <li><a href="action.php?pages=series" class="nav-link">Series</a></li>
                <li><a href="action.php?pages=register" class="nav-link">Registration</a></li>
                <li><a href="action.php?pages=all-data" class="nav-link">all Data</a></li>
                <li class="dropdown">
                    <a href="action.php?pages=register" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['name'];?></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="action.php?pages=logout">Logout</a></li>
                    </ul>
                </li>
<!--                <li><a href="action.php?pages=login" class="nav-link">Login</a></li>-->
            </ul>
        </div>
    </nav>
<?php }?>
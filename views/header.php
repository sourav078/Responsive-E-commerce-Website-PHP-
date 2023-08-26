
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Com Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/myStyle.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/webfonts/fa-brands-400.ttf">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid main-menu">
        <a href="action.php?page=home" class="navbar-brand fs-1 text-bg-warning px-3 rounded-3"><i class="fa fa-cart-shopping fa-1x fa-bounce" style="color: #ff253a;"></i> E-C<i class="fa fa-circle-o fa-0 fa-beat-fade" style="color: #ff253a;"></i>M</a>
        <ul class="navbar-nav">
            <li class="m-1">
                <a href="action.php?page=home" class="nav-link">Home</a>
            </li>
            <?php foreach ($menus as $menu) { ?>
                <li class="dropdown m-1">
                    <a href="action.php?page=menu&id=<?php echo $menu['id'] ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $menu['name'] ?></a>
                    <ul class="dropdown-menu bg-gray rounded-0">
                        <?php foreach ($sub_menus as $subMenu) { ?>
                            <?php if ($menu['id'] == $subMenu['menu_id']) { ?>
                            <li>
                                <a href="action.php?page=category&id=<?php echo $subMenu['id']; ?>" class="dropdown-item fw-bold"><?php echo $subMenu['name']; ?></a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            <li class="m-1">
                <a href="action.php?page=about" class="nav-link">About</a>
            </li>
            <li class="m-1">
                <a href="action.php?page=contact" class="nav-link">Contact</a>
            </li>
            <?php if (isset($_SESSION['id'])) { ?>   <!-- habib sir code -->
                <li class="dropdown m-1">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['name']; ?></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="action.php?page=dashboard" class="dropdown-item">Dashboard</a>
                        </li>
                        <li>
                            <a href="action.php?page=logout" class="dropdown-item">Logout</a>
                        </li>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="m-1">
                    <a href="action.php?page=login" class="nav-link">Login</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

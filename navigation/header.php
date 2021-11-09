<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <input type="checkbox" id="check" class="check1">
        <input type="checkbox" id="check2" class="check2">

        <div class="logo">
            <img onclick="window.location='index.php'" src="assets/logo.png" alt="DWP" height="65px">
            <h1>DWP Games</h1>
        </div>
        <ul class="platformMenu">
            <div class="dropdown">
                <li class="desktop_link"><a href="#">Platform</a></li>
                <div class="dropdown-content">
                    <li><a href="all.php">PC</a></li>
                    <li><a href="#">Playstation</a></li>
                    <li><a href="#">Xbox</a></li>
                    <li><a href="#">Nintendo</a></li>
                </div>
            </div>
            <li class="mobile_link"><a href="all.php">PC</a></li>
            <li class="mobile_link"><a href="#">Playstation</a></li>
            <li class="mobile_link"><a href="#">Xbox</a></li>
            <li class="mobile_link"><a href="#">Nintendo</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Genres</a></li>
        </ul>

        <ul class="userMenu">
            <?php if(isset($_SESSION['usertype'])){
                if($_SESSION['usertype']=="user"){ ?>
                    <div class="dropdown">
                        <li class="desktop_link"><a href="#">User</a></li>
                        <div class="dropdown-content">
                            <li><a href="logout.php">Logout</a></li>
                        </div>
                    </div>
                    <li class="mobile_link"><a href="logout.php">Logout</a></li>
            <?php }} else { ?>
                <div class="dropdown">
                    <li class="desktop_link"><a href="#">User</a></li>
                    <div class="dropdown-content">
                        <li><a href="login.php">Login</a></li>
                    </div>
                </div>
                <li class="mobile_link"><a href="login.php">Login</a></li>
            <?php } ?>
        </ul>

        <div class="icons">
            <span class="material-icons icon cart">shopping_cart</span>
            <label for="check" class="material-icons icon menu">menu</label>
            <label for="check2" class="material-icons icon menu">account_circle</label>
        </div>
    </header>
<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Seller HomePage</title>
	<link href="fin_style.css" rel="stylesheet">
</head>
<body style="background-color:white">

    <header>
        <div class="inner">
            <div class="logo">
                <div>
                    <a href="fin_aboutt.php" title="About SaleEstate"><img src="fin_logo.png" alt="SaleEstate logo" width="170" height="60"></a>
                </div>
            </div>
            <nav>
			    <li><span>Hello Seller <?=$_POST['Username']?></span></li>
                <li><span><a href="fin_register.php" class="button">Logout</a></span></li>
		    </nav>
	    </div>
	</header>

<main>
		<h1>SELLER HOMEPAGE</h1>
		
</main>
</body>
</html>

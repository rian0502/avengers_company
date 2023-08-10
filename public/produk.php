<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvengerNet || Produk</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: white;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Avengers Net</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Paket & Promo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/produk.php">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="/help.php">Bantuan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1">
        <h1>Check it out!</h1>

        <?php
        // Daftar produk es teh
        $products = array(
            array("Es Teh Manis", "Minuman teh manis dengan es batu.", 15000),
            array("Es Teh Tawar", "Minuman teh tawar dengan es batu.", 12000),
            array("Es Teh Lemon", "Minuman teh dengan perasan lemon dan es batu.", 18000)
        );

        // Menampilkan daftar produk
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<h2>' . $product[0] . '</h2>';
            echo '<p>' . $product[1] . '</p>';
            echo '<p>Harga: Rp ' . number_format($product[2], 0, ',', '.') . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>
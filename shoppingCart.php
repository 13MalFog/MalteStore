<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Böjd Bägare</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <main class="indexMain">
        
    </main>
    <nav class="topBar">
        <button class="menyButton">
            三
        </button>
        <div>

        </div>
        <img class="imgLogo" src="img/image.png" alt="böjd bägare">
        <button class="varukorgKnapp">
            Shopping cart
        </button>
        <button class="profilKnapp">

        </button>
    </nav>
    <nav class="barBar">
        <input class="searchSearch" type="text" placeholder="search...">
    </nav>
    <nav class="shoppingCartMain">
        <h1>Your Shopping Cart</h1>
        <div class="cartItems">
            <?php
                require "dbConnect.php";
                $data = $connection->query("SELECT bild FROM facebild WHERE id=".$_COOKIE["cart_items"]."");
                if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    echo ' <img class="imgImg" src="'.$row["bild"].'" alt="Till Lindemann">';
                    }
                }

            $connection->close();
            ?>
        </div>
        <button class="checkoutButton">Proceed to Checkout</button>
</body>
</html>
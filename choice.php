<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Böjd Bägare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="topBar">
        <a href="index.html"><button class="menyButton">
            三
        </button></a>
        <div>

        </div>
        <img class="imgLogo" src="img/image.png" alt="böjd bägare">
        <button class="varukorgKnapp">

        </button>
        <button class="profilKnapp">

        </button>
    </nav>
    <nav class="barBar">
        <input class="searchSearch" type="text" placeholder="search...">
    </nav>    
        <?php
        require "dbConnect.php";
            $id = $_GET["id"];
            $data = $connection->query("SELECT * FROM facebild WHERE id = ".$id);
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    echo '<div class="produktInformation">
                            <div class="produktBox">
                                <img class="produktImg" src="'.$row["bild"].'" alt="produkt">
                                <button onclick="saveToCart('.$row["id"].')">Add to cart</button>
                            </div>
                            <p class="produktText">Mycket fint vin. Bla bla ble, blu blu blu, huubblublublublu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laboriosam voluptas minima perferendis expedita est, soluta minus? Neque dolores blanditiis ullam iure reprehenderit, nam iste non! Exercitationem earum necessitatibus excepturi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat iure veritatis, aliquid at adipisci molestiae accusantium debitis dicta dolorum commodi reiciendis, culpa vero repellendus dolor officia delectus quos odio similique.</p>
                        </div>';
                }
            }
            $connection->close();
        ?>
</body>
</html>
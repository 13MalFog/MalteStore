<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Böjd Bägare</title>
    <link rel="stylesheet" href="style.css">
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

        </button>
        <button class="profilKnapp">

        </button>
    </nav>
    <nav class="barBar">
        <input class="searchSearch" type="text" placeholder="search...">
    </nav>
    <nav class="browseItems">
        <?php
                require "dbConnect.php";

                $data = $connection->query("SELECT * FROM facebild LIMIT 3");
                if ($data->num_rows > 0) {
                    while ($row = $data->fetch_assoc()) {
                        echo '  <nav class="itemBox">
                                    <a href="choice.php?id='.$row["id"].'"><img class="imgImg" src="'.$row["bild"].'" alt="donperignon"></a>
                                </nav>
                                    ';
                    }
                }
                
            ?>    
    </nav>
    <div class="scrollItems">
        <?php
            $data = $connection->query("SELECT bild FROM facebild");
            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    echo ' <img class="scrollImg" src="'.$row["bild"].'" alt="Till Lindemann">';
                    }
                }

            $connection->close();
        ?>
    </div>
</body>
</html>
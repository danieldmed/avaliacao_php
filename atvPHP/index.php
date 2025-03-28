<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação PHP</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background:linear-gradient(#0096c7, #0096c7)
        }

        .container {
            width: 650px;
            height: 250px;
            border-radius: 15px;
            background-color: #caf0f8;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #0077b6;
            font-size: 60px;
            font-family: sans-serif;
        }

    </style>
</head>
<body>
    
    <div class="container">
        <h1>
            <?php
                echo("Avaliação de PHP");
            ?>
        </h1>
    </div>

</body>
</html>
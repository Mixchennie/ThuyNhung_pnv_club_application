<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, h1, p, img {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        }

        body {
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        img {
            width:200px ;
            height: 200px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<img src="https://banner2.cleanpng.com/20180303/hhw/kisspng-gold-medal-trophy-icon-medals-5a9b5575584f54.6112696715201293973617.jpg" alt="Huy chuong">
<h1>Thx for <?php if(isset($_POST["name"])) { echo $_POST["name"]; } ?> !!</h1>

<p>We received your application for the <?php if(isset($_POST["club"])) { echo $_POST["club"]; } ?></p>

<p>You are  <?php
    if(isset($_POST["submit"])){
        $skill = isset($_POST["skill"]) ? $_POST["skill"] : [];
        echo implode(" and ", $skill);
        // print_r($_POST[["skill"]])

    }
?>  </P>
<p>
<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["time"])){
            $time = $_POST["time"];
            echo "You will be available on ". $time ;
        }

    }
?></p>
</body>
</html>
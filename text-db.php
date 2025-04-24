<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.green {
            background-color: green;
            width: 100px;
            text-align: center;
            border-radius: 5px;
        }
        
        .red {
            background-color: red;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .red p {
            margin: 0;
            /* border: 1px solid; */
        }
        
    </style>
    
</head>
<body>
    <?php
        require_once 'db.php';
        echo "<div class='green'>Database connected!</div>";
        
        


        echo "<div class='red'><p>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        DONE NA! </p>
        </div>";
    ?>
</body>
</html>


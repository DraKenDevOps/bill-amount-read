<?php 
    include 'laokip.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ອ່ານຈຳນວນເງິນ</title>
    <link rel="icon" type="image/png" href="./image/icon-logo.png">
    <style>
        fieldset {
            margin: 0 auto;
            width: 500px;
            background-color: #fff;
            border-radius: 5px;
            border: 1px solid red;
        }
        legend{
            color: red;
            padding: 0 5px;
        }
        .inp-box{
            height: 40px;
            width: 250px;
            border: 1px solid red;
            outline: none;
            border-radius: 10px;
            padding-left: 10px;
            font-size: 20px;
        }
        .inp-box::placeholder{
            color: #FFCCBB;
        }
        .button{
            height: 45px;
            border: none;
            background-color: red;
            color: #fff;
            width: 100px;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        h1{
            margin-top: 10px;
            color: red;
        }
        hr{
            margin-top: 15px;
            border: 0.1px solid red;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>
            <h2><b>ອ່ານຈຳນວນເງິນ</b></h2>
        </legend>
        <form action="laokip-read.php" method="POST">
            <input class="inp-box" type="text" name="amount" id="amount" autocomplete='off' placeholder="ປ້ອນຈຳນວນເງິນ">
            <input class="button" type="submit" name="submit" value="OK">
            <input class="button" type="reset" value="Cancel">
        </form>
        <hr>
        <?php 
            $amount = $_POST['amount'];
        ?>
        <h1><?=@ $amount?></h1>
        <h1><?=@ LakLao($amount) ?></h1>
    </fieldset>
</body>

    

</html>


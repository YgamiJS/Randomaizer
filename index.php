<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .form__button {
        cursor: pointer;
    }
    </style>
    <title>Generate random number</title>
</head>

<body>
    <div class="wrapper">
        <h1 class="title">Generate random number</h1>
        <?php 

            function generateRandomInt(int | float $start , int | float $end) {
                return rand($start , $end);
            }

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2 class='value'> Number: " . generateRandomInt($_POST["min"] , $_POST["max"]) . "</h2>";
            }

        ?>

        <form class='form' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='POST'>
            <input class='form__input' name='min' placeholder='Min' required />
            <input class='form__input' name='max' placeholder='Max' required />
            <button class='form__button' type='submit'>Submit</button>
        </form>
    </div>
</body>

</html>
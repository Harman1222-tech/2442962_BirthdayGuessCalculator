<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Birthday Guess Calculator</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background: #fff5fa;
            color: #333;
        }

        .container {
            max-width: 950px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #7a174d;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 22px;
            margin-bottom: 16px;
            border-radius: 12px;
            border: 1px solid #f3d5e3;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            color: #e83e79;
            margin-top: 0;
        }

        .question {
            font-size: 18px;
            font-weight: bold;
        }

        .numbers {
            font-size: 17px;
            line-height: 1.8;
            margin: 15px 0;
        }

        label {
            margin-right: 25px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 6px;
        }

        .btn {
            display: block;
            margin: 30px auto;
            padding: 13px 30px;
            border: none;
            border-radius: 7px;
            background: #e83e79;
            color: white;
            font-size: 17px;
            cursor: pointer;
        }

        .btn:hover {
            background: #c72d63;
        }

        .result {
            background: #effbea;
            border: 2px solid #5cb85c;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            margin-top: 20px;
        }

        .result h2 {
            color: #228b22;
            margin: 0;
        }

        .birthday {
            font-size: 45px;
            font-weight: bold;
            color: #228b22;
            margin-top: 10px;
        }

        .error {
            background: #ffeaea;
            border: 1px solid #e74c3c;
            color: #c0392b;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }

        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            h1 {
                font-size: 28px;
            }

            .card {
                padding: 17px;
            }

            .numbers {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>🎂 Birthday Guess Calculator</h1>

    <form method="post">

        <!-- CARD 1 -->
        <div class="card">

            <h2>Card 1</h2>

            <p class="question">
                Is your birthday in this card?
            </p>

            <div class="numbers">
                1, 3, 5, 7, 9, 11, 13, 15,
                17, 19, 21, 23, 25, 27, 29, 31
            </div>

            <label>
                <input type="radio" name="q1" value="1" required>
                Yes
            </label>

            <label>
                <input type="radio" name="q1" value="0">
                No
            </label>

        </div>


        <!-- CARD 2 -->
        <div class="card">

            <h2>Card 2</h2>

            <p class="question">
                Is your birthday in this card?
            </p>

            <div class="numbers">
                2, 3, 6, 7, 10, 11, 14, 15,
                18, 19, 22, 23, 26, 27, 30, 31
            </div>

            <label>
                <input type="radio" name="q2" value="2" required>
                Yes
            </label>

            <label>
                <input type="radio" name="q2" value="0">
                No
            </label>

        </div>


        <!-- CARD 3 -->
        <div class="card">

            <h2>Card 3</h2>

            <p class="question">
                Is your birthday in this card?
            </p>

            <div class="numbers">
                4, 5, 6, 7, 12, 13, 14, 15,
                20, 21, 22, 23, 28, 29, 30, 31
            </div>

            <label>
                <input type="radio" name="q3" value="4" required>
                Yes
            </label>

            <label>
                <input type="radio" name="q3" value="0">
                No
            </label>

        </div>


        <!-- CARD 4 -->
        <div class="card">

            <h2>Card 4</h2>

            <p class="question">
                Is your birthday in this card?
            </p>

            <div class="numbers">
                8, 9, 10, 11, 12, 13, 14, 15,
                24, 25, 26, 27, 28, 29, 30, 31
            </div>

            <label>
                <input type="radio" name="q4" value="8" required>
                Yes
            </label>

            <label>
                <input type="radio" name="q4" value="0">
                No
            </label>

        </div>


        <!-- CARD 5 -->
        <div class="card">

            <h2>Card 5</h2>

            <p class="question">
                Is your birthday in this card?
            </p>

            <div class="numbers">
                16, 17, 18, 19, 20, 21, 22, 23,
                24, 25, 26, 27, 28, 29, 30, 31
            </div>

            <label>
                <input type="radio" name="q5" value="16" required>
                Yes
            </label>

            <label>
                <input type="radio" name="q5" value="0">
                No
            </label>

        </div>


        <button type="submit" name="submit" class="btn">
            Guess Birthday
        </button>

    </form>


    <?php

    if (isset($_POST['submit'])) {

        $q1 = (int) $_POST['q1'];
        $q2 = (int) $_POST['q2'];
        $q3 = (int) $_POST['q3'];
        $q4 = (int) $_POST['q4'];
        $q5 = (int) $_POST['q5'];

        $birthday = $q1 + $q2 + $q3 + $q4 + $q5;

        if ($birthday >= 1 && $birthday <= 31) {

            echo "
            <div class='result'>
                <h2>🎉 Your Birthday Date Is:</h2>
                <div class='birthday'>$birthday</div>
            </div>
            ";

        } else {

            echo "
            <div class='error'>
                Unable to calculate the birthday.
            </div>
            ";
        }
    }

    ?>

</div>

</body>
</html>
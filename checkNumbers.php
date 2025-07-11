<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số chẵn lẻ</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="number"] {
            padding: 0.5rem;
            margin-right: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 0.5rem 1rem;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .result {
            margin-top: 1rem;
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Kiểm tra số chẵn hay lẻ</h2>
        <form method="post" action="">
            <label for="number">Nhập một số:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" name="submit" value="Kiểm tra">
        </form>

        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
                if ($number !== false) {
                    if ($number % 2 == 0) {
                        echo " Số $number là số chẵn!";
                    } else {
                        echo " Số $number là số lẻ!";
                    }
                } else {
                    echo "Vui lòng nhập một số nguyên hợp lệ.";
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
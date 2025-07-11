<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chuyển đổi nhiệt độ</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Chuyển đổi độ C sang độ F</h2>
        <form method="post" action="">
            <label for="celsius">Nhập độ C:</label>
            <input type="text" name="celsius" required>
            <input type="submit" name="submit_ex2" value="Chuyển đổi">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex2'])) {
                $celsius = filter_input(INPUT_POST, 'celsius', FILTER_VALIDATE_FLOAT);
                if ($celsius !== false) {
                    $fahrenheit = $celsius * 9/5 + 32;
                    echo "$celsius &deg;C = " . round($fahrenheit, 2) . " &deg;F";
                } else {
                    echo "Vui lòng nhập một số hợp lệ.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
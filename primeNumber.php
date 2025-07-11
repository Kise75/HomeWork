<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số nguyên tố</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; }
        .prime { color: green; }
        .not-prime { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kiểm tra số nguyên tố</h2>
        <form method="post" action="">
            <label for="number">Nhập số n:</label>
            <input type="number" name="number" required>
            <input type="submit" name="submit_ex4" value="Kiểm tra">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex4'])) {
                $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
                if ($number !== false) {
                    $isPrime = true;
                    if ($number <= 1) {
                        $isPrime = false;
                    } else {
                        for ($i = 2; $i <= sqrt($number); $i++) {
                            if ($number % $i == 0) {
                                $isPrime = false;
                                break;
                            }
                        }
                    }
                    if ($isPrime) {
                        echo "<span class='prime'>$number là số nguyên tố.</span>";
                    } else {
                        echo "<span class='not-prime'>$number không phải là số nguyên tố.</span>";
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
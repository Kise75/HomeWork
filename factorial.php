<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính giai thừa</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính giai thừa (n!)</h2>
        <form method="post" action="">
            <label for="number">Nhập số n:</label>
            <input type="number" name="number" required>
            <input type="submit" name="submit_ex3" value="Tính">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex3'])) {
                $n = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
                if ($n !== false && $n >= 0) {
                    $factorial = 1;
                    for ($i = 1; $i <= $n; $i++) {
                        $factorial *= $i;
                    }
                    echo "Giai thừa của $n là: $factorial";
                } else {
                    echo "Vui lòng nhập một số nguyên không âm.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
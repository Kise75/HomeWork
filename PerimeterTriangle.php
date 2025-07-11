<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính chu vi tam giác</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
        label { display: block; margin: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính chu vi tam giác</h2>
        <form method="post" action="">
            <label for="side_a">Cạnh a:</label>
            <input type="text" name="side_a" required>
            <label for="side_b">Cạnh b:</label>
            <input type="text" name="side_b" required>
            <label for="side_c">Cạnh c:</label>
            <input type="text" name="side_c" required>
            <br><br>
            <input type="submit" name="submit_ex6" value="Tính">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex6'])) {
                $a = filter_input(INPUT_POST, 'side_a', FILTER_VALIDATE_FLOAT);
                $b = filter_input(INPUT_POST, 'side_b', FILTER_VALIDATE_FLOAT);
                $c = filter_input(INPUT_POST, 'side_c', FILTER_VALIDATE_FLOAT);

                if ($a !== false && $b !== false && $c !== false) {
                    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a) && $a > 0 && $b > 0 && $c > 0) {
                        $perimeter = $a + $b + $c;
                        echo "Chu vi tam giác là: $perimeter";
                    } else {
                        echo "Các cạnh đã cho không tạo thành một tam giác hợp lệ.";
                    }
                } else {
                    echo "Vui lòng nhập độ dài hợp lệ cho các cạnh.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
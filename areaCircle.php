<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính diện tích hình tròn</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính diện tích hình tròn</h2>
        <form method="post" action="">
            <label for="radius">Nhập bán kính:</label>
            <input type="text" name="radius" required>
            <input type="submit" name="submit_ex8" value="Tính">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex8'])) {
                $radius = filter_input(INPUT_POST, 'radius', FILTER_VALIDATE_FLOAT);
                if ($radius !== false && $radius > 0) {
                    $area = M_PI * pow($radius, 2);
                    echo "Diện tích hình tròn là: " . round($area, 2);
                } else {
                    echo "Vui lòng nhập bán kính là một số dương hợp lệ.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
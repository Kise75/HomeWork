<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>In dãy Fibonacci</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; max-width: 400px; word-wrap: break-word;}
    </style>
</head>
<body>
    <div class="container">
        <h2>In dãy Fibonacci</h2>
        <form method="post" action="">
            <label for="terms">Nhập số lượng số hạng (n):</label>
            <input type="number" name="terms" required>
            <input type="submit" name="submit_ex10" value="In dãy số">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex10'])) {
                $n = filter_input(INPUT_POST, 'terms', FILTER_VALIDATE_INT);
                if ($n !== false && $n > 0) {
                    $num1 = 0;
                    $num2 = 1;
                    $sequence = [];
                    
                    if ($n >= 1) {
                        $sequence[] = $num1;
                    }
                    if ($n >= 2) {
                        $sequence[] = $num2;
                    }

                    for ($i = 3; $i <= $n; $i++) {
                        $next = $num1 + $num2;
                        $sequence[] = $next;
                        $num1 = $num2;
                        $num2 = $next;
                    }
                    echo "Dãy số: " . implode(', ', $sequence);
                } else {
                    echo "Vui lòng nhập một số nguyên dương.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
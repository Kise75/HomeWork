<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số Palindrome</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; }
        .palindrome { color: green; }
        .not-palindrome { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kiểm tra số Palindrome</h2>
        <form method="post" action="">
            <label for="number">Nhập số:</label>
            <input type="text" name="number" required>
            <input type="submit" name="submit_ex9" value="Kiểm tra">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex9'])) {
                $number = $_POST['number'];
                if (ctype_digit($number)) { 
                    $reversedNumber = strrev($number);
                    if ($number == $reversedNumber) {
                        echo "<span class='palindrome'>$number là số Palindrome.</span>";
                    } else {
                        echo "<span class='not-palindrome'>$number không phải là số Palindrome.</span>";
                    }
                } else {
                    echo "Vui lòng nhập một dãy số hợp lệ.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
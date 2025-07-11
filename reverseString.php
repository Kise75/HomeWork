<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đảo ngược chuỗi</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đảo ngược chuỗi</h2>
        <form method="post" action="">
            <label for="string">Nhập chuỗi:</label>
            <input type="text" name="string" size="30" required>
            <input type="submit" name="submit_ex7" value="Đảo ngược">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex7'])) {
                $string = $_POST['string']; 
                if (!empty($string)) {
                    function mb_strrev($str){
                        $r = '';
                        for ($i = mb_strlen($str); $i>=0; $i--) {
                            $r .= mb_substr($str, $i, 1);
                        }
                        return $r;
                    }
                    $reversedString = mb_strrev($string);
                    echo "Chuỗi đảo ngược: " . htmlspecialchars($reversedString);
                } else {
                    echo "Vui lòng nhập một chuỗi.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
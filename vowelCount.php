<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đếm nguyên âm</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .container { background: #f0f0f0; padding: 20px; border-radius: 8px; display: inline-block; }
        .result { margin-top: 15px; font-weight: bold; color: #2a7a2a; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đếm số nguyên âm trong chuỗi</h2>
        <form method="post" action="">
            <label for="string">Nhập chuỗi:</label>
            <input type="text" name="string" size="30" required>
            <input type="submit" name="submit_ex5" value="Đếm">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit_ex5'])) {
                $string = filter_input(INPUT_POST, 'string', FILTER_SANITIZE_STRING);
                if (!empty($string)) {
                    $vowelCount = 0;
                    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
                    $vietnameseVowels = ['ă', 'â', 'ê', 'ô', 'ơ', 'ư', 'á', 'à', 'ả', 'ã', 'ạ', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ế', 'ề', 'ể', 'ễ', 'ệ', 'í', 'ì', 'ỉ', 'ĩ', 'ị', 'ó', 'ò', 'ỏ', 'õ', 'ọ', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ú', 'ù', 'ủ', 'ũ', 'ụ', 'ứ', 'ừ', 'ử', 'ữ', 'ự'];
                    $allVowels = array_merge($vowels, $vietnameseVowels);
                    
                    $vowelCount = preg_match_all('/[aeiouăâêôơưáàảãạắằẳẵặấầẩẫậéèẻẽẹếềểễệíìỉĩịóòỏõọốồổỗộớờởỡợúùủũụứừửữự]/iu', $string);
                    
                    echo "Chuỗi có $vowelCount nguyên âm.";
                } else {
                     echo "Vui lòng nhập một chuỗi.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
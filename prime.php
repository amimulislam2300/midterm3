<!DOCTYPE html>
<html>
<head>
    <title>Check Prime Number</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = intval($_POST['number']);
        if (isPrime($number)) {
            echo "<p>$number is a prime number.</p>";
        } else {
            echo "<p>$number is not a prime number.</p>";
        }
    }
    ?>
</body>
</html>

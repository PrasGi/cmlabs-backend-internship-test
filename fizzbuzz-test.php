<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizz Buzz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="row justify-content-center">
        <div class="col-6 text-center m-5 p-5 shadow">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<p class='text-info'>FizzBuzz</p>";
                } elseif ($i % 5 == 0) {
                    echo "<p class='text-danger'>Buzz</p>";
                } elseif ($i % 3 == 0) {
                    echo "<p class='text-success'>Fizz</p>";
                } else {
                    echo "<p class='text-dark'>{$i}</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
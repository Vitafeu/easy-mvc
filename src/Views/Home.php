<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="/test" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="firstName"><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br>
        <input type="submit" value="Send">
    </form>

    <?php var_dump($data); ?>
</body>
</html>
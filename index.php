<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <a href="blog.php">About me blog</a>
    <h1>Piesakies webinaram</h1>
    <form action="\web\labosanas\index.php" method="post">
        <label for="name">Vards</label>
        <input type="text" name="name" id="email"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>

        <select name="course_level" id="">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>

        <legend>VAI TU VELIES SANEMT Balls</legend>

        <input type="radio" name="radio" id="Yes">
        <label for="YES">Yes</label>
        <input type="radio" name="radio" id="NO">
        <label for="NO">NO</label>

        <input type="submit" value="Sutit">
    </form>

    <?php
        $names = [
            ["name" => "Janis", "email" => "kautkas@gmail.com", "level" => "bomzis"],
            ["name" => "Janigs", "email" => "kautkas@gmail.com", "level" => "bomzi1s"],
            ["name" => "Janiss", "email" => "kautkas@gmail.com", "level" => "bomzis2"],
        ];

        foreach($names as $name){
            echo "Vards: " . $name["name"] . "email" . $name["email"] . "Level" . $name["level"];
        }
    ?>

    <script>src="app.js"</script>

</body>
</html>
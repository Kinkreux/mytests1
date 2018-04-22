<html>
<head>
    <title>Добро пожаловать на сервис mytests</title>
</head>
<body>
<?php

if(true) {


?>
<h1>Тест:</h1>
<form action="test.php" method="POST">
    <?php foreach($test_body_array['test']['question'] as $question) : ?>
    <fieldset>
        <legend><?php echo $question ?></legend>
        <?php foreach($test_body_array['test']['response']['alternative'] as $response) : ?>
        <label><input type="radio" name="q<?php ?>"><?php echo $response ?></label>
        <?php endforeach; ?>
    </fieldset>
    <?php endforeach; ?>
    <input type="submit" value="Узнать результат">
</form>

<?php

    } else {

    ?>
    <h1>
        Ваш результат:
    </h1>

    <?php
}
?>
</body>
</html>

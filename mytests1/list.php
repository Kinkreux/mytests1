<?php

$testFilesArray = scandir('tests/');

$testFilesArray = array_diff($testFilesArray, [".", ".."]);

?>
<html>
    <head>
        <title>Добро пожаловать на сервис mytests</title>
    </head>
    <body>
        <h1>Добро пожаловать на сервис mytests!</h1>
        <p>Здесь вы можете посмотреть список загруженных тестов и открыть нужный тест.</p>
        <h2>
            Список загруженных тестов:
        </h2>
        <ol>
            <?php foreach ($testFilesArray as $fileName) :
                $testName = strstr($fileName, '_', true);
                $testID = strstr($fileName, '.', true);
                ?>
            <li><a href="test.php?test=<?php echo $testID ?>">Тест "<?php echo $testName; ?>"</a></li>
            <?php endforeach; ?>
        </ol>
        <a href="admin.php">Загрузить еще тест</a>
    </body>
</html>
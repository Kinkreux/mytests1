<?php

$testname_final = str();
$testnumber = int();
$testlist_array = array();

$test_username = ($_POST["testname"]);

if(is_file($testname_final)) {
    $testnumber = ++$testnumber;
};

$testname_final = 'Test'.$testnumber.'.json';

if (!empty($_FILES)) {
    move_uploaded_file($_FILES['testfile']['tmp_name'], $testname_final);
};

if(is_array($testlist_array)) {
    array_push($testlist_array[$testname_final] = $test_username);
} else {
    $testlist_array[$testname_final] = $test_username;
};

var_dump($testlist_array);

?>

<html>
    <head>
        <title>Добро пожаловать на сервис mytests</title>
    </head>
    <body>
        <h1>Добро пожаловать на сервис mytests!</h1>
        <p>Здесь вы можете посмотреть список загруженных тестов и открыть нужный тест.</p>
        <ul>Список загруженных тестов:
            <?php foreach ($testlist_array as $testname_final =>  $test_iusername) : ?>
            <li><a href="<?php echo $testname_final ?>">Тест "<?php echo $test_username; ?>"</a></li>
            <?php endforeach; ?>
        </ul>
        <a href="admin.php">Загрузить еще тест >></a>
    </body>
</html>
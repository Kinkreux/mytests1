<?php

function uploadTest($testName, $testFile) {
    if(isset($testFile['tmp_name'])) {
        $testFileTmp = $testFile['tmp_name'];
    };

    if(!$testName && is_file($testFileTmp)) {
        echo "Имя теста обязательно.";
        exit;
    };

    if(!is_file($testFileTmp) && $testName) {
        echo "Пожалуйста, загрузите файл теста.";
        exit;
    };

    $testName = preg_replace("/[^a-zA-ZА-Яа-я0-9\s]/", "", $testName).time();

    move_uploaded_file($testFileTmp, $testName.'.json');

    echo 'Тест "'.$testName.'" успешно загружен. ТТ_ТТ';
}

?>

<html>
    <head>
        <title>Добро пожаловать на сервис mytests</title>
    </head>
    <body>
        <h1>Добро пожаловать на сервис mytests!</h1>
        <p>Вы можете загрузить файл с тестом в формате .json по следующему шаблону:</p>
        <pre>
            <code>
{
  "q1": {
    "question": "Какой город не в России?",
    "response": [
      [
        "Таганрог",
        false
      ],
      [
        "Воркута",
        false
      ],
      [
        "Тбилиси",
        true
      ]
    ]
  },
  "q2": {
    "question": "Сколько ног у паука?",
    "response": [
      [
        4,
        false
      ],
      [
        6,
        false
      ],
      [
        8,
        true
      ],
      [
        12,
        false
      ]
    ]
  }
}</code>
        </pre>
        <form action="admin.php" method="post" enctype="multipart/form-data">
            <p>Назовите тест:</p>
            <input type="text" name="testname" required>
            <p>Загрузите файл json:</p>
            <input type="file" name="testfile" required>
            <input type="submit" value="Загрузить тест">
        </form>
        <p><?php if(isset($_POST['testname']) && isset($_FILES['testfile'])) {
            uploadTest($_POST['testname'], $_FILES['testfile']);
        }
        ?>
        </p>
    <p>
        <a href="list.php">Перейти в список тестов</a>
    </p>
    </body>
</html>

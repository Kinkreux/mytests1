<?php

var_dump($_POST);
var_dump($_FILES);

?>

<html>
<head>
    <title>Добро пожаловать на сервис mytests</title>
</head>
<body>
<h1>Добро пожаловать на сервис mytests!</h1>
<p>Вы можете загрузить файл с тестом в формате .json по следующему шаблону:</p>
<code>{"test": {"problem":
            {"question":"Текст вопроса",
            "response":[
                           {"alternative":"Текст варианта ответа"},
                           {"valid":true/false}
                           ]
           }
} }           "</code>
<form enctype="multipart/form-data" action="admin.php" method="post">
    <p>Назовите тест:</p>
    <input type="text" name="testname">
    <p>Загрузите файл json:</p>
    <input type="file" name="testfile">
    <input type="submit" value="Загрузить тест">
</form>
</body>
</html>

<html>
    <head>
        <title>Добро пожаловать на сервис mytests</title>
    </head>
    <body>
        <h1>Добро пожаловать на сервис mytests!</h1>
        <p>Вы можете загрузить файл с тестом в формате .json по следующему шаблону:</p>
        <code>{"test":
            [{"question":"Какое число меньше 3?"},
            {"response": [
            {"alternative":["1",true]},
            {"alternative":["2",true]},
            {"alternative":["3",false]}
            ]},
            {"question":"Сколько ног у паука?"},
            {"response": [
            {"alternative":["4",false]},
            {"alternative":["6",false]},
            {"alternative":["8",true]},
            {"alternative":["12",false]}
            ]}
            ]}"</code>
        <form action="list.php" method="post" enctype="multipart/form-data">
            <p>Назовите тест:</p>
            <input type="text" name="testname">
            <p>Загрузите файл json:</p>
            <input type="file" name="testfile">
            <input type="submit" value="Загрузить тест">
        </form>
    </body>
</html>

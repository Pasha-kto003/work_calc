<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>"Анекдот дня эта штука делалась неделю!</title>
</head>
<body>
<?php
function calc()
{
    if (isset($_POST['btnCalc'])){
        $message = "Нечего считать ((((";
        if (isset($_POST['a']) && !empty ($_POST['a']))
        {
            $a = $_POST['a'];
        };
        if (isset($_POST['b']) && !empty ($_POST['b']))
        {
            $b = $_POST['b'];
        };
        if (isset($_POST['action']) && !empty ($_POST['action']))
        {
            $action = $_POST['action'];
        };
        $message =  "$a - $b ="; $message .= $a-$b;
        switch ($action)
        {
            case '-': $message =  "$a - $b ="; $message .= $a-$b; break;
            case '+': $message =  "$a + $b ="; $message .= $a+$b; break;
            case '/': $message =  "$a / $b ="; $message .= $a/$b;
                if(isset($_POST['a']) || isset($_POST['b'  == '0']))
                {
                    $message = "Дурачек не?";
                }
                break;
            case '*': $message =  "$a * $b ="; $message .= $a*$b; break;
            default: $message = "WTF? ";
        }
    }
    return $message;
}
?>
<h1>Привет мир!</h1>
<div class="row" style="margin: 10px;">
    <div class="col-6">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="from-label">Введите число А</label>
                <input type="text" class="form-control" name="a">
            </div>
            <div class="mb-3">
                <label class="from-label">ВВедите число Б</label>
                <input type="text" class="form-control" name="b">
            </div>
            <div class="mb-3">
                <select class="form-select" name="action">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btnCalc">Подсчитать</button>
        </form>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                Результат) <br>
                <?php echo calc();?>
            </div>
        </div>
    </div>
</div>



<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

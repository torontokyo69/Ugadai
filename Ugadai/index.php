<?php
session_start();

if (!$_SESSION['otvet']) {
    $_SESSION['rand'] = "Антон";
    $_SESSION['otvet'] = true;
}

if (isset($_POST['vvod'])) {
    // здесь ваша логика
    if ($_POST['vvod'] > $_SESSION['rand']) {
        $msg = "Неправильно";
    } elseif ($_POST['vvod'] < $_SESSION['rand']) {
        $msg = "Неправильно";
    } else {
        $msg = "Ура!!! Вы угадали!";
        $_SESSION['otvet'] = false;
    }
} else {
    // код для обработки случая, когда $_POST['vvod'] не существует
    $msg = "Угадайте главного гандона взвода";
}
?>
<html>
<title>Game</title>
<head>
<center>
<h2> <?php echo $msg."<br>"; ?> </h2>
<form method="post">

<input type="text" name="vvod" />
<input type="submit" value="Угадать" />

</form>
</center>
</body>
</html>
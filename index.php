<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = (int) $_POST['code'];

    if ($code >= 1 && $code <= 999) {
        $articles = array(
            21 => 'un blouson en cuir',
            123 => 'une paire de chaussette'
        );

        if (isset($articles[$code])) {
            $message = 'Le code ' . $code . ' est correct. L\'information correspondante est : ' . $articles[$code] . '.';
        } else {
            $message = 'Le code ' . $code . ' est correct.';
        }
    } elseif ($code === 0) {
        $message = 'Le code zéro est un cas particulier.';
    } else {
        $message = 'Le code est incorrect, trop grand !';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ticket</title>
</head>
<body>
    <h1>Ticket</h1>

    <form method="post" action="">
        <label for="code">Code :</label>
        <input type="number" name="code" id="code">
        <input type="submit" value="Valider">
    </form>

    <?php
    if ($message != "") {
        echo $message;
    }
    ?>
</body>
</html>

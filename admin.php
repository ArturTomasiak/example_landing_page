<?php //this file is a place to view the messages sent from PJATK.php
session_start(['cookie_lifetime' => 60 * 60 * 24 * 7]);
$messages = glob("messages" . '/*.txt'); 
$passwords = array("password", "admin", "1234"); //placeholders
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login'])) {
        if (!isset($_SESSION['login_request']))
            $_SESSION['login_request'] = 1;
        else if ($_SESSION['login_request'] > 5)
        header('Location: PJATK.php');
        else
            $_SESSION['login_request']++;
        foreach ($passwords as $password)
            if($password == $_POST['password']) {
                $_SESSION['admin'] = true; $_SESSION['login_request'] = 0;
            }
    }
    
    foreach ($messages as $index => $filename) {
        if (isset($_POST[$index])) {
            unlink($filename);
            $messages = glob("messages" . '/*.txt'); 
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJATK admin</title>
    <meta name="description" content="PJATK -> admin_hub">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="message">
<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) :
foreach ($messages as $index => $message) {
    $fileContents = file($message, FILE_IGNORE_NEW_LINES); 
    if (count($fileContents) >= 2) {
        echo '<div class="comment">';
        echo "<h2>{$fileContents[0]}</h2>";
        echo "<h2>{$fileContents[1]}</h2>"; 
        for ($i = 2; $i < count($fileContents); $i++) 
            echo "<p>{$fileContents[$i]}</p>";
        ?>
        <form method="POST" action="admin.php">
        <input type="submit" name="<?php echo $index; ?>" value="delete">
        </form>
        </div>
        <?php
    }
}
else : ?>
<div><h1>admin only</h1></div>
<form method="POST" action="admin.php">
<div><input type="password" name="password" required></div>
<div><input type="submit" name="login" value="login"></div>
</form>
<div><a href="PJATK.php">back to landing page</a></div>
<?php endif; ?>
</div>
</body>
</html>
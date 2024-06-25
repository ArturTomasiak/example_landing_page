<?php
session_start(['cookie_lifetime' => 60 * 60 * 24 * 7]);
include 'lang.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION['message_request'] == NULL)
        $_SESSION['message_request'] = 1;
    else
        $_SESSION['message_request']++;

    if ($_SESSION['message_request'] > 10)
        $msg_status = $msg_error;
    else {
    $name    = $_POST['name'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    $safe_subject = preg_replace('/[^a-zA-Z0-9-_]/', '_', $subject); 
    $safe_subject = str_replace(' ', '-', $safe_subject); 

    $files = glob("messages" . '/*.txt');
    $file_count = count($files) + 1;

    $filename = 'messages/' . $file_count . '-' . $safe_subject . '.txt';
    $file_content = $name . PHP_EOL . $subject . PHP_EOL . $content;

    file_put_contents($filename, $file_content);
    $msg_status = $msg_success;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polsko-Japońska Akademia Technik Komputerowych</title>
    <meta name="description" content="PJATK -> the university to progress">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="images/pjatk-logo.png" width="50" height="50" alt="<?php echo htmlspecialchars($alt_logo); ?>" class="logo">
            <nav class="nav-links">
                <a href="#about"><?php echo htmlspecialchars($about); ?></a>
                <a href="#reviews"><?php echo htmlspecialchars($reviews); ?></a>
                <a href="#socials"><?php echo htmlspecialchars($socials_and_contact); ?></a>
                <a href="#message"><?php echo htmlspecialchars($send_a_message); ?></a>
            </nav>
            <button class="nav-toggle" aria-label="Toggle navigation">
                &#9776;
            </button>
            <div class="language-switch">
                <a href="?lang=en">eng</a>
                <a href="?lang=pl">pl</a>
            </div>
        </div>
    </header>

    <script>
        document.querySelector('.nav-toggle').addEventListener('click', () => {
            document.querySelector('.nav-links').classList.toggle('unhidden');
            document.querySelector('.language-switch').classList.toggle('hidden');
            document.querySelector('.logo').classList.toggle('hidden');
        });
    </script>

    <div class="slideshow">
        <button class="slideshow-btn left" id="left-btn">&lt;</button>
        <div class="slideshow-images">
            <img src="images/promotional-material1.jpg" alt="<?php echo htmlspecialchars($alt_promotional_material_1); ?>">
            <img src="images/promotional-material2.jpg" alt="<?php echo htmlspecialchars($alt_promotional_material_2); ?>">
            <img src="images/promotional-material3.png" alt="<?php echo htmlspecialchars($alt_promotional_material_3); ?>">
        </div>
        <button class="slideshow-btn right" id="right-btn">&gt;</button>
        <a href="https://pja.edu.pl/en/"><?php echo htmlspecialchars($apply); ?></a>
    </div>

    <div class="content">
        <section id="about">
            <div class="title">
            <h1><?php echo htmlspecialchars($about); ?></h1>
            </div>
            <div class="about-content">
            <div class="about-section-1">
            <p><?php echo htmlspecialchars($introduction); ?></p>
            <p><?php echo htmlspecialchars($education_fields_into); ?></p>
            <ul>
            <?php foreach ($education_fields as $field) : ?>
                <li><?php echo htmlspecialchars($field); ?></li>
            <?php endforeach ?>
            </ul>
            <p><?php echo htmlspecialchars($doctorate); ?></p>
            <p><?php echo htmlspecialchars($foreigners); ?></p>
            <p><?php echo htmlspecialchars($extras); ?></p>
            <img src="images/about_section_1.jpg" width="800" heigth="533" alt="<?php echo htmlspecialchars($alt_about_section_1); ?>">
            </div>
            <div class="about-section-2">
            <img src="images/about_section_2.jpg" width="1008" heigth="674" alt="<?php echo htmlspecialchars($alt_about_section_2); ?>">
            <h1><?php echo htmlspecialchars($achievements); ?></h1>
            <?php foreach ($awards as $award) : ?>
            <p><?php echo htmlspecialchars($award); ?></p>
            <?php endforeach; ?>
            </div>
            </div>
        </section>

        <section id="reviews">
            <h1><?php echo htmlspecialchars($reviews); ?></h1>
            <div class="reviews">
            <?php foreach ($reviews_array as $review_content) : ?>
                <div class="width-limit">
                <a style="font-weight:bold;"><?php echo htmlspecialchars($review_content[0]); ?></a>
                <a style="font-size:small; margin-left: 5px;"><?php echo htmlspecialchars($review_content[1]); ?></a>
                <p><?php echo htmlspecialchars($review_content[2]); ?></p>
                </div>
            <?php endforeach ?>
            </div>
        </section>

        <section id="socials">

            <h1><?php echo htmlspecialchars($socials_and_contact); ?></h1>

            <div class="socials">

            <div class="warsaw">
            <h1><?php echo htmlspecialchars($wwa); ?></h1>

            <div class="socials-href">

            <div>
            <a href="https://www.facebook.com/polskojaponska/?locale=pl_PL">
                <img src="images/fb.png" width="100" heigth="100" alt="facebook logo">
            </a>
            </div>

            <div>
            <a href="https://twitter.com/polskojaponska?lang=pl">
                <img src="images/twitter.png" width="100" heigth="100" alt="twitter logo">
            </a>
            </div>
        
            <div>
            <a href="https://www.instagram.com/polskojaponska/">
                <img src="images/ig.png" width="100" heigth="100" alt="instagram logo">
            </a>
            </div>

            </div>
            
            <p>Koszykowa 86, 02-008 Warszawa</p>
            <p>pjatk@pja.edu.pl</p>

            </div>
            
            <div class="gdansk">
            <h1><?php echo htmlspecialchars($gdansk); ?></h1>

            <div class="socials-href">

            <div>
            <a href="https://www.facebook.com/PjatkGdansk/?locale=pl_PL">
                <img src="images/fb.png" width="100" heigth="100" alt="facebook logo">
            </a>
            </div>

            <div>
            <a href="https://twitter.com/pjatkgdansk">
                <img src="images/twitter.png" width="100" heigth="110" alt="twitter logo">
            </a>
            </div>

            <div>
            <a href="https://www.instagram.com/pjatkgdansk/?hl=pl">
                <img src="images/ig.png" width="100" heigth="100" alt="instagram logo">
            </a>
            </div>
            
            </div>
            
            <p>Targ Drzewny 9/11, 80-894 Gdańsk</p>
            <p>gdansk@pja.edu.pl</p>

            </div>

            </div>

        </section>
    </div>

    <section id="message">
    <h1><?php echo htmlspecialchars($send_a_message); ?></h1>
    <form method="POST" action="PJATK.php">
    <div><input type="text" name="name" required placeholder="<?php echo htmlspecialchars($placeholder_name); ?>">    </div>
    <div><input type="text" name="subject" required placeholder="<?php echo htmlspecialchars($placeholder_topic); ?>"></div>
    <div><textarea name="content" placeholder="<?php echo htmlspecialchars($placeholder_content); ?>"></textarea>     </div>
    <div><input type="submit" name="send"  value="<?php echo htmlspecialchars($send); ?>">                            </div>
    </form>
    <div><?php if (isset($msg_status)) : ?>
        <a><?php echo htmlspecialchars($msg_status); ?></a>
    <?php endif; ?></div>
    </section>

    <footer><?php echo htmlspecialchars($disclaimer); ?></footer>

    <script src="slideshow.js"></script>
</body>
</html>
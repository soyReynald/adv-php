<?php
/**
 * Hangman
 *
 * @author Marc Oliveras Galvez <admin@oligalma.com> 
 * @link http://www.oligalma.com
 * @copyright 2015 Oligalma
 * @license GPL License
 */
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hangman</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="hangman-div2">
            <div>
                Choose a letter:
                <div id="letters">
                    <?php
                    foreach (range('A', 'Z') as $char) {
                        echo '<span class="letter">' . $char . '</span>';
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="lives-left-div">
                    Lives left: <span id="lives-left"><?= $_SESSION['lives'] ?></span>
                </div>
            </div>
            <div>
                <img src="images/hangman/0.jpg" id="hangman" alt="hangman"/>
            </div>
            <div>
                <div id="guessed-word-div">
                    <?= $blankWord ?>
                </div>
                <div id="the-word-was-div" class="display-none"></div>
                <div id="play-again-div" class="display-none">
                    <a href="index.php">Play again?</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="credits">
            <span>by <a href="http://oligalma.com" target="_blank">Oligalma</a></span>
        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script> 
    </body>
</html>




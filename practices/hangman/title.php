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
         <div id="hangman-div">
            <form action="controller.php" method="POST">
               <input type="hidden" name="action" value="1" />
               <img src="images/logo.png" id="logo" />
                <span id="credits">by <a href="http://oligalma.com" target="_blank">Oligalma</a></span>
                <div class="center">
                    <div id="levels-div">
                        <span id="level">
                            <input type="radio" name="level" checked="checked" id="level_0" value="0">
                                <label for="level_0">Easy game: you are allowed 10 misses.</label><br>
                            <input type="radio" name="level" id="level_1" value="1">
                                <label for="level_1">Medium game: you are allowed 5 misses.</label><br>
                            <input type="radio" name="level" id="level_2" value="2">
                                <label for="level_2">Hard game: you are allowed 3 misses.</label>
                         </span>
                    </div>
                    <div>
                        <input type="submit" value="Play!!!" id="submit-button" />
                    </div>
                </div>
            </form>
        </div>      
    </body>
</html>

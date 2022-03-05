# PHPBingo
The current game use Session variables to save the called numbers and the availables numbers, so, It needs to be set into a PHP web server

# Setup
- Copy the entire source folder into a PHP server application folder

# Play
Start New Game: execute the page NewGame.php
Generate a new card: CardGenerator.php
Call numbers: CallNumber.php
Check called numbers: CheckNumbers.php

Menu: menu.php

# Source Files
app\Card
    Build each bingo card with random values

app\Number
    Get random numbers, Set the column assigned to each number 

app\Table
    Build the current called numbers table

Config.php
    Predefined settings, limits and data

CallNumber.php
    UI to call the next available number

CardGenerator.php
    UI to generate a new card with random numbers

CheckNumber.php
    UI to check the called numbers

NewGame.php
    Reset all variables and regenerate the available numbers

Menu.php
    UI to get the game easier 


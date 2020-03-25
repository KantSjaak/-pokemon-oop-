<div id="inputContainer">
    <form method="post">
        <p>Name of the pokemon goes here: <input type="text" name="Input1"></p>
        <p>How much hp does your pokemon have? <input type="number" name="Input2"></p>
        <p>What element is your pokemon? <input type="text" name="Input3"></p>
        <p>What is the name of your first attack? <input type="text" name="Input4"> and how much damage does it do? <input type="number" name="Input5" </p>
        <p>What is the name of your second attack? <input type="text" name="Input6"> and how much damage does it do? <input type="number" name="Input7" </p>
        <p>How much is the multiplier for being strong against the other pokemon?(offensive)<input type="number" name="Input8"></p>
        <p>How much is the multiplier for being strong against the other pokemon?(defensive) <input type="number" name="Input9"></p>
        <input type="submit">
    </form>
</div>

<?php
require "./Pokemon.php";
require "./AttackMoveMaker+DamageMultiplierCalcualtor.php";
require "./element.php";
require "./attack.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "The name of your pokemon is: ". $_POST["Input1"]. "<br>";
    echo "The hp value of your pokemon is: ". $_POST["Input2"]. "<br>";
    echo "The element of your pokemon is: ". $_POST["Input3"]. "<br>";
    echo "The attack name of your pokemon is: ". $_POST["Input4"]. " and the damage it does is: ". $_POST["Input5"]. "<br>";
    echo "The attack name of your pokemon is: ". $_POST["Input6"]. " and the damage it does is: ". $_POST["Input7"]. "<br>";
    echo "The damage multiplier of your pokemon is: ". $_POST["Input8"]. "<br>";
    echo "The weakness multiplier of your pokemon is: ". $_POST["Input9"];
    $Pokemon1T2 = new Pokemon($_POST["Input1"], $_POST["Input2"], element::$ELementfire, $primaryattack = new attack($_POST["Input3"], $_POST["Input4"]), $secondaryattack = new attack($_POST["Input5"], $_POST["Input6"]), $_POST["Input7"], $_POST["Input8"]);

    print_r($Pokemon1T2);

/*
    $name; //string - this is the name of your pokemon
    $hitpoints; //int - this is the hp normal value is 60
    $element; //string - this sets your element - element::Element*insert your element here*, for help with names go to element.php
    $primaryattack; //this one is a little different. you create a instance of attack here. to make a new instance do "new attack("name", 50). "name" is your attack name and 50 is your damage value with 50 being a lil high
    $secondaryattack; //look at $primaryattack
    $dmgmultiplier; //this one does an * if you are strong to the enemy. example: 50*1.5 = 75 meaning a lot of damage
    $wknsmultiplier; //this is the reduce the damage of the attack by this number 10~20 for normal
*/
}
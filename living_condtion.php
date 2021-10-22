<?php


function livingCondition($livingCondition = "")
{
?>
    <option value="0" <?php echo $livingCondition == 0 ? 'selected' : null ?>>Poor (Less than PHP 10,481)</option>
    <option value="1" <?php echo $livingCondition == 1 ? 'selected' : null ?>>Low-income class (Between PHP 10,481 and PHP 20,962) </option>
    <option value="2" <?php echo $livingCondition == 2 ? 'selected' : null ?>>Lower middle-income class (Between PHP 20,962 and PHP 41,924)</option>
    <option value="3" <?php echo $livingCondition == 3 ? 'selected' : null ?>>Middle middle-income class (Between PHP 41,924 and PHP 73,367)</option>
    <option value="4" <?php echo $livingCondition == 4 ? 'selected' : null ?>>Upper middle-income class (Between PHP 73,367 and PHP 125,772) </option>
    <option value="5" <?php echo $livingCondition == 5 ? 'selected' : null ?>>Upper-income class (Between PHP 125,772 and PHP 209,620)</option>
    <option value="6" <?php echo $livingCondition == 6 ? 'selected' : null ?>>Rich (PHP 209,620 and above)</option>
<?php

}

?>
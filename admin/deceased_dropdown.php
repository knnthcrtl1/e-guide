<?php


function isParentDeceased($isDeceased = "")
{
?>
    <option value="1" <?php echo $isDeceased == 1 ? 'selected' : null ?>>Yes</option>
    <option value="2"  <?php echo $isDeceased == 2 ? 'selected' : null ?>>No</option>
<?php

}

?>
<?php
function NewOrder($name, $telNumber, $purchase)
{
    global $mysqli;
    $query = "INSERT INTO orders (name,telNumber,purchase) VALUE ('" . $name . "','" . $telNumber . "','" . $purchase . "')";
    $result = $mysqli->query($query);
    return $result;
}

function isActive($action,$link)
{
    if($action == $link){
        echo "class='navActive'";
    }
}
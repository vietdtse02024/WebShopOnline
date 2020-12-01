<?php
function introduction_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM intro WHERE id=$id";
    mysqli_query($GLOBALS['conn'],$sql) or die(mysqli_error($GLOBALS['conn']));
}

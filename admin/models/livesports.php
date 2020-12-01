<?php
function livesport_delete($id) {
    $id = intval($id);
    $sql = "DELETE FROM livesport WHERE id=$id";
    mysqli_query($GLOBALS['conn'],$sql) or die(mysqli_error($GLOBALS['conn']));
}

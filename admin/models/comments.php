<?php
function comment_delete($comid) {
    $id = intval($comid);
    $sql = "DELETE FROM comment WHERE id=$id";
    mysqli_query($GLOBALS['conn'],$sql) or die(mysqli_error($GLOBALS['conn']));
}

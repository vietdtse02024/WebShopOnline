<?php
function comment_delete($comid) {
    $id = intval($comid);
    //x�a ph?n gi?i thi?u
    $sql = "DELETE FROM comment WHERE id=$id";
    mysql_query($sql) or die(mysql_error());
}
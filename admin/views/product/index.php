<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=product&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <?php require('tableNewproduct.php'); ?>
        <?php require('tableOrderproduct.php'); ?>
        <?php require('tableSaleproduct.php'); ?>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
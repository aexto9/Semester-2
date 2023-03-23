<?php
include_once 'top.php';
include_once 'sidebar.php';
?>
<div id="layoutSidenav_content">
    <div>
        <?php
        error_reporting(0);
        $hal = $_GET['hal'];
        if ( !empty($hal)){
            include_once $hal ;
        } else {
            include_once 'dashboard.php';
        }
        ?>
    </div>
</div>

<?php
include_once 'bottom.php';
?>
<?php
function module_ribbon($param = array()) {

    $category = (isset($param['category'])) ? $param['category'] : 'art';
    $with_comment = (isset($param['with-comment']) && $param['with-comment'] == true) ? true : false;
?>
    <div class="ribbon">
        <ul>
            <li><a href="">#<?php echo $category; ?></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
            <?php if ($with_comment) { ?>
            <li><a href=""><i class="fa fa-comment"></i></a></li>
            <?php } ?>
        </ul>
    </div>
<?php
}
?>
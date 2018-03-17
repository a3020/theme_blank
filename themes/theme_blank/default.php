<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!doctype html>
<html>
    <head>
        <?php
        View::element('header_required');
        ?>
    </head>
    <body>
        <div class="<?php echo $c->getPageWrapperClass()?>">
            <?php
            $a = new Area('Main');
            $a->display($c);
            ?>
        </div>

        <?php
        View::element('footer_required');
        ?>
    </body>
</html>

/* Menu */
<?php
$leftMenu = array(
    array('href' => 'index.php', 'zoomik' => 'zumik'),
    array('href' => 'table.php', 'zoomik' => 'table'),
    array('href' => '/', 'zoomik' => 'home')
);
?>
<li><a href="<?= $leftMenu[0]['href']?>"><?= $leftMenu[0]['zoomik']?></a>

    <?php
    function drawMenu($menu, $vertical = true){
        $style = '';
        if (!$vertical)
            $style = " style='display:inline; margin-right:15px'";
        echo "<ul>";
        foreach ($menu as $item){
            echo "<li$style>";
            echo "<a href='{$item['href']}'>{$item['zoomik']}</a>";
            echo "</li>";
        }
        echo "</ul>";}

    drawMenu($leftMenu, true);    ?>
    <hr>
    <?php
    drawMenu($leftMenu, false);
    ?>
    /**********************************************************/
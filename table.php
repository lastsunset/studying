<?
$cnt = 0;
function drawTable($rows = 10, $cols = 10, $color = 'yellow'){
//    global $cnt;
    $GLOBALS[cnt]++;
    static $count = 0;
    $count++;
    echo "Таблица отрисована $count раз(а)";
    echo "<table border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
        if ($tr == 1 | $td == 1)
        echo "<th style='background-color:$color'>" . $tr * $td . "</th>";
        else
        echo "<td>" . $tr * $td . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

drawTable();
drawTable(4);
drawTable(3, 3);
echo "Таблица отрисована $cnt раз(а)";


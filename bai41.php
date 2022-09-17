<table border="1px">
    <tr>
        <?php
        /*in ra bảng cửu chương 6x6*/
        for($i = 1; $i < 7; $i ++) {
            echo "<td>";
            for($j = 1; $j <7; $j ++) {
                echo "$i x $j = " . ($i * $j);
                echo "<br>";
            }
            echo "</td>";
        }
        ?>
    </tr>
</table>
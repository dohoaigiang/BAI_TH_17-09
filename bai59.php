
<?php
/*Viết một chương trình PHP để đọc một ngày (từ 2004/1/1 đến 2004/12/31) 
và in ngày của ngày đó. Ngày 1 tháng 1 năm 2004, là Thứ Sáu.
*/
    $days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
    $format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
    while (($line = trim(fgets(STDIN))) !== '') {
        sscanf($line, '%d %d', $m, $d);
        if ($m === 0) {
            break;
        }
        $n = $days[$m - 1] + $d;
        $today = $format[$n % 7];
        echo "The day is: ".$today, PHP_EOL;
}
?>
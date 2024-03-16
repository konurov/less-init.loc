<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 
        print(1);
        print(2);
        print(3);
        // и так далее...

*********while,do-while,for******

        

        while (условие) {
            какие-то действия;
        }
        $i = 1;
        while($i <= 10){
            echo $i;
            $i++;
        }*/
        /* пример 2 

            $i = 1;
            while ($i <= 10):
                echo $i;
                $i++;
            endwhile;
    echo "<table border=1>";
    $i = 1;
    $sam = 0;
    while($i<=8){
        $sam = $i;
        echo " <tr>";
        $n =1;
        while($n <= 8){
            if($sam%2 ==0){
                echo "<td bgcolor='red'>$sam</td>";
                $sam++;
            }else{
                echo "<td>$sam</td>";
                $sam++;
            }
           
            $n++;
        }
        echo " </tr>";
        $i++;
    }
    echo "</table>";*/

    /*$i = 1;
echo "<table border=\"1\">\n";
while($i <= 15){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 5){
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';
$year = 1900;
echo '<select>' . "\n";
	while($year <= 2024){
		echo "\t<option value='$year'>$year</option>\n";
		$year++;
	}
echo '</select>';
$i = 1;
do{
	echo $i++ . '<br>';
}while($i <= 10);
*/
/* пример 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo "<br>";

/* пример 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo "<br>";

/* пример 3 */
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* пример 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);





    ?>
    
</body>
</html>
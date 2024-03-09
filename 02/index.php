<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*if (условие) {
        код, который нужно выполнить, если условие выполнено;
    }
   if(0){
    echo 'Условие выполнено';
   }*/

   //var_dump((bool) 0);
   //var_dump((bool) NUll);
   //var_dump((bool) 2);
   //var_dump((bool) '');
/*
   if(2){
    echo 'Условие выполнено';
   }

        $x = 15;
        if ($x <= 10) {
            echo 'Число больше 10';
        }else{
            echo "ok";   
        }

            $light = 'green';
            if( $light == 'green' ){
                echo 'We may go';
            }elseif( $light == 'yellow'){
                echo 'We may ready';
            }else{
                echo 'We must stop';
            }
            $h = 5;
            if( $h < 50 ){
                echo 'OK';
            }elseif($h == 5){
                echo 'Yes';
            }
        $y = 10;
        if( $y==5 and  $y > 9){
            echo 'OK';
        }
       if(5!=5) {
        echo 'OK';
        echo 'OK2';
       }*/

       //Оператор switch

           /* $x = 10;

            switch ($x) {
                case 1:
                    echo 'Число равно 1';
                    break;
                case 2:
                    echo 'Число равно 2';
                    break;
                default:
                    echo 'Число не равно ни 1, ни 2';
            }*/
            /*$x = 2;

                    if ($x == 1) {
                        echo 'Число равно 1';
                    } elseif ($x == 2) {
                        echo 'Число равно 2';
                    } else {
                        echo 'Число не равно ни 1, ни 2';
                    }*/
        $y = 4;
        if($y % 2 == 0){
            echo "Жуп сан";
        }else{
            echo "Так сан";
        }

        $x = 2;

            if ($x % 2 == 0) {
                echo 'Число чётное';
            } else {
                echo 'Число нечётное';
            }



    
    ?>
    Условия в PHP  https://php.zone/kurs-php-dlya-nachinayushih/usloviya-v-php
</body>
</html>
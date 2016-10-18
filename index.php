<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // put your code here
            $arr = ['a'=>23,'b'=>55,'c'=>70];
            print_r($arr);
            echo '<hr>';
            echo $arr['b'].'<hr>';
            
            foreach ($arr as $key => $v){
                echo 'key : '.$key.' = '.$v.'<br>';
            }
            
            echo '<hr>';
            
            $arr2 = ['aaa','bbb','ccc'];
            print_r($arr2);
            echo '<br>';
            
            for($x=0;$x<count($arr2);$x++){
                echo $arr2[$x].'<br>';
            }
        ?>
    </body>
</html>

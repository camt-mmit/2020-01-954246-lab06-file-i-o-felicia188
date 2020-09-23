<?php
 /*ID:602110188
name:Chen Shuo 
wechart:felicia
file:hw6-1-1.txt  hw6-1-2.txt*/
    $fin = fopen($_SERVER['argv'][1], 'r');
    fscanf($fin, "%d", $n);
    printf("number of data %d\n",$n);
    $total=0;
    for($i = 0; $i < $n; $i++) {//对文本的每一行运行命令
        fscanf($fin, "%s %f", $name, $score);//对文本每一行的数据代入变量
        printf("%6.s : %.6f\n", $name, $score,);//打印
        $total+=$score;
    }
    $Average=$total/$n;
    printf("Average score = %6.2f\n",$Average,);
    fclose($fin);
//运行的时候要输入php e2.php example-02-input.txt
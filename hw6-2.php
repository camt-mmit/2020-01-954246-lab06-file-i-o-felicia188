<?php
$number=$argv[1];
    if(count($argv)!=3) {
        echo"        | ";
            for($i=2;$i<=$number;$i++){ 
            printf("%4d ",$i);
                }
        echo"\n";
        echo"-------------------------------------------\n";
        for($j=1;$j<=12;$j++) /*控制行*/
        {   printf("%4.d ",$j);
            echo"   | ";
            for($i=2;$i<=$number;$i++) /*控制列*/
                {
                printf("%4d ",$n=$j*$i);
                }
echo"\n";
        } 
}
else{
    $file = fopen('ass-02-output.txt', 'w');
    fscanf(STDIN,"%d",$number);
    fprintf($file,"        | ");
    for($i=2;$i<=$number;$i++){ 
        fprintf($file,"%4d ",$i);
    }
    fprintf($file,"\n");
    fprintf($file,"-------------------------------------------\n");
    for($j=1;$j<=12;$j++) /*控制行*/
    {   fprintf($file,"%4.d ",$j);
        fprintf($file,"   | ");
       for($i=2;$i<=$number;$i++) /*控制列*/
       {
       fprintf($file,"%4d ",$n=$j*$i);
       }
       fprintf($file,"\n");
    }    
    
}

  

 
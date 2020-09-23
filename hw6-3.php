<?php
if($_SERVER['argc'] == 2)//如输入1个文件名
{ 
    $fout=fopen($_SERVER['argv'][1], 'w');//$fout=ass-03-output-01.txt
    for($i=0;$i<9999;$i++){
    fscanf(STDIN,"%s",$out);
    if($out!="^z"){
        fprintf($fout,"%s\n",$out);
    }
    else{
    break;
    }
}
}
if($_SERVER['argc'] == 3) {//如输入2个文件
    $f1=file_get_contents($_SERVER['argv'][1]);{// $f1=输入的第一个文件（ass-01-input-01.txt、not_existed_file.txt）
        if(is_file($_SERVER['argv'][1])) //f1=ass-01-input-01.txt 
            {
                $f2=fopen($_SERVER['argv'][2], 'w');// f2=ass-03-output-02.txt
                fputs($f2,$f1);
                fclose($f2);
            }
            else
            {
            echo ("Cannot open file not_existed_file.txt!!! \n");// $f1是空的，打印..
            } 
    
    }}

        if($_SERVER['argc'] ==1){
            echo"invalid arguments \n";
            echo"use ass03 [input_file] output_file ";
        }
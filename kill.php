<?php

function kill(){
    shell_exec("taskkill /im gettingcsv.exe /f");
    shell_exec("pkill gettingcsv.exe");

    shell_exec("taskkill /im gettingcsv.exe /f");
    shell_exec("pkill gettingcsv.exe");
}
kill();
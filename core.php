<?php

function runAlgorithm(){
    echo "Uruchamianie skryptu";
    echo "<br>";
    $output=@shell_exec("gettingcsv.exe 1000 0.1");//10 rekordów na sekunde w sumie 1000 rekordów, więc 100 sekund trwa
    echo $output;
    echo "<br>";
    echo "Finished in PHP";
}
runAlgorithm();


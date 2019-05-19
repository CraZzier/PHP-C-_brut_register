<?php

function delete(){
    shell_exec("rm data.csv -f");
    shell_exec("del data.csv");
    shell_exec("rm rekord.json -f");
    shell_exec("del rekord.json");
}
delete();
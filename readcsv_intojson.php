<?php
 function sendToJson($data){
     $formattedData = json_encode($data);
     $filename = "rekord.json";
     $handle = fopen($filename,'w+');
     fwrite($handle,$formattedData);
     fclose($handle);
 }

$file = @fopen("data.csv", "r") or die("Unable to open file!!");

$cursor = 0;
fseek($file, $cursor, SEEK_END);
shell_exec("stop.exe");
while(!feof($file)) {
    shell_exec("stop.exe");
    $mom = fgets($file);
    if(strlen($mom>2)){
        $dane = explode(";", $mom);
        for($i=0;$i<count($dane);$i++){
            $dane[$i] = intval($dane[$i]);
        }
        sendToJson($dane);
    }
    echo $mom."<br>";
}
echo "ok";
fclose($file);
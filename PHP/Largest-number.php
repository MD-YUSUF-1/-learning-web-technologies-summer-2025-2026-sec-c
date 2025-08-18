<?php
$arr = [10, 20, 30 ] ;
echo "Numbers: ";
for ($i=0; $i < count($arr); $i++) { 
    echo "$arr[$i] ";
};
echo"<br> ";
$largeNum =0;

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i]>$largeNum) {
        $largeNum = $arr[$i];
    }
};

echo "Largest number = $largeNum";

?>

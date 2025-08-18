<?php
$arr = ['Yusuf', 'Eshak', 'Jafrul' ] ;
echo "Elements: ";
for ($i=0; $i < count($arr); $i++) { 
    echo "$arr[$i], ";
};
echo"<br> ";
echo" Search for 'Yusuf' <br>";


for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i]==="Yusuf") {
        echo "Found";
        return;
    }    
};
echo "Not found";


?>

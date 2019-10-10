<?php
echo "Hoegroet moet de driehoenk zijn";
$sterretjes = readline();

for ($pyr1 = 1; $pyr1 <= $sterretjes; $pyr1++)
{
    for($pyr2 = 1; $pyr2<=$pyr1; $pyr2++)
    {
        echo  "*";
    }
    echo "\n";
}

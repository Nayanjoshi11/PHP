<?php
function prime_check($nm)
{
    if($nm==1)
    return 0;
    for($i=2;$i<=$nm/2;$i++)
    {
        if($nm%$i==0)
        return 0;
    }
    return 1;
}
$a=prime_check(5);
if($a==0)
echo"It is a prime number";
else
echo"It is not a prime number";
?>
    
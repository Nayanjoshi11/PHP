<?php
    function factorial($nm)
    {
        if($nm<2)
        return 1;
        else{
            return($nm*factorial($nm-1));
        }
    }
    echo factorial(5);
?>
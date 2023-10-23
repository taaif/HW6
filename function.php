<?php

    function add($x, $y){
        return $x + $y;
    }

    echo add(4, 3);




    function hello($x){
        $user = $x;

        if ($user === "Taaif") {
            echo "Hello " . $user;
        }else {
            echo "Bye " . $user;
        }
    }

   
?>
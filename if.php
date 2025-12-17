<?php
    $age = 17;
        if ($age >= 18) {
            echo "You are eligible to vote.";
        }elseif( $age > 70 ) {
            echo "Old.";
        }elseif( $age >= 16 ) {
            echo "You are to eligible to learn driving.";
        }else {
            echo "You are a kid.";
        }
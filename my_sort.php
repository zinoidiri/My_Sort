<?php

function bubble_Sort($my_array )
{
	$swapped=true;
    $n=count($my_array);
    $temp=null;
    while($swapped)
    {
        $swapped = false;
        for($i=0; $i<$n-1; $i++)
        {
            if( $my_array[$i]>$my_array[$i+1]) 
            {
                $temp=$my_array[$i];
                $my_array[$i]=$my_array[$i+1];
                $my_array[$i+1]=$temp;
                $swapped=true;
            }
        }
    }
	 var_dump($my_array);
    return $my_array;

}

bubble_Sort([15,2,6,23,4]);


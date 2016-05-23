<?php
    /**
     * Sort associative arrays in ascending order, according to the key
     *
     * @return Result JSON representation
    */
    function m_ksort(&$arg)
        {
            // Return all keys of an array
            $keys=array_keys($arg);
            // Sort above in ascending order
            sort($keys);
            //Change value as per key
            foreach($keys as $key)
                {
                $val=$arg[$key];
                unset($arg[$key]);
                $arg[$key]=$val;
                }
            //Returns JSON representation
            return json_encode( $arg ); 
        }
//----------------------------------------------------------------------------------------------------//        
    // Array    
    $arr = array("Princi" => "Delhi", "Nisha" => "Noida", "Zack" => "Ghz", "Daniel" => "Meerut" );
    //show original array
    echo "Original Array<br><br>";
    foreach ($arr as $user => $adr) {
             echo "$user = $adr <br>";
    }
    echo "<br><br>";
    echo "JSON representation after sorting according to the key<br><br>";
    //Call user defined sorting function by keys 'm_ksort' & pass array as parameter
    $result 	=	m_ksort($arr);
    // Show response into JSON format
    echo $result;
?>
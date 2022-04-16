<?php 

   //Question 01:

    $purchased_products = array(

        array('name' => 'banana',  'amount' => 10, 'total_price' => 550),

        array('name' => 'apple',     'amount' => 50,  'total_price' => 1500),

        array('name' => 'orange',  'amount' => 7,    'total_price' => 600),
        

    );
    echo "total purchased qty". '='. array_sum(array_column($purchased_products, 'amount'));
    echo "<br>";
    echo "total amoun". '= '. array_sum(array_column($purchased_products, 'total_price'));

    echo "<br>";
    
    //Question 02:
    
    echo "<br>";

    $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

    $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

    $result = array_merge($first_email_array, $first_email_array);
    print_r($result);

    echo "<br>";


    //Question 03:

    echo "<br>";

    $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

    $myArrChunks = array_chunk($citylist, 4);
    print_r($myArrChunks);



?>
<?php
    $students = array("moseti","Doroh","monica");
    // print_r($students);
    // sorting value in php
//    print_r(sort($students));
//    echo $_SERVER['HTTP_USER_AGENT'];
//    user info
    $user_info = array(
        "name" => "moseti zachary",
        "gender" => "male",
        "age" => 20,
        "spec" => "front-end",
    );
    var_dump($user_info)."<br>";
    // echo $user_info["name"]."<br>";
    // echo $user_info["age"]."<br>";
    // echo $user_info["gender"]."<br>";
    // echo $user_info["spec"]."<br>";
    

    // iterating through values in php
    $random_students = array(
        "one" => "moseti",
        "two" => "finna",
        "three" => "monih",
    );
    foreach($random_students as $stud){
        echo "Student: " . $stud . "<br>";
    }
    

?>
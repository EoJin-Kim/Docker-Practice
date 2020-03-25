<?php 

    $conn = mysqli_connect(
        'docker-mysql-test.co9eqtqpcyfn.us-east-2.rds.amazonaws.com',
        'user',
        'password',
        'TEST',
        '3306'
    );
    if(mysqli_connect_errno()){
        echo "failed to connect to MySQL: ".mysqli_connect_error();
    }
    $sql = "select VERSION()";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    print_r($row["VERSION()"]);
?>

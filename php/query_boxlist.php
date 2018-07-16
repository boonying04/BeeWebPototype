<?php
    $serverName = "beeconnexsql.database.windows.net";
    $connectionOptions = array(
        "Database" => "beeconnex_db",
        "Uid" => "oat",
        "PWD" => "#Orating0315"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false ) {
        echo("cannot connect" . PHP_EOL);
    }

    $sql= "SELECT BoxID, temp, humi, weig, status From dbo.beeconnex_tbl ";
    $boxlist= sqlsrv_query($conn, $sql);
    $boxlist_result = sqlsrv_fetch_array($boxlist, SQLSRV_FETCH_ASSOC);
    echo $boxlist_result['BoxID'] . "   " .$boxlist_result['temp'] . "   " . $boxlist_result['humi'] . "   " . $boxlist_result['weig'] . "   " . $boxlist_result['status'];
    echo "<br>";

    $sql= "SELECT COUNT(*) as count From dbo.beeconnex_tbl where status = '1' ";
    $countnor = sqlsrv_query($conn,$sql);
    $countnor_result = sqlsrv_fetch_array($countnor, SQLSRV_FETCH_ASSOC);
    echo $countnor_result['count'];
    echo "<br>";

    $sql= "SELECT COUNT(*) as count From dbo.beeconnex_tbl where status = '0' ";
    $countab = sqlsrv_query($conn,$sql);
    $countab_result = sqlsrv_fetch_array($countab, SQLSRV_FETCH_ASSOC);
    echo $countab_result['count'];

?>

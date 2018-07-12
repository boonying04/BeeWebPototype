<?php
$servername = "http://137.116.146.164/22";
$username = "root";
$password = "123456";
$dbname = "beeconnex_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
# column name down here
# messageID,BoxID, time_stamp, temp, humi, weig, sound, pic, latitude, longtitude, status

//CHAINGMAI//
###########################################

$Latest_Data_Boonrit = "SELECT *  FROM beeconnex_tbl WHERE BoxID = 'Boonrit101' ORDER BY messageID DESC LIMIT 1";
$result = $conn->query($Latest_Data_Boonrit);

if ($result->num_rows > 0) {
    echo "Latest Data <br/>";
    while($row = $result->fetch_assoc()) {
        echo "BoxID: " . $row["BoxID"]. " time_stamp: ". $row["time_stamp"]. " Temperaure: " . $row["temp"]. " Humidity: " . $row["humi"]. " Weight: " . $row["weig"]. "<br/><br/>";
    }
}
###########################################

$Graph_Humi_Temp_Boonrit = "SELECT BoxID,time_stamp,temp,humi FROM beeconnex_tbl  WHERE BoxID = 'Boonrit101' LIMIT 3 ";
$result = $conn->query($Graph_Humi_Temp_Boonrit);

    if ($result->num_rows > 0) {
        echo "Data For Temp And Humi Graph <br/>";
        while($row = $result->fetch_assoc()) {
            echo "BoxID: " . $row["BoxID"]. " time_stamp: ". $row["time_stamp"]. " Temperature: ". $row["temp"]. " Humidity: ". $row["humi"]. "<br/><br/>";
        } 
} 
###########################################

$Graph_Weight_Boonrit = "SELECT BoxID,time_stamp,weig FROM beeconnex_tbl  WHERE BoxID = 'Boonrit101' LIMIT 3 ";
$result = $conn->query($Graph_Weight_Boonrit);

    if ($result->num_rows > 0) {
        echo "Data For Weight Graph <br/>";
        while($row = $result->fetch_assoc()) {
            echo "BoxID: " . $row["BoxID"]. " time_stamp: ". $row["time_stamp"]. " Weight: ". $row["weig"]. "<br/><br/>";
        } 
}
###########################################

$Pic_Boonrit = "SELECT BoxID,pic,time_stamp FROM beeconnex_tbl  WHERE BoxID = 'Boonrit101' ORDER BY messageID DESC LIMIT 3 ";
$result = $conn->query($Pic_Boonrit);

    if ($result->num_rows > 0) {
        echo "Picture Slide <br/>";
        while($row = $result->fetch_assoc()) {
            echo "BoxID: " . $row["BoxID"]. " time_stamp: ". $row["time_stamp"]. " Picture: ". $row["pic"]. "<br/><br/>";
        } 
}

###########################################

$Pic_Boonrit = "SELECT BoxID,time_stamp,temp,humi,weig,status,sound FROM beeconnex_tbl  WHERE BoxID = 'Boonrit101' LIMIT 3 ";
$result = $conn->query($Pic_Boonrit);

    if ($result->num_rows > 0) {
        echo "Download Page <br/>";
        while($row = $result->fetch_assoc()) {
            echo "BoxID: " . $row["BoxID"]. " time_stamp " . $row["time_stamp"]. " Status: ". $row["status"]. " Temp: ". $row["temp"]. " Humidity: ". $row["humi"]. " Weight: ". $row["weig"]. " Sound: ". $row["sound"]. "<br/><br/>";
        } 
}
###########################################
//Boonrit//

$conn->close();
?>


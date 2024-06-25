<?php
  include("connection.php");

  if(!empty($_POST)){
    $sensor_ph = $_POST["sensor_ph"];
    $sensor_suhu = $_POST["sensor_suhu"];
    $sensor_do = $_POST["sensor_do"];
    $sensor_amonia = $_POST["sensor_amonia"];
    $sensor_suhu_baterai = $_POST["sensor_suhu_baterai"];
    $sensor_arus = $_POST["sensor_arus"];
    $sensor_tegangan = $_POST["sensor_tegangan"];

    $query = "INSERT INTO multisensor (sensor_ph, sensor_suhu, sensor_do, sensor_amonia, sensor_suhu_baterai, sensor_arus, sensor_tegangan)
            VALUES ('".$sensor_ph."', '".$sensor_suhu."', '".$sensor_do."', '".$sensor_amonia."', '".$sensor_suhu_baterai."', '".$sensor_arus."', '".$sensor_tegangan."')";
    if ($conn->query($query) === TRUE) {
      echo "Berhasil menyimpan data ke table log";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>
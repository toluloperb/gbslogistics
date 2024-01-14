<?php

    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "gbs_data";

    $host = "localhost";
    $username = "globrvfu_gbs";
    $password = "Trodpen2024*";
    $database = "globrvfu_gbs";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con)
	{
		die("Connection failed: ". mysqli_connect_error());
	}
?>
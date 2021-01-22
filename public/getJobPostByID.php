<?php

require_once 'admin/adminpage/includes/connect.php';
date_default_timezone_set('Asia/Dubai');
        $curDate = date('Y-m-d');
	$getID=$_POST["id"];
	$query=$mysqli->query("SELECT * FROM jobposts WHERE job_dateexpiry>'$curDate' AND job_ID=$getID");
if($query->num_rows>0){
	if($row=$query->fetch_array()){
echo json_encode($row);
    }
}
<?php

require_once 'admin/adminpage/includes/connect.php';
$rows=array();
date_default_timezone_set('Asia/Dubai');
        $curDate = date('Y-m-d');
	$args="";
	if(isset($_POST['category'])&&!empty($_POST['category'])&&$_POST['category']>0)
      $args.=" AND job_category=".$_POST['category'];
	if(isset($_POST['location'])&&!empty($_POST['location'])&&$_POST['location']>0)
      $args.=" AND job_address=".$_POST['location'];
	if(isset($_POST['search'])&&!empty($_POST['search']))
      $args.=" AND job_title LIKE '%".$_POST['search']."%'";

	$query=$mysqli->query("SELECT * FROM jobposts WHERE job_dateexpiry>'$curDate'".$args);
if($query->num_rows>0){
	while($row=$query->fetch_array()){
		$rows[]=$row;
    }
}
echo json_encode($rows);
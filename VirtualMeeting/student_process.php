<?php
include 'inc/conn.php';

if(isset($_POST['add_study_group']))
{	 
    $meeting_id = $_POST['inputMeetingId'];
    $student_id = $_POST['inputStudentId'];
    $topic = $_POST['inputTopic'];
    $details = $_POST['inputDescription'];
    $student_limit = $_POST['inputStudentLimit'];
	if($student_limit == null){
		$sql = "select add_study_group($meeting_id, '$topic', '$details', $student_id);";
	}
	else{
		$sql = "select add_study_group($meeting_id, '$topic', '$details', $student_id, $student_limit);";
	}
    
    $result = pg_query($db, $sql);
    if ($result) {
        echo '<script>history.go(-2);</script>';
    }
}
if(isset($_POST['Join_group']))
{	 
    $study_group_id = $_POST['Join_group'];
    echo $study_group_id;
    $student_id = $_POST['inputStudentId'];
    echo $student_id;
    $sql = "select join_study_group($student_id, $study_group_id);";
    $result = pg_query($db, $sql);
    if ($result) {
        echo '<script>history.go(-2);</script>';
    }
}
if(isset($_POST['Leave_group']))
{	 
    $study_group_id = $_POST['Leave_group'];
    echo $study_group_id;
    $student_id = $_POST['inputStudentId'];
    echo $student_id;
    $sql = "select leave_member($student_id, $study_group_id);";
    $result = pg_query($db, $sql);
    if ($result) {
        echo '<script>history.go(-2);</script>';
    }
}

if(isset($_POST['update_study_group']))
{	 
    $study_group_id = $_POST['group_id'];
    $student_id = $_POST['owner'];
    $place = $_POST['place'];
    $details = $_POST['details'];
    $limit = $_POST['limit'];
	if($limit == null){
		$sql = "select update_group($study_group_id, $student_id, '$place', '$details');";
	}
	else{
		$sql = "select update_group($study_group_id, $student_id, '$place', '$details', $limit);";
	}
    
    $result = pg_query($db, $sql);
    if ($result) {
        
        echo "<script>history.go(-2);</script>";
        
    }
}
if(isset($_POST['update_change_name']))
{	 
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $result = pg_query($db, "select update_student($student_id,'$student_name')");
    if ($result) {
        echo '<script>history.go(-2);</script>';
    }
}
?>
<?php
require_once("inc/connect.php");
session_start();
$action = $_POST['action'];
// Get User_id
$login_username = $_SESSION['username'];
!$login_username && returnRes(0, 'Please login first.');
$sql = "SELECT userID AS user_id FROM users WHERE username = '{$login_username}'";
$user_id = mysqli_query($conn, $sql);
$user_id = (int)mysqli_fetch_assoc($user_id)['user_id'];

switch ($action) {
    case 'book':
        $id = (int)$_POST['id'];
        $sql = "SELECT * FROM course_order WHERE user_id = {$user_id} AND course_id = {$id}";
        $issetOrder = mysqli_query($conn, $sql);
        $issetOrder = mysqli_fetch_assoc($issetOrder);
        !empty($issetOrder) && returnRes(0, 'You have already booked this class.', []);
        
         $nsql = "SELECT * FROM course WHERE num>0";
          $nsqlresult = mysqli_query($conn, $nsql);
            $nsqlresultcc = mysqli_fetch_assoc($nsqlresult);
         empty($nsqlresultcc) && returnRes(0, 'no this course or this course remaining amount is 0', []);

        $sql = "INSERT INTO course_order VALUES (null, $id, $user_id)";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            //success num - 1;
            $sql = "UPDATE course SET num = num - 1 WHERE id = {$id}";
            $res = mysqli_query($conn, $sql);
            !$res && returnRes(0, 'Error,please try again.', []);
            returnRes(1, 'Success.');
        } else {
            returnRes(0, 'Error,please try again.', []);
        }
        break;

    case 'cancel':
        $id = (int)$_POST['id'];
        $sql = "DELETE FROM course_order WHERE user_id = {$user_id} AND course_id = {$id}";
        $delRes = mysqli_query($conn, $sql);
        if ($delRes) {
            $sql = "UPDATE course SET num = num + 1 WHERE id = {$id}";
            $updateRes = mysqli_query($conn, $sql);
            !$updateRes && returnRes(0, 'Error,please try again.', []);
            returnRes(1, 'Success.', []);
        } else {
            returnRes(0, 'Error,please try again.', []);
        }
        break;
      case 'select':
        $sql = "select * from course_order WHERE user_id = {$user_id}";
        $selRes = mysqli_query($conn, $sql);
        $arr = [];
        if($selRes) {
            $arr = $selRes->fetch_all(MYSQLI_ASSOC);
        }
            returnRes(1, $arr, []);
        break;
       case 'selectdesc':
        $sql = "select * from course_order p1 INNER JOIN course p2 on p2.id=p1.course_id WHERE p1.user_id = {$user_id}";
        $selRes = mysqli_query($conn, $sql);
        $arr = [];
        if($selRes) {
            $arr = $selRes->fetch_all(MYSQLI_ASSOC);
        }
            returnRes(1, $arr, []);
        break;
}

/**
 * returnRes
 * @param $status
 * @param $msg
 * @param array $data
 */
function returnRes($status, $msg, $data = [])
{
    echo json_encode([
        'status' => $status,
        'msg' => $msg,
        'data' => $data
    ]);
    exit;
}
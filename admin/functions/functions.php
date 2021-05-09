<?php
function authPages($id="", $pageName="", $conn="") {
	
    $sql = "SELECT * FROM tbl_users WHERE user_user_id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    // $userLevel = mysqli_fetch_array($result)['user_level'];
    $userLvl = mysqli_fetch_array($result, MYSQLI_BOTH);

    $userLevel = $userLvl['user_level'];

    $sql = "SELECT * FROM tbl_restriction_page WHERE restriction_page_user_level LIKE '%{$userLevel}%'";
    $result = mysqli_query($conn, $sql);

    $pages = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($pages, $row["restriction_page_name"]);
    }

    return $pages;

}

function checkAuthPage($userAuthPages=[], $page="") {
    if ( !in_array($page, $userAuthPages) ) {
        header("Location: index.php");
    }
}

function authActions($id="", $actionName="", $conn="") {
	
    $sql = "SELECT * FROM tbl_users WHERE user_user_id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    $userLevel = mysqli_fetch_array($result)['user_level'];

    $sql = "SELECT * FROM tbl_restriction_action WHERE restriction_action_user_level LIKE '%{$userLevel}%'";
    $result = mysqli_query($conn, $sql);

    $actions = [];

    while($row = mysqli_fetch_assoc($result)) {
        array_push($actions, $row["restriction_action_name"]);
    }

    return $actions;

}

function checkAuthAction($userAuthAction=[], $action="") {
    if ( in_array($action, $userAuthAction) ) {
        return true;
    } else{
        return false;
    }
}
?>
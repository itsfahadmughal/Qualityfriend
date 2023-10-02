<?php
if(file_exists("util_config.php") && is_readable("util_config.php") && include("util_config.php")) 
{
    // Declaration

    $hotel_id= 0;

    if(isset($_POST["hotel_id"])){
        $hotel_id = $_POST["hotel_id"];
    }
    if(isset($_POST["user_id"])){
        $user_id = $_POST["user_id"];
    }


    $userid_array = array();
    $firstname_array = array();
    $chat_count_array = array();
    $chat_type_array = array();
    $chat_div = array();
    $max_chat_array = array();

    $data = array();
    $temp1=array();

    //Working

    $sql = "SELECT a.*,b.rule_7 FROM `tbl_user` as a INNER JOIN tbl_rules as b On a.`usert_id` = b.usert_id WHERE a.is_delete= 0 and a.is_active = 1 and a.hotel_id = $hotel_id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $i=1;
        while($row = mysqli_fetch_array($result)) {
            $user_ids =   $row['user_id'];
            $firstname =   $row['firstname'];
            $rule_7 =   $row['rule_7'];
            if($user_id != $user_ids){
                $chat_count = 0;
                $sql_count= "SELECT COUNT(*) as chat_count FROM `tbl_chat` WHERE `user_id_s` = $user_ids AND `user_id_r` = $user_id AND `for_what` ='user' AND `hotel_id` = $hotel_id AND `is_view` = 0";
                $result1 = $conn->query($sql_count);
                $row1 = mysqli_fetch_row($result1);
                $chat_count = $row1[0];
                //get max chat number



                $sql_count= "SELECT MAX(`chat_id`) as max_chat FROM `tbl_chat` WHERE (`user_id_s` = $user_ids AND `user_id_r` = $user_id ) OR (`user_id_s` = $user_id AND `user_id_r` = $user_ids) AND `for_what` ='user' AND `hotel_id` = $hotel_id";
                $result1 = $conn->query($sql_count);
                $row1 = mysqli_fetch_row($result1);
                $max_chat = $row1[0];





                if($rule_7 == 1){  

                    array_push($userid_array,$user_ids);
                    array_push($firstname_array,$firstname);
                    array_push($chat_count_array,$chat_count);
                    array_push($chat_type_array,"user");
                    array_push($max_chat_array,$max_chat);
                    array_push($chat_div,"");





                }
            }
            $i++;
        }
    }




    //get_team

    $sql = "SELECT * FROM `tbl_team` WHERE `is_delete` = 0 AND `hotel_id` = $hotel_id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $i=1;
        while($row = mysqli_fetch_array($result)) {
            $team_id =   $row['team_id'];
            $team_name =   $row['team_name'];
            $team_name_it =   $row['team_name_it'];
            $team_name_de =   $row['team_name_de'];
            $chat_count = 0;
            $sql_count= "SELECT COUNT(*) FROM `tbl_team_msg_view`WHERE `user_id` =  $user_id AND `team_id` =  $team_id AND `view` =  0";
            $result1 = $conn->query($sql_count);
            $row1 = mysqli_fetch_row($result1);
            $chat_count = $row1[0];

            //get max chat number
            $sql_count= "SELECT MAX(`chat_id`) as max_chat FROM `tbl_chat` WHERE  `user_id_r` = $team_id AND `for_what` ='team' AND `hotel_id` = $hotel_id ";
            $result1 = $conn->query($sql_count);
            $row1 = mysqli_fetch_row($result1);
            $max_chat = $row1[0];



            $sql_team_check = "SELECT `team_id` as maped_team_id,`user_id` as maped_userid FROM `tbl_team_map` WHERE `team_id` = $team_id AND `user_id` = $user_id";
            $result_team_check = $conn->query($sql_team_check);

            if ($result_team_check && $result_team_check->num_rows > 0) {



                array_push($userid_array,$team_id);
                array_push($firstname_array,$team_name);
                array_push($chat_count_array,$chat_count);
                array_push($chat_type_array,"team");
                array_push($max_chat_array,$max_chat);
                array_push($chat_div,"t_");



            }
            else{

            }

        }
        $i++;
    }











    for($i=0; $i<count($max_chat_array)-1; $i++)
    {
        for($j=0; $j<count($max_chat_array)-1; $j++)
        {
            if($max_chat_array[$j] < $max_chat_array[$j+1]){
                $temp= $max_chat_array[$j+1];
                $max_chat_array[$j+1]= $max_chat_array[$j];
                $max_chat_array[$j]= $temp;


                //name
                $temp_name= $firstname_array[$j+1];
                $firstname_array[$j+1]= $firstname_array[$j];
                $firstname_array[$j]= $temp_name;

                //user_id
                $temp_user_id= $userid_array[$j+1];
                $userid_array[$j+1]= $userid_array[$j];
                $userid_array[$j]= $temp_user_id;
                //count
                $temp_count= $chat_count_array[$j+1];
                $chat_count_array[$j+1]= $chat_count_array[$j];
                $chat_count_array[$j]= $temp_count;
                //msg_type
                $temp_msg_type= $chat_type_array[$j+1];
                $chat_type_array[$j+1]= $chat_type_array[$j];
                $chat_type_array[$j]= $temp_msg_type;

                //chat_div
                $temp_div= $chat_div[$j+1];
                $chat_div[$j+1]= $chat_div[$j];
                $chat_div[$j]= $temp_div;




            }
        }

    } 



    if(sizeof($firstname_array) > 0){
        for ($x = 0; $x < sizeof($firstname_array); $x++) {
            $temp = array();
            $temp['id_is'] = $userid_array[$x];
            $temp['firstname'] = $firstname_array[$x];
            $temp['chat_count'] = $chat_count_array[$x];
            $temp['chat_type'] = $chat_type_array[$x];


            array_push($data, $temp);
            unset($temp);
            $temp1['flag'] = 1;
            $temp1['message'] = "Successfull";
        }
    }
    else {
        $temp1['flag'] = 0;
        $temp1['message'] = "Data not Found!!!";
    }

    echo json_encode(array('Status' => $temp1,'Data' => $data));

}else{
    $temp1['flag'] = 0;
    $temp1['message'] = "Failed to connecting database!!!";
    echo json_encode(array('Status' => $temp1,'Data' => $data));
}
$conn->close();
?>
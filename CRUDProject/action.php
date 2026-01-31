<?php
$con = mysqli_connect ("localhost", "root", "", "informationdb");
if(!$con)
{
    die('connection Failed' . mysqli_connect_error());
}

if (isset($_POST['delete_data']))
    {
        $data_id = mysqli_real_escape_string ($con, $_POST ['data_id']);
        $query = "DELETE FROM userinfo WHERE id ='$data_id'";
        $query_run = mysqli_query($con, $query);
        
        if ($query_run)
            {
                $res = [
                    'status' =>200,
                    'message' => 'Deleted Successfully'
                ];
                echo json_encode ($res);
                return;
            }
            else{
                $res = [
                    'status' =>500,
                    'message' =>'Not Deleted'
                ];
                echo json_encode($res);
                return;
            }
    }

?>
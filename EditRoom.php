<?php
$mysqli = new mysqli('localhost','root','','hostelmanagementsystem');
$StuId = '';

if(isset($_GET['edit'])) // On pressing edit Button
   {
    $studentid12 = $_GET['edit'];
    $result = $mysqli->query("SELECT * from allot_room
                              WHERE Student_Id = $studentid12") or die($mysqli->error());
    if(count($result)==1)
      {
        $row = $result->fetch_array();
        $StuId = $row['Student_Id'];
      }
   }

if(isset($_POST['Update'])) //On pressing Update Button
   {
    $studentid = $_POST['StuId'];
    $roomid = $_POST['roomid'];

    //Check if the room is full or not
    $result = $mysqli->query("SELECT COUNT(*) AS Room_count FROM allot_room
                              WHERE Room_Id = '$roomid';")->fetch_array();

   //Extract Initial Room Id
   $sql21="SELECT Room_Id from allot_room
         WHERE Student_Id = '$studentid';";
         $data21 = mysqli_query($mysqli , $sql21) or die(mysqli_error());
         $row21 = mysqli_fetch_assoc($data21);
         $room_Id_Initial = $row21['Room_Id'];

    //Extract The type of Room to be alloted
    $sql = "SELECT Room_Type from room
            WHERE Room_Id = '$roomid';";
    $data = mysqli_query($mysqli , $sql) or die(mysqli_error());
    $row = mysqli_fetch_assoc($data);
    $room_Type = $row['Room_Type'];

          //Room Check, if occupied or not
         if ($room_Type == 'Private' and $result['Room_count'] == 0) // Allot private Room
             {
               $sql123 = "UPDATE `allot_room` SET `Room_Id`='$roomid',`RoomType`='$room_Type'
                          WHERE Student_Id = '$studentid';";
               mysqli_query($mysqli , $sql123);
               echo '<script language="javascript">';
               echo 'alert("Room Alloted Successfully")';
               echo '</script>';
            }
            elseif ($result['Room_count'] == 1)
              {
                echo '<script language="javascript">';
                echo 'alert("Room already Booked")';
                echo '</script>';
              }

          elseif ($room_Type == 'Public' and $result['Room_count'] < 4) // Allot Public Room
              {
               $sql123 = "UPDATE `allot_room` SET `Room_Id`='$roomid',`RoomType`='$room_Type'
                          WHERE Student_Id = '$studentid';";
               mysqli_query($mysqli , $sql123);
               echo '<script language="javascript">';
               echo 'alert("Room Alloted Successfully")';
               echo '</script>';
              }
            elseif ($result['Room_count'] == 4)
                {
                  echo '<script language="javascript">';
                  echo 'alert("Room already Booked")';
                  echo '</script>';
                }
    }
?>

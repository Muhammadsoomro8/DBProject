<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
  </head>

<style>
.MoveDown {
  position:relative;
  margin-left: 30px;
  margin-right: 30px;
  top: 120px;
}

.MoveDown2 {
  position:relative;
  margin-left: 50px;

}
.MoveDown3 {
  position:relative;
  margin-left: 50px;
  top: 800px;
}

.SearchInput {
   position: absolute;
   top: 25px;
   left: 37%;
}

.SearchBar {
   position: absolute;
   top: 57px;
   left: 62%;
}
</style>

  <body>
   <?php require_once 'DeleteRecord.php';?>

  <?php
   if (isset($_SESSION['message'])):?>
       <div class="alert alert-<?=$_SESSION['msg_type']?>">
         <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
          ?>
  </div>
  <?php endif ?>

  <form class="form-horizontal" action="SearchSnippet.php" method="POST">
    <div class="MoveDown">
      <div class="row around-xs">

           <div class="col-xs-2">
               <div class="box">
                   Room Id:<br>
                   <select name="roomid" class="from-control">
                     <option value="ALL">ALL</option>
                     <option value="1">R1</option>
                     <option value="2">R2</option>
                     <option value="3">R3</option>
                     <option value="4">R4</option>
                     <option value="5">R5</option>
                     <option value="6">R6</option>
                     <option value="7">R7</option>
                     <option value="8">R8</option>
                     <option value="9">R9</option>
                     <option value="10">R10</option>
                   </select>
               </div>
           </div>

           <div class="col-xs-2">
               <div class="box">
                   Room Type:<br>
                   <select name="roomtype" class="from-control">
                     <option value="Both">Both</option>
                     <option value="Private">Private</option>
                     <option value="Public">Public</option>
                   </select>
               </div>
           </div>

           <div class="col-xs-2">
               <div class="box">
                   Faculty Member:<br>
                   <select name="facultymember" class="from-control">
                     <option value="Both">Both</option>
                     <option value="Y">Yes</option>
                     <option value="N">No</option>
                   </select>
               </div>
           </div>

           <div class="col-xs-2">
               <div class="box">
                   Hostel No:<br>
                   <select name="hostelbranch" class="from-control">
                     <option value="All">ALL</option>
                     <option value="H1">Branch1</option>
                     <option value="H2">Branch2</option>
                     <option value="H3">Branch3</option>
                     <option value="H4">Branch4</option>
                   </select>
               </div>
           </div>

         </div>
       </div>

       <div class="SearchInput">
          <label>Search Id:</label><br>
          <input type="text" name="id_input" placeholder="Enter user Id" float="center">
       </div>

       <div class="SearchBar">
             <input type="submit" name="submit" value="Search">
       </div>
    </form>

  <?php require_once 'EditRoom.php';?>
   <div class="row" justify-content-center>
    <form class="form-vertical" action="EditRoom.php" method="POST">
      <div class="MoveDown3">

         <div class="form-group">
           <label>Student Id</label>
           <input type="text" name="StuId" class="form-control" value="<?php echo $StuId;?>" placeholder="Enter Id">
         </div>

          <div class="form-group">
            <label>Room Id</label></br>
            <select name="roomid" class="from-control">
              <option value="ALL">ALL</option>
              <option value="1">R1</option>
              <option value="2">R2</option>
              <option value="3">R3</option>
              <option value="4">R4</option>
              <option value="5">R5</option>
              <option value="6">R6</option>
              <option value="7">R7</option>
              <option value="8">R8</option>
              <option value="9">R9</option>
              <option value="10">R10</option>
            </select>
          </div>

           <div class="form-group">
             <button type="submit" name="Update">Update Room</button>
           </div>

       </div>
    </form>
  </div>

   <div class="MoveDown2">
     <div class="row">
        <table class="table table-striped table-hover">
          <thead>
              <tr>
                 <th>Student Id</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Batch Number</th>
                 <th>Room Id</th>
                 <th>Room Type</th>
                 <th>Action</th>
              </tr>
          </thead>

           <tbody>
             <?php
             if(isset($_POST['submit']))
                 {
                   $student_id= $_POST['id_input'];
                   $room_id= $_POST['roomid'];
                   $room_type= $_POST['roomtype'];
                   $faculty_member= $_POST['facultymember'];
                   if($student_id !='' and $room_id != 'ALL' and $room_type != 'Both' and $faculty_member != 'Both')
                      {
                        $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM allot_room INNER JOIN student on student.Student_Id = allot_room.Student_Id
                                INNER JOIN room on room.Room_Id = allot_room.Room_Id
                                WHERE student.Student_Id = '$student_id' INTERSECT
                                SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM allot_room INNER JOIN student on student.Student_Id = allot_room.Student_Id
                                INNER JOIN room on room.Room_Id = allot_room.Room_Id
                                WHERE  allot_room.Room_Id ='$room_id' INTERSECT
                                SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM allot_room INNER JOIN student on student.Student_Id = allot_room.Student_Id
                                INNER JOIN room on room.Room_Id = allot_room.Room_Id
                                WHERE  allot_room.RoomType ='$room_type' INTERSECT
                                SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM allot_room INNER JOIN student on student.Student_Id = allot_room.Student_Id
                                INNER JOIN room on room.Room_Id = allot_room.Room_Id
                                WHERE student.Faculty_Member = '$faculty_member';";
                      }
                   elseif($room_id == 'ALL' and $room_type == 'Both' and $faculty_member == 'Both' and $student_id =='')
                      {
                        $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id;";
                      }
                  elseif ($room_id != 'ALL' and $room_type == 'Both' and $faculty_member == 'Both' and $student_id =='')
                      {
                        $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                WHERE  allot_room.Room_Id ='$room_id';";
                      }
                   elseif ($room_id == 'ALL' and $room_type != 'Both' and $faculty_member == 'Both' and $student_id =='')
                      {
                        $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                WHERE  allot_room.RoomType ='$room_type';";
                      }
                   elseif ($room_id == 'ALL' and $room_type == 'Both' and $faculty_member != 'Both' and $student_id =='')
                      {
                        $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                WHERE student.Faculty_Member = '$faculty_member';";
                      }
                   elseif ($room_id != 'ALL' and $room_type != 'Both' and $faculty_member != 'Both' and $student_id =='')
                      {
                           $sql = "SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                   FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                   WHERE  allot_room.Room_Id ='$room_id' INTERSECT
                                   SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                   FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                   WHERE  allot_room.RoomType ='$room_type' INTERSECT
                                   SELECT student.Student_Id, student.First_Name, student.Last_Name, student.Email, student.BatchNumber,allot_room.Room_Id,allot_room.RoomType
                                   FROM student INNER JOIN allot_room on student.Student_Id = allot_room.Student_Id
                                   WHERE student.Faculty_Member = '$faculty_member';";
                      }

                     $data = mysqli_query($conn , $sql) or die(mysql_error());
                      if (mysqli_num_rows($data) > 0)
                         {
                           while($row = mysqli_fetch_assoc($data))
                            {
                              $Studentid1 = $row['Student_Id'];
                              $firstname1 = $row['First_Name'];
                              $lastname1 = $row['Last_Name'];
                              $email1 = $row['Email'];
                              $batchnumber1 = $row['BatchNumber'];
                              $room_id1 = $row['Room_Id'];
                              $room_Type1 = $row['RoomType'];
                              ?>
                            <tr>
                              <td><?php echo $Studentid1; ?></td>
                              <td><?php echo $firstname1; ?></td>
                              <td><?php echo $lastname1; ?></td>
                              <td><?php echo $email1; ?></td>
                              <td><?php echo $batchnumber1; ?></td>
                              <td><?php echo $room_id1; ?></td>
                              <td><?php echo $room_Type1; ?></td>

                              <td><a href="SearchSnippet.php?edit=<?php echo $row['Student_Id'];?>"
                                 class ="btn btn-info">Edit</a>
                                 <a href="DeleteRecord.php?delete=<?php echo $row['Student_Id'];?>"
                                    class ="btn btn-danger">Delete</a>
                              </td>
                            </tr>
               <?php
                            }
                         }
                 }

               ?>
            </tbody>
          </table>
      </div>
   </div>
  </body>
</html>

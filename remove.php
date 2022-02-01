<?php
          // connect to database

          $con = mysqli_connect('localhost', 'riad', 'wxcAZIZ#@12', 'e-classes-dB');

          // check connection 
  
          if (!$con) {
            echo 'connection error : '. mysqli_connect_error();
          }
      
          // write query for all students
  
          $sql = 'SELECT * FROM studentsinfo'; 
  
          // make query & get result
  
          $res = mysqli_query($con, $sql);
  
          // fetch the resulting rows as an array
          $students = mysqli_fetch_all($res, MYSQLI_ASSOC);

          $id = $_GET['id'];

          $remove = "DELETE FROM studentsinfo WHERE id = $id";

          $res = $con -> query($remove);
  
          echo "
            <script>
            window.location.href = 'Student.php';
            </script>";

?>
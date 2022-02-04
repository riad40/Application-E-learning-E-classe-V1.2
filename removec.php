<?php
          // connect to database

          $con = mysqli_connect('localhost', 'riad', 'wxcAZIZ#@12', 'e-classes-dB');

          // check connection 
  
          if (!$con) {
            echo 'connection error : '. mysqli_connect_error();
          }  
          $sql = 'SELECT * FROM studentsinfo';   
          $res = mysqli_query($con, $sql);
          $courses = mysqli_fetch_all($res, MYSQLI_ASSOC);
          $id = $_GET['id'];
          $remove = "DELETE FROM course WHERE id = $id";
          $res = $con -> query($remove);
          echo "
            <script>
            window.location.href = 'Course.php';
            </script>";

?>
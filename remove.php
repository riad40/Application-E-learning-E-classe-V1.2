<?php
          include './includes/db_conn.php';
          $sql = 'SELECT * FROM studentsinfo';  
          $res = mysqli_query($con, $sql);
          $students = mysqli_fetch_all($res, MYSQLI_ASSOC);
          $id = $_GET['id'];
          $remove = "DELETE FROM studentsinfo WHERE id = $id";
          $res = $con -> query($remove);
          echo "
            <script>
            window.location.href = 'Student.php';
            </script>";

?>
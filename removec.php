<?php
          include './includes/db_conn.php';
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
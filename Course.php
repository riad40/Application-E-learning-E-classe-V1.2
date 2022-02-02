<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Course</title>
  <style>
  body {
    background: #f8f8f8;
  }

  </style>
</head>

<body>

  <div class="d-flex" id="page">

    <?php
      include './php/sidebar.php'
    ?>

    <!-- Page Content -->
    <div id="content" class="container-fluid">

      <?php
      include './php/navbar.php'
    ?>

      <div class="mx-4 py-3 d-flex align-items-center justify-content-between my-nav">
        <h3>Course List</h3>
          <div>
          <img src="./images/sort.svg" class="px-2" alt="sort" />
          <button type="button" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD NEW COURSE
          </button>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST">
              <div>
                  <input class="form-control mb-3" type="hidden" id="id" name="id">
                </div>
                <div>
                  <input class="form-control mb-3" type="hidden" id="image" name="image">
                </div>
                <div>
                  <label class="form-labe mb-2" for="name">Name</label>
                  <input class="form-control mb-3" type="text" id="name" name="name" required>
                </div>
                <div>
                  <label class="form-labe mb-2" for="email">Email</label>
                  <input class="form-control mb-3" type="email" id="email" name="email" required>
                </div>
                <div>
                  <label class="form-labe mb-2" for="phone">Phone Number</label>
                  <input class="form-control mb-3" type="number" id="phone" name="phone" required>
                </div>
                <div>
                  <label class="form-labe mb-2" for="enroll">Enroll Number</label>
                  <input class="form-control mb-3" type="number" id="enroll" name="enroll" required>
                </div>
                <div>
                  <label class="form-labe mb-2" for="date">Date Of Admession</label>
                  <input class="form-control mb-3" type="date" id="date" name="date">
                </div>
                <input type="submit" name="save" class="btn btn-info my-2 text-light" value="Add">
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr />

      <div class="mx-5 tables">
        <table class="table table-borderless table-responsive table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Duration</th>
                <th style="white-space: nowrap !important;">Assigned By</th>
                <th style="white-space: nowrap !important;">Assigned At</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th></th>
                <td style="padding: 15px 5px !important;">html&css course</td>
                <td style="padding: 15px 5px !important;">2hours</td>
                <td style="padding: 15px 5px !important;">Ahmed</td>
                <td style="padding: 15px 5px !important;">2:30pm</td>
                <td style="padding: 5px !important;"><a href="" class="btn btn-primary text-light"> Edit </a></td>
                <td style="padding: 5px !important;"><a href="" class="btn btn-danger text-light"> Delete </a></td>
              </tr>
              <tr>
                <th></th>
                <td style="padding: 15px 5px !important;">php course</td>
                <td style="padding: 15px 5px !important;">3hours</td>
                <td style="padding: 15px 5px !important;">Ahmed</td>
                <td style="padding: 15px 5px !important;">8:00am</td>
                <td style="padding: 5px !important;"><a href="" class="btn btn-primary text-light"> Edit </a></td>
                <td style="padding: 5px !important;"><a href="" class="btn btn-danger text-light"> Delete </a></td>
              </tr>
            </tbody>
        </table>
      </div>

  <script src="./js/bootstrap.js"></script>

  <script>
  var element = document.getElementById("page");
  var toggleButton = document.getElementById("menu-toggle");
  toggleButton.onclick = function() {
    element.classList.toggle("toggled");
  };
  </script>

</body>
</html>
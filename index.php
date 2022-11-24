<?php
/*
Student Name : Gul
Student ID : 200335158
Description : A website to interact with the database
*/
?>


<?php
// call the db connection file
require_once('db_connect.php');
?>

<!doctype html>
<html lang="en">

<head>
 <title>Cources Retrieve from DB</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS v5.2.1 -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <header>
  <!------------ Start - Navbar ------------>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
   <div class="container">
    <a class="navbar-brand" href="./index.php">Course Retriever</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
   </div>
  </nav>
  <!------------- End - Navbar ------------->
 </header>
 <main>

  <!------------ Start - Form Retrive Cource ------------>
  <!-- A form with selectbox which will retrieve course data from database using course name  -->
  <div class="container">
   <div class="row">
    <div class="col-md-6 offset-md-3">
     <div class="card mt-5">
      <div class="card-header">
       <h3>Retrieve Course</h3>
      </div>
      <div class="card-body">
       <form action="index.php" method="POST">
        <div class="row justify-content-center align-items-center g-2">
         <div class="form-group col-auto">
          <div class="row align-items-center justify-content-between">
           <div class="col-auto">
            <label class="col-form-label" for="course">Course</label>
           </div>
           <div class="col-auto">
            <select class="form-select" name="course" id="course">
             <option value="0">Select Course</option>
             <option value="all">All Courses</option>
             <?php
             // Query to get all courses from database
             $query = "SELECT * FROM myCourses";
             $result = mysqli_query($conn, $query);
             // Loop through the returned data
             while ($row = mysqli_fetch_array($result)) {
              echo "<option value='" . $row['course_id'] . "'>" . $row['course_title'] . "</option>";
             }
             ?>
            </select>
           </div>
           <div class="col-auto">
            <button type="submit" name="submit" class="btn btn-primary">Retrieve Course</button>
           </div>
          </div>
         </div>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!------------- End - Form Retrive Cource ------------->

  <!------------ Start - List Retrived Course ------------>
  <!-- A table which will display the retrived course data from database -->
  <?php
  if (isset($_POST['submit'])) {
  ?>
   <div class="container">
    <div class="row">
     <div class="col-md-6 offset-md-3">
      <div class="card mt-5">
       <div class="card-header">
        <h3>Retrived Course</h3>
       </div>
       <div class="card-body">
        <table class="table table-striped">
         <thead>
          <tr>
           <th scope="col">Course ID</th>
           <th scope="col">Course Title</th>
           <th scope="col">Credit Hours</th>
           <th scope="col">Lab</th>
           <th scope="col">Year</th>
          </tr>
         </thead>
         <tbody>
          <?php
          // Check if the form is submitted
          if (isset($_POST['submit'])) {
           // Get the selected course id
           $course_id = $_POST['course'];
           // Query to get the course data from database data
           if ($course_id == 'all') {
            $query = "SELECT * FROM myCourses";
           } else {
            $query = "SELECT * FROM myCourses WHERE course_id = $course_id";
           }

           $result = mysqli_query($conn, $query);
           // Loop through the returned data
           while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['course_id'] . "</td>";
            echo "<td>" . $row['course_title'] . "</td>";
            echo "<td>" . $row['credit_hours'] . "</td>";
            // Check if the course has lab
            if ($row['lab'] == 1) {
             echo "<td>Yes</td>";
            } else {
             echo "<td>No</td>";
            }
            echo "<td>" . $row['year'] . "</td>";
            echo "</tr>";
           }
          }
          ?>
         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
  <?php } ?>
  <!------------- End - List Retrived Course ------------->

 </main>
 <footer>
  <!------------ Start - Footer ------------>
  <!------------- End - Footer ------------->
 </footer>
 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
 </script>
</body>

</html>
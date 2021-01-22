
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="icon" type="image/gif" href="img/ajblogo.png">

  <!--icons sa ubos sa mga social media -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="style.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>AJB Human Resources & Consultancy</title>
  </head>
  <body>
<div class="wrapper">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
       <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img class="animated bounceInLeft" src="img/ajblogo.png" width="40%"></a>
      </div>
  </div>
</nav>

<div class="navbar-fixed-top navbar-light bg-dark">
  <form class="form-inline" style="justify-content: center;">
    <!--search-->
    <h4 style="margin-right: 10px; color: #FFF;">Search</h4>
    <input class="form-control mr-sm-2" type="search" id="inputSearch" aria-label="Search" placeholder="Position Title" style="width: 220px; margin:10px">
    <!--industry-->
    <!--<div class="btn-group" style="margin-left: 15px;">
      <button type="button" class="btn btn-secondary">Industry</button>
      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
      </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">IT</a>
      <a class="dropdown-item" href="#">Accounting</a>
      <a class="dropdown-item" href="#">Engineering</a>
    </div>
    </div>-->
	<div class="btn-group" style="margin:10px">
                      <select class="button btn btn-secondary" id="selectCategory" name="selectCategory">
                        <option value="0">Select Category</option>
                        <option value="1">Industrial</option>
                        <option value="2">Management</option>
                        <option value="3">Construction</option>
                        <option value="4">Beauty and Wellness</option>
                        <option value="5">Sales</option>
                        <option value="6">Food and Beverages</option>
                        <option value="7">Hospitality</option>
                        <option value="8">Cleaning & Maintenance</option>
                        <option value="9">Households</option>
                        <option value="10">Safety and Security</option>
                      </select>
                    </div>

    <!--location-->

  <div class="btn-group" style="margin: 10px;">
                      <select class="button btn btn-secondary" id="selectLocation" name="selectLocation">
                        <option value="0">Select Location</option>
                        <option value="1">Abu Dhabi</option>
                        <option value="2">Dubai</option>

                      </select>
                    </div>
        <button class="btn btn-outline-success my-2 my-sm-2" type="button" style="margin-left: 10px;" id="btnGo">GO</button>
  </form>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Job Title</th>
      <th scope="col">Location</th>
      <th scope="col">Expected Salary</th>
      <th scope="col">Date Posted</th>
    </tr>
  </thead>
  <tbody id="jobTable">

  </tbody>
</table>


<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center" id="pagination">
   <!-- <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" id="btnNext">Next</a>
    </li>-->
  </ul>
</nav>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

<footer class="container-fluid text-center" style="bottom:0">
  <div class="row">
    <div class="col-sm-4">
      <h4 style="padding-top: 25px;"><b><u>Contact Us</u></b></h4>
      <br>
      <h4><i class="fa fa-mobile" aria-hidden="true"></i> +971 50 978 7088 </h4>
      <h4><i class="fa fa-phone" aria-hidden="true"></i> 04 271 3849 </h4>
    </div>
    <div class="col-sm-4">
      <h4 style="padding-top: 25px;"><b><u>Connect</u></b></h4>
      <a href="https://www.facebook.com/AJB-Human-Resource-Consultancy-849476405445478/?modal=admin_todo_tour" class="fa fa-facebook"></a>
      <a href="https://l.messenger.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fajbrhcnsultancy&h=AT0AV7KRqwXlOWjgX3wR6RorGy_Ww3fLoVi9XqlzWmiSJFei8WvnR63VqierSFpt4z1k4O_q5R6wZNBUe4m83Wynx9iMmDt3J-Y-VkTRqVqlQbau9uPizKE_U5cXWmp6EvvF" class="fa fa-twitter"></a>
      <a href="https://l.messenger.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fajbhrconsultancy19%2F&h=AT0AV7KRqwXlOWjgX3wR6RorGy_Ww3fLoVi9XqlzWmiSJFei8WvnR63VqierSFpt4z1k4O_q5R6wZNBUe4m83Wynx9iMmDt3J-Y-VkTRqVqlQbau9uPizKE_U5cXWmp6EvvF" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <img src="img/ajblogo.png" class="icon" style="padding-top: 25px;">
    </div>
  </div>
</footer>
<script src="tableScript.js"></script>

  </body>
</html>
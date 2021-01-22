
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
        <a class="navbar-brand" href="/"><img class="animated bounceInLeft" src="img/ajblogo.png" width="40%"></a>
      </div>
  </div>
</nav>

<div class="navbar-fixed-top navbar-light bg-dark">
  @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  @endif
  <form class="form-inline" style="justify-content: center;">
    <!--search-->
    <h4 style="margin-right: 10px; color: #FFF;">Search</h4>
    <input class="form-control mr-sm-2" type="search" id="inputSearch" aria-label="Search" placeholder="Position Title" style="width: 220px; margin:10px">
	<div class="btn-group" style="margin:10px">
                      <select class="button btn btn-secondary" id="selectCategory" name="selectCategory">
                        <option value="0">Select Category</option>
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>

    <!--location-->

  <div class="btn-group" style="margin: 10px;">
                      <select class="button btn btn-secondary" id="selectLocation" name="selectLocation">
                        <option value="0">Select Location</option>
                        @foreach($locations as $location)
                          <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
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
    @foreach($posts as $post)
      <tr>
        <td><a href="/jobsearch/view/{{ $post->id }}">{{ $post->title }}</a></td>
        <td>{{ $post->location->name }}</td>
        <td>{{ $post->salary }}</td>
        <td>{{ $post->created_at }}</td>
      </tr>
    @endforeach

  </tbody>
</table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

<footer class="container-fluid text-center" style="bottom:0">
  <div class="row">
    <div class="col-sm-4">
      <h4 style="padding-top: 25px;"><b><u>Contact Us</u></b></h4>
      <br>
      <h4>Whatsapp number</h4>
      <h4><i class="fa fa-mobile" aria-hidden="true"></i> +971 521230983</h4>

      <h4 style="margin-top: 15px;">Calling number</h4>
      <h4><i class="fa fa-phone" aria-hidden="true"></i> 0547548159</h4>
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

  </body>
</html>
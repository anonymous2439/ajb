<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Animation -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="icon" type="image/gif" href="/img/ajblogo.png">

  <!--icons sa ubos sa mga social media -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="/style.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>AJB Human Resources & Consultancy</title>
  </head>
  <body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
       <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src="/img/ajblogo.png" class="animated bounceInLeft" width="40%"></a>
      </div>
  </div>
</nav>

  <form style="padding: 20px 0 0 50px;" id="formApply" action="/email/send" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group row" style="">
    <label for="inputPosition" class="col-sm-2 col-form-label"><b><u>Job Title:</u></b></label>
    <div class="col-sm-5">
      <input type="text" readonly class="form-control-plaintext" id="inputJobTitle" value="{{ $post->title }}">
    </div>
  </div>

  <div class="form-group">
    <label for="details"><b><u>Description:</u></b></label>
    <div class="col-sm-8">
      <textarea class="form-control" readonly id="description" rows="5" style="background-color:white">{{ $post->description }}</textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputExpSal" class="col-sm-2 col-form-label"><b><u>Expected Salary:</u></b></label>
    <div class="col-sm-3">
      <input type="text" readonly class="form-control-plaintext" id="inputExpSal" value="{{ $post->salary }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputCategories" class="col-sm-2 col-form-label"><b><u>Category:</u></b></label>
    <div class="col-sm-5">
      <input type="text" readonly class="form-control-plaintext" id="inputCategories" value="{{ $post->category->name }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputLoc" class="col-sm-2 col-form-label"><b><u>Location:</u></b></label>
    <div class="col-sm-5">
      <input type="text" readonly class="form-control-plaintext" id="inputLoc" value="{{ $post->location->name }}">
    </div>
  </div>
  <br>
  <h4><b><u>Quick Apply</u></b></h4>
  <br>

  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label"><b><u>Name:</u></b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label"><b><u>Email:</u></b></label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputMobile" class="col-sm-2 col-form-label"><b><u>Mobile Number:</u></b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputMobile" name="inputMobile" placeholder="Mobile Number">
    </div>
  </div>

  <div class="form-group">
    <label for="application"><b><u>Application / Cover Letter:</u></b></label>
    <div class="col-sm-8">
    <textarea class="form-control" id="coverletter" name="coverletter" rows="13">
      Dear Company Name,

      Hello and good day!

      This letter is in response to your Position Title job advertisement in AJB.com on Date.

      [Short description of your achievements and contact information here]

      Thank you very much.

      Sincerely yours,

      [your name]</textarea>
    </div>
  </div>

    <div class="form-group">
    <label for="resume"><b><u>Resume</u></b></label>
    <input type="file" class="form-control-file" id="resume" name="resume">
      <input type="hidden" id="dirResume" name="dirResume">
  <span class="help-block" style="font-size: 10px; color: grey;">Only files with .doc, .docx, .odt, .pdf, or .rtf extensions less than 900kb are allowed.</span></div>

<span class="help-block">Click once only. By clicking the Submit button, you confirm that you have read, understood and agree to our <a href="#">Terms and Services</a> and <a href="#">Privacy Policy</a>.</span>
<br>
  <input type="hidden" id="email" name="email">
  <input type="hidden" name="post-id" value="{{ $post->id }}">
<button type="submit" class="btn btn-primary" style="margin-top: 15px;" id="btnSubmit">Submit</button>
<button type="button" class="btn btn-warning" style="margin-top: 15px;" id="btnBack">Back</button>
</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="container-fluid text-center animated bounceInLeft" style="margin-top: 60px;">
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
      <img src="/img/ajblogo.png" class="icon" style="padding-top: 25px;">
    </div>
  </div>
</footer>



<script src="https://smtpjs.com/v3/smtp.js"></script>
  </body>
</html>
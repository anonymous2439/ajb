@extends('layouts.app')

@section('content')

<div>



<div class="navbar navbar-light bg-dark" style="margin-bottom:0px !important">
        <a class="navbar-brand" href="/"><img class="animated bounceInLeft" src="img/ajblogo.png" width="40%"></a>
  @if(session('success'))
  <div class="alert alert-success alert-dismissible show" role="alert">
    <strong>{{ session('success') }}</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>
  @endif

</div>
<div style="text-align:right; margin-bottom:10px; background-color:#575757; padding:15px 20px 15px 20px;">
  <select style="height:auto" id="category">
    <option value="0">Select Category</option>
  @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
  @endforeach
  </select>
  <select style="height: auto" id="location">
    <option value="0">Select Location</option>
    @foreach($locations as $location)
      <option value="{{ $location->id }}">{{ $location->name }}</option>
    @endforeach
  </select>
  <button class="btn btn-primary" id="filter-btn">APPLY FILTERS</button>
</div>
<div style="padding: 20px;">

<table class="table" id="tblPosts">
  <thead class="thead-light" style="background-color: #e3e3e3">
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Job Title</th>
      <th scope="col">Location</th>
      <th scope="col">Expected Salary</th>
      <th scope="col">Date Posted</th>
    </tr>
  </thead>
  <tbody>
 

  </tbody>
</table>
</div>

    </div>

<footer class="container-fluid text-center d-flex align-items-end" style="bottom:0">
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

@endsection

@section('footer')
  <script>
    var tblPosts;
    $(document).ready( function () {
        tblPosts = $('#tblPosts').DataTable({
          "ajax": {
              "headers":{
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              "url": "/admin/getposts",
            "type": "POST"
          },
          columnDefs: [ 
            {
                             "targets": [ 0 ],
            "visible": false,
            "searchable": false
              },
              {
            "targets": [ 1 ],
            "visible": false,
            "searchable": false
          },
            ],
            order: [[ 5, 'desc' ]],

      });

    } );

    function getPost(id){
      window.location.replace("/jobsearch/view/"+id);
    }

    $("#filter-btn").on("click", function(){
      var category = $("#category").val();
      var location = $("#location").val();
      tblPosts.clear();
      tblPosts.destroy();

      tblPosts = $('#tblPosts').DataTable({
          "ajax": {
              "headers":{
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
              },
              "url": "/admin/getposts",
              "type": "POST",
              "data": {"category":category, "location":location},
          },
          columnDefs: [ 
            {
                             "targets": [ 0 ],
            "visible": false,
            "searchable": false
              },
              {
            "targets": [ 1 ],
            "visible": false,
            "searchable": false
          },
            ],
            order: [[ 5, 'desc' ]],

      });
    });
  </script>
@endsection
@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: right; margin-top: 15px;">
				<a href="/logout">Logout</a>
			</div>
		</div>
		<div class="row" style="margin-bottom: 15px;">
			<div class="col-md-12">
				<button class="btn btn-primary" data-toggle="modal" data-target="#modal-add">ADD</button>
				<button class="btn btn-warning" id="btn-delete" type="button">DELETE</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="tblPosts">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th>JOB TITLE</th>
							<th>LOCATION</th>
							<th>SALARY</th>
							<th>DATE POSTED</th>
						</tr>
					</thead>
					<tbody>
	
					</tbody>
				</table>
			</div>
		</div>
	</div>

		<div class="modal" tabindex="-1" role="dialog" id="modal-add">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h5 class="modal-title">Add Post</h5>
		      </div>
		      <form action="/post" method="post">
		    		@csrf  
			      <div class="modal-body">
			        <label for="title">Title </label><input id="title" name="title" class="form-control">
			        <label for="description">Description </label><textarea id="description" name="description" class="form-control" rows="5"></textarea>
			        <label for="salary">Expected Salary </label><input id="salary" name="salary" class="form-control">
			        <label>Category </label>
			        <select class="form-control" name="category">
			        	@foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
			        </select>
			        <label>Location </label>
			        <select class="form-control" name="location">
			        	@foreach($locations as $location)
                          <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
			        </select>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add</button>
			      </div>
		  	  </form>
		    </div>
		  </div>
		</div>

		<div class="modal" tabindex="-1" role="dialog" id="modal-view">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h5 class="modal-title">Post</h5>
		      </div>
		      <div class="modal-body">
		        <label for="title">Title </label><input id="view-title" name="view-title" class="form-control" readonly>
		        <label for="description">Description </label><textarea id="view-description" name="view-description" class="form-control" rows="5" readonly></textarea>
		        <label for="salary">Expected Salary </label><input id="view-salary" name="view-salary" class="form-control" readonly>
		        <label>Category </label><input id="view-category" name="view-category" class="form-control" readonly>
		        <label>Location </label><input id="view-location" name="view-location" class="form-control" readonly>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
@endsection

@section('footer')
	<script>

		$(document).ready( function () {
		    var tblPosts = $('#tblPosts').DataTable({
		    	"ajax": {
		    	  	"headers":{
		    	  		'X-CSRF-TOKEN': "{{ csrf_token() }}"
		    	  	},
		    	  	"url": "/admin/getposts",
				    "type": "POST"
				},
			  	columnDefs: [ 
			  		{
		            	orderable: false,
		            	className: 'select-checkbox',
		            	targets:   0
		        	},
		        	{
						"targets": [ 1 ],
						"visible": false,
						"searchable": false
					},
		        ],
		        select: {
		            style:    'multi',
		            selector: 'td:first-child'
		        },
		        order: [[ 5, 'desc' ]],
			});

			// delete
			$("#btn-delete").on("click", function(){
	            var rows = tblPosts.rows({selected:true});
	            var posts = [];
				$.each(rows.data(), function () {
				    var row = this;
				    posts.push(row[1]);
				})

				$.ajax({
					"headers":{
		    	  		'X-CSRF-TOKEN': "{{ csrf_token() }}"
		    	  	},
		    	  	"url": "/post/destroyall",
				    "type": "POST",
				    "data": {data:posts},
				    success: function(response){
				    	if(response['msg']=='1'){
				    		alert("success");
				    		window.location.replace("/admin/home");
				    	}
				    },
				    error: function(response){
				    	alert("error");
				    }
				});
			})


		} );

		function getPost(id){
			$.ajax({
				"url": "/post/get/"+id,
				"type": "GET",
				success: function(response){
					alert(JSON.stringify(response));
					$("#view-title").val(response["title"]);
					$("#view-description").val(response["description"]);
					$("#view-description").val(response["description"]);
					$("#modal-view").modal('show');
				},
				error: function(response){
					alert("error");
				}
			});
		}
	</script>
@endsection
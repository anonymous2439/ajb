var email="none";
var locations=["None","Abu Dhabi","Dubai"];
var categories=["None","Industrial","Management","Construction","Beauty and Wellness","Sales","Food and Beverages","Hospitality","Cleaning and Maintenance","households","Safety and Security"];
$.ajax({
                    url: "getJobPostByID.php",
                    type: "post",
  					data:{id:$("#jobID").val()},
                    dataType: 'json',
                    success: function(response) {
						$("#inputJobTitle").val(response["job_title"]);
						$("#description").val(response["job_description"]);
						$("#inputExpSal").val(response["job_salary"]);
						$("#inputCategories").val(categories[response["job_category"]]);
						$("#inputLoc").val(locations[response["job_address"]]);
						$("#email").val(response['job_email']);
                    },
  					error: function(response){
                      alert("error");
                    }
});

$("#btnBack").on("click",function(){
      $(location).attr('href', 'jobsearch.php');
});

$("#btnSubmit").on("click",function(e){

//e.preventDefault();
//upload
var formData = new FormData($("#formApply")[0]);
   $.ajax({
       url: 'uploadResume.php',
       type: 'POST',
       data: formData,
       dataType:'json',
       async: false,
       cache: false,
       contentType: false,
       enctype: 'multipart/form-data',
       processData: false,
       success: function (response) {
         if(response['valid']){
       		$("#dirResume").val(response['file']);
       		$("#formApply").trigger("submit");
         }
         else{
           alert("The uploaded file must contain a valid file extension and must be below or equals the maximum size.");
         }

     	  },
     	error:function(){
          alert("error");
        }
   });

  // return false;
});
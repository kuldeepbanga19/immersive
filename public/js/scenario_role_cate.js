// save and exit popup 
$(document).ready(function(){
   $(".popup").hide();
   $(".saveexit").click(function(){
	  $(".popup").show();
   });
   $(".cancel, .popup").click(function(){
	  $(".popup").hide();
   });


   $( ".second" ).insertAfter( ".first" );
   $( ".third" ).insertAfter( ".second" );

});

// save data with bottom next feedback button
function save(id)
{
var id =$("#id").val();
var base_url = $('#base').val();
// alert(id);

// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_feedback/scenario_feedback/" + id);
	 }
			
   }
});
}
    // save data with bottom back overview button 
function save_back(id)
    {
      var id =$("#id").val();
      // alert(id);
      var base_url = $('#base').val();
       // ajax adding data to database
          $.ajax({
            url : base_url+"/Scenario_role_cate/updateRoles/" + id,
            type: "POST",
            data: $('#update_user').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                

                window.location.replace(base_url+"/Scenario/singleUser/" + id);
              }
                     
            }
        });
    }
    
// save data from sidebar overview button by Piyusha
function overview_save(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   
	   window.location.replace(base_url+"/Scenario/singleUser/" + id);
	 }
			
   }
});
}
// save data from sidebar role category button by Piyusha
function save_role(id)
{
var id =$("#id").val();
var base_url = $('#base').val();
// alert(id);

// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_role_cate/scenario_role_cate/" + id);
	 }
			
   }
});
}
// save data from sidebar feedback button by Piyusha
function save_feed(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_feedback/scenario_feedback/" + id);
	 }
			
   }
});
}
// save data from sidebar rank button by Piyusha
function save_rank(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_ranking/scenario_ranking/" + id);
	 }
			
   }
});
}
// save data from sidebar analysis button by Piyusha
function save_analysis(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_analysis/scenario_analysis/" + id);
	 }
			
   }
});
}
// save data from sidebar performance indicator button by Piyusha
function save_perform(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_performance/scenario_performance/" + id);
	 }
			
   }
});
}


// save data from sidebar epilogue button by Piyusha
function save_epilogue(id)
{
var id =$("#id").val();
// alert(id); 
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_epilogue/scenario_epilogue/" + id);
	 }
			
   }
});
}
// save data from sidebar analysis button by Piyusha
function save_summary(id)
{
var id =$("#id").val();
// alert(id);
var base_url = $('#base').val();
// ajax adding data to database
 $.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	   window.location.replace(base_url+"/Scenario_summary/scenario_summary/" + id);
	 }
			
   }
});
}
// function to save data with validation by Piyusha
function save_role12(id){
var id =$("#id").val();
var base_url = $('#base').val();
$.ajax({
url: base_url+"/Scenario_role_cate/save_role/"+id, 
type:"POST",
data: $('#update_user').serialize(),
dataType: "JSON",
success: function(json){
   if(json.success){
	  window.location.reload();
   }
   if(json.success==false)
   {
	 $('#editUserErrmsg_').html(json.msg);

  

   
   }
}
})

}

//  end





// save data with save and exit button by Piyusha
   function exit(id)
{
var id =$("#id").val();
var base_url = $('#base').val();
$.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	  window.location.replace(base_url+"/Scenario/new/" + id);
	 }
			
   }
});



}
// end


// save data with create new inject button
function save_new_inject(id){

var id =$("#id").val();
var base_url = $('#base').val();
$.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	  window.location.replace(base_url+"/inject/create/" + id);
	 }
			
   }
});



}

// save data with sidebar injects by Piyusha
function save_inject(inject){
  var id =$("#id").val();
var base_url = $('#base').val();
$.ajax({
   url : base_url+"/Scenario_role_cate/updateRoles/" + id,
   type: "POST",
   data: $('#update_user').serialize(),
   dataType: "JSON",
   success: function (json) {
	 if(json.success)
	 {
	   

	  window.location.replace(base_url+"/inject/index/" + inject);
	 }
			
   }
});
}
// save data with review button by Piyusha
function review(id){
var id =$("#id").val();
var base_url = $('#base').val();
$.ajax({
  url : base_url+"/Scenario_role_cate/updateRoles/" + id,
  type: "POST",
  data: $('#update_user').serialize(),
  dataType: "JSON",
  success: function (json) {
  if(json.success)
  {
    

    window.location.replace(base_url+"/Scenario_summary/scenario_summary/" + id);
  }
     
  }
});

}



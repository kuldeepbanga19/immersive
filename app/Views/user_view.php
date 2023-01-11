<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codeigniter 4 ajax crud with datatables and bootstrap modals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>

.cst_prdct_category {
    background: rgb(255 255 255);
    position: static;
    z-index: 99999;
    padding: 20px;
    width: 880px;
    margin: 0 auto;
    position: relative;
    z-index: 99999999;
    border-radius: 5px;
    top: 40px;
    margin-bottom: 40px;
    box-sizing: border-box;
    /* display: none; */
}
.searc-box-category {
    display: flex;
    align-items: center;
    width: 240px;
    margin-left: auto;
    margin-bottom: 16px;
}
.searc-box-category label {
    margin-right: 10px;
}
.cst_main_div_ctgy {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.box_catogry_both {
    background: #ffffff;
    border-radius: 4px;
    padding: 20px;
    width: 40%;
    overflow-y: auto;
    box-shadow: 0px 0px 5px rgb(226 226 226);
}
.cst_main_div_ctgy option {
    display: block;
    padding: 2px 9px;
    color: #ababab;
    font-size: 12px;
    line-height: 1.75;
    box-sizing: border-box;
}
.jcf-list .jcf-list-content {
    vertical-align: top;
    display: inline-block;
    /* max-height: unset !important; */
    overflow: auto !important;
    height: unset !important;
    width: 100% !important;
}

.jcf-list .jcf-list-content {
    max-height: 190px !important;
}
.main_filter_div {
    display: none !important;
}
.cst_btn_catg {
    text-align: center;
}
.cst_btn_ctgry_prdct {
    text-align: right;
    margin-top: 40px;
}
.cst_close_icon {
    position: absolute;
    top: -16px;
    right: -18px;
    background: #6bcac7;
    padding: 12px 14px;
    border-radius: 50%;
    color: #ffff;
    font-size: 16px !important;
    display: block;
    box-sizing: border-box;
    height: 40px;
    width: 40px;
    cursor: pointer;
    font-weight: 400;
}
.btn-success{
      outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    position: relative;
    user-select: none;
    transition: background-color 0.2s linear 0s;
    white-space: nowrap;
    border-radius: 4px;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
    border: 1.5px solid rgb(36, 45, 147 );
}
#table_id th{
  background: rgb(247, 250, 255) !important;
}
[name="table_id_length"]{
  padding: 4px 150px 4px 0px;
}
.closee{
  outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    position: relative;
    user-select: none;
    transition: background-color 0.2s linear 0s;
    white-space: nowrap;
    border-radius: 4px;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
}
.closee:hover{
color: #000 !important;
}
#btnSave{
      outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    position: relative;
    user-select: none;
    transition: background-color 0.2s linear 0s;
    white-space: nowrap;
    border-radius: 4px;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
    border: 1.5px solid rgb(36, 45, 147 );
}
[name="roleList[]"]{
  width: 100%;
}
.selct_main_div select{
  width: 100%;

}
.cst_close_icon{
  background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
}
/*.current{
  padding: 3px 10px !important;
    background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%) !important;
    color: #ffff !important;
}*/
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
  color: #fff !important;
}

    </style>
  </head>
  <body>

  <div class="container my-4">


    <h3 style="font-size: 25px; font-weight: 700;">User List</h3>
    <br />
    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add User</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					
					<th>User</th>
					<th>Email</th>
					

          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach($users as $user){?>
				     <tr>
				        
				         <td><?php echo $user['username'];?></td>
								 <td><?php echo $user['email'];?></td>
								
								<td>
                                <a href="#editBrand_<?=$user["id"]?>" data-toggle="modal"  class="edit" title="Edit"   ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									
                                    <a href="javascript:void(0)" onclick="deleteUser('<?php echo $user['id'];?>')" class="delete" title="Delete" data-toggle="tooltip"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </a>
                          <?php if($user['status'] == 0) { ?>
                          <a href="javascript:void(0)" onclick="showHideUser('<?php echo $user['id']; ?>',1)" data-toggle="tooltip"><i class="fa fa-eye-slash" aria-hidden="true"></i></i></a> <?php } 
                          else { ?>
                          <a href="javascript:void(0)"  onclick="showHideUser('<?php echo $user['id']; ?>',0)" data-toggle="tooltip"  title="Hide User"><i class="fa fa-eye" aria-hidden="true"></i></i></a> <?php } ?>

                          <a href="#assignRole_<?=$user["id"]?>" data-toggle="modal"  class="edit" title="Assign Role"   >
                            <img src="<?=base_url('assets')?>/image/assign-icon.png" alt="assign-icon" style="width: 20px;
   						 height: 18px;" /></a>


      <!--Assign Role Modal -->

      <div class="modal fade" id="assignRole_<?=$user["id"]?>" role="dialog">

<!-- <div class="overlay_popup_cst_ctgry"></div> -->
<div class="cst_prdct_category ">
  <form id="assignRoleForm_<?=$user['id']?>" mathod="post">
   <div class="category search-main-box">
      
	 <div class="searc-box-category">
	   <label for="search">Search:</label>
	   <input type="text" id="search-category-edit">
	 </div>     
  
</div>
    <div class="cst_main_div_ctgy">
      <div class="cst_add_slct box_catogry_both">
        <h3 style="font-size: 20px; font-weight: 700; color: #000;">Selected Role</h3>
        <div class="selct_main_div">
          <select id="item_edit_<?=$user['id']?>" name="roleList[]" multiple>
            <?php foreach ($roleListAry as $roleListkey => $roleListvalu) { 
            if($user['id'] == $roleListkey ){ if(!is_null($roleListvalu))  {
                $arylist = explode(",",$roleListvalu);
                foreach ($arylist as $key => $arylistval) { 
                  $arylist2 = explode("#",$arylistval);  ?>
                <option value="<?php echo $arylist2[1]; ?>" selected><?php echo $arylist2[0]; ?> </option>
                 <?php } } } } ?>
            
          </select>
        </div>
      </div>
      <div class="cst_btn_catg">
        <a href="javascript:void(0);" onclick="addEdit(<?=$user['id']?>)"><i class="fa fa-caret-left cst_icon" style="margin-right: 5px; display: inline-block; " aria-hidden="true"></i>Add</a>
        <a href="javascript:void(0);" onclick="removeEdit(<?=$user['id']?>)">Remove<i class="fa fa-caret-right cst_icon"  style="margin-left: 5px; display: inline-block; " aria-hidden="true"></i></a>
       <!--  <a href="#">Set main Admin</a> -->
      </div>
      <div class="cst_remove_add_slct box_catogry_both">
        <h3 style="font-size: 20px; font-weight: 700; color: #000;">Role list</h3>
        <div class="selct_main_div search-filter">
        <select id="roleList_edit_<?=$user['id']?>" name="" multiple>
            <?php // print_r($roleListAry);

            foreach ($roleListAry as $key => $roleLIstVal) {
             if($user['id'] == $key){

              if( is_null($roleLIstVal)){ 
               foreach ($roleValue as $key => $roleval) {  ?>
            <option value="<?php echo $roleval['id'];?>"> <?php echo $roleval['rolename']; ?> </option> <?php } }
            else{
                $db = \Config\Database::connect();
               $rolelist = $db->prefixTable('user_role'); 
       $query = $db->query('SELECT GROUP_CONCAT(role_id) FROM '.$rolelist.'  WHERE user_id='. $user['id'].'')->getRow();

       foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                }
        foreach ($roleValue as $key => $roleValu) {
          if(!in_array($roleValu['id'], $arr)){ ?>
            <option value="<?php echo $roleValu['id']; ?>"><?php echo $roleValu['rolename']; ?></option> 
             <?php }  
           }
         } 
       } 
     } ?>
          </select>
        </div>
      </div>
    </div>
  
      <span id="editUserErrmsg_" style="color: red; font-weight: bold;"></span> 
    <div class="cst_btn_ctgry_prdct d-flex justify-content-end">
      <button type="button" class="cancel closee me-2" data-dismiss="modal" onclick="assignCancel()">Cancel</button>
      <button type="button" onclick="assignRole(<?=$user['id']?>);" class="save btn-success">Assign</button>
    </div>
  </form>
  <i class="fa fa-times cst_close_icon" data-dismiss="modal"></i>
</div>
</div>

<!-- Assign Role End -->


                                    <div class="modal fade" id="editBrand_<?=$user["id"]?>" role="dialog">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header" style="background: rgb(27, 30, 74);">
                        <h4 class="modal-title" style="font-size: 20px; font-weight: 700; color: #fff;">Edit User</h4>

                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">&times;</button>
                      </div>
                      <div class="modal-body">
              <form name ="brandform" class="form-horizontal" id="editBrandform_<?=$user["id"]?>">

            <span style="color: red; font-weight: bold;" id="editBrandErrmsg_<?=$user["id"]?>"></span>
                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">First Name:</label>
                            <div class="col-sm-12">
                <input type="text" class="form-control " id="updateBrand_<?=$user['id']?>" placeholder="Enter First name" name="edit_firstname" value="<?=$user['firstname']?>" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">Last Name:</label>
                            <div class="col-sm-12">
                <input type="text" class="form-control " id="updateBrand_<?=$user['id']?>" placeholder="Enter Last name" name="edit_lastname" value="<?=$user['lastname']?>" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">User Name:</label>
                            <div class="col-sm-12">
                <input type="text" class="form-control " id="updateBrand_<?=$user['id']?>" placeholder="Enter User's name" name="edit_User" value="<?=$user['username']?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">Password:</label>
                            <div class="col-sm-12">
                <input type="password" class="form-control " id="updateBrand_<?=$user['id']?>" placeholder="Enter Password" name="edit_password" value="" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">Email:</label>
                            <div class="col-sm-12">
                <input type="text" class="form-control " id="updateBrand_<?=$user['id']?>" placeholder="Enter Email" name="edit_email" value="<?=$user['email']?>" >
                            </div>
                          </div>


                          

                        
 <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-between" style="text-align: right;">
                                  <button type="button" onclick="editBrandVal(<?=$user['id']?>);" class="btn btn-success add-new cst_form_listing_btn">Update</button>

                              <button type="button"  onclick="btnCloseeEdit(<?=$user['id']?>)" class="btn btn-default closee" data-dismiss="modal">Close</button>
                          
                            </div>
            </div>
                          
                         
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                                
                                
                                </td>
				      </tr>
				     <?php }?>

      </tbody>

      
    </table>

  </div>




   <!-- Bootstrap modal -->
   <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: rgb(27, 30, 74);">
        <h3 class="modal-title" style="font-size: 20px; font-weight: 700; color: #fff;">User Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff">×</span></button>

      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
        <span style="color: red; font-weight: bold;" id="addUserErrmsg" class="errmsg cst-all-errors"></span>
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-12">First Name</label>
              <div class="col-md-12">
                <input name="fname" placeholder="First Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-12">Last Name</label>
              <div class="col-md-12">
                <input name="lname" placeholder="Last Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-12">User</label>
              <div class="col-md-12">
								<input name="uname" placeholder="User" class="form-control" type="text">

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-12">Password</label>
              <div class="col-md-12">
								<input name="password" placeholder="Password" class="form-control" type="password">

              </div>
            </div>
						<div class="form-group">
							<label class="control-label col-md-12">Email</label>
							<div class="col-md-12">
								<input name="email" placeholder="Email" class="form-control" type="text">

							</div>
						</div>

          </div>
        </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger closee" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

  <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;

    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

 
//script for assingn role category

function assignRole(id){

var formVal = $('#assignRoleForm_'+id).closest("form");

  $("#item_edit_"+id+" option").prop('selected', true); 

$.ajax({
          type: "POST",
          url: "<?= site_url() ?>/User/assignRole/"+id,
          dataType: "json",
          async: false,
          data:$(formVal).serialize(),
          success: function (json) {
            if(json.success)
            {
               alert("Role assigned successfully!");

                window.location.reload();
             }
       
            if(json.success==false)
            {
              $('#editUserErrmsg_').html(json.msg);

           

            
            }
          }
    });
}
// script for removing category list while edit 
k=0;
function removeEdit(id){
 

   $("#item_edit_"+id).parent().find("li").each(function(){
                 var selectedtext=$(this).find("span").hasClass("jcf-selected");
                 if(selectedtext){  $("#item_edit_"+id+" option:contains("+$(this).find("span").text()+")").attr('selected', 'selected');
                 
                
                 
                 }


    });
    
    $("#item_edit_"+id+" option").each(function(){
          var selectedvalue= $(this ).is(':selected');
          
          if(selectedvalue) {
    $("#roleList_edit_"+id).append("<option value=" + $(this).val()+ " selected>" + $(this).text() + "</option>");
       $("#roleList_edit_"+id).parent().find("ul").append("<li><span class='jcf-option' data-index='"+k+"'>"+$(this).text()+"</span></li>");
       $(this ).remove();
       k=k+1;
     }
});

$("#item_edit_"+id).parent().find("li").each(function(){
                 var selectedtext=$(this).find("span").hasClass("jcf-selected");
                 if(selectedtext){  
                 
                 $(this).remove(); 
                 
                 }


    });
    $(function() {
  jcf.replaceAll();
});
}


//script for adding category list in option while edit
 var i;
 i=1;
function addEdit(id){


var optname = document.getElementById('roleList_edit_'+id);

var name = optname.options[optname.selectedIndex].text;


         $("#roleList_edit_"+id).parent().find("li").each(function(){
                 var selectedtext=$(this).find("span").hasClass("jcf-selected");
                 
                 if(selectedtext){
                    $("#roleList_edit_"+id+" option:contains("+$(this).find("span").text()+")").attr('selected', 'selected');
               }

});
         $("#roleList_edit_"+id+" option").each(function(){
          var selectedvalue= $(this ).is(':selected');
          
          if(selectedvalue) {
    $("#item_edit_"+id).append("<option value=" + $(this).val()+ " selected>" + $(this).text() + "</option>");
       $("#item_edit_"+id).parent().find("ul").append("<li><span class='jcf-option' data-index='"+i+"'>"+$(this).text()+"</span></li>");  
       i=i+1;
     }
});
  $("#roleList_edit_"+id).parent().find("li").each(function(){
                 var selectedtext=$(this).find("span").hasClass("jcf-selected");
                 
                 if(selectedtext){
                    $("#roleList_edit_"+id+" option:contains("+$(this).find("span").text()+")").remove();
               }

});
         $("#roleList_edit_"+id).parent().find("li").each(function(){
                 var selectedtext=$(this).find("span").hasClass("jcf-selected");
                 if(selectedtext){ $(this).remove(); }
    }); 
       
$(function() {
  jcf.replaceAll();
});
       
    }

function editBrandVal(id){

var formVal = $('#editBrandform_'+id).closest("form");


$.ajax({
          type: "POST",
          url: "<?= site_url() ?>/User/editUser/"+id,
          dataType: "json",
          data:$(formVal).serialize(),
          async: false,
          success: function (json) {
        
            if(json.success)
              {
                 alert("User updated successfully!");

                  
                   window.location.reload();
               }
         
              else
              {
               
               $('#editBrandErrmsg_'+id).html(json.msg);
    $("#editBrandErrmsg_"+id).html(json.msg);
 $("#editBrandErrmsg_"+id).show();
              
              }
          }
    });

}
function btnCloseeEdit(id) {
    window.location.reload()

  
    $("#editBrandErrmsg_"+id).hide();
  
   
  
  }
    function save()
    {
      

       // ajax adding data to database
          $.ajax({
            url : "<?= site_url() ?>/User/user_add",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                 alert("User added successfully!");

                window.location.reload();
              }
                         else
              {
                 $("#addUserErrmsg").html(json.msg);
                   $("#addUserErrmsg").html(json.msg + '<br/><button type="button"  onclick="hideme();">OK</button>');
 $("#addUserErrmsg").show();
               
              }
            }
        });
    }

  
    function deleteUser(id) {
if (window.confirm("Are you sure, you want to delete User?")){
  $.ajax({
            type: "POST",
            url: "<?= site_url() ?>/User/deleteUser/"+id,
            dataType: "json",
            async: false,
            success: function (json) {
              if(json.success){

                 alert("User deleted successfully!");
                 
                 window.location.reload();

              }

                
              
            }
      });
}
}
function showHideUser(id,status){ 
$.ajax({
    type:"POST",
    url:"<?= site_url() ?>/User/showHideUser/"+id+"/"+status,
    dataType:"json",
    async: false,
    success:function(json){

      if(json.success){
        window.location.reload();
      }
    }

});

}

  </script>
<script type="text/javascript">
   function hideme() {
    $("#addUserErrmsg").hide();
    
  }
 

</script>
<script>
    function hidemeEdit() {
    $("#errmsg").hide();
    
  }
</script>
 
<script>

  function assignCancel() {
    $('#editUserErrmsg_').hide();
      }

  // $(".cst_close_icon").click(function(){
  //   $(".modal-backdrop, .cst_prdct_category, .modal").css("display","none");
  // });

</script>
  </body>
</html>

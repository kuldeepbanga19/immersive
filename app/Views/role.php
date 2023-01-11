<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>codeigniter 4 ajax crud with datatables and bootstrap modals</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
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
[name="table_id_length"] {
    padding: 4px 150px 4px 0px;
}
#btnSave {
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
.closee {
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
    </style>
  </head>
  <body>

  <div class="container">


    <h3>Role List</h3>
    <br />
    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Role</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					
					<th>Role</th>
					
					

          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <?php foreach($Roles as $role){?>
				     <tr>
				         
				         <td><?php echo $role['rolename'];?></td>
						
								
								<td>
                                <a href="#editBrand_<?=$role["id"]?>" data-toggle="modal"  class="edit" title="Edit"   ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									
                                    <a href="javascript:void(0)" onclick="deleteRole('<?php echo $role['id'];?>')" class="delete" title="Delete" data-toggle="tooltip"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                  

                                    <div class="modal fade" id="editBrand_<?=$role["id"]?>" role="dialog">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-between" style="background: rgb(27, 30, 74);">
                        <h4 class="modal-title" style="font-size: 20px; font-weight: 700; color: #fff;">Edit Role</h4>

                        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
                      </div>
                      <div class="modal-body">
              <form name ="brandform" class="form-horizontal" id="editBrandform_<?=$role["id"]?>">

            <span style="color: red; font-weight: bold;" id="editBrandErrmsg_<?=$role["id"]?>"></span>
                          <div class="form-group">
                            <label class="control-label col-sm-12" for="permission">Role:</label>
                            <div class="col-sm-12">
                <input type="text" class="form-control " id="updateBrand_<?=$role['id']?>" placeholder="Role" name="edit_rolename" value="<?=$role['rolename']?>" >
                            </div>
                          </div>
       

                        
 <div class="form-group">
                            <div class="col-sm-12 d-flex justify-content-between" style="text-align: right;">
                              <button type="button" onclick="editBrandVal(<?=$role['id']?>);" class="btn btn-success add-new cst_form_listing_btn">Update</button>
                              <button type="button"  onclick="btnCloseeEdit(<?=$role['id']?>)" class="btn btn-default closee" data-dismiss="modal">Close</button>


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




      
    </table>

  </div>




   <!-- Bootstrap modal -->
   <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: rgb(27, 30, 74);">
        <h3 class="modal-title" style="font-size: 20px; font-weight: 700; color: #fff;">Role Form</h3>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff">×</span></button>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
      
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-12">Role Name</label>
              <div class="col-md-12">
                <input name="role" placeholder="Role Name" class="form-control" type="text">
              </div>
            </div>
            
						

          </div>
          <span style="color: red; font-weight: bold;" id="addUserErrmsg" class="errmsg cst-all-errors"></span>
        </form>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn closee" data-dismiss="modal">Cancel</button>
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

 
function editBrandVal(id){

var formVal = $('#editBrandform_'+id).closest("form");


$.ajax({
          type: "POST",
          url: "<?= site_url() ?>/Role/editRole/"+id,
          dataType: "json",
          data:$(formVal).serialize(),
          async: false,
          success: function (json) {
        
            if(json.success)
              {
                 alert("Role updated successfully!");

                  
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
            url : "<?= site_url() ?>/Role/addRole",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                 alert("Role added successfully!");

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

  
    function deleteRole(id) {
if (window.confirm("Are you sure, you want to delete Role?")){
  $.ajax({
            type: "POST",
            url: "<?= site_url() ?>/Role/deleteRole/"+id,
            dataType: "json",
            async: false,
            success: function (json) {
              if(json.success){

                 alert("Role deleted successfully!");
                 
                 window.location.reload();

              }

                
              
            }
      });
}
}

  </script>
<script type="text/javascript">
   function hideme() {
    $("#addUserErrmsg").hide();
    
  }
 

</script>
<script>
    function hidemeEdit() {
    $("#editBrandErrmsg_").hide();
    
  }
</script>
 

  </body>
</html>

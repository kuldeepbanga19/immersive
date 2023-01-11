<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container">


    <h3>Attack Vector List</h3>
    <br />
    <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add New</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
					
					<th>Attack Vector</th>
					
					

          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <?php foreach($Attack as $attack){?>
				     <tr>
				         
				         <td><?php echo $attack['attack_name'];?></td>
						
								
								<td>
                                <a href="#editBrand_<?=$attack["id"]?>" data-toggle="modal"  class="edit" title="Edit"   ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									
                                    <a href="javascript:void(0)" onclick="deleteAttack('<?php echo $attack['id'];?>')" class="delete" title="Delete" data-toggle="tooltip"> <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <?php if($attack['status'] == 0) { ?>
                          <a href="javascript:void(0)" onclick="showHideAttack('<?php echo $attack['id']; ?>',1)" data-toggle="tooltip"><i class="fa fa-eye-slash" aria-hidden="true"></i></i></a> <?php } 
                          else { ?>
                          <a href="javascript:void(0)"  onclick="showHideAttack('<?php echo $attack['id']; ?>',0)" data-toggle="tooltip"  title="Hide User"><i class="fa fa-eye" aria-hidden="true"></i></i></a> <?php } ?>


                                    <div class="modal fade" id="editBrand_<?=$attack["id"]?>" role="dialog">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Attack Name</h4>
                      </div>
                      <div class="modal-body">
              <form name ="brandform" class="form-horizontal" id="editBrandform_<?=$attack["id"]?>">

            <span style="color: red; font-weight: bold;" id="editBrandErrmsg_<?=$attack["id"]?>"></span>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="permission">Attack Vector:</label>
                            <div class="col-sm-10">
                <input type="text" class="form-control " id="updateBrand_<?=$attack['id']?>" placeholder="Attack Name" name="edit_rolename" value="<?=$attack['attack_name']?>" >
                            </div>
                          </div>
       

                        
 <div class="form-group">
                            <div class="col-sm-12" style="text-align: right;">
                              <button type="button"  onclick="btnCloseeEdit(<?=$attack['id']?>)" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" onclick="editBrandVal(<?=$attack['id']?>);" class="btn btn-success add-new cst_form_listing_btn">Update</button>

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
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title">Attack Vector Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
      
          <input type="hidden" value="" name="id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Attack Name</label>
              <div class="col-md-9">
                <input name="role" placeholder="Attack Name" class="form-control" type="text">
              </div>
            </div>
            
						

          </div>
          <span style="color: red; font-weight: bold;" id="addUserErrmsg" class="errmsg cst-all-errors"></span>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
          url: "<?= site_url() ?>/Attack_Vector/editAttack/"+id,
          dataType: "json",
          data:$(formVal).serialize(),
          async: false,
          success: function (json) {
        
            if(json.success)
              {
                 alert("Attack Vector updated successfully!");

                  
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
            url : "<?= site_url() ?>/Attack_Vector/addAttack",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                 alert("Attack Vector added successfully!");

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

  
    function deleteAttack(id) {
if (window.confirm("Are you sure, you want to delete Attack Vector?")){
  $.ajax({
            type: "POST",
            url: "<?= site_url() ?>/Attack_Vector/deleteAttack/"+id,
            dataType: "json",
            async: false,
            success: function (json) {
              if(json.success){

                 alert("Attack Vector deleted successfully!");
                 
                 window.location.reload();

              }

                
              
            }
      });
}
}

function showHideAttack(id,status){ 
$.ajax({
    type:"POST",
    url:"<?= site_url() ?>/Attack_Vector/showHideAttack/"+id+"/"+status,
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
    $("#editBrandErrmsg_").hide();
    
  }
</script>
 

  </body>
</html>

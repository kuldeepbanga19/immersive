<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      
      <style type="text/css">
      body{
         background: rgb(249, 249, 250);
      }
      .right{display: flex; justify-content: end; align-items: center;}
         .user{background: red; height: 30px; width: 30px; border-radius: 50%; padding: 8px; color: #fff;}
         .fa-caret-down{color: #000;}
        .criss-sim{

     font-size: 1.5rem; 
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;

        }
        
        .dataTables_length,#table_id_filter{
         display: none;
        }
        .header-text{
             background: rgb(255, 255, 255);
    border-bottom: 1px solid rgb(228, 233, 240);
    padding: 0px 2rem;
        }
        .outer{
         background: rgb(235, 236, 251);
         border-radius: 50%;
         height: 50px;
         line-height: 50px;
         color: #fff;
         width: 50px;
         margin: 1rem auto;
        }
        .plus i{
         background: rgb(52, 64, 210);
         border-radius: 50%;
         height: 30px;
         line-height: 30px;
         color: #fff;

         width: 30px;
        }
        .button{
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
    background: transparent;
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
    margin: 1.5rem auto 0px;
        }
        .card-body{
         box-shadow: rgb(0 0 0 / 10%) 0px 4px 6px -1px, rgb(0 0 0 / 6%) 0px 2px 4px -1px;
        }
        .card{
         border: none;
        }
        .flx{display: flex; align-items: center;}
        .icon{margin-right: 1.5rem;}
        .flx-parent{display: flex; justify-content: space-between; align-items: center;}
        .buttonn{
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
    
    border: 1.5px solid rgb(36, 45, 147
       ) }
        table{
         background: #fff;
        }
       

        .actionbx {
    width: 86px;
    margin: 0 auto;
    text-align: center;
}
.actionbx a {
    font-weight: 500;
    color: #3f51b5;
    text-decoration: none;
}
.actionbx a:hover {
    color: #222e70;
}


      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   </head>
   <body>
      
      <div class="container">
         <div class="row py-3">
            <div class="col-md-12 text-center">
               <h5><b>Choose your scenario</b></h5>
            </div>
         </div>
         <div class="row py-3">
            <div class="col-md-8 m-auto">
               <div class="card">                    
                  <div class="card-body brdr" style=" border: 1px solid rgb(207, 213, 222) !important;">
                     <div class="flx-parent">
                        <div class="flx">
                           <div class="icon">
                              <div class="plus text-center">
                                 <div class="outer">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="heading">
                              <h5><b>Create a new custom scenario</b></h5>
                              <p class="mb-0">Build a custom scenario from scratch</p> 
                           </div>
                        </div>
                        <div class="buttonn">

                        <form class="form-horizontal" method="" id="addnew" action="">
           
          
            <div class="cst_form_group">
            
              <input type="hidden" class="form-control" id="newVal" placeholder="Enter Brand" name="newVal" value="new form">
            </div>

           
            <a href="#" id="addNew" style="color: #fff; text-decoration: none;">Create</a>
          </form>
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>   
         </div>
         <div class="row py-3">
            <div class="col-md-8 m-auto">
               <div class="card">                    
                  <div class="card-body brdr" style=" border: 1px solid rgb(207, 213, 222) !important;">
                     <div class="flx-parent">
                        <div class="flx">
                           <div class="icon">
                              <div class="plus text-center">
                                 <div class="outer">
                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="heading">
                              <h5><b>Create a new custom scenario</b></h5>
                              <p class="mb-0">Build a custom scenario from scratch</p> 
                           </div>
                        </div>
                        <div class="buttonn">
                           <a href="<?= base_url('/Scenario/template/')?>" style="color: #fff; text-decoration: none;">Create</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>   
         </div>
         <div class="row py-3">
            <div class="col-md-12 text-center">
               <h5><b>Draft scenarios</b></h5>
            </div>
         </div>
         <div class="row py-3">
            <div class="col-md-12 text-center">
               <table  id="table_id" class="table table-striped border" style="background: #fff;">
                  
                <thead>
                  <tr>
                     <th></th>
                     <th></th>
                     <th></th>
                     <th>
                    <div class="serach-filter text-center">
                     <input type="search" name="" id="myInput">
                     </div>
                  </th>
                  </tr>
                  <tr>
                    <th style="background:rgb(247, 250, 255);">NAME<i class="fa fa-caret-down ms-2" aria-hidden="true"></i></th>
                    <th style="background:rgb(247, 250, 255);">DATE CREATED<i class="fa fa-caret-down ms-2" aria-hidden="true"></i></th>
                    <th style="background:rgb(247, 250, 255);">LAST EDITED<i class="fa fa-caret-down ms-2" aria-hidden="true"></i></th>
                    <th style="background:rgb(247, 250, 255);">ACTIONS<i class="fa fa-caret-down ms-2" aria-hidden="true"></i></th>
                  </tr>
                </thead>
                <?php foreach($Crisis as $crisis){?>
				     <tr>
				         
				         <td><?php echo $crisis['scenrio_title'].'-'.$crisis['id'];?></td>
                     
                     <td><?php echo date("d/m/Y",$crisis['created']);?></td>
                     <td><?php if($crisis['modified']==""){echo $crisis['modified'];}else{echo date("d/m/Y",$crisis['modified']);}?></td>
                    
								<td>


                           <div class="d-flex gap-3 actionbx">
                              <a href="<?php echo base_url('Scenario/singleUser/'.$crisis['id']);?>"  class="edit" title="Edit">
                                 <!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i>  -->Edit
                              </a>
                              
                              <a href="javascript:void(0)" onclick="deleteRole('<?php echo $crisis['id'];?>')" class="delete" title="Delete" data-toggle="tooltip">
                                 <!-- <i class="fa fa-trash-o" aria-hidden="true"></i>  -->Delete
                              </a>
                           </div>
                                  

                                   
                                
                                
                                </td>
				      </tr>
				     <?php }?>

              </table>

            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable({
        order: [[1, 'desc']],
    });

       $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table_id tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  });

$('#addNew').on('click', function () {

var newVal=$("#newVal").val();


// alert( brand);die;




  $.ajax({
            type: "POST",
            url: "<?= site_url() ?>/Scenario/add_scenario",
            dataType: "json",
            data:$("#addnew").serialize()+ '&newVal=' + newVal,
            async: false,
            success: function (json) {
              if(json.success)
          
              {
              

                window.location.replace('<?= site_url() ?>/Scenario/singleUser4');
              }
            }
      });
});

function deleteRole(id) {
if (window.confirm("Are you sure, you want to delete Scenario?")){
  $.ajax({
            type: "POST",
            url: "<?= site_url() ?>/Scenario/deleteScenario/"+id,
            dataType: "json",
            async: false,
            success: function (json) {
              if(json.success){

                 alert("Scenario deleted successfully!");
                 
                 window.location.reload();

              }

                
              
            }
      });
}
}

      </script>
   </body>
</html>
<?php
if(isset($_GET['ide'])){
 $_SESSION['ide'] =$_GET['ide'];
   echo' 
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">VENDOR</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DELET / EDITE VENDOR</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->';
              
               $quary ="SELECT * FROM vendor WHERE vendor_id={$_SESSION['ide']}";
                                      $result=mysqli_query($database->conn,$quary);
                                    $admin=mysqli_fetch_assoc($result);
              echo'<form action="maneg_vendor.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:#2ba8e5"> Email </label>';
                   echo" <input type='email' name='email' class='form-control' id='exampleInputEmail1'  value='{$admin["vendor_email"]}'>";
                  echo'</div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="color:#2ba8e5"> Password</label>';
                   echo" <input type='password' name='password' class='form-control' id='exampleInputPassword1'  value='{$admin["vendor_pass"]}'>";
                  echo'</div>
                  <div class="form-group">
                    <label for="exampleInputname1" style="color:#2ba8e5"> Name</label>';
                   echo" <input type='text' name='fname' class='form-control' id='exampleInputname1' value='{$admin["vendor_name"]}'>";
                  echo'</div>';
                 echo" <div class='form-group'>
                                        <label for='cc-number' class='control-label mb-1' style='color:#2ba8e5'>admin img</label>
                                        <input id='cc-number' name='imgvendor' type='file' class='form-control cc-number identified visa'  data-val='true'
                                        data-val-required='Please enter the card number' data-val-cc-number='Please enter a valid card number'
                                        autocomplete='cc-number'>
                                        <span class='help-block' data-valmsg-for='cc-number' data-valmsg-replace='true'></span>
                                    </div>";

                  
               echo' </div>
                <!-- /.card-body -->
                <div class="row mb-2">
          <div class="col-sm-6">
                <div class="card-footer">
                  <button type="submit"  name="edite" class="btn btn-primary">edite</button>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="card-footer">
                  <button type="submit"  name="delete" class="btn btn-primary">delete</button>
                </div>
                </div>
                </div>
              </form>';
             
          echo ' </div>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>';
      
}
      ?>
 

  
<?php
   echo' <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">VENDOR</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD VENDOR</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->';
              
              echo'<form action="maneg_vendor.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="color:#2ba8e5"> Email </label>';
                   echo" <input type='email' name='email' class='form-control' id='exampleInputEmail1'  >";
                  echo'</div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="color:#2ba8e5"> Password</label>';
                   echo" <input type='password' name='password' class='form-control' id='exampleInputPassword1'  >";
                  echo'</div>
                  <div class="form-group">
                    <label for="exampleInputname1" style="color:#2ba8e5"> Name</label>';
                   echo" <input type='text' name='fname' class='form-control' id='exampleInputname1' >";
                  echo'</div>';
                 echo" <div class='form-group'>
                                        <label for='cc-number' class='control-label mb-1' style='color:#2ba8e5'>vendor img</label>
                                        <input id='cc-number' name='imgvendor' type='file' class='form-control cc-number identified visa'  data-val='true'
                                        data-val-required='Please enter the card number' data-val-cc-number='Please enter a valid card number'
                                        autocomplete='cc-number'>
                                        <span class='help-block' data-valmsg-for='cc-number' data-valmsg-replace='true'></span>
                                    </div>";

                  
               echo' </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name="add" class="btn btn-primary">add vendor</button>
                </div>
                
              </form>';
             
          echo ' </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>';
      

      ?>
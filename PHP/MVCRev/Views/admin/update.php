<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-account-multiple"></i>
        </span> All Users
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-10">
                <h4 class="card-title">List Users</h4>

              </div>
              <div class="col-md-2 ms-auto text-end">

                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Add New
                </button>

              </div>
            </div>
            <form method="post">
              <div class="row mt-3">
                <div class="col-8">
                  <?php //echo "<pre>"; print_r($UserDataById['Data'][0]->username); ?>
                  <input type="text" value="<?php echo  $UserDataById['Data'][0]->username;?>" class="form-control" name="username" id="username">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                  <input type="text" value="<?php echo  $UserDataById['Data'][0]->email;?>" class="form-control" name="email" id="email">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                  <input type="text" value="<?php echo  $UserDataById['Data'][0]->mobile;?>" class="form-control" name="mobile" id="mobile">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                  <input type="radio" value="Male" name="gender" <?php if ($UserDataById['Data'][0]->gender == "Male") { echo "checked"; } ?> id="Male"> <label for="Male">Male</label>
                  <input type="radio" value="Female" <?php if ($UserDataById['Data'][0]->gender == "Female") { echo "checked"; } ?> name="gender" id="Female"> <label for="Female">Female</label>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                  <?php $hobby = explode(",",$UserDataById['Data'][0]->hobbies); 
                  // echo "<pre>";
                  // print_r($hobby);
                  // if (in_array("Cricket",$hobby)) {
                  //   echo "inside crick";
                  // }
                  // if (in_array("Reading",$hobby)) {
                  //   echo "inside Reading";
                  // }
                  // echo "</pre>";
                  ?>
                  
                  <input type="checkbox" <?php  if (in_array("Cricket",$hobby)) { echo "checked"; } ?>  value="Cricket" name="chk[]" id="Cricket"> <label for="Cricket">Cricket</label>
                  <input type="checkbox" <?php  if (in_array("Music",$hobby)) { echo "checked"; } ?> value="Music" name="chk[]" id="Music"> <label for="Music">Music</label>
                  <input type="checkbox" <?php  if (in_array("Reading",$hobby)) { echo "checked"; } ?> value="Reading" name="chk[]" id="Reading"> <label for="Reading">Reading</label>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                 <?php 
                //  echo "<pre>"; print_r($UserDataById['Data']); 
                 //echo "<pre>"; print_r($allCitiesData); 
                 ?>
                <select name="city" class="form-control" id="">
                  <option value="">-- Select City --</option>
                  <?php foreach ($allCitiesData['Data'] as $key => $value) { ?>
                    <option <?php if ($UserDataById['Data'][0]->city ==$value->city_id ) {
                      echo "selected";
                    } ?>  value="<?php echo $value->city_id; ?>"><?php echo $value->city_title; ?></option>
                  <?php } ?>  
                </select>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-8">
                  <input type="submit" name="btn" id="btn">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="login-form" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="mt-2">
              <label for="username">User Name </label>
              <input id="username" type="text" class="form-control" placeholder="Enter user name" name="username" required />
            </div>
            <div class="mt-2">
              <label for="password">Password </label>
              <input id="password" type="password" class="form-control" placeholder="password" name="password" required />
            </div>
            <div class="mt-2">
              <label for="">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Enter ur email" name="email" />
            </div>
            <div class="mt-2">
              <label for="">Mobile </label>
              <input type="tel" id="mobile" class="form-control" placeholder="Enter ur Mobile" name="mobile" />
            </div>
            <div class="mt-2">
              <label for="">Gedner</label>
              <input type="radio" id="Male" value="Male" name="gender" />
              <label class="disp-in-b" for="Male">Male</label>
              <input type="radio" id="Female" value="Female" name="gender" />
              <label class="disp-in-b" for="Female">Female</label>
            </div>
            <div class="mt-2">
              <label for="">Hobbies</label>
              <input type="checkbox" name="chk[]" id="Cricket" value="Cricket" /> <label for="Cricket" class="disp-in-b">Cricket</label>
              <input type="checkbox" name="chk[]" id="Music" value="Music" /> <label for="Music" class="disp-in-b">Music</label>
              <input type="checkbox" name="chk[]" id="Reading" value="Reading" /> <label for="Reading" class="disp-in-b">Reading</label>
              <input type="checkbox" name="chk[]" id="Travellling" value="Travellling" /> <label for="Travellling" class="disp-in-b">Travellling</label>
            </div>
            <!-- <div>
            <label for=""> </label>
            <input type="" id=""  placeholder="" name="" />
        </div> -->


          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="addnewuser">Save</button>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
      </form>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
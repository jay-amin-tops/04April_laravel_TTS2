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
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> SrNo </th>
                    <th> User Name </th>
                    <th> Gender </th>
                    <th> Mobile </th>
                    <th> Email </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // echo "<pre>";
                  // print_r($AllUsers);
                  // echo "</pre>";
                  // exit;
                  $i = 0;
                  foreach ($AllUsers['Data'] as $key => $value) {
                    $i++; ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $value->username; ?></td>
                      <td><?php echo $value->gender; ?></td>
                      <td><?php echo $value->mobile; ?></td>
                      <td><?php echo $value->email; ?></td>
                      <td>
                        <a href="edituser?userid=<?php echo $value->id ?>"><i class="mdi mdi-account-edit"></i></a>
                        <a href="deleteuser?userid=<?php echo $value->id ?>"><i class="mdi mdi-delete"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
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
              <input type="email" id="email"  class="form-control" placeholder="Enter ur email" name="email" />
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
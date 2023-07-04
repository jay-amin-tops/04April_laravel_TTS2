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
            <h4 class="card-title">List Users</h4>
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
                  foreach ($AllUsers['Data'] as $key => $value) { $i++; ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->username; ?></td>
                        <td><?php echo $value->gender; ?></td>
                        <td><?php echo $value->mobile; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td> 
                          <a href="edituser?userid=<?php echo $value->id?>"><i class="mdi mdi-account-edit"></i></a> 
                          <a href="deleteuser?userid=<?php echo $value->id?>"><i class="mdi mdi-delete"></i></a> 
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
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
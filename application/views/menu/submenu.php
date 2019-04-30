
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">
              <div class="col-lg">

          <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>')?>

            <?= $this->session->flashdata('message'); ?>
                    
              <a href=""class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#newSubMenuModal">Add Submenu</a>

              <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Url</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $sm['title']; ?></td>
                        <td><?= $sm['menu']; ?></td>
                        <td><?= $sm['url']; ?></td>
                        <td><?= $sm['icon']; ?></td>
                        <td><?= $sm['is_active']; ?></td>
                        <td>
                            <a href=""class="badge badge-primary">Edit</a>
                            <a href=""class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
                </table>

              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- MODAL -->
<!-- Modal -->
  <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newSubMenuModalLabel"></h5>php</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu/submenu'); ?>"  method="post">
        <div class="modal-body">
          <div class="form-group">
              <input type="text" class="form-control" id="submenu" name="submenu" placeholder="Sub Menu">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>



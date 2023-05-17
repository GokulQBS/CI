<?php if (isset($user_notification)) {
    echo '<div class="myalert">
    <div class="p-2 mb-0  alert-primary rounded-lg">
        <p class="mb-0">A User has been '.$user_notification.' Successfully</p>
    </div>
</div>';
} ?>
<div class="popup_model">
    <div class="popupinner" id="popupinner">
    <a href="#" class="popup_close" id="popup_close">X</a>
        <form action="/" method="post">
        <h3 class="mb-4">Update the info and click Update button</h3>
          <input type="text" class="form-control" name="name" placeholder="name" required>
          <input type="email" class="form-control my-4" name="email" placeholder="email" required>
          <input type="text" class="form-control" name="password" placeholder="password" required>
          <button class="btn btn-primary mt-3">Update</button>
          </form>
    </div>
</div>
<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <h4 class="mb-0">List of Accounts</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-stripped table-bordered">
                <colgroup>
                    <col width="10%">
                    <col width="30%">
                    <col width="30%">
                    <col width="20%">
                    <col width="5%">
                    <col width="5%">
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-primary text-light">
                        <th class="py-1 text-center">S.No</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Email ID</th>
                        <th class="py-1 text-center">Password</th>
                        <th colspan="2" class="py-1 text-center">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($list) > 0) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle"><?= $row->name ?></td>
                                <td class="p-1 align-middle"><?= $row->email ?></td>
                                <td class="p-1 align-middle"><?= $row->password ?></td>
                                <td class="p-1 align-middle" id="<?= $row->id ?>"><a href="#" class="testu">update</a></td>
                                <td class="p-1 align-middle"><a href="<?php echo base_url('delete/'.$row->id)?>" class="testu">delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('create') ?>">Create</a>
        </div>
    </div>
</div>
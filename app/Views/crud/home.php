<?php if ($user_created) {
    echo '<div class="myalert">
    <div class="p-2 mb-0  alert-primary rounded-lg">
        <p class="mb-0">New User Created Successfully</p>
    </div>
</div>';
} ?>
<div class="popup_model">
    <div class="popup_close">X</div>
    <div class="popupinner">
          <input type="text" class="form-control" name="name" placeholder="name" required>
          <input type="email" class="form-control" name="email" placeholder="email" required>
          <input type="text" class="form-control" name="password" placeholder="password" required>
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
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr class="bg-gradient bg-primary text-light">
                        <th class="py-1 text-center">S.No</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Password</th>
                        <th class="py-1 text-center">Email ID</th>
                        <th class="py-1 text-center">tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($list) > 0) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $row) : ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle"><?= $row->name ?></td>
                                <td class="p-1 align-middle"><?= $row->password ?></td>
                                <td class="p-1 align-middle"><?= $row->email ?></td>
                                <td class="p-1 align-middle"><a href="#" class="testu">update</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('create') ?>">Create</a>
        </div>
    </div>
</div>
<div class="mt-5">
    <form action="<?= site_url('store')?>" method="post">
    <h2 class="my-4">Create user</h2>
    <input type="text" id="input_name" class="form-control my-4" name="name" placeholder="Enter Name" required>
    <input type="email" id="input_email" class="form-control" name="email" placeholder="Enter Email ID" required>
    <input type="password" id="input_password" class="form-control my-4" name="password" placeholder="Enter password" required>
    <input type="password" id="input_passwordtwo" class="form-control my-4" name="password" placeholder="Enter password again" required>
    <button type="submit" id="btn_submit" class="btn btn-primary">Create</button>
    </form>
</div>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
</head>
<body>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Register</b> Admin</a>
        </div>

        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body login-card-body">
            <form action="<?= base_url('admin/register'); ?>" method="post">
    <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </div>
</form>
            </div>
        </div>
    </div>
</body>
</html> -->

<div class="login-container">
    <h3>Student Login</h3>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('student/login'); ?>" method="post">
        <div class="form-group mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-success btn-lg">Log In</button>
        </div>
        <div class="form-group">
            <a href="<?= base_url('student/add'); ?>" class="btn btn-link">Don't have an account? Register here</a>
        </div>
    </form>
</div>

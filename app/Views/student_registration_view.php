<div class="user-form-container">
    <h3>Register New Student</h3>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col col-md-6">
            <form action="<?= base_url('students/add'); ?>" method="post">
                <div class="form-group mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="confpassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confpassword" id="confpassword" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group mb-2">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sign Up</button>
                    <a href="<?= base_url('students'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

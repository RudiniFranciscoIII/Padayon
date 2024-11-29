<div class="user-list-container">
    <h3>List of Users</h3>
    <a href="<?= base_url('users/add'); ?>" class="btn btn-lg btn-success">Add New User</a>
    <table class="table-custom">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Fullname</th>
                <th>Status</th>
                <th>Date Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->username; ?></td>
                <td><?= $user->password; ?></td>
                <td><?= $user->email; ?></td>
                <td><?= $user->fullname; ?></td>
                <td><?= ucfirst($user->status); ?></td>
                <td><?= $user->datecreated; ?></td>
                <td>
                    <a href="<?= base_url('users/view/'.$user->id); ?>" class="btn btn-sm btn-warning">View</a>
                    <a href="<?= base_url('users/edit/'.$user->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                    <a href="<?= base_url('users/delete/'.$user->id); ?>" class="btn btn-sm btn-danger">Delete</a>
                    <?php if ($user->status === 'active'): ?>
                        <a href="<?= base_url('users/deactivate/'.$user->id); ?>" class="btn btn-sm btn-dark">Deactivate</a>
                    <?php else: ?>
                        <span class="badge badge-secondary">Deactivated</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url("home"); ?>" class="btn">Back to Home</a>
</div>

<style>
    .user-list-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 1920px; /* Set a max width for the container */
        width: 100%;
        text-align: center;
        margin: 50px auto; /* Center the container */
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px); /* Adds a futuristic glass effect */
    }

    .user-list-container:hover {
        transform: translateY(-5px);
    }

    h3 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #f0f0f0; /* Title color */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 2px solid #f0f0f0; /* Underline for title */
        padding-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        color: #eaeaea; /* Table text color */
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Darker border color */
        color: #c0c0c0; /* Cell text color */
    }

    th {
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #f0f0f0; /* Header text color */
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        padding: 12px 25px;
        background-color: #0b8793; /* Consistent button color */
        color: #fff; /* Button text color */
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 30px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 10px rgba(11, 135, 147, 0.5);
        margin: 10px 0; /* Adds spacing between buttons */
    }

    .btn:hover {
        background-color: #065d6c;
        box-shadow: 0 6px 15px rgba(6, 93, 108, 0.6);
    }

    .btn-sm {
        padding: 8px 15px;
        font-size: 14px;
        border-radius: 20px;
    }

    /* Leave existing button colors */
    .btn-warning {
        background-color: #ffc107;
        color: #212529; /* Text color for warning button */
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff; /* Text color for secondary button */
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff; /* Text color for danger button */
    }

    /* Body Background */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1d1f27; /* Overall body background */
        color: #eaeaea; /* Default text color */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }

    /* Responsive Design */
    @media only screen and (max-width: 768px) {
        h3 {
            font-size: 28px; /* Smaller title font size for mobile */
        }
        table {
            font-size: 14px; /* Smaller table font size for mobile */
        }
        .user-list-container {
            padding: 20px; /* Smaller padding for mobile */
        }
    }
</style>
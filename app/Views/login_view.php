<div class="user-list-container">
    <h3>Log In</h3>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('index/login'); ?>" method="post">
        <div class="form-group mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-lg btn-success">Log In</button>
        </div>
    </form>
    <div class="button-column">
        <a href="<?= base_url('users/add'); ?>" class="btn btn-link">Click here to register</a>
    </div>
</div>



<style>
    .user-list-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 600px; /* Set a max width for the container */
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

    /* Form Styling */
    .form-group {
        margin-bottom: 20px; /* Consistent spacing for form groups */
    }

    .form-label {
        font-weight: 600; /* Slightly bolder labels */
        color: #eaeaea; /* Label color */
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.1); /* Input background */
        border: 1px solid #555; /* Input border */
        color: #eaeaea; /* Input text color */
    }

    .form-control:focus {
        border-color: #0b8793; /* Border color on focus */
        background-color: rgba(255, 255, 255, 0.2); /* Input background on focus */
        box-shadow: 0 0 5px rgba(11, 135, 147, 0.5); /* Input shadow on focus */
    }

    /* Button Column Styling */
    .button-column {
        margin-top: 20px; /* Spacing above the button column */
        display: flex;
        flex-direction: column; /* Arrange buttons in a column */
        align-items: center; /* Center align buttons */
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        padding: 10px 20px; /* Adjusted padding for smaller buttons */
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

    /* Make the register button white */
    .btn-link {
        color: #fff; /* Changed to white */
        background-color: #0b8793; /* Set the same background color as other buttons */
        padding: 10px 20px; /* Match padding with other buttons */
        border-radius: 30px; /* Match border radius */
        font-size: 16px; /* Match font size */
        text-decoration: none; /* No underline */
        text-transform: uppercase; /* Uppercase text */
    }

    .btn-link:hover {
        background-color: #065d6c; /* Darker shade on hover */
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
        align-items: center; /* Centered vertically */
        min-height: 100vh;
    }

    /* Responsive Design */
    @media only screen and (max-width: 768px) {
        h3 {
            font-size: 28px; /* Smaller title font size for mobile */
        }
        .user-list-container {
            padding: 20px; /* Smaller padding for mobile */
            width: 90%; /* Responsive width */
        }
    }
</style>

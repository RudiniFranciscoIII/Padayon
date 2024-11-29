<div class="user-list-container"> 
    <h1>Welcome to ITSO Management System</h1>
    <div class="button-group">
        <a href="<?= base_url('itso/login'); ?>" class="btn btn-lg btn-primary">ITSO Personnel</a>
        <a href="<?= base_url('student'); ?>" class="btn btn-lg btn-secondary">Student</a>
        <a href="<?= base_url('associate'); ?>" class="btn btn-lg btn-success">Associate</a>
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

    h1 {
        font-size: 36px;
        margin-bottom: 30px;
        color: #f0f0f0; /* Title color */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 2px solid #f0f0f0; /* Underline for title */
        padding-bottom: 10px;
    }

    .button-group {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Vertical spacing between buttons */
    }

    .btn {
        display: inline-block;
        padding: 12px 25px; /* Adjusted padding for buttons */
        background-color: #0b8793; /* Default button color */
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 30px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(11, 135, 147, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn-success {
        background-color: #28a745;
    }

    .btn:hover {
        transform: scale(1.05);
        text-decoration: none;
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
        h1 {
            font-size: 28px; /* Smaller title font size for mobile */
        }

        .user-list-container {
            padding: 20px; /* Smaller padding for mobile */
            width: 90%; /* Responsive width */
        }
    }
</style>

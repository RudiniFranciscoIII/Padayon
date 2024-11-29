<div class="profile-container">
    <h2>About Me</h2>
    <p>
        I am a passionate individual who thrives on innovation and futuristic ideas. With a deep understanding of technology and a vision to create new solutions, I continually push the boundaries of what’s possible. My interests span across cutting-edge tech, from AI advancements to the latest trends in UI/UX design.
    </p>
    <a href="<?= base_url("home"); ?>" class="btn">Back to Home</a>
</div>

<style>
    .profile-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 800px; /* Set a max width for the container */
        width: 100%;
        text-align: center;
        margin: 50px auto; /* Center the container */
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px); /* Adds a futuristic glass effect */
    }

    .profile-container:hover {
        transform: translateY(-5px);
    }

    h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #f0f0f0; /* Title color */
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 2px solid #f0f0f0; /* Underline for title */
        padding-bottom: 10px;
    }

    p {
        font-size: 18px; /* Font size for paragraph */
        color: #eaeaea; /* Text color */
        line-height: 1.5; /* Line height for better readability */
        margin-bottom: 20px; /* Space below paragraph */
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
        margin: 10px 0; /* Adds spacing above and below the button */
    }

    .btn:hover {
        background-color: #065d6c;
        box-shadow: 0 6px 15px rgba(6, 93, 108, 0.6);
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
        h2 {
            font-size: 28px; /* Smaller title font size for mobile */
        }
        .profile-container {
            padding: 20px; /* Smaller padding for mobile */
        }
        p {
            font-size: 16px; /* Smaller paragraph font size for mobile */
        }
    }
</style>

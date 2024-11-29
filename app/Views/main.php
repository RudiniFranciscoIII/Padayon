<div class="home-container">
    <h1>Welcome to ITSO Management System</h1>
    <div class="button-group">
        <a href="<?= base_url('itso/login'); ?>" class="btn btn-primary">ITSO Personnel</a>
        <a href="<?= base_url('student'); ?>" class="btn btn-secondary">Student</a>
        <a href="<?= base_url('associate'); ?>" class="btn btn-success">Associate</a>
    </div>
</div>

<style>
    .home-container {
        text-align: center;
        padding: 50px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        max-width: 800px;
        margin: 50px auto;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    }

    h1 {
        font-size: 36px;
        margin-bottom: 30px;
        color: #f0f0f0;
    }

    .button-group {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn {
        padding: 15px 30px;
        border-radius: 25px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-success {
        background-color: #28a745;
        color: #fff;
    }

    .btn:hover {
        transform: scale(1.05);
        text-decoration: none;
    }
</style>

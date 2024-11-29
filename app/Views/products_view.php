<div class="product-list-container">
    <h3>List of Products</h3>
    <a href="<?= base_url('products/add'); ?>" class="btn btn-lg btn-success">Add New Product</a>
    <div class="table-responsive">
        <table class="table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Barcode</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Unit</th>
                    <th>Reservation Date</th>
                    <th>Date Encoded</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product->id; ?></td>
                    <td><?= $product->barcode; ?></td>
                    <td><?= $product->productname; ?></td>
                    <td><?= $product->description; ?></td>
                    <td><?= $product->unit; ?></td>
                    <td><?= $product->Reservationdate; ?></td>
                    <td><?= $product->dateencoded; ?></td>
                    <td>
                        <a href="<?= base_url('products/view/'.$product->id); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('products/edit/'.$product->id); ?>" class="btn btn-sm btn-secondary">Edit</a>

                        <!-- Delete Button with Confirmation -->
                        <a href="<?= base_url('products/delete/'.$product->id); ?>" 
                           onclick="return confirm('Are you sure you want to delete this item?');" 
                           class="btn btn-sm btn-danger">Delete</a>

                        <!-- Deactivate Button with Confirmation -->
                        <?php if ($product->status === 'active'): ?>
                            <a href="<?= base_url('products/deactivate/'.$product->id); ?>" 
                               onclick="return confirm('Are you sure you want to deactivate this item?');" 
                               class="btn btn-sm btn-dark">Deactivate</a>
                        <?php else: ?>
                            <span class="badge badge-secondary">Deactivated</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="<?= base_url("home"); ?>" class="btn">Back to Home</a>
</div>

<!-- Custom Styles -->
<style>
    .product-list-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 1920px;
        width: 100%;
        text-align: center;
        margin: 50px auto;
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .product-list-container:hover {
        transform: translateY(-5px);
    }

    h3 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #f0f0f0;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        border-bottom: 2px solid #f0f0f0;
        padding-bottom: 10px;
    }

    .table-responsive {
        overflow-x: auto;
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        color: #eaeaea;
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        color: #c0c0c0;
    }

    th {
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #f0f0f0;
    }

    .btn {
        display: inline-block;
        padding: 12px 25px;
        background-color: #0b8793;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 30px;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 10px rgba(11, 135, 147, 0.5);
        margin: 10px 0;
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

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-dark {
        background-color: #343a40;
        color: #fff;
    }

    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1d1f27;
        color: #eaeaea;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }

    @media only screen and (max-width: 768px) {
        h3 {
            font-size: 28px;
        }
        table {
            font-size: 14px;
        }
        .product-list-container {
            padding: 20px;
        }
    }
</style>

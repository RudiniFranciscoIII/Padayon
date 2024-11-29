<div class="product-detail-container">
    <h3>Product Details</h3>
    <div class="d-flex align-items-center justify-content-center">
        <div class="col col-md-6">
            <div class="form-group mb-2">
                <label for="barcode" class="form-label">Barcode</label>
                <input type="text" id="barcode" class="form-control" value="<?= $products['barcode']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="productname" class="form-label">Equipment</label>
                <input type="text" id="productname" class="form-control" value="<?= $products['productname']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="description" class="form-label">Room No.</label>
                <input type="text" id="description" class="form-control" value="<?= $products['description']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" id="unit" class="form-control" value="<?= $products['unit']; ?>" readonly>
            </div>

            <div class="form-group mb-2">
                <label for="Reservationdate" class="form-label">Reservation Date</label>
                <input type="text" id="Reservationdate" class="form-control" value="<?= $products['Reservationdate']; ?>" readonly>
            </div>

            <div class="form-group">
                <a href="<?= base_url('products'); ?>" class="btn btn-danger">Back</a>
            </div>
            <!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Yes</a>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<style>
    .product-detail-container {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        max-width: 800px;
        width: 100%;
        text-align: center;
        margin: 50px auto;
        transition: transform 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .product-detail-container:hover {
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

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #666;
    }

    .form-control[readonly] {
        background-color: #f9f9f9;
        cursor: not-allowed;
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

        .product-detail-container {
            padding: 20px;
        }

        .form-control {
            font-size: 14px;
        }
    }
</style>

<style>
    /* Modal general */
    .modal-content {
        border-radius: 12px;
        border: none;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    /* Modal header */
    .modal-header {
        border-bottom: none;
        background: #f8f9fa;
        padding: 15px 20px;
    }

    .modal-title {
        font-weight: 600;
        font-size: 18px;
        color: #333;
    }

    .modal-header .close {
        font-size: 22px;
        outline: none;
    }

    /* Modal body */
    .modal-body {
        padding: 20px;
    }

    .modal-body .form-control,
    .modal-body select,
    .modal-body textarea {
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 10px 12px;
        font-size: 14px;
        transition: all 0.3s ease;
        margin-bottom: 12px;
    }

    .modal-body .form-control:focus,
    .modal-body select:focus,
    .modal-body textarea:focus {
        border-color: #e63946;
        /* red highlight */
        box-shadow: 0 0 5px rgba(230, 57, 70, 0.3);
        outline: none;
    }

    /* Modal footer */
    .modal-footer {
        border-top: none;
        justify-content: space-between;
        padding: 15px 20px;
    }

    /* Buttons */
    .btn-primary {
        background-color: #e63946;
        /* red button */
        border: none;
        border-radius: 25px;
        padding: 10px 25px;
        font-weight: 600;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #d62839;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 14px;
        transition: background 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }
</style>


<!-- Price Start -->
<!-- Booking Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../page/priceModal-handler.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Car Wash Booking</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <select name="package_type" class="form-control" required>
                        <option value="">Package Type</option>
                        <option value="Basic Cleaning">Basic Cleaning</option>
                        <option value="Premium Cleaning">Premium Cleaning</option>
                        <option value="Complex Cleaning">Complex Cleaning</option>
                    </select>
                    <input type="text" name="washing_point" class="form-control mt-2" placeholder="Select Washing Point" required>
                    <input type="text" name="full_name" class="form-control mt-2" placeholder="Full Name" required>
                    <input type="text" name="mobile_no" class="form-control mt-2" placeholder="Mobile No." required>
                    <input type="date" name="wash_date" class="form-control mt-2" required>
                    <input type="time" name="wash_time" class="form-control mt-2" required>
                    <textarea name="message" class="form-control mt-2" placeholder="Message if any"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Book Now</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Price End -->
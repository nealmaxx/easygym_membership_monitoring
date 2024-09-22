<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Account Activation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>  
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Payment and Account Activation</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter member's name" readonly>
            </div>
            <div class="mb-3">
                <label for="membershipFee" class="form-label">Yearly Membership Fee</label>
                <input type="text" class="form-control" id="membershipFee" placeholder="Enter membership fee" readonly>
            </div>
            <div class="mb-3">
                <label for="monthlyPayment" class="form-label">Monthly Payment</label>
                <input type="text" class="form-control" id="monthlyPayment" placeholder="Enter monthly payment" readonly>
            </div>
            <div class="mb-3">
                <label for="rfidCode" class="form-label">RFID Code</label>
                <input type="text" class="form-control" id="rfidCode" placeholder="Enter RFID code">
            </div>
            <button type="submit" class="btn btn-primary">Confirm Payment and Activate</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

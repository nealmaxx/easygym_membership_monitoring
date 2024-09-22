<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .table-container {
            margin-top: 20px;
        }
        .pagination-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Table Section -->
        <div class="table-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Membership List</h5>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Contact No.</th>
                                        <th>Membership Plan</th>
                                        <th>Fitness Goal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Wilmer</td>
                                        <td>Navarro</td>
                                        <td>094648486986</td>
                                        <td>1 year</td>
                                        <td>Muscle Toning</td>
                                    </tr> 
                                    <tr>
                                        <td>2</td>
                                        <td>Aldwin</td>
                                        <td>Madiam</td>
                                        <td>09764528475</td>
                                        <td>3 months</td>
                                        <td>Muscle Toning</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Neal</td>
                                        <td>Maximo</td>
                                        <td>09657834526</td>
                                        <td>6 months</td>
                                        <td>Body Building</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Marl Jelo</td>
                                        <td>Del Rosario</td>
                                        <td>09764867543</td>
                                        <td>1 month</td>
                                        <td>Cuts and Bulks</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Kris</td>
                                        <td>Aquino</td>
                                        <td>09675837654</td>
                                        <td>Lifetime</td>
                                        <td>Weight Loss</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Section -->
        <div class="pagination-container">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">3</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Bootstrap JS (for responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        /* Ensure the body and html are full height */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Flex container for layout */
        .d-flex-column {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .flex-grow-1 {
            flex: 1;
        }

        .table td,
        .table th {
            text-align: center;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        .action-buttons button {
            margin: 0 5px;
            /* Optional: add space between buttons */
        }

        footer {
            margin-top: 20px;
        }
    </style>
</head>

<body class="d-flex-column">

    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Title on the Left -->
                <div class="col-md-9">
                    <h2>Member Overview and Status</h2>
                </div>

                <!-- Search Input and Button on the Right -->
                <div class="col-md-3 d-flex justify-content-end">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid bd-gutter mt-3 my-md-4 bd-layout flex-grow-1">
        <!-- Main Content Area -->
        <div class="main-content-wrapper">
            <div class="main-content">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Membership Plan</th>
                            <th>Membership Status</th>
                            <th>Membership Type</th>
                            <th>Yearly Membership Fee</th>
                            <th>Monthly Payment</th>
                            <th>Account Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example data rows -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>Active</td>
                            <td>Individual</td>
                            <td>$500</td>
                            <td>$50</td>
                            <td>Activated</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>Basic</td>
                            <td>Expired</td>
                            <td>Family</td>
                            <td>$300</td>
                            <td>$30</td>
                            <td>Pending</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <nav aria-label="Page navigation example">
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

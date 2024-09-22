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
                    <h2>Members Information</h2>
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
                            <th>Card No.</th>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>Membership Plan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example data rows -->
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>John Doe</td>
                            <td>+1234567890</td>
                            <td>Premium</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1002</td>
                            <td>Jane Smith</td>
                            <td>+9876543210</td>
                            <td>Basic</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1003</td>
                            <td>Michael Lee</td>
                            <td>+1112223334</td>
                            <td>Standard</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1004</td>
                            <td>Emily Davis</td>
                            <td>+5556667778</td>
                            <td>Standard</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>1005</td>
                            <td>Sophia Brown</td>
                            <td>+9998887776</td>
                            <td>Premium</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>1006</td>
                            <td>Oliver Green</td>
                            <td>+6667778889</td>
                            <td>Premium</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>1007</td>
                            <td>Lucas Gray</td>
                            <td>+2223334445</td>
                            <td>Basic</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>1008</td>
                            <td>Ava White</td>
                            <td>+4445556667</td>
                            <td>Premium</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>1009</td>
                            <td>Emma Wilson</td>
                            <td>+3334445556</td>
                            <td>Standard</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>1010</td>
                            <td>Liam Johnson</td>
                            <td>+7778889990</td>
                            <td>Basic</td>
                            <td class="action-buttons">
                                <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
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

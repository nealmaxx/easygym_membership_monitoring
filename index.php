<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%; /* Full height for body and html */
            margin: 0; /* Remove default margin */
            display: flex; /* Use flexbox to center content */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            background-color: #f8f9fa; /* Light background color for contrast */
        }
        .square-container {
            width: 80vw; /* Responsive width */
            height: 80vw; /* Responsive height (same as width to keep square shape) */
            max-width: 990px; /* Maximum width */
            max-height: 600px; /* Maximum height */
            display: flex; /* Use flexbox for alignment */
            flex-direction: column; /* Stack heading and cards vertically */
            justify-content: center; /* Center contents vertically */
            align-items: center; /* Center contents horizontally */
            border: 2px solid #ccc; /* Optional border for visibility */
            border-radius: 15px; /* Rounded corners */
            background-color: #fff; /* White background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
            padding: 20px; /* Padding to ensure spacing inside container */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }
        .card-container {
            display: flex; /* Flexbox for card alignment */
            flex-wrap: wrap; /* Allow cards to wrap */
            gap: 20px; /* Space between cards */
            justify-content: center; /* Center cards horizontally */
            align-items: center; /* Center cards vertically */
            max-width: 100%; /* Ensure cards do not exceed container width */
            max-height: 100%; /* Ensure cards do not exceed container height */
        }
        .fixed-card {
            width: 250px; /* Fixed width */
            height: 250px; /* Fixed height */
            border-radius: 15px; /* Rounded corners */
            overflow: hidden; /* Hide overflow to keep rounded corners clean */
            display: flex; /* Flexbox for card content alignment */
            flex-direction: column; /* Stack content vertically */
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
        }
        .admin-card {
            background-color: #007bff; /* Blue background for Admin */
            color: white; /* White text */
        }
        .instructor-card {
            background-color: #28a745; /* Green background for Instructor */
            color: white; /* White text */
        }
        .member-card {
            background-color: #ffc107; /* Yellow background for Member */
            color: black; /* Black text */
        }
        .card-icon {
            font-size: 3rem; /* Icon size */
        }
        .btn-custom {
            border-radius: 20px; /* Rounded button corners */
        }
        .heading {
            margin-bottom: 20px; /* Space between heading and cards */
            text-align: center; /* Center heading text */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-container {
                flex-direction: column; /* Stack cards vertically */
            }
            .fixed-card {
                width: 200px; /* Adjusted width */
                height: 200px; /* Adjusted height */
            }
        }

        @media (max-width: 576px) {
            .fixed-card {
                width: 150px; /* Adjusted width */
                height: 150px; /* Adjusted height */
            }
        }

        /* Header styling */
        .header {
            width: 100%;
            color: rgba(37, 22, 155, 0.8);
            padding: 10px 20px;
            font-size: 2rem; /* Increased font size */
            font-weight: bold; /* Added boldness */
            position: absolute;
            top: 0;
            left: 0;
        }

        .header .gym {
            color: #ffdd00; /* Highlight color for 'GYM' */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <span>Easy<span class="gym">GYM</span></span>
    </header>

    <div class="square-container">
        <h2 class="heading">Select Your Role</h2>
        <div class="card-container">
            <!-- Admin Card -->
            <div class="card fixed-card admin-card">
                <div class="card-body text-center">
                    <i class="fas fa-user-shield card-icon mb-3"></i>
                    <h5 class="card-title">Admin</h5>
                    <br><br>
                    <a href="../easygym_membership_monitoring/login.php" class="btn btn-light btn-custom" onclick="setRole(1)">Admin</a>
                </div>
            </div>

            <!-- Gym Instructor Card -->
            <div class="card fixed-card instructor-card">
                <div class="card-body text-center">
                    <i class="fas fa-user card-icon mb-3"></i>
                    <h5 class="card-title">Gym Instructor</h5>
                    <br><br>
                    <a href="../easygym_membership_monitoring/login.php" class="btn btn-light btn-custom" onclick="setRole(2)">Instructor</a>
                </div>
            </div>

            <!-- Member Card -->
            <div class="card fixed-card member-card">
                <div class="card-body text-center">
                    <i class="fa-regular fa-user card-icon mb-3"></i>
                    <h5 class="card-title">Member</h5>
                    <br><br>
                    <a href="../easygym_membership_monitoring/login.php" class="btn btn-dark btn-custom" onclick="setRole(3)">Member</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script to store role -->
    <script>
        function setRole(role) {
            // Store the selected role in localStorage (or sessionStorage)
            localStorage.setItem('userRole', role);
        }
    </script>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

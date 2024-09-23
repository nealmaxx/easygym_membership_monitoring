<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Layout Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .content-placeholder {
            padding: 15px;
        }

        body {
            overflow-x: hidden;
            /* Prevent horizontal scrolling on the body */
        }

        header {
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            background-color: rgba(37, 22, 155, 0.8);
        }

        .custom-offcanvas {
            width: 260px;
            /* Adjust width as needed */
            position: fixed;
            top: 56px;
            /* Start below the header; adjust this value to match the height of your header */
            bottom: 0;
            left: -260px;
            /* Start hidden off the left side */
            background-color: #fff;
            z-index: 1050;
            /* Ensure it is above other elements */
            transition: opacity 0.3s ease, left 0.3s ease;
            /* Smooth slide-in and fade effect */
            opacity: 0;
            /* Initially hidden */
            box-shadow: 4px 0 4px -2px rgba(0, 0, 0, 0.3);
            height: calc(100vh - 56px);
            /* Fill the remaining height */
            border-top-right-radius: 15px;
            /* Rounded top-right corner */
            border-bottom-right-radius: 15px;
            /* Rounded bottom-right corner */
        }

        .custom-offcanvas.show {
            left: 0;
            /* Slide in from the left */
            opacity: 1;
            /* Fully visible */
        }

        .custom-offcanvas.hide {
            left: -260px;
            /* Hide off the left side */
            opacity: 0;
            /* Fully hidden */
        }

        .offcanvas-header {
            margin: 5px;
        }

        .offcanvas-body {
            margin-top: 10px;
        }

        .main-content-wrapper {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
            overflow-x: hidden;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .main-content.shifted {
            margin-left: 260px;
            /* Adjust this value to match the width of your off-canvas sidebar */
        }

        .btn-sidebar {
            width: 240px;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
        }

        /* Media Queries for better responsiveness */
        @media (max-width: 767px) {
            .custom-offcanvas {
                width: 100%;
                left: -100%;
                /* Full width on smaller screens */
            }

            .custom-offcanvas.show {
                left: 0;
                /* Slide in from the left */
            }

            .main-content.shifted {
                margin-left: 0;
                /* No shifting on small screens */
            }
        }
    </style>
</head>

<body>
    <!-- Header and Main Container Wrapper -->
    <div class="d-flex flex-column min-vh-100">
        <!-- Navbar -->
        <header class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
                <!-- Logo instead of Font Awesome Icon -->
                <a class="navbar-brand d-flex align-items-center">
                    <span class="text-white mx-2">
                        Easy<strong class="text-warning">GYM</strong>
                        <i class="fa-solid fa-dumbbell"></i>
                    </span>
                </a>

                <!-- Admin text with Font Awesome Icon -->
                <span class="navbar-text ms-auto text-white" style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); padding: 5px; border-radius: 5px;">
                    Gym Instructor <i class="fa-solid fa-user"></i>
                </span>

            </div>
        </header>


        <!-- Main Content Wrapper -->
        <div class="container-fluid bd-gutter mt-3 my-md-4 bd-layout flex-grow-1">
            <div class="row align-items-center">
                <!-- Sidebar Toggle Button -->
                <div class="col-md-12 d-flex align-items-center">
                    <aside class="d-flex align-items-center">
                        <!-- Button to toggle the custom off-canvas sidebar -->
                        <button class="btn btn-primary" id="toggleSidebar" type="button">
                            <i class="fas fa-bars"></i> Menu
                        </button>
                    </aside>
                </div>

            </div>

            <!-- Custom Off-Canvas Sidebar -->
            <div class="custom-offcanvas" id="customSidebar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" id="closeSidebar" aria-label="Close"></button>
                </div>
                <center class="mt-4">
                    <img src="../assets/img/fitness_masters_logo.png" alt="Easygym Logo" style="padding: 5px; height: 70px; width: auto; border-radius: 5px; background-color: rgba(37, 22, 155, 0.8);">
                    <div class="offcanvas-body">
                </center>
                <div class="offcanvas-body">
                    <!-- Buttons with Icons -->
                    <button class="btn btn-sidebar btn-outline-primary text-start"
                        data-url=""><i class="fas fa-home"></i> Home</button>
                    <button class="btn btn-sidebar btn-outline-primary text-start" id="profileButton"
                        data-url="../gym_instructor/personal_info.php"><i class="fas fa-tachometer-alt"></i>
                        Personal Information</button>
                    <button class="btn btn-sidebar btn-outline-primary text-start"
                        data-url="../gym_instructor/client_list.php"><i class="fas fa-users"></i>
                        Client Lists</button>
                    <button class="btn btn-sidebar btn-outline-primary text-start"
                        data-url="../gym_instructor/client_workout_program.php"><i class="fas fa-user-friends"></i>
                        Client workout Program</button>
                    <button class="btn btn-sidebar btn-outline-primary text-start"
                        data-url="../gym_instructor/client_progress_tracking.php"><i class="fas fa-id-card-alt"></i>
                        Client Progress Tracking</button>
                    <button class="btn btn-sidebar btn-outline-danger text-start" id="logoutButton"
                        data-url="../index.php"><i class="fas fa-sign-out-alt"></i>
                        Logout</button>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="main-content-wrapper">
                <div class="main-content">

                    <!-- Content Placeholder -->
                    <div id="content-placeholder" class="content-placeholder">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript (for interactive components like the off-canvas sidebar) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="module">
        import {
            API_BASED_URL
        } from '../api_based_url.js';

        console.log(API_BASED_URL);
        document.addEventListener('DOMContentLoaded', function() {
            const contentPlaceholder = document.getElementById('content-placeholder');
            const sidebar = document.getElementById('customSidebar');
            const toggleSidebarButton = document.getElementById('toggleSidebar');
            const closeSidebarButton = document.getElementById('closeSidebar');
            const mainContent = document.querySelector('.main-content');

            // Function to toggle the sidebar
            toggleSidebarButton.addEventListener('click', function() {
                if (sidebar.classList.contains('show')) {
                    sidebar.classList.remove('show');
                    sidebar.classList.add('hide');
                    mainContent.classList.remove('shifted');
                } else {
                    sidebar.classList.remove('hide');
                    sidebar.classList.add('show');
                    mainContent.classList.add('shifted');
                }
            });

            // Function to close the sidebar
            closeSidebarButton.addEventListener('click', function() {
                sidebar.classList.remove('show');
                sidebar.classList.add('hide');
                mainContent.classList.remove('shifted');
            });

            // Function to load content from a given URL
            function loadContent(url) {
                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.text();
                    })
                    .then(data => {
                        contentPlaceholder.innerHTML = data;
                    })
                    .catch(error => {
                        contentPlaceholder.innerHTML = `<p>Error loading content: ${error.message}</p>`;
                    });
            }

            // Function to fetch user profile
            function fetchUserProfile() {
                Swal.fire({
                    title: 'Loading Profile...',
                    html: 'Please wait.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                fetch(`${API_BASED_URL}/api/instructor/profile`, {
                        method: 'GET',
                        headers: {
                            'Authorization': `Bearer ${localStorage.getItem('authToken')}`
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        Swal.close(); // Close loading alert
                        if (data.success) {
                            // Display user profile in the content placeholder
                            contentPlaceholder.innerHTML = `
                        <h3>User Profile</h3>
                        <p><strong>Name:</strong> ${data.user.name}</p>
                        <p><strong>Email:</strong> ${data.user.email}</p>
                        <p><strong>User Type:</strong> ${data.user_type}</p>
                    `;
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: data.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                    .catch(error => {
                        Swal.close(); // Close loading alert
                        console.error('Error fetching profile:', error);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while fetching the profile.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    });
            }

            // Event listener for sidebar buttons
            document.querySelectorAll('.btn-sidebar').forEach(button => {
                button.addEventListener('click', function() {
                    const url = this.getAttribute('data-url');
                    if (this.id === "logoutButton") {

                        Swal.fire({
                            title: 'Logging out...',
                            html: 'Please wait.',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        // Call the logout API and handle the response
                        fetch(`${API_BASED_URL}/api/logout`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Authorization': `Bearer ${localStorage.getItem('authToken')}`
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // On successful logout, clear the token and redirect to the login page
                                    localStorage.removeItem('authToken'); // Clear the stored token
                                    Swal.fire({
                                        title: 'Logged out!',
                                        text: 'You have successfully logged out.',
                                        icon: 'success',
                                        confirmButtonText: 'OK'
                                    }).then(() => {
                                        window.location.href = '../index.php'; // Redirect to login page
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Logout failed!',
                                        text: data.message,
                                        icon: 'error',
                                        confirmButtonText: 'Try Again'
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Error during logout:', error);
                                alert('An error occurred while logging out.');
                            });
                    } else if (this.id === "profileButton") {
                        // Fetch user profile when profile button is clicked
                        fetchUserProfile();
                    } else if (url) {
                        loadContent(url);
                    }
                });
            });
        });
    </script>
</body>

</html>
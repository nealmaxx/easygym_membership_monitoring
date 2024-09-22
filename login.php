<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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

        /* Main container that holds both the image and login form */
        .content-container {
            display: flex;
            width: 90%;
            max-width: 800px;
            height: 90%;
            max-height: 650px;
            background-color: rgba(37, 22, 155, 0.8); /* Same color for both sides */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(194, 187, 187, 0.1); /* Subtle shadow */
            overflow: hidden; /* So border-radius applies to child elements */
            margin-top: 60px; /* Ensure there's space for the header */
        }

        /* Left section for the image */
        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 10px;
            background-color: rgba(37, 22, 155, 0.8); /* Apply the same color to the left section */
        }

        /* Ensuring the image is responsive */
        .image-section img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* Right section for the login form */
        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* White background with slight transparency for the form */
        }

        /* Form container */
        .login-form {
            width: 100%;
            max-width: 300px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .highlight {
            color: #007bff;
            text-decoration: none;
        }

        .highlight:hover {
            text-decoration: underline;
        }

        /* Make the layout fully responsive */
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                height: auto;
                width: 95%;
                max-width: 600px;
            }
            
            .image-section {
                height: 200px;
                order: 2;
            }

            .login-section {
                order: 1;
            }
        }
    </style>
</head>
<body>
     <!-- Header -->
     <header class="header">
        <span>Easy<span class="gym">GYM</span></span>
    </header>

    <!-- Main container -->
    <div class="content-container">
        <!-- Image section -->
        <div class="image-section">
            <img src="../easygym_membership_monitoring/assets/img/fitness_masters_logo.png" alt="LOGO">
        </div>
        
        <!-- Login section -->
        <div class="login-section">
            <div class="login-form">
                <h2 class="mb-4">Login</h2>
                <br>
                <form onsubmit="login(event)">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <!-- Google reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                    </div>
                    <br> <br> <br>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div class="mt-3 text-center">
                        <p>Don't have an account? <a href="../easygym_membership_monitoring/sign_up.php" class="highlight">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="api_based_url.js"></script>

    <!-- Script to handle login -->
    <script>
        function login(event) {
    event.preventDefault(); // Prevent form submission

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Show loading spinner
    Swal.fire({
        title: 'Processing...',
        text: 'Please wait while we log you in.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    // Call the backend login API
    fetch(`${API_BASED_URL}/api/login`, { // Replace with your API URL
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        Swal.close(); // Close loading spinner
        if (data.success) {
            localStorage.setItem('userRole', data.user_type); // Save user role if needed
            // Redirect based on user role
            if (data.user_type === 'admin') {
                window.location.href = "../easygym_membership_monitoring/roles/admin.php";
                console.log(API_BASED_URL);
            } else if (data.user_type === 'instructor') {
                window.location.href = "../easygym_membership_monitoring/roles/gym_instructor.php";
            } else if (data.user_type === 'member') {
                window.location.href = "../easygym_membership_monitoring/roles/member.php";
            }
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: data.message || 'Invalid email or password.',
            });
        }
    })
    .catch(error => {
        Swal.close(); // Close loading spinner
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred. Please try again.',
        });
    });
}

    </script>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

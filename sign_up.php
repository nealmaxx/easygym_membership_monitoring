<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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

        /* Main container that holds both the form and the image */
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

        /* Right section for the image */
        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 10px;
            background-color: rgba(37, 22, 155, 0.8); /* Apply the same color to the image section */
        }

        /* Ensuring the image is responsive */
        .image-section img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* Left section for the sign-up form */
        .signup-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* White background with slight transparency for the form */
        }

        /* Form container */
        .signup-form {
            width: 100%;
            max-width: 300px;
        }

        .signup-form h2 {
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

            .signup-section {
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
        <!-- Sign-up form section -->
        <div class="signup-section">
            <div class="signup-form">
                <h2 class="text-center mb-4 mt-3">Sign Up</h2>
                <form id="signup-form">
                    <!-- Name -->
                    <div class="col-md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    
                    <!-- Email -->
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    
                    <!-- Password -->
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    
                    <!-- Retype Password -->
                    <div class="col-md-12">
                        <label for="retype_password" class="form-label">Retype Password</label>
                        <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Retype Password" required>
                    </div>
                    
                    <!-- Password Requirements -->
                    <div class="col-md-12 password-requirements p-3">
                        <ul>
                            <li>Maximum of 8 characters</li>
                            <li>At least one uppercase letter</li>
                            <li>At least one number</li>
                        </ul>
                    </div>
                    
                    <!-- User Type -->
                    <div class="col-md-12">
                        <label for="user_type" class="form-label">User Type</label>
                        <select class="form-control" id="user_type" name="user_type" required>
                            <option value="member">Member</option>
                            <option value="instructor">Instructor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100 mt-4">Sign Up</button>
                    <div class="mt-3 text-center">
                        <p>Already have an account? <a href="../easygym_membership_monitoring/login.php" class="highlight">Sign in here</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Image section (Now on the right) -->
        <div class="image-section">
            <img src="../easygym_membership_monitoring/assets/img/fitness_masters_logo.png" alt="LOGO">
        </div>
    </div>



    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="api_based_url.js"></script>
    
    <!-- JavaScript for form submission -->
    <script>
document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const formData = new FormData(this);
    const password = formData.get('password');
    const passwordConfirmation = formData.get('retype_password');

    // Check if passwords match
    if (password !== passwordConfirmation) {
        Swal.fire({
            icon: 'error',
            title: 'Passwords do not match',
            text: 'Please make sure both passwords are the same.',
        });
        return; // Stop the form submission
    }

    // Show loading spinner
    Swal.fire({
        title: 'Processing...',
        text: 'Please wait while we register your account.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    // Convert form data to an object
    const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        password: password,
        password_confirmation: passwordConfirmation,
        user_type: formData.get('user_type')
    };

    // Send form data to the API
    fetch(`${API_BASED_URL}/api/register`, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => {
                throw new Error(errorData.message || 'Registration failed');
            });
        }
        return response.json();
    })
    .then(data => {
        // Close the loading spinner
        Swal.close();

        // Handle success
        if (data.token) { // Check if token is present
            Swal.fire({
                icon: 'success',
                title: 'Registration Successful',
                text: data.message,
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'login.php'; // Redirect to login page or dashboard
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Registration Failed',
                text: data.message || 'An error occurred during registration. Please try again.',
            });
        }
    })
    .catch(error => {
        // Close the loading spinner
        Swal.close();

        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: error.message,
        });
    });
});
</script>



</body>
</html>
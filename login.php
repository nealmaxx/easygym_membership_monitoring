<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

        .header {
            width: 100%;
            color: rgba(37, 22, 155, 0.8);
            padding: 10px 20px;
            font-size: 2rem;
            font-weight: bold;
            position: absolute;
            top: 0;
            left: 0;
        }

        .header .gym {
            color: #ffdd00;
        }

        .content-container {
            display: flex;
            width: 90%;
            max-width: 800px;
            height: 90%;
            max-height: 650px;
            background-color: rgba(37, 22, 155, 0.8);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(194, 187, 187, 0.1);
            overflow: hidden;
            margin-top: 60px;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 10px;
            background-color: rgba(37, 22, 155, 0.8);
        }

        .image-section img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }

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
    <header class="header">
        <span>Easy<span class="gym">GYM</span></span>
    </header>

    <div class="content-container">
        <div class="image-section">
            <img src="../easygym_membership_monitoring/assets/img/fitness_masters_logo.png" alt="LOGO">
        </div>

        <div class="login-section">
            <div class="login-form">
                <h2 class="mb-4">Login</h2>
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required autocomplete="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script type="module">
    import { API_BASED_URL } from './api_based_url.js';

    document.getElementById('loginForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        try {
            const response = await fetch(`${API_BASED_URL}/api/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    email,
                    password
                }),
            });

            const data = await response.json();

            if (response.ok && data.success) {
                // Store the token in local storage
                localStorage.setItem('authToken', data.token);

                // Determine the redirect based on the user_type
                let redirectUrl = '';
                switch (data.user_type) {
                    case 'member':
                        redirectUrl = '../easygym_membership_monitoring/roles/member.php';
                        break;
                    case 'instructor':
                        redirectUrl = '../easygym_membership_monitoring/roles/gym_instructor.php';
                        break;
                    case 'admin':
                        redirectUrl = '../easygym_membership_monitoring/roles/admin.php';
                        break;
                    default:
                        redirectUrl = '../easygym_membership_monitoring/index.php'; // Optional: a default redirect if user_type is unexpected
                        break;
                }

                // Show success message and redirect
                Swal.fire({
                    title: 'Success!',
                    text: 'Login Successful',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = redirectUrl;
                     // Redirect based on user_type
                     
                });
            } else {
                // Show error message
                Swal.fire({
                    title: 'Error!',
                    text: data.message || 'Login failed',
                    icon: 'error',
                    confirmButtonText: 'Try Again'
                });
            }
        } catch (error) {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error!',
                text: 'An unexpected error occurred',
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        }
    });
</script>

</html>



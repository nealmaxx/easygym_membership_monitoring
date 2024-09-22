<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .info-container {
            margin-top: 20px;
        }
        .info-header {
            margin-bottom: 20px;
        }
        .info-group {
            margin-bottom: 10px;
        }
        .info-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container info-container">
        <h2 class="info-header text-center">Personal Information Details</h2>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <!-- Name -->
                        <div class="info-group">
                            <label for="name">Name:</label>
                            <p id="name">Wilmer</p>
                        </div>

                        <!-- Birthdate -->
                        <div class="info-group">
                            <label for="birthdate">Birth Date:</label>
                            <p id="birthdate">November 20, 1999</p>
                        </div>

                        <!-- Contact Number -->
                        <div class="info-group">
                            <label for="contact_no">Contact Number:</label>
                            <p id="contact_no">09090781528</p>
                        </div>

                        <!-- Gender -->
                        <div class="info-group">
                            <label for="gender">Gender:</label>
                            <p id="gender">Male</p>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <!-- Address -->
                        <div class="info-group">
                            <label for="address">Address:</label>
                            <p id="address">Sta. Cruz, Echague, Isabela</p>
                        </div>

                        <!-- Qualifications/Certifications -->
                        <div class="info-group">
                            <label for="qualifications">Qualifications/Certifications:</label>
                            <p id="qualifications">Bachelor's Degree in Computer Science, Certified Scrum Master (CSM)</p>
                        </div>

                        <!-- Specialization -->
                        <div class="info-group">
                            <label for="specialization">Specialization:</label>
                            <p id="specialization">Strength Training</p>
                            <p id="specialization">(HIIT) High-Intensity Interval Training</p>
                            <p id="specialization">Functional Training</p>
                        </div>

                        <!-- Availability -->
                        <div class="info-group">
                            <label for="availability">Availability:</label>
                            <p id="availability">Monday: 6am - 12pm, 4pm - 8pm</p>
                            <p id="availability">Tuesday: 8am - 2pm</p>
                            <p id="availability">Wednesday: Off</p>
                            <p id="availability">Thursday: 6am - 12pm, 4pm - 8pm</p>
                            <p id="availability">Friday: 8am - 2pm</p>
                            <p id="availability">Saturday: 9am - 3pm</p>
                            <p id="availability">Sunday: Off</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (for responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Information</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">My Information</h2>

        <!-- Combined Card for Personal and Membership Information -->
    <div class="card">
        <div class="card-header text-center bg-primary text-white">
            Personal and Membership Information
        </div>
        <div class="card-body">
            <!-- Personal Information Section -->
            <h5 class="card-title">Personal Information</h5>
            <table class="table table-striped table-bordered mb-4" id="personal-info-table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td id="name">Loading...</td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td id="gender">Loading...</td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td id="birthdate">Loading...</td>
                </tr>
                <tr>
                    <td>Contact No.:</td>
                    <td id="contact">Loading...</td>
                </tr>
                <tr>
                    <td>Height:</td>
                    <td id="height">Loading...</td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td id="weight">Loading...</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td id="address">Loading...</td>
                </tr>
                <tr>
                    <td>Medical Condition:</td>
                    <td id="medical-condition">Loading...</td>
                </tr>
                <tr>
                    <td>Medical History:</td>
                    <td id="medical-history">Loading...</td>
                </tr>
            </table>

            <!-- Membership Information Section -->
            <h5 class="card-title">Membership Information</h5>
            <table class="table table-striped table-bordered" id="membership-info-table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Fitness Goal:</td>
                    <td id="fitness-goal">Loading...</td>
                </tr>
                <tr>
                    <td>Instructor:</td>
                    <td id="instructor">Loading...</td>
                </tr>
                <tr>
                    <td>Membership Type:</td>
                    <td id="membership-type">Loading...</td>
                </tr>
                <tr>
                    <td>Membership Plan:</td>
                    <td id="membership-plan">Loading...</td>
                </tr>
                <tr>
                    <td>Session Type:</td>
                    <td id="session-type">Loading...</td>
                </tr>
                <tr>
                    <td>Date Started:</td>
                    <td id="date-started">Loading...</td>
                </tr>
                <tr>
                    <td>Date Expired:</td>
                    <td id="date-expired">Loading...</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Fetch and Populate Data -->
    <script type="module">
        import {
            API_BASED_URL
        } from '../api_based_url.js';
        document.addEventListener('DOMContentLoaded', function () {

            console.log(API_BASED_URL);
            // Function to fetch and display data
            function loadClientData() {
                fetch(API_BASED_URL)
                    .then(response => response.json())
                    .then(data => {
                        // Populate Personal Information
                        document.getElementById('name').innerText = data.name;
                        document.getElementById('gender').innerText = data.gender;
                        document.getElementById('birthdate').innerText = data.birthdate;
                        document.getElementById('contact').innerText = data.contactNo;
                        document.getElementById('height').innerText = data.height + ' cm';
                        document.getElementById('weight').innerText = data.weight + ' kg';
                        document.getElementById('address').innerText = data.address;
                        document.getElementById('medical-condition').innerText = data.medicalCondition;
                        document.getElementById('medical-history').innerText = data.medicalHistory || 'None';

                        // Populate Membership Information
                        document.getElementById('fitness-goal').innerText = data.fitnessGoal;
                        document.getElementById('instructor').innerText = data.instructor;
                        document.getElementById('membership-type').innerText = data.membershipType;
                        document.getElementById('membership-plan').innerText = data.membershipPlan;
                        document.getElementById('session-type').innerText = data.sessionType;
                        document.getElementById('date-started').innerText = data.dateStarted;
                        document.getElementById('date-expired').innerText = data.dateExpired;
                    })
                    .catch(error => {
                        console.error('Error fetching client data:', error);
                    });
            }

            // Load client data on page load
            loadClientData();
        });
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

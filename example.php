<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <script>
        async function addMember(event) {
            event.preventDefault(); // Prevent form from submitting the traditional way

            // Collect form data
            const formData = {
                last_name: document.getElementById('last_name').value,
                first_name: document.getElementById('first_name').value,
                middle_name: document.getElementById('middle_name').value,
                sex: document.getElementById('sex').value,
                contact_number: document.getElementById('contact_number').value,
                fitness_type: document.getElementById('fitness_type').value,
                address: document.getElementById('address').value,
                membership_date_started: document.getElementById('membership_date_started').value,
                membership_expiry_date: document.getElementById('membership_expiry_date').value,
                membership_type: document.getElementById('membership_type').value,
                payment: document.getElementById('payment').value || null // Optional
            };

            try {
                // Send data to Laravel backend using Fetch API
                const response = await fetch('http://192.168.1.11:8000/api/add-member', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify(formData)
                });

                const result = await response.json();

                if (response.ok) {
                    alert('Member added successfully!');
                } else if (response.status === 422) {
                    alert('Validation errors: ' + JSON.stringify(result.errors));
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        }
    </script>
</head>
<body>
    <h1>Add New Member</h1>

    <!-- CSRF Token (for Laravel security) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <form id="memberForm" onsubmit="addMember(event)">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name" required><br><br>

        <label for="sex">Sex:</label>
        <select id="sex" name="sex">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>

        <label for="fitness_type">Fitness Type:</label>
        <input type="text" id="fitness_type" name="fitness_type" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="membership_date_started">Membership Start Date:</label>
        <input type="date" id="membership_date_started" name="membership_date_started" required><br><br>

        <label for="membership_expiry_date">Membership Expiry Date:</label>
        <input type="date" id="membership_expiry_date" name="membership_expiry_date" required><br><br>

        <label for="membership_type">Membership Type:</label>
        <select id="membership_type" name="membership_type" required>
            <option value="oneMonth">1 Month</option>
            <option value="threeMonths">3 Months</option>
            <option value="sixMonths">6 Months</option>
            <option value="eightMonths">8 Months</option>
            <option value="tenMonths">10 Months</option>
            <option value="oneYear">1 Year</option>
        </select><br><br>

        <label for="payment">Payment (optional):</label>
        <input type="number" id="payment" name="payment"><br><br>

        <button type="submit">Add Member</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Goal Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS for padding and layout -->
    <style>
        body {
            padding: 20px;
        }
        .chart-container {
            margin-bottom: 30px;
        }
        .chart-container canvas {
            width: 100% !important; /* Make the canvas fill the container */
            height: 300px !important; /* Set a specific height */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Fitness Goal Dashboard</h2>
        <div class="row">
            <!-- Attendance Chart -->
            <div class="col-md-6 chart-container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gym Attendance</h5>
                        <canvas id="attendanceChart" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>

            <!-- Progress Chart -->
            <div class="col-md-6 chart-container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Fitness Goal Progress</h5>
                        <canvas id="progressChart" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (for responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Attendance Data
        const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(attendanceCtx, {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Attendance Days',
                    data: [5, 4, 6, 3], // Example data
                    backgroundColor: ['#4CAF50', '#FFC107', '#2196F3', '#FF5722'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                }
            }
        });

        // Progress Data
        const progressCtx = document.getElementById('progressChart').getContext('2d');
        const progressChart = new Chart(progressCtx, {
            type: 'doughnut',
            data: {
                labels: ['Cardio Progress', 'Strength Progress', 'Flexibility Progress'],
                datasets: [{
                    label: 'Fitness Goal Progress',
                    data: [70, 85, 50], // Example data
                    backgroundColor: ['#4CAF50', '#FFC107', '#2196F3'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                }
            }
        });
    </script>
</body>
</html>

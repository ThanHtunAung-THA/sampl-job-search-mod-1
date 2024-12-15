<?php
session_start();
include '../includes/Database.php';
include '../includes/config.php';

$error = '';
$success = '';
$db = new Database();
$conn = $db->getConnection();
$employer_id = $_SESSION['user_id'];

// Jobs Data
$sql_job = "SELECT * FROM jobs";
$results_job = $conn->query($sql_job);
$job_data = [];
while ($row_job = mysqli_fetch_assoc($results_job)) {
    $job_data[] = $row_job;
}
// Employers Data
$sql_employer = "SELECT * FROM employers";
$results_employer = $conn->query($sql_employer);
$employer_data = [];
while ($row_employer = mysqli_fetch_assoc($results_employer)) {
    $employer_data[] = $row_employer;
}
// Employees Data
$sql_employee = "SELECT * FROM employees";
$results_employee = $conn->query($sql_employee);
$employee_data = [];
while ($row_employee = mysqli_fetch_assoc($results_employee)) {
    $employee_data[] = $row_employee;
}
// Convert PHP arrays to JSON format
$job_count = count($job_data);
$employer_count = count($employer_data);
$employee_count = count($employee_data);
?>
<?php include '../components/head_admin.php'; ?>
<body>
<?php include '../navbars/nav__admin.php'; ?>
<?php include '../components/$error_$success.php'; ?>
<div class="content card">
    <section class="card bg-dark">
        <h4 class="card-header text-light">Overview Chart List</h4>

        <div class="jumbotron" style="margin-left: 0px;">
            <?php include '../underConstruction/index.html'; ?>
        </div>

    </section>
</div>

<?php include '../components/foot.php'; ?>
</body>
</html>
<?php $db->close(); ?>

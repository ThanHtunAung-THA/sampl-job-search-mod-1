<?php
session_start();
include '../includes/Database.php';
include '../includes/config.php';

$error = '';
$success = '';
$db = new Database();
$conn = $db->getConnection();
$employeeId = $_SESSION['user_id'];

// Retrieve the list of applied jobs for the current employee
$stmt = $conn->prepare("SELECT aj.application_date, aj.status, j.ID, j.job_title, j.responsibilities, j.salary FROM applied_jobs aj INNER JOIN jobs j ON aj.job_id = j.ID WHERE aj.employee_id = ?");
$stmt->bind_param("i", $employeeId);
$stmt->execute();
$result = $stmt->get_result();
$appliedJobs = array();
while ($row = $result->fetch_assoc()) {
  $appliedJobs[] = $row;
}
?>
<?php include '../components/head.php'; ?>
<body style="background-image: linear-gradient(to right, #1f2766, #1f2766);">
<?php include '../navbars/nav__employee.php'; ?>
<?php include '../components/$error_$success.php'; ?>

<div class="jumbotron" style="margin-left: 0px;">
    <?php include '../underConstruction/index.html'; ?>
</div>

<?php include '../components/foot.php'; ?>
</body>
</html>

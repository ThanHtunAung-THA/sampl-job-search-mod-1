<?php
session_start();
include '../includes/Database.php';
include '../includes/config.php';

$error = '';
$success = '';
$db = new Database();
$conn = $db->getConnection();
$employer_id = $_SESSION['user_id'];
// Fetch job postings


?>
<?php include '../components/head.php'; ?>
<body style="background-image: linear-gradient(to right, #1f2766, #1f2766);">
<?php include '../navbars/nav__employer.php'; ?>
<?php include '../components/$error_$success.php'; ?>

<div class="jumbotron" style="margin-left: 0px;">
    <?php include '../underConstruction/index.html'; ?>
</div>


<?php include '../components/foot.php'; ?>
</body>
</html>


<?php
session_start();

$category = $_SESSION['category'];
$priority = $_SESSION['priority'];
$risk = $_SESSION['risk'];
$sdescription = $_SESSION['dxcsdescription'];
$start_time = $_SESSION['start_time'];
$end_time = $_SESSION['end_time'];
$dxc_ssr = $_SESSION['dxcssr'];
$template = $_SESSION['classification'];
?>
<script src='./standardpost.js'></script>
<html>

<head>
    <script src="./standardpost.js"></script>
</head>

<body onload="standardpost('<?php echo $category ?>',
    '<?php echo $priority ?>', '<?php echo $risk ?>', '<?php echo $sdescription ?>',
    '<?php echo $start_time ?>', '<?php echo $end_time ?>', '<?php echo $dxc_ssr ?>', '<?php echo $template ?>')">

</body>

</html>
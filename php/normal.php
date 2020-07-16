<?php
session_start();

$category = $_SESSION['category'];
$priority = $_SESSION['priority'];
$risk = $_SESSION['risk'];
$sdescription = $_SESSION['dxcsdescription'];
$start_time = $_SESSION['start_time'];
$end_time = $_SESSION['end_time'];
$dxc_ssr = $_SESSION['dxcssr'];
?>
<script src='./normalpost.js'></script>
<html>

<head>
    <script src="./normalpost.js"></script>
</head>

<body onload="normalpost('<?php echo $category ?>',
    '<?php echo $priority ?>', '<?php echo $category ?>', '<?php echo $sdescription ?>',
    '<?php echo $start_time ?>', '<?php echo $end_time ?>', '<?php echo $dxc_ssr ?>')">

</body>

</html>



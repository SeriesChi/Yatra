<?php include_once("../connection/connection.php");
  ob_start();
  $result=mysqli_query($con,"select * from company");
  $row=mysqli_fetch_array($result);
  $logo=$row['logo'];
?>
<head>
	<link rel='shortcut icon' href="<?php echo 'data:image/jpeg;base64,'.base64_encode($logo); ?>" >
	<title><?php echo $row['c_name'];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php echo "<link rel='stylesheet' type='text/css' href='".ROOT_URL."/admin/css/style.css'>" ?>
		<?php echo"<script src='".ROOT_URL."/admin/css/ckeditor/ckeditor.js'></script>" ?>
		<?php echo "<link rel='stylesheet' type='text/css' href='".ROOT_URL."/admin/css/external_link.css'>" ?>
		<?php echo "<link rel='stylesheet' type='text/css' href='".ROOT_URL."/admin/css/style-responsive.css'>" ?>
		<?php echo "<link rel='stylesheet' href='".ROOT_URL."/css/web-fonts-with-css/css/fontawesome-all.min.css'>" ?>
</head>
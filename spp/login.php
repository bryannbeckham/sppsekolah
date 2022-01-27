<?php
session_start();
if (isset($_SESSION['login']) ) {
	header('Location: index.php');
} 
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD']=='POST' ) {
	$user  = $_POST['username'];
	$pass  = $_POST['password'];
	$p     = hash('sha1', $pass);

	if ( $user == "" || $p == ""){
		$error = true;
	}else {
		$data = $konek -> query("SELECT * FROM admin WHERE username ='".$user."' AND password = '".$p."'");
	$dt = mysqli_num_rows($data);
	$dta = mysqli_fetch_Assoc($data);

	if ($dt > 0) {
		session_start();
		$_SESSION['login']    = TRUE;
		$_SESSION['username'] = $dta['username'];
		$_SESSION['id']		  = $dta['idadmin'];
		header('Location: index.php');
	}else{
		echo "
		<script>
		alert('username atau password anda salah');
		document.location.href = 'login.php';
		</script>
		";
	}
	}

	
}

?>

	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HALAMAN LOGIN</title>
    <style >
    	body{
    background: linear-gradient(135deg,#2f49d1,#cbd2f4);
    background-attachment: fixed;
}
.content{
    margin: 10%;
    background-color: white;
    padding: 4rem 1rem 4rem 1rem;
    border-radius: 30px;
    box-shadow: 0px 5px 5px rgba(0,0,0,0.4);
}
h3{
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 40px;
    font-weight: 600;
}
.form{
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 15px;
    font-weight: 200;
    line-height: 1.5;
    border-color: #2f49d1;
    border-style:solid ;
    border-width: 0 0 3px 0;
    padding: 0px;
}
.btn{
    background:#2f49d1;
    color: white;
}
.btn:hover{
    background: white;
    color: #2f49d1;
    border: 1px solid;

}
    </style>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
</head>
<body>

	
	<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div  class="panel panel-info">
		<div class="panel-heading">
			<h2>LOGIN</h2>
			<h3>Admin Pembayaran SPP</h3>
			<?php if (isset($error) ) :  ?>
				<div class="alert alert-warning">
		<span><b>Peringatan!!</b>Form Belum Lengkap</span>
		</div>
	<?php endif;  ?>

	</div>	
	<div class="panel-body">
		
	<form action="" method="post">
		<table class="table">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="username" placeholder="Masukan Username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input class="form-control" type="Password" name="password" placeholder="password">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
				<button class="btn btn-info" name="login" style="width: 100;">LOGIN</button>
				</td>
			</tr>
			</table>

	</form>
	<p class="text-center small">Don't have an account? <a href="tambahAD.php">Sign up here!</a></p>
</div>
</div>
</div>
	</div>
</body>
</html>
<?php include 'footer.php';  ?>
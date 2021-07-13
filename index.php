ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__).'/error_log.log');
//init_set('session.use_trans_sid', 0);
error_reporting(E_ALL);

session_start();

$_SESSION["acessoLiberado"] = false;
$_SESSION["code"] = "";

// Criar primeiro usuário, arquivo ini

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html40/strict.dtd">
<html>

<head>

<title>MICHEL PEREIRA</title>

</head>

<body>

				Bem-vindo !
				<label>MICHEL PEREIRA</label>

</body>

</html>

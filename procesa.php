<?php
$valor_estado=$_POST['valor_estado'];
switch ($valor_estado) {
	case 1:
		exec('sudo python /var/www/control/py/avanza.py');
		break;
	case 2:
		exec('sudo python /var/www/control/py/izquierda.py');
		break;
	case 3:
		exec('sudo python /var/www/control/py/derecha.py');
		break;
	case 4:
		exec('sudo python /var/www/control/py/retrocede.py');
		break;
	case 5:
		exec('sudo python /var/www/control/py/para.py');
		break;
	default:
		exec('sudo python /var/www/control/py/para.py');
		break;

if($valor_estado==6)
	{
		exec('sudo python /var/www/control/apaga.py');
	}
	elseif($valor_estado==7){
		exec('sudo python /var/www/control/prende.py');
	}
	elseif($valor_estado==8){
		exec('sudo python /var/www/control/apaga2.py');
	}
	elseif($valor_estado==9){
		exec('sudo python /var/www/control/prende2.py');
	}
}

/*
$valor_estado= $_POST['valor_estado'];
if($valor_estado==6)
{
    exec('sudo python /var/www/control/apaga.py');
}
elseifif($valor_estado==7){
	exec('sudo python /var/www/control/prende.py');
}

$valor_estado= $_POST['valor_estado'];
if($valor_estado==8)
{
    exec('sudo python /var/www/control/apaga2.py');
}
else{
	exec('sudo python /var/www/control/prende2.py');
}*/
?>

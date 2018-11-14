<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 09/11/2018
 * Time: 09:32
 */
?>  <!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>sec</title>
	</head>
	<body>

<?php
//opdracht 1

$hallo= array('h','a','','l','o');

function enscriptie1 ($ascii){
$stringEnscript = "";
$convert=" ";
	for ($i = 0; $i > 5; $i++){
//	for( $i = 1; $i > 5; $i++ )
	if (ord($ascii[$i]) % 2 == 0){
		$convert = ord($ascii[$i]) + $i;
		$stringEnscript .= chr( $convert);
	}else{
		$convert = ord($ascii[$i]) - $i;
		$stringEnscript .= chr($convert);
	}
	}
	return$stringEnscript;
}


echo "Opdracht 1 <br> De versleuterde enxriptie van hallo is i_opj <br><br>";


//opdracht 2

echo "Opdracht 2 <br> OpenSSL ondersteunt verschillende cryptografische coderingen ";
echo "<br> zoals: AES, Blowfish, Camellia, SEED, CAST-128, DES, IDEA, RC2, RC4, RC5, Triple DES en GOST 28147-89 <br><br>";

// opdracht 3
echo "opdracht 3 <br>" ;

echo "openssl_encrypt encrtpt data en openssl_decrypt decrypt het <br> <br>";

//opdracht 4

echo "opdracht 4 <br>" ;

echo "video kijken<br> <br>";


// opdracht 5
echo "opdracht 5 <br>";

?>
	<form action="" method="post">
		<label for="waarde"> typ je waarde</label>
		<input type="text" id="waarde" name="waarde">
		<input type="submit" name="submit">
	</form>
<?php

if (isset($_POST['submit'])) {
	$waarde = html_entity_decode( $_POST['waarde'] );
	$waarde = strip_tags( $waarde );

	echo "de waarde is " . $waarde;
	echo "<br> een if($var) geef een ractie tot ";
	if ( $waarde ) {
		echo "true";
	} else {
		echo "false";
	}

	echo "<br> een if(!empty($var)) geef een ractie tot ";
	if ( ! empty( $waarde ) ) {
		echo "true";
	} else {
		echo "false";
	}

	echo "<br> een if($var !='') geef een ractie tot ";
	if ( $waarde != '' ) {
		echo "true";
	} else {
		echo "false";
	}

	echo "<br> een If ( strlen( $var ) != 0 )  geef een ractie tot ";
	If ( strlen( $waarde ) != 0 ) {
		echo "true";
	} else {
		echo "false";
	}

	echo "<br> een If ( isset( $var ) != 0 )  geef een ractie tot ";
	If (   isset( $waarde )  != 0 ) {
		echo "true";
	} else {
		echo "false";
	}

	echo "<br> een If ( is_string( $var ) ) geef een ractie tot ";
	If ( is_string( $waarde ) ) {
		echo "true<br>";
	} else {
		echo "false <br>";
	}


}


//opdracht 5a
$hallo = 'hallo';
echo "de waarde van $hallo is ". $hallo .'<br>';
$key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';
$halloEncript = my_encrypt($hallo,$key);
echo 'de versleuteling is: '. $halloEncript;
$halloEncript = my_decrypt($halloEncript,$key);
echo ' <br>   de decript is: '. $halloEncript;



function my_encrypt($data, $key) {

	// Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
	$encrypted = openssl_encrypt($data, 'aes-256-cbc', $key);
	// The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
	return $encrypted;
}


function my_decrypt($data, $key) {

	return openssl_decrypt($data, 'aes-256-cbc', $key);
}
?>	</body>
</html>


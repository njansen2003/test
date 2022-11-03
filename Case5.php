<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
	.knop {
		width: 100px;
		height: 75px;
		font-size: 40px;
	}
</style>
</head>
<?php
function toggle():int {// hier gebleven
	global $boolean;
		if(isset($boolean) && $boolean == 0) {
			$boolean++;
		} elseif(isset($boolean) && $boolean == 1) {
			$boolean--;
		} else {
		$boolean = 0;
	}
	return $boolean;
}
/*
$first = "";
$rekenfunctie = "";
$second = "";
$antwoord = "";

	$currentValue = 0;

	$input = [];
	
	function calculateInput($userInput){
		$arr = [];
		$char = "";
		foreach ($userInput as $num){
		if(is_numeric($num) || $num == "."){
			
	
	
	}
	$current = 0;
	$action = null;
	
	
	if (isset($_POST['uitrekenen'])) {
					if(!isset($first)) {
						$first = $_POST['Getal_1'];}
						else {$first = $antwoord;}
						
						

						$second = $_POST['Getal_2'];
						$rekenfunctie = $_POST['rekenfunctie'];
					switch($rekenfunctie) {
						case "optellen"			:	$antwoord = round($first + $second, $_POST['Decimalen'])	   	; echo "$first + $second = $antwoord"			; break;
						case "aftrekken"		:	$antwoord = round($first - $second, $_POST['Decimalen'])	 	; echo "$first - $second = $antwoord"			; break;
						case "vermenigvuldigen"	:	$antwoord = round($first * $second, $_POST['Decimalen'])	  	; echo "$first x $second = $antwoord"			; break;
						case "delen"			:	$antwoord = round($first / $second, $_POST['Decimalen'])	  	; echo "$first / $second = $antwoord"			; break;
						case "kwadrateren"		:	$antwoord = round($first * $first, $_POST['Decimalen'])	  		; echo "$first<sup>2</sup> = $antwoord"			; break;
						case "macht"			:	$antwoord = round(pow($first, $second), $_POST['Decimalen'])	; echo "$first<sup>$second</sup> = $antwoord" 	; break;
						case "modulo"			:	$antwoord = round($first % $second, $_POST['Decimalen'])	  	; echo "$first % $second = $antwoord"			; break;
						case "worteltrekken"	:	$antwoord = round(sqrt($first), $_POST['Decimalen'])			; echo "√$first = $antwoord"					; break;
					}
			
				}
		}
	}
	if(isset($_POST['getal'])) {
		if (!isset($first)){
			$first = $_POST['getal'];
			
		}
		else {
			$second = $_POST['getal'];
		}
		
	}
	if(isset($_POST['rekenfunctie'])) {
		$rekenfunctie = $_POST['rekenfunctie'];
	}
	unset($_POST['getal']);
	*/
	$buttons = ['&sup2','&#x2B8','%','√','C', 'bs','pi','÷',7,8,9,'*',4,5,6,'-',1,2,3,'+','±',0,',','='];
	$pressed = '';
	if(isset($_POST['pressed']) && in_array($_POST['pressed'], $buttons)) {
		$pressed = $_POST['pressed'];
	}
	$stored = '';
	if (isset($_POST['stored'])) {
		$stored = $_POST['stored'];
	}
	
	$display = $stored . $pressed;
	$pattern = '/²/';
	switch($pressed) {
		case 'C' : $display = ''; break;
		case 'bs' : $display = substr($display, 0, -2);
		
			if(substr($display, -2) == '²') {
				$display = substr($display, 0, -2);
			} else {
				$display = substr($display, 0, -1);
			}; break;
	//7qc5K6n6zB@8PF2	
	//case 'ʸ'	: switch($boolean) {
					//case false : $boolean = true; break;
					//case true : $boolean = false; break;
					//}
					
					
					
	}
	if($pressed == 'ʸ') {
		toggle();
		}
		
	
	echo $boolean;
	
	//probeer boolean te laten togglen elke klik op de knop
		
	

	
	if ($pressed == '=') {
		if (strpos($display, '²') !== false) {
			$stored = preg_replace($pattern, '**2', $stored);
		}
		
		//if();
		
		$display .= eval("return $stored;");
	}
	echo "<form action=\"\" method=\"POST\">";
    echo "<table style=\"border: 1px solid black\">";
        echo "<tr>";
            echo "<td class=\"knop\" colspan=\"4\">$display</td>";
        echo "</tr>";
        //foreach (array_chunk($buttons, 4) as $chunk) {
            echo "<tr>";
                //foreach ($chunk as $button) {
                echo "<td><button class='knop' name=\"pressed\" value=\"&sup2\">x²</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"&#x2B8\">xʸ</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"%\">%</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"√\">√</button></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><button class='knop' name=\"pressed\" value=\"C\">C</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"bs\">␈</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"pi\">π</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"/\">÷</button></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><button class='knop' name=\"pressed\" value=\"7\">7</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"8\">8</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"9\">9</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"*\">X</button></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><button class='knop' name=\"pressed\" value=\"4\">4</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"5\">5</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"6\">6</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"-\">-</button></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><button class='knop' name=\"pressed\" value=\"1\">1</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"2\">2</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"3\">3</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"+\">+</button></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><button class='knop' name=\"pressed\" value=\"* -1\">±</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"0\">0</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\",\">,</button></td>";
				echo "<td><button class='knop' name=\"pressed\" value=\"=\">=</button></td>";
			echo "</tr>";
        
    echo "</table>";
    echo "<input type=\"hidden\" name=\"stored\" value=\"$display\">";
//$test = "&sup2";
//$teststring = "dit is een test string &sup2";
//$teststring = substr($teststring, 0, -1); 
//echo $teststring; 
?>
<!--
<html>
	<head>
		<title>Case 5</title>
		<style type="text/css">
			label {
				float: left;
				display: block;
				width: 150px;
			}
			input {
				display: block;
			}
			.nostyle {
				display: inline;
			}
			table {
				border: 1px solid black;
			}
			.knop {
				width: 100px;
				height: 75px;
				font-size: 40px;
			}
		</style>
	</head>
	<body>
		<form method="post" action="">
			<table>
				<tr>
					<td class="knop" colspan="4">
					<?php
						/*echo $display;
						
						if(isset($first)) {echo "$first";}
						if(isset($rekenfunctie)) {echo "$rekenfunctie ";}
						if(isset($second)) {echo "$second";}
						if(isset($antwoord)) {echo "= $antwoord";}
					*/
					?> 
					</td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="pressed" value="x²"></td>
					<td><input class="knop" type="submit" name="pressed" value="xʸ"></td>
					<td><input class="knop" type="submit" name="pressed" value="%"></td>
					<td><input class="knop" type="submit" name="pressed" value="√"></td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="pressed" value="CE"></td>
					<td><input class="knop" type="submit" name="pressed" value="C"></td>
					<td><input class="knop" type="submit" name="pressed" value="␈"></td>
					<td><input class="knop" type="submit" name="pressed" value="÷"></td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="pressed" value="7"></td>
					<td><input class="knop" type="submit" name="pressed" value="8"></td>
					<td><input class="knop" type="submit" name="pressed" value="9"></td>
					<td><input class="knop" type="submit" name="pressed" value="x"></td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="pressed" value="4"></td>
					<td><input class="knop" type="submit" name="pressed" value="5"></td>
					<td><input class="knop" type="submit" name="pressed" value="6"></td>
					<td><input class="knop" type="submit" name="pressed" value="-"></td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="pressed" value="1"></td>
					<td><input class="knop" type="submit" name="pressed" value="2"></td>
					<td><input class="knop" type="submit" name="pressed" value="3"></td>
					<td><input class="knop" type="submit" name="pressed" value="+"></td>
				</tr>
				<tr>
					<td><input class="knop" type="submit" name="negatie" value="±"></td>
					<td><input class="knop" type="submit" name="pressed" value="0"></td>
					<td><input class="knop" type="submit" name="komma" value=","></td>
					<td><input class="knop" type="submit" name="pressed" value="="></td>
				</tr>
			</table>
			<input type="hidden" name="stored" value="$display">";
			
			
			<label>Getal 1</label>
			<input type="text" name="Getal_1">
						
			<input class="nostyle" type="radio" name="rekenfunctie" value="optellen">Optellen
			<input class="nostyle" type="radio" name="rekenfunctie" value="aftrekken">Aftrekken
			<input class="nostyle" type="radio" name="rekenfunctie" value="vermenigvuldigen">Vermenigvuldigen
			<input class="nostyle" type="radio" name="rekenfunctie" value="delen">Delen
			<input class="nostyle" type="radio" name="rekenfunctie" value="kwadrateren">Kwadrateren
			<input class="nostyle" type="radio" name="rekenfunctie" value="macht">Tot de macht x verheffen
			<input class="nostyle" type="radio" name="rekenfunctie" value="modulo">Modulo weergave
			<input class="nostyle" type="radio" name="rekenfunctie" value="worteltrekken">Worteltrekken<br>
			
			<label>Getal 2</label>
			<input type="text" name="Getal_2"><br>
		
			<label>Decimalen</label>
			<input type="text" name="Decimalen" value="10"><br><br>
			
			<input type="submit" name="uitrekenen" value="Berekenen"><br>
			<input type="submit" name="ans" value="Antwoord getal 1 maken"><br><br><br>
			
			-->
		</form>
	</body>
</html>

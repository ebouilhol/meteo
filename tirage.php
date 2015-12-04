<?php
echo'
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tirage au sort</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>';


echo'<body>
<div class="container">
		<h1> <small style="font-size:25px"> A que bienvenu sur le site de tirage de Noel </small> </h1>
		<hr>
		<pre>
		  .     .                       *** **
                !      .           ._*.                       .
             - -*- -       .-\'-.   !  !     .
    .    .      *       .-\' .-. \'-.!  !             .              .
               ***   .-\' .-\'   \'-. \'-.!    .
       *       ***.-\' .-\'         \'-. \'-.                   .
       *      ***$*.-\'               \'-. \'-.     *
  *   ***     * ***     ___________     !-..!-.  *     *         *    *
  *   ***    **$** *   !__!__!__!__!    !    !  ***   ***    .   *   ***
 *** ****    * *****   !__!__!__!__!    !      .***-.-*** *     *** * #_
**********  * ****$ *  !__!__!__!__!    !-..--\'*****   # \'*-..---# ***
**** *****  * $** ***      .            !      *****     ***       ***
************ ***** ***-..-\' -.._________!     *******    ***      *****
***********   .-#.-\'           \'-.-\'\'-..!     *******   ****...     #
  # \'\'-.---\'\'                           \'-....---#..--\'****** \'\'-.---\'\'-
                  Merry Christmas                         # 
                  </pre>
<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Offreur(?)</th>
					<th>Offré(??)</th>
				</tr>
			</thead>
		<tbody>';

$participants = 5;
$noms = ["","Caro", "Armelle", "Belinda", "Julien", "Manu"];

$exlude1 = array();

for ($personne=1; $personne <= $participants; $personne++){
	$exlude2 = $exlude1;
	$chapeau = array();
	array_push($exlude2, $personne);
	// show_array($exlude2);
	for($participant=1; $participant <=$participants; $participant++){
		if(in_array($participant, $exlude2)){
		}
		else {
			array_push($chapeau, $participant);
		}
	}
	//show_array($chapeau);
	$papier = array_rand($chapeau,1);
	//echo $noms[$personne]." => ".$noms[$chapeau[$papier]]."<br>";
	array_push($exlude1, $chapeau[$papier]);

	echo'<tr>
				<td>'.$noms[$personne].'</td>
				<td>'.$noms[$chapeau[$papier]].'</td>
			</tr>';
}

echo'		</tbody>
	</table>
</div>';


// function show_array($array){
// 	echo("<pre>");
// 	for($i = 0; $i< sizeof($array); $i++){
// 		echo($array[$i]);
// 	}	
// 	echo("</pre>");
// }

echo'</body>
</html>';













// $sujet = 'Tirage de Noel';
// $message = "";
// $destinataire = 'destinataire@domaine.com';
// $headers = "From: \"expediteur moi\"<moi@domaine.com>\n";
// $headers .= "Reply-To: moi@domaine.com\n";
// $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
// if(mail($destinataire,$sujet,$message,$headers))
// {
//         echo "L'email a bien été envoyé.";
// }
// else
// {
//         echo "Une erreur c'est produite lors de l'envois de l'email.";
// }




?>
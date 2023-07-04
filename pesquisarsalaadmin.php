

<style>
.content-table {
    border: 1px;
    margin: 25px 0;
    font-size: 0.9em;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	width: 80%;
	
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>

<?php
include('ligabd.php');

$pesq=$_GET["pesquisa"];
$pesquisa=$pesq;



//1
$sql1="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '08:30-09:15'";
$resultado1= mysqli_query($mysqli, $sql1);
$numregistos1= mysqli_num_rows($resultado1);


//2
$sql2="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '09:15-10:00'";
$resultado2= mysqli_query($mysqli, $sql2);
$numregistos2= mysqli_num_rows($resultado2);


//3
$sql3="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '10:15-11:00'";
$resultado3= mysqli_query($mysqli, $sql3);
$numregistos3= mysqli_num_rows($resultado3);


//4
$sql4="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '11:00-11:45'";
$resultado4= mysqli_query($mysqli, $sql4);
$numregistos4= mysqli_num_rows($resultado4);


//5
$sql5="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '11:55-12:40'";
$resultado5= mysqli_query($mysqli, $sql5);
$numregistos5= mysqli_num_rows($resultado5);


//6
$sql6="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '12:40-13:25'";
$resultado6= mysqli_query($mysqli, $sql6);
$numregistos6= mysqli_num_rows($resultado6);


//7
$sql7="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '13:40-14:25'";
$resultado7= mysqli_query($mysqli, $sql7);
$numregistos7= mysqli_num_rows($resultado7);


//8
$sql8="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '14:25-15:10'";
$resultado8= mysqli_query($mysqli, $sql8);
$numregistos8= mysqli_num_rows($resultado8);


//9
$sql9="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '15:25-16:10'";
$resultado9= mysqli_query($mysqli, $sql9);
$numregistos9= mysqli_num_rows($resultado9);


//10
$sql10="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '16:10-16:55'";
$resultado10= mysqli_query($mysqli, $sql10);
$numregistos10= mysqli_num_rows($resultado10);


//11
$sql11="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '17:00-17:45'";
$resultado11= mysqli_query($mysqli, $sql11);
$numregistos11= mysqli_num_rows($resultado11);


//12
$sql12="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '17:45-18:30'";
$resultado12= mysqli_query($mysqli, $sql12);
$numregistos12= mysqli_num_rows($resultado12);

if ($numregistos1==0)
{
    header("Location: salasadmin.php?erro=1");
}
else
echo 'Sala: '.$pesquisa;

$nomesDiasSemana = array(
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira'
);


		//08:30 - 09:15
		echo '<table class="content-table">';
		echo "<tr><th>Hora</th>";
		
		
		$hoje = new DateTime(); // Obtém a data atual
$diaSemana = $hoje->format('N'); // Obtém o número do dia da semana (1 - segunda-feira, 7 - domingo)
$primeiroDiaSemana = $hoje->sub(new DateInterval('P'.($diaSemana - 1).'D')); // Define o primeiro dia da semana

for ($i = 0; $i < 5; $i++) { // Itera de segunda a sexta-feira
    $dataAtual = $primeiroDiaSemana->format('d-m-Y'); // Obtém a data formatada
    $diaSemana = $nomesDiasSemana[$i]; // Obtém o nome do dia da semana

    echo "<th>{$dataAtual}<br>{$diaSemana}</th>";
    $primeiroDiaSemana->add(new DateInterval('P1D')); // Incrementa para o próximo dia da semana
}



		echo "</tr>;
		
		
		<tr><td>08:30 - 09:15</td>
    		";
			while ($registo1 = mysqli_fetch_array($resultado1)) {
			echo "<td>".$registo1['segunda']."</td>
			<td>".$registo1['terca']."</td>
			<td>".$registo1['quarta']."</td>
			<td>".$registo1['quinta']."</td>
			<td>".$registo1['sexta']."</td></tr>"; 
		}


		//2
		echo "<td>09:15 - 10:00</td>";	
			while ($registo2 = mysqli_fetch_array($resultado2)) {
			echo "<td>".$registo2['segunda']."</td>
			<td>".$registo2['terca']."</td>
			<td>".$registo2['quarta']."</td>
			<td>".$registo2['quinta']."</td>
			<td>".$registo2['sexta']."</td></tr>";
		}


		//3
		echo "<td>10:15 - 11:00</td>";		
			while ($registo3 = mysqli_fetch_array($resultado3)) {
			echo "<td>".$registo3['segunda']."</td>
			<td>".$registo3['terca']."</td>
			<td>".$registo3['quarta']."</td>
			<td>".$registo3['quinta']."</td>
			<td>".$registo3['sexta']."</td></tr>";
		}


		//4
		echo "<td>11:00 - 11:45</td>";		
			while ($registo4 = mysqli_fetch_array($resultado4)) {
			echo "<td>".$registo4['segunda']."</td>
			<td>".$registo4['terca']."</td>
			<td>".$registo4['quarta']."</td>
			<td>".$registo4['quinta']."</td>
			<td>".$registo4['sexta']."</td></tr>";
		}
		

		//5
		echo "<td>11:55 - 12:40</td>";		
			while ($registo5 = mysqli_fetch_array($resultado5)) {
			echo "<td>".$registo5['segunda']."</td>
			<td>".$registo5['terca']."</td>
			<td>".$registo5['quarta']."</td>
			<td>".$registo5['quinta']."</td>
			<td>".$registo5['sexta']."</td></tr>";
		}
		

		//6
		echo "<td>12:40 - 13:25</td>";		
			while ($registo6 = mysqli_fetch_array($resultado6)) {
			echo "<td>".$registo6['segunda']."</td>
			<td>".$registo6['terca']."</td>
			<td>".$registo6['quarta']."</td>
			<td>".$registo6['quinta']."</td>
			<td>".$registo6['sexta']."</td></tr>";
		}


		//7
		echo "<td>13:40 - 14:25</td>";		
			while ($registo7 = mysqli_fetch_array($resultado7)) {
			echo "<td>".$registo7['segunda']."</td>
			<td>".$registo7['terca']."</td>
			<td>".$registo7['quarta']."</td>
			<td>".$registo7['quinta']."</td>
			<td>".$registo7['sexta']."</td></tr>";
		}


		//8
		echo "<td>14:25 - 15:10</td>";		
			while ($registo8 = mysqli_fetch_array($resultado8)) {
			echo "<td>".$registo8['segunda']."</td>
			<td>".$registo8['terca']."</td>
			<td>".$registo8['quarta']."</td>
			<td>".$registo8['quinta']."</td>
			<td>".$registo8['sexta']."</td></tr>";
		}


		//9
		echo "<td>15:25 - 16:10</td>";		
			while ($registo9 = mysqli_fetch_array($resultado9)) {
			echo "<td>".$registo9['segunda']."</td>
			<td>".$registo9['terca']."</td>
			<td>".$registo9['quarta']."</td>
			<td>".$registo9['quinta']."</td>
			<td>".$registo9['sexta']."</td></tr>";
		}


		//10
		echo "<td>16:10 - 16:55</td>";		
			while ($registo10 = mysqli_fetch_array($resultado10)) {
			echo "<td>".$registo10['segunda']."</td>
			<td>".$registo10['terca']."</td>
			<td>".$registo10['quarta']."</td>
			<td>".$registo10['quinta']."</td>
			<td>".$registo10['sexta']."</td></tr>";
		}


		//11
		echo "<td>17:00 - 17:45</td>";		
			while ($registo11 = mysqli_fetch_array($resultado11)) {
			echo "<td>".$registo11['segunda']."</td>
			<td>".$registo11['terca']."</td>
			<td>".$registo11['quarta']."</td>
			<td>".$registo11['quinta']."</td>
			<td>".$registo11['sexta']."</td></tr>";
		}


		//12
		echo "<td>17:45 - 18:30</td>";		
			while ($registo12 = mysqli_fetch_array($resultado12)) {
			echo "<td>".$registo12['segunda']."</td>
			<td>".$registo12['terca']."</td>
			<td>".$registo12['quarta']."</td>
			<td>".$registo12['quinta']."</td>
			<td>".$registo12['sexta']."</td></tr>";
		}


	echo "</table>";
  echo "<br>";
	echo "<form action = \"salasadmin.php\" method = \"POST\">
	<p><input class=\"voltar\" type = \"submit\" value = \"Voltar\"></p>
	</form >";
    echo "<br>";
			
?>
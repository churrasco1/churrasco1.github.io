

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

a{
	text-decoration: none;
	color: black;
}

</style>

<?php

include('ligabd.php');

$pesq=$_GET["pesquisa"];
$pesquisa=$pesq;






//08:30-09:15
$sql1="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '08:30-09:15'";
$resultado1= mysqli_query($mysqli, $sql1);
$numregistos1= mysqli_num_rows($resultado1);




//09:15-10:00
$sql2="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '09:15-10:00'";
$resultado2= mysqli_query($mysqli, $sql2);
$numregistos2= mysqli_num_rows($resultado2);


//10:15-11:00
$sql3="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '10:15-11:00'";
$resultado3= mysqli_query($mysqli, $sql3);
$numregistos3= mysqli_num_rows($resultado3);


//11:00-11:45
$sql4="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '11:00-11:45'";
$resultado4= mysqli_query($mysqli, $sql4);
$numregistos4= mysqli_num_rows($resultado4);


//11:55-12:40
$sql5="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '11:55-12:40'";
$resultado5= mysqli_query($mysqli, $sql5);
$numregistos5= mysqli_num_rows($resultado5);


//12:40-13:25
$sql6="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '12:40-13:25'";
$resultado6= mysqli_query($mysqli, $sql6);
$numregistos6= mysqli_num_rows($resultado6);


//13:40-14:25
$sql7="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '13:40-14:25'";
$resultado7= mysqli_query($mysqli, $sql7);
$numregistos7= mysqli_num_rows($resultado7);


//14:25-15:10
$sql8="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '14:25-15:10'";
$resultado8= mysqli_query($mysqli, $sql8);
$numregistos8= mysqli_num_rows($resultado8);


//15:25-16:10
$sql9="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '15:25-16:10'";
$resultado9= mysqli_query($mysqli, $sql9);
$numregistos9= mysqli_num_rows($resultado9);


//16:10-16:55
$sql10="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '16:10-16:55'";
$resultado10= mysqli_query($mysqli, $sql10);
$numregistos10= mysqli_num_rows($resultado10);


//17:00-17:45
$sql11="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '17:00-17:45'";
$resultado11= mysqli_query($mysqli, $sql11);
$numregistos11= mysqli_num_rows($resultado11);


//17:45-18:30
$sql12="SELECT * FROM horarios1 WHERE Nrsala LIKE '$pesquisa' AND Codhora LIKE '17:45-18:30'";
$resultado12= mysqli_query($mysqli, $sql12);
$numregistos12= mysqli_num_rows($resultado12);

if ($numregistos1==0)
{
    header("Location: salaseditar.php?erro=1");
}
else
echo 'Sala: '.$pesquisa;



// Array com os dias da semana correspondentes ao seu horário 
$nomesDiasSemana = array(
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira'
);


	//echo "<form action='atualizahorario.php' method='POST'>";
		
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


			
		echo "<th>Guardar</th>";
		echo "</tr>

		
    	<tr><td>08:30 - 09:15</td>" ;
		echo "<form action='atualizahorario1.php' method='POST'>";
			while ($registo1 = mysqli_fetch_array($resultado1)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo1['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo1['Codhora']."'>";
			echo "<td><input type='text' name='segunda' value='" .$registo1['segunda']."'></td>
			<td><input type='text' name='terca' value='" .$registo1['terca']."'></td>
			<td><input type='text' name='quarta' value='" .$registo1['quarta']."'></td>
			<td><input type='text' name='quinta' value='" .$registo1['quinta']."'></td>
			<td><input type='text' name='sexta' value='" .$registo1['sexta']."'></td>

			<td><input type='submit' value='Guardar'> </td>
			
			</td>
			
			</tr>"; 

			
		}
		echo "</form>";

		//09:15-10:00
		echo "<td>09:15 - 10:00</td>";	
		echo "<form action='atualizahorario2.php' method='POST'>";
			while ($registo2 = mysqli_fetch_array($resultado2)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo2['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo2['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo2['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo2['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo2['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo2['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo2['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";


		//10:15-11:00
		echo "<td>10:15 - 11:00</td>";	
		echo "<form action='atualizahorario3.php' method='POST'>";	
			while ($registo3 = mysqli_fetch_array($resultado3)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo3['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo3['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo3['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo3['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo3['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo3['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo3['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//11:00 - 11:45
		echo "<td>11:00 - 11:45</td>";	
		echo "<form action='atualizahorario4.php' method='POST'>";	
			while ($registo4 = mysqli_fetch_array($resultado4)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo4['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo4['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo4['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo4['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo4['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo4['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo4['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//11:55 - 12:40
		echo "<td>11:55 - 12:40</td>";	
		echo "<form action='atualizahorario5.php' method='POST'>";	
			while ($registo5 = mysqli_fetch_array($resultado5)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo5['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo5['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo5['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo5['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo5['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo5['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo5['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//12:40 - 13:25
		echo "<td>12:40 - 13:25</td>";	
		echo "<form action='atualizahorario6.php' method='POST'>";	
			while ($registo6 = mysqli_fetch_array($resultado6)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo6['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo6['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo6['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo6['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo6['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo6['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo6['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//13:40 - 14:25
		echo "<td>13:40 - 14:25</td>";	
		echo "<form action='atualizahorario7.php' method='POST'>";	
			while ($registo7 = mysqli_fetch_array($resultado7)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo7['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo7['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo7['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo7['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo7['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo7['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo7['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//14:25 - 15:10
		echo "<td>14:25 - 15:10</td>";		
		echo "<form action='atualizahorario8.php' method='POST'>";
			while ($registo8 = mysqli_fetch_array($resultado8)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo8['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo8['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo8['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo8['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo8['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo8['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo8['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//15:25 - 16:10
		echo "<td>15:25 - 16:10</td>";		
		echo "<form action='atualizahorario9.php' method='POST'>";
			while ($registo9 = mysqli_fetch_array($resultado9)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo9['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo9['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo9['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo9['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo9['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo9['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo9['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//16:10 - 16:55
		echo "<td>16:10 - 16:55</td>";		
		echo "<form action='atualizahorario10.php' method='POST'>";
			while ($registo10 = mysqli_fetch_array($resultado10)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo10['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo10['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo10['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo10['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo10['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo10['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo10['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//17:00-17:45
		echo "<td>17:00 - 17:45</td>";		
		echo "<form action='atualizahorario11.php' method='POST'>";
			while ($registo11 = mysqli_fetch_array($resultado11)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo11['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo11['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo11['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo11['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo11['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo11['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo11['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

		//17:45-18:30
		echo "<td>17:45 - 18:30</td>";		
		echo "<form action='atualizahorario12.php' method='POST'>";
			while ($registo12 = mysqli_fetch_array($resultado12)) {
				echo "<input type='hidden' name='Nrsala' value='" .$registo12['Nrsala']."'>";
				echo "<input type='hidden' name='Codhora' value='" .$registo12['Codhora']."'>";
				echo "<td><input type='text' name='segunda' value='" .$registo12['segunda']."'></td>
				<td><input type='text' name='terca' value='" .$registo12['terca']."'></td>
				<td><input type='text' name='quarta' value='" .$registo12['quarta']."'></td>
				<td><input type='text' name='quinta' value='" .$registo12['quinta']."'></td>
				<td><input type='text' name='sexta' value='" .$registo12['sexta']."'></td>
				<td><input type='submit' value='Guardar'> </td>
			</tr>";
			
		}
		echo "</form>";

	echo "</table>";
	//echo "</form>";
  echo "<br>";
	echo "<form action = \"salaseditar.php\" method = \"POST\">
	<p><input class=\"voltar\" type = \"submit\" value = \"Voltar\"></p>
	</form>";


    echo "<br>";
			
?>


<html>
    <head>
        <title>Pesquisa</title>
        <meta charset="UTF-8">
</head>
<body>
    <?php
    if (isset ($_GET['erro'])) {
        if ($_GET['erro']==1) {
        echo "<script type='text/javascript' language='javascript'> 
        alert ('Não foram encontrados registos!');
        </script>";
    }
}
?>
<form action="pesquisarsala.php" method="GET">
    <fieldset id="fie">
        <legend>Pesquisa de sala</legend><br>
        <table>
            <tr>
                <td><label>Escreva a sala a pesquisar:  </label></td>
</tr>
<tr>
    <td><input type="text" name="pesquisa" id="pesquisa"></td>
    <td><input type="submit" value="Pesquisar"></td>
</tr>
</table>
<br>
<a href="menuprofessor.php">Voltar</a>

</fieldset> </form>
</body>
</html>
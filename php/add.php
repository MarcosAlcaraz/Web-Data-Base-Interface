<?php
    $table = $_POST["table"];
    echo "<h1>Alcaraz SGBD / Add / ";

    if($table == "departamento") {
        echo "Departamento</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>Nombred:</p>";
        echo "<input  name='nombred' type='text'/>";
        echo "<p>Numerod:</p>";
        echo "<input  name='numerod' type='text'/>";
        echo "<p>NSSGte:</p>";
        echo "<input  name='nssgte' type='text'/>";
        echo "<p>FechaInicGte</p>";
        echo "<input  name='fechainicgte' type='text'/><br>";
        echo "<input type='hidden' name='table' value='departamento'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else if($table == "dependiente") {
        echo "Dependiente</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>NSSE:</p>";
        echo "<input  name='nsse' type='text'/>";
        echo "<p>Nombre_Dependiente:</p>";
        echo "<input  name='nombre_dependiente' type='text'/>";
        echo "<p>Sexo:</p>";
        echo "<input  name='sexo' type='text'/>";
        echo "<p>Fechan:</p>";
        echo "<input  name='fechan' type='text'/>";
        echo "<p>Parentesco:</p>";
        echo "<input  name='parentesco' type='text'/><br>";
        echo "<input type='hidden' name='table' value='dependiente'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else if($table == "empleado") {
        echo "Empleado</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>Nombrep:</p>";
        echo "<input  name='nombrep' type='text'/>";
        echo "<p>Inic:</p>";
        echo "<input  name='inic' type='text'/>";
        echo "<p>Apellido:</p>";
        echo "<input  name='apellido' type='text'/>";
        echo "<p>NSS:</p>";
        echo "<input  name='nss' type='text'/>";
        echo "<p>Fechan:</p>";
        echo "<input  name='fechan' type='text'/>";
        echo "<p>Direccion:</p>";
        echo "<input  name='direccion' type='text'/>";
        echo "<p>Sexo:</p>";
        echo "<input  name='sexo' type='text'/>";
        echo "<p>Salario:</p>";
        echo "<input  name='salario' type='text'/>";
        echo "<p>NSSSuper:</p>";
        echo "<input  name='nsssuper' type='text'/>";
        echo "<p>ND:</p>";
        echo "<input  name='nd' type='text'/><br>";
        echo "<input type='hidden' name='table' value='empleado'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else if($table == "lugares_deptos") {
        echo "Lugares_Deptos</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>Numerod:</p>";
        echo "<input  name='numerod' type='text'/>";
        echo "<p>Lugard:</p>";
        echo "<input  name='lugard' type='text'/><br>";
        echo "<input type='hidden' name='table' value='lugares_deptos'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else if($table == "proyecto") {
        echo "Proyecto</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>Nombrepr:</p>";
        echo "<input  name='nombrepr' type='text'/>";
        echo "<p>Numerop:</p>";
        echo "<input  name='numerop' type='text'/>";
        echo "<p>Lugarp:</p>";
        echo "<input  name='lugarp' type='text'/>";
        echo "<p>Numd:</p>";
        echo "<input  name='Numd' type='text'/><br>";
        echo "<input type='hidden' name='table' value='proyecto'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else if($table == "trabaja_en") {
        echo "Trabaja-En</h1><br><br><form name='adddataform' method='post' action='adddata.php'>";
        
        echo "<p>Nsse:</p>";
        echo "<input  name='nsse' type='text'/>";
        echo "<p>Nump:</p>";
        echo "<input  name='nump' type='text'/>";
        echo "<p>Horas:</p>";
        echo "<input  name='horas' type='text'/><br>";
        echo "<input type='hidden' name='table' value='trabaja_en'  />";
        echo "<input  name='sendform' type='submit'/>";
        echo "</form>";
    } else {
        echo "?</h1><br><br>";
        echo "<br><h1>Table doesn't exist.</h1><br>";
    }

?>
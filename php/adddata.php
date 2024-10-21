<?php
    $table = $_POST['table'];
    $user = "Alcaraz";
    $passwd = "papascalientes";
    $server = "localhost";
    $dbname = "datos";

    $conn = new mysqli($server, $user, $passwd, $dbname);
    if(!$conn) {
        echo "Data Base Unreachable<br>";
        die("Conection failed:" . mysqli_connect_error());
    }
    
    if($table == "departamento") {
        $nombred = $_POST['nombred'];
        $numerod = $_POST['numerod'];
        $nssgte = $_POST['nssgte'];
        $fechainicgte = $_POST['fechainicgte'];
        if($conn->query("INSERT INTO `$table` (`nombred`, `numerod`, `nssgte`, `fechainicgte`) VALUES ('$nombred', '$numerod', '$nssgte', '$fechainicgte')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE nombred='$nombred'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>Nombred: ";
            echo $row["nombred"];
            echo "<br> Numerod: ";
            echo $row["numerod"];
            echo "<br>NSSGte: ";
            echo $row["nssgte"];
            echo "<br>FechaInicGte: ";
            echo $row["fechainicgte"];
            echo "</p>";
            echo "_____________________________";
        } else {
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }
    } else if($table == "dependiente") {
        $nsse = $_POST['nsse'];
        $nombredependiente = $_POST['nombredependiente'];
        $sexo = $_POST['sexo'];
        $fechan = $_POST['fechan'];
        $parentesco = $_POST['parentesco'];
        if($conn->query("INSERT INTO `$table` (`nsse`, `nombredependiente`, `sexo`, `fechan`, `parentesco`) VALUES ('$nsse', '$nombredependiente', '$sexo', '$fechan', '$parentesco')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE nsse='$nsse'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>NSSE: ";
            echo $row["nsse"];
            echo "<br> Nombre_Dependiente: ";
            echo $row["nombre_dependiente"];
            echo "<br>Sexo: ";
            echo $row["sexo"];
            echo "<br>Fechan: ";
            echo $row["fechan"];
            echo "<br>Parentesco: ";
            echo $row["parentesco"];
            echo "</p>";
            echo "_____________________________";
        } else {
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }
    } else if($table == "empleado") {
        $nombrep = $_POST['nombrep'];
        $inic = $_POST['inic'];
        $apellido = $_POST['apellido'];
        $nss = $_POST['nss'];
        $fechan = $_POST['fechan'];
        $direccion = $_POST['direccion'];
        $sexo = $_POST['sexo'];
        $salario = $_POST['salario'];
        $nsssuper = $_POST['nsssuper'];
        $nd = $_POST['nd'];
        if($conn->query("INSERT INTO `$table` (`nombrep`, `inic`, `apellido`, `nss`, `fechan`, `direccion`, `sexo`, `salario`, `nsssuper`, `nd`) VALUES ('$nombrep', '$inic', '$apellido', '$nss', '$fechan', '$direccion', '$sexo', '$salario', '$nsssuper', '$nd')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE nss='$nss'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>Nombrep: ";
            echo $row["nombrep"];
            echo "<br> Inic: ";
            echo $row["inic"];
            echo "<br>Apellido: ";
            echo $row["apellido"];
            echo "<br>NSS: ";
            echo $row["nss"];
            echo "<br>Fechan: ";
            echo $row["fechan"];
            echo "<br>Direccion: ";
            echo $row["direccion"];
            echo "<br>Sexo: ";
            echo $row["sexo"];
            echo "<br>Salario: ";
            echo $row["salario"];
            echo "<br>NSSSuper: ";
            echo $row["nsssuper"];
            echo "<br>ND: ";
            echo $row["nd"];
            echo "</p>";
            echo "_____________________________";
        } else {
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }        
    } else if($table == "lugares_deptos") {
        $numerod = $_POST['numerod'];
        $lugard = $_POST['lugard'];
        if($conn->query("INSERT INTO `$table` (`numerod`, `lugard`) VALUES ('$numerod', '$lugard')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE numerod='$numerod'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>Numerod: ";
            echo $row["numerod"];
            echo "<br> Lugard: ";
            echo $row["lugard"];
            echo "</p>";
            echo "_____________________________";
        } else {
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }
    } else if($table == "proyecto") {
        $nombrepr = $_POST['nombrepr'];
        $numerop = $_POST['numerop'];
        $lugarp = $_POST['lugarp'];
        $numd = $_POST['numd'];
        if($conn->query("INSERT INTO `$table` (`nombrepr`, `numerop`, `lugarp`, `numd`) VALUES ('$nombrepr', '$numerop', '$lugarp', '$numd')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE numerop='$numerop'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>Nombrepr: ";
            echo $row["nombrepr"];
            echo "<br> Numerop: ";
            echo $row["numerop"];
            echo "<br>Lugarp: ";
            echo $row["lugarp"];
            echo "<br>Numd: ";
            echo $row["numd"];
            echo "</p>";
            echo "_____________________________";
        } else {
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }
    } else if($table == "trabaja_en") {
        $nsse = $_POST['nsse'];
        $nump = $_POST['nump'];
        $horas = $_POST['horas'];
        if($conn->query("INSERT INTO `$table` (`nsse`, `nump`, `horas`) VALUES ('$nsse', '$nump', '$horas')")) {
            echo "<br><h1>Data Added Successfuly</h1><br><a href='../add.html' >Back</a>";
            $answer = $conn->query("SELECT * FROM $table WHERE nsse='$nsse'");
            $row = $answer->fetch_assoc();
            echo "_____________________________";
            echo "<br><p>NSSE: ";
            echo $row["nsse"];
            echo "<br> Nump: ";
            echo $row["nump"];
            echo "<br>Horas: ";
            echo $row["horas"];
            echo "</p>";
            echo "_____________________________";
        } else {    
            echo "<br><h1>Data can not be Added</h1><br><a href='../add.html' >Back</a>";
        }
    }
?>
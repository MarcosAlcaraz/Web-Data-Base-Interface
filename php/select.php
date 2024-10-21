<?php
$table = $_POST["table"];
$column = $_POST["column"];
$columncondition = $_POST["columncondition"];
$operatorcondition = $_POST["operatorcondition"];
$valuecondition = $_POST["valuecondition"];

$conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

if (!$conn) {
    echo "Database Unreachable.";
    die("Conection Failed: " . mysqli_connect_error());

}

if ($operatorcondition) {
    $answer = $conn->query("SELECT $column FROM $table WHERE $columncondition $operatorcondition $valuecondition");

} else {
    $answer = $conn->query("SELECT $column FROM $table");
}
if ($answer) {
    echo "_____________________________";
    if ($table == "departamento") {

        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
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
            }
            if ($column == "nombred") {
                echo "<br><p>Nombred: ";
                echo $row["nombred"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "numerod") {
                echo "<br><p>Numerod: ";
                echo $row["numerod"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nssgte") {
                echo "<br><p>NSSgte: ";
                echo $row["nssgte"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "fechainicgte") {
                echo "<br><p>FechaInicGte: ";
                echo $row["fechainicgte"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else if ($table == "dependiente") {
        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
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

            }
            if ($column == "nsse") {
                echo "<br><p>NSSE: ";
                echo $row["nsse"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nombre_dependiente") {
                echo "<br><p>Nombre_Dependiente: ";
                echo $row["nombre_dependiente"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "sexo") {
                echo "<br><p>Sexo: ";
                echo $row["sexo"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "fechan") {
                echo "<br><p>fechan: ";
                echo $row["fechan"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "parentesco") {
                echo "<br><p>Parentesco: ";
                echo $row["parentesco"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else if ($table == "empleado") {
        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
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

            }
            if ($column == "nombrep") {
                echo "<br><p>Nombrep: ";
                echo $row["nombrep"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "inic") {
                echo "<br><p>Inic: ";
                echo $row["inic"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "apellido") {
                echo "<br><p>Apellido: ";
                echo $row["apellido"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nss") {
                echo "<br><p>NSS: ";
                echo $row["nss"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "fechan") {
                echo "<br><p>Fechan: ";
                echo $row["fechan"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "direccion") {
                echo "<br><p>Direccion: ";
                echo $row["direccion"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "sexo") {
                echo "<br><p>Sexo: ";
                echo $row["sexo"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "salario") {
                echo "<br><p>Salario: ";
                echo $row["salario"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nsssuper") {
                echo "<br><p>NSSSuper: ";
                echo $row["nsssuper"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nd") {
                echo "<br><p>ND: ";
                echo $row["nd"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else if ($table == "lugares_deptos") {
        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
                echo "<br><p>Numerod: ";
                echo $row["numerod"];
                echo "<br> Lugard: ";
                echo $row["lugard"];
                echo "</p>";
                echo "_____________________________";

            }
            if ($column == "numerod") {
                echo "<br><p>Numerod: ";
                echo $row["numerod"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "lugard") {
                echo "<br><p>Lugard: ";
                echo $row["lugard"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else if ($table == "proyecto") {
        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
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

            }
            if ($column == "nombrepr") {
                echo "<br><p>Nombrepr: ";
                echo $row["nombrepr"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "numerop") {
                echo "<br><p>Numerop: ";
                echo $row["numerop"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "lugarp") {
                echo "<br><p>Lugarp: ";
                echo $row["lugarp"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "numd") {
                echo "<br><p>Numd: ";
                echo $row["numd"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else if ($table == "trabaja_en") {
        while ($row = $answer->fetch_assoc()) {
            if ($column == "*") {
                echo "<br><p>NSSE: ";
                echo $row["nsse"];
                echo "<br> Nump: ";
                echo $row["nump"];
                echo "<br>Horas: ";
                echo $row["horas"];
                echo "</p>";
                echo "_____________________________";

            }
            if ($column == "nsse") {
                echo "<br><p>NSSe: ";
                echo $row["nsse"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "nump") {
                echo "<br><p>Nump: ";
                echo $row["nump"];
                echo "</p>";
                echo "_____________________________";
            }
            if ($column == "horas") {
                echo "<br><p>Horas: ";
                echo $row["horas"];
                echo "</p>";
                echo "_____________________________";
            }
        }
    } else {
        echo "<br><p>Void Table</p><br>";
    }
    echo "<br><br><a href='../select.html'>Back</a>";
}
?>
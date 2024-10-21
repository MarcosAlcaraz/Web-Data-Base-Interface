<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Alcaraz SGBD</title>
    <meta charset="UTF-8" />
</head>

<body>
    <header>
        <h1>
            Alcaraz SGBD / Home
        </h1>
        <ul>
            <li><a href="../add.html">Add</a></li>
            <li><a href="../delete.html">Delete</a></li>
            <li><a href="../select.html">Select</a></li>
            <li><a href="../index.html">Log Out</a></li>
        </ul>
    </header>

    <section class="tablespace">

        <section class="tablewidget">
            <h3>Departamento</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM departamento");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
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
                }
            ?>
        </section>

        <section class="tablewidget">
            <h3>Dependiente</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM dependiente");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
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
                }
            ?>
        </section>

        <section class="tablewidget">
            <h3>Empleado</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM empleado");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
                        echo "<p>Nombrep: ";
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
                }
            ?>
        </section>

        <section class="tablewidget">
            <h3>Lugares_Deptos</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM lugares_deptos");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
                        echo "<br><p>Numerod: ";
                        echo $row["numerod"];
                        echo "<br> Lugard: ";
                        echo $row["lugard"];
                        echo "</p>";
                        echo "_____________________________";
                    }
                }
            ?>
        </section>

        <section class="tablewidget">
            <h3>Proyecto</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM proyecto");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
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
                }
            ?>
        </section>
        
        <section class="tablewidget">
            <h3>Trabaja_En</h3>
            <?php
                $conn = new mysqli("localhost", "Alcaraz", "papascalientes", "datos");

                if (!$conn) {
                    echo "Database Unreachable.";
                    die("Conection Failed: " . mysqli_connect_error());
                }

                $answer = $conn->query("SELECT * FROM trabaja_en");
                if ($answer) {
                    echo "-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-";
                    while ($row = $answer->fetch_assoc()) {
                        echo "<br><p>NSSE: ";
                        echo $row["nsse"];
                        echo "<br> Nump: ";
                        echo $row["nump"];
                        echo "<br>Horas: ";
                        echo $row["horas"];
                        echo "</p>";
                        echo "_____________________________";
                    }
                }
            ?>
        </section>
        
    </section>

    <footer>
        <p>Made by marcosalcaraz0260@alumnos.udg.mx</p>
    </footer>
</body>

</html>
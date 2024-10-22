<?php
    include "conexion.php";

    $consulta_sql = "SELECT * FROM alumno";

    $resultado = $conexion->query($consulta_sql);
    
    $count = mysqli_num_rows($resultado);

     echo "<table border = '2' cellpadding = '5' cellspacig = '0'>
        <tr>
            <th> Nombre de Usuario </th>
            <th> Carrera </th>
            <th> Num Cuenta </th>
            <th> Dirección </th>
            <th> Teléfono </th>
            <th> Email </th>
            <th> Password </th>
            <th> Fecha Registro </th>
            <th> Permisos</th>
        </tr>
        ";

    if($count > 0){
        while($row = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" .$row['nombre_usuario']."</td>";
                echo "<td>" .$row['carrera']."</td>";
                echo "<td>" .$row['num_cuenta']."</td>";
                echo "<td>" .$row['direccion']."</td>";
                echo "<td>" .$row['telefono']."</td>";
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['password']."</td>";
                echo "<td>" .$row['fecha_registro']."</td>";
                echo "<td>" .$row['permisos']."</td>";                
               echo "</tr>";
        }
        echo "</table>";

    }  else{
        echo "Sin registro";
    }

?>
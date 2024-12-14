
<?php

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
 echo($id);
    // Conexión a la base de datos
    $connect = new mysqli("localhost", "root", "", "trabajo");

    if ($connect->connect_error) {
        die("Conexión fallida: " . $connect->connect_error);
    }

    // Consulta basada en el ID seleccionado
    $query = "SELECT course.idcur, course.nomcur FROM prof_period INNER JOIN course ON course.idcur = prof_period.course_idcur WHERE prof_period.period_idper = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    echo '<select id="curso">';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['idcur'] . '">' . $row['nomcur'] . '</option>';
    }
    echo '</select>';
    exit;
}

?>
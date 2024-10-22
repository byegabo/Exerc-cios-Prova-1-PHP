<?php
include("conexao1.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matricula = $_POST['matricula'];
    $nova_carga_horaria = $_POST['nova_carga_horaria'];

    $sql_select = "SELECT carga_horaria FROM alunos WHERE matricula = '$matricula'";
    $result = mysqli_query($conn, $sql_select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $carga_atual = $row['carga_horaria'];

        $nova_carga_total = $carga_atual + $nova_carga_horaria;

        $sql_update = "UPDATE alunos SET carga_horaria = '$nova_carga_total' WHERE matricula = '$matricula'";
        if (mysqli_query($conn, $sql_update)) {
            echo "Carga horária atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar carga horária: " . mysqli_error($conn);
        }
    } else {
        echo "Matrícula não encontrada.";
    }

    mysqli_close($conn);
}
?>

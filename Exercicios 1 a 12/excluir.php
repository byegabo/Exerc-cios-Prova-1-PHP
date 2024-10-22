<?php
include("conexao1.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    $sql = "DELETE FROM alunos WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome LIKE '%$nome%'";
    }

    if (!empty($matricula)) {
        $sql .= " AND matricula = '$matricula'";
    }

    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }

    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "Aluno excluído com sucesso.";
        } else {
            echo "Nenhum aluno encontrado para exclusão.";
        }
    } else {
        echo "Erro ao excluir aluno: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

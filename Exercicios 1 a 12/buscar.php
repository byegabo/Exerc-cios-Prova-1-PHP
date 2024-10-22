<?php
include("conexao1.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM alunos WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome LIKE '%$nome%'";
    }

    if (!empty($matricula)) {
        $sql .= " AND matricula = '$matricula'";
    }

    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Curso para Horas</th>
                    <th>Carga Horária</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['matricula']}</td>
                    <td>{$row['curso']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['cep']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                    <td>{$row['curso_horas']}</td>
                    <td>{$row['carga_horaria']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum aluno encontrado.";
    }

    mysqli_close($conn);
}
?>

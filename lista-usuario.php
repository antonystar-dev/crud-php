<h1> Listar usuarios</h1>
<?php
$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if ($qtd > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOME</th>";
    echo "<th>EMAIL</th>";
    echo "<th>SENHA</th>";
    echo "<th>AÇÕES</th>";

    echo "</tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $id = $row->id . "</td>";
        echo "<td>" . $nome = $row->nome . "</td>";
        echo "<td>" . $email = $row->email . "</td>";
        echo "<td>" . $senha = $row->senha . "</td>";
        echo "<td>
         <button onclick=\"location.href='?page=editar&id=".$id."';\" class='btn btn-success'>Editar</button>
         <button onclick=\"location.href='?page=editar&id=".$id."';\"class='btn btn-danger'>Excluir</button>
         </td>";

        echo "</tr>";
    }
    echo "<table>";
} else {
    echo "<p class ='alert alert-danger'>Não encontrou resultados!</p>";
}





?>
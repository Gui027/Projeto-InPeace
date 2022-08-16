<h1>Listar Igrejas</h1>
<?php
    $sql = "SELECT * FROM Igreja";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Endereço</th>";
            print "<th>Website</th>";
            print "<th>Foto</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->Nome."</td>";
            print "<td>".$row->Endereco."</td>";
            print "<td>".$row->Website."</td>";
            print "<td>".$row->Foto."</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
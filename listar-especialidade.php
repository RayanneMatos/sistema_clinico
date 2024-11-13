<h1 class='text-black'>Listar Especialidades</h1>

<?php 
    $sql = "SELECT * FROM especialidade";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print"<tr>";
        print"<th>#</th>";
        print"<th>Especialidade</th>";
        print"<th>Ações</th>";
        print"</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_especialidade."</td>";
            print "<td>".$row->nome_especialidade."</td>";

            print "<td> 
                       <button class='btn btn-success' onclick=\"location.href='?page=editar-especialidade&id_especialidade=".$row->id_especialidade."';\">Editar</button>

                       <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-especialidade&acao=excluir&id_especialidade=".$row->id_especialidade."';}else{false}\">Excluir</button>

            </td>";


            print "</tr>";
        }
        print"</table>";
    } else{
        print"Não encontrou resultados";
    }


?>
<h1 class="text-black">Listar Consulta</h1>


<?php 

// SQL com Joins para buscar os dados necessários
$sql = "
    SELECT 
        consulta.id_consulta,
        consulta.data_consulta,
        consulta.hora_consulta,
        consulta.descricao_consulta,
        paciente.nome_paciente,
        medico.nome_medico
    FROM consulta
    INNER JOIN paciente ON consulta.paciente_id_paciente = paciente.id_paciente
    INNER JOIN medico ON consulta.medico_id_medico = medico.id_medico
";

$res = $conn->query($sql);

// Verifica se a consulta foi bem-sucedida
if (!$res) {
    print "<p class='text-black'>Erro ao executar consulta: " . $conn->error . "</p>";
    exit;
}

$qtd = $res->num_rows;

    if($qtd > 0){
        print "<p class='text-black'>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print"<tr>";
        print"<th class='text-black'>#</th>";
        print"<th class='text-black'>Paciente</th>";
        print"<th class='text-black'>Medico</th>";
        print"<th class='text-black'>Data</th>";
        print"<th class='text-black'>Hora</th>";
        print"<th class='text-black'>Descrição</th>";
        print"<th class='text-black'>Ações</th>";
        print"</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td class='text-black'>".$row->id_consulta."</td>";
            print "<td class='text-black'>".$row->nome_paciente."</td>";
            print "<td class='text-black'>".$row->nome_medico."</td>";
            print "<td class='text-black'>".$row->data_consulta."</td>";
            print "<td class='text-black'>".$row->hora_consulta."</td>";
            print "<td class='text-black'>".$row->descricao_consulta."</td>";

            print "<td> 
                       <button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">Editar</button>

                       <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false}\">Excluir</button>

            </td>";


            print "</tr>";
        }
        print"</table>";
    } else{
        print"Não encontrou resultados";
    }


?>
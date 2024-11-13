<h1 class='text-black'>Listar médico</h1>

<?php 
    // SQL com JOIN para trazer os dados da tabela especialidade
    $sql = "
    SELECT 
        medico.id_medico,
        medico.nome_medico,
        medico.crm_medico,
        especialidade.id_especialidade,
        especialidade.nome_especialidade
    FROM medico
    INNER JOIN especialidade ON medico.especialidade_medico = especialidade.id_especialidade
";
    $res = $conn->query($sql);

    // Verifica se a consulta foi bem-sucedida
    if (!$res) {
        print "<p>Erro ao executar consulta: " . $conn->error . "</p>";
        exit;
    }

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-bordered table-striped table-hover'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CRM</th>";
        print "<th>Nome da Especialidade</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id_medico . "</td>";
            print "<td>" . $row->nome_medico . "</td>";
            print "<td>" . $row->crm_medico . "</td>";
            print "<td>[ID: " . $row->id_especialidade . "] " . $row->nome_especialidade . "</td>";

            print "<td> 
                       <button class='btn btn-success' onclick=\"location.href='?page=editar-medico&id_medico=".$row->id_medico."';\">Editar</button>

                       <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=".$row->id_medico."';}else{false}\">Excluir</button>

            </td>";

            

            print "</tr>";
        }
        print"</table>";
    } else{
        print"Não encontrou resultados";
    }


?>
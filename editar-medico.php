<h1 class='text-black'>Editar Médico</h1>

<?php 

    $sql = "SELECT * FROM medico WHERE id_medico=".$_REQUEST['id_medico'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>


<form class='text-black text-start' action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_medico" value="<?php print $row->id_medico;?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_medico" class="form-control" value="<?php print $row->nome_medico;?>">
    </div>

    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control" value="<?php print $row->crm_medico;?>">
    </div>

    <div class="mb-3">
        <label>Especialidade</label>
        <select name="especialidade_medico" class="form-control" required>
            <option value="">Selecione uma especialidade</option>
            <?php
            // Conexão com o banco
            $sql = "SELECT * FROM especialidade";
            $res = $conn->query($sql);

            // Loop para preencher o select com as especialidades
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    // Exibe o ID e o Nome da especialidade no rótulo
                    print "<option value='{$row['id_especialidade']}'>[ID: {$row['id_especialidade']}] {$row['nome_especialidade']}</option>";
                }
            } else {
                print "<option value=''>Nenhuma especialidade cadastrada</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">editar</button>
    </div>
</form>


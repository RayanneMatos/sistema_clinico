<h1 class='text-black'>Cadastrar Médico</h1>

<form class='text-black text-start' action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label class='text-black'>Nome</label>
        <input type="text" name="nome_medico" class="form-control">
    </div>

    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control">
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
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>
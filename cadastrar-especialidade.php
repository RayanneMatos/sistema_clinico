<h1 class="text-black">Cadastrar Especialidade</h1>

<form class='text-black text-start' action="?page=salvar-especialidade" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label class="text-black">Nome</label>
        <input type="text" name="nome_especialidade" class="form-control">
    </div>

    <div class="mb-3">
        <label class="text-black">Médico</label>
        <select name="medico_id_medico" class="form-control" required>
            <option value="" class="text-black">Selecione o Médico</option>
            <?php
            // Buscar médicos cadastrados
            $sql = "SELECT id_medico, nome_medico FROM medico";
            $res = $conn->query($sql);
            while ($row = $res->fetch_assoc()) {
                print "<option value='{$row['id_medico']}' class='text-black'>{$row['id_medico']} - {$row['nome_medico']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>

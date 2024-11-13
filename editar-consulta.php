<h1 class="text-black">Editar Consulta</h1>

<?php 

    $sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form class='text-black text-start' action="?page=salvar-consulta" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_consulta" value="<?php print $row->id_consulta;?>">
    
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data_consulta" class="form-control" value="<?php print $row->data_consulta;?>">
    </div>

    <div class="mb-3">
        <label>Hora</label>
        <input type="time" name="hora_consulta" class="form-control" value="<?php print $row->hora_consulta;?>">
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao_consulta" class="form-control" value="<?php print $row->descricao_consulta;?>">
    </div>

    <div class="mb-3">
        <label>Paciente</label>
        <select name="paciente_id_paciente" class="form-control" required>
            <option value="">Selecione o Paciente</option>
            <?php
            // Buscar pacientes cadastrados
            $sql = "SELECT id_paciente, nome_paciente FROM paciente";
            $res = $conn->query($sql);
            while ($row = $res->fetch_assoc()) {
                print "<option value='{$row['id_paciente']}'>{$row['id_paciente']} - {$row['nome_paciente']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Médico</label>
        <select name="medico_id_medico" class="form-control" required>
            <option value="">Selecione o Médico</option>
            <?php
            // Buscar médicos cadastrados
            $sql = "SELECT id_medico, nome_medico FROM medico";
            $res = $conn->query($sql);
            while ($row = $res->fetch_assoc()) {
                print "<option value='{$row['id_medico']}'>{$row['id_medico']} - {$row['nome_medico']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Editar</button>
    </div>
</form>

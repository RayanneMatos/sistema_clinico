<h1 class='text-black'>Editar Especialidade</h1>

<?php 

    $sql = "SELECT * FROM especialidade WHERE id_especialidade=".$_REQUEST['id_especialidade'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>


<form class='text-black text-start' action="?page=salvar-especialidade" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_especialidade" value="<?php print $row->id_especialidade;?>">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_especialidade" class="form-control" value="<?php print $row->nome_especialidade;?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">editar</button>
    </div>
</form>

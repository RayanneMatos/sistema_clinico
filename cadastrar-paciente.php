<h1 class='text-black'>Cadastrar Paciente</h1>

<form class='text-black text-start' action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Paciente</label>
        <input type="text" name="nome_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <label>Sexo Paciente </label>
        <label><input type="radio" name="sexo_paciente" value="M">Masculino</label>
        <label><input type="radio" name="sexo_paciente" value="F">Feminino</label>
    </div>
    
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar</button>

    </div>
</form>
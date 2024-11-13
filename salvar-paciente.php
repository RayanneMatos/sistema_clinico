<h1 class='text-black'>Salvar Paciente</h1>

<?php 
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $paciente = $_POST['nome_paciente'];
            $cpf = $_POST['cpf_paciente'];
            $email = $_POST['email_paciente'];
            $telefone = $_POST['fone_paciente'];
            $nascimento = $_POST['dt_nasc_paciente'];
            $sexo_paciente = $_POST['sexo_paciente'];
            $endereco_paciente = $_POST['endereco_paciente'];

            $sql = "INSERT INTO paciente (nome_paciente, cpf_paciente, email_paciente, dt_nasc_paciente, sexo_paciente, endereco_paciente)
                    VALUES ('{$paciente}','{$cpf}', '{$email}', '{$telefone}', '{$nascimento}', '{$sexo_paciente}', '{$endereco_paciente}')";
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Cadastrou com sucesso!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            } else {
                print "<script>alert('Deu errado!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            }
            break;

        case 'editar':
            $paciente = $_POST['nome_paciente'];
            $cpf = $_POST['cpf_paciente'];
            $email = $_POST['email_paciente'];
            $fone = $_POST['fone_paciente'];
            $nascimento = $_POST['dt_nasc_paciente'];
            $sexo_paciente = $_POST['sexo_paciente'];
            $endereco = $_POST['endereco_paciente'];

            $sql = "UPDATE paciente SET 
                        nome_paciente = '{$paciente}',
                        cpf_paciente = '{$cpf}',
                        email_paciente = '{$email}',
                        fone_paciente = '{$fone}',
                        dt_nasc_paciente = '{$nascimento}',
                        sexo_paciente = '{$sexo_paciente}',
                        endereco_paciente = '{$endereco}'
                    WHERE 
                        id_paciente = " . $_POST["id_paciente"];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            } else {
                print "<script>alert('Deu errado!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM paciente 
                    WHERE id_paciente = " . $_REQUEST["id_paciente"];
            
            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            } else {
                print "<script>alert('Deu errado!');</script>";
                print "<script>location.href='?page=listar-paciente';</script>";
            }
            break;
    }
?>

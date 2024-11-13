<?php 
    switch ($_REQUEST['acao']) {

        // CADASTRAR
        case 'cadastrar':
            $data_consulta = $_POST['data_consulta'];
            $hora_consulta = $_POST['hora_consulta'];
            $descricao_consulta = $_POST['descricao_consulta'];
            $medico_id_medico = $_POST['medico_id_medico'];
            $paciente_id_paciente = $_POST['paciente_id_paciente'];

            $sql = "INSERT INTO consulta (data_consulta, hora_consulta, descricao_consulta, medico_id_medico, paciente_id_paciente)
            VALUES ('{$data_consulta}', '{$hora_consulta}', '{$descricao_consulta}', '{$medico_id_medico}', '{$paciente_id_paciente}')";
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }else{
            print "<script>alert('Deu errado!);</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }
        break;

        //EDITAR
        case 'editar':
            $data_consulta = $_POST['data_consulta'];
            $hora_consulta = $_POST['hora_consulta'];
            $descricao_consulta = $_POST['descricao_consulta'];
            $medico_id_medico = $_POST['medico_id_medico'];
            $paciente_id_paciente = $_POST['paciente_id_paciente'];
            $id_consulta = $_POST['id_consulta']; 

            $sql = "UPDATE consulta SET 
                        data_consulta = '{$data_consulta}',
                        hora_consulta = '{$hora_consulta}',
                        descricao_consulta = '{$descricao_consulta}',
                        medico_id_medico = '{$medico_id_medico}',
                        paciente_id_paciente = '{$paciente_id_paciente}'
                    WHERE 
                        id_consulta = ".$_POST["id_consulta"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }else{
            print "<script>alert('Deu errado!);</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }
        break;

        // EXCLUIR
        case 'excluir':
           
        $sql = "DELETE FROM consulta 
                WHERE id_consulta = ".$_REQUEST["id_consulta"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }else{
            print "<script>alert('Deu errado!);</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }
        break;
    }
?>
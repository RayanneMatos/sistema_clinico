<h1 class='text-black'>Salvar Especialidade</h1>

<?php 
    switch ($_REQUEST['acao']) {

        // CADASTRAR
        case 'cadastrar':
            $especialidade = $_POST['nome_especialidade'];

        $sql = "INSERT INTO especialidade (nome_especialidade)
                VALUES ( '{$especialidade}')";
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Especialidade cadastrada com sucesso!');</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }else{
            print "<script>alert('Não foi possível realizar cadastramento, tente novamente!');</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }
        break;

        //EDITAR
        case 'editar':
            $especialidade = $_POST['nome_especialidade'];

        $sql = "UPDATE especialidade SET 
                        nome_especialidade ='{$especialidade}'
                WHERE 
                    id_especialidade = ".$_POST["id_especialidade"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Especialidade editada com sucesso!');</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }else{
            print "<script>alert('Deu errado!);</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }
        break;

        // EXCLUIR
        case 'excluir':
           
        $sql = "DELETE FROM especialidade 
                WHERE id_especialidade = ".$_REQUEST["id_especialidade"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }else{
            print "<script>alert('Deu errado!);</script>";
            print "<script>location.href='?page=listar-especialidade';</script>";
        }
        break;
    }
?>
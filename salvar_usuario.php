<?php
    // recebe um request para definir uma "acao" para que possa se separar os metodos
    switch($_REQUEST["acao"]){
        //metodo insert
        case "cadastrar":
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data__nascimento"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $celular = $_POST["celular"];
            $mensagem = $_POST["mensagem"];

            $sql = "INSERT INTO usuario( nome, data_nascimento, email, telefone, celular, mensagem) 
                VALUES 
                ('{$nome}', '{$data_nascimento}', '{$email}', '{$telefone}', '{$celular}', '{$mensagem}')";

            $res = $conn->query($sql);
            // mensagem para usuario exemplificando a situação do cadastro
            if($res){
                print "<script>
                alert('Cadastro realizado com sucesso');
                location.href='?page=listar';
                </script>";
            }else{
                print "<script>
                alert('Não foi possível realizar o cadastro');
                location.href='?page=cadastro';
                </script>";
            }
   
            break;
        // metodo update
        case "editar":
            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data__nascimento"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $celular = $_POST["celular"];
            $mensagem = $_POST["mensagem"];

            // update realizado segundo o id que o cadastro possui
            $sql = "UPDATE usuario SET
                nome='{$nome}',
                data_nascimento='{$data_nascimento}',
                email='{$email}',
                telefone='{$telefone}',
                celular='{$celular}',
                mensagem='{$mensagem}'
                WHERE 
                id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            // mensagem para usuario exemplificando a situação da edição
            if($res){
                print "<script>
                alert('Cadastro editado com sucesso');
                location.href='?page=listar';
                </script>";
            }else{
                print "<script>
                alert('Não foi possível realizar a edição');
                location.href='?page=listar';
                </script>";
            }
   
            break;
        //metodo delete
        case "excluir":
            
            $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            // mensagem para usuario exemplificando a situação da exclusão do cadastro
            if($res){
                print "<script>
                alert('Exclusão realizada com sucesso!');
                location.href='?page=listar';
                </script>";
            }else{
                print "<script>
                alert('Não foi possível realizar a exclusão');
                location.href='?page=listar';
                </script>";
            }
            break;
    }


?>
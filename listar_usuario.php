<h1>lista de usuarios</h1>

<?php
// metodo select
    $sql = "SELECT * FROM usuario";

    $res = $conn->query($sql);
    //verifica se há algum dado no banco
    $qtd = $res->num_rows;
    // criacao da tabela a partido dos dados do banco de maneira dinâmica
    if($qtd > 0){
        print "<div class='card'>";
        print "<table class='table table-hover table-striped table-bordered table-responsive'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Data de nascimento</th>";
            print "<th>Email</th>";
            print "<th>Telefone</th>";
            print "<th>Celular</th>";
            print "<th>Mensagem</th>";
            print "<th>Ações</th>";
            print"</tr>";
        while($row = $res->fetch_object()){
            // solicitação dos dados em cada linha
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->data_nascimento."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->celular."</td>";
            print "<td>".$row->mensagem."</td>";
            // criação dos botões de editar e deletar que são usados na lista
            print "<td class='td-btn'>
            
                        <button class='btn btn-success btn-list' onclick=\"location.href='?page=editar&id=".$row->id."';\">editar</button>
                        
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                        {location.href='?page=salvar&acao=excluir&id=".$row->id."';}
                        else {false;}\"
                        class='btn btn-danger btn-list'>excluir</button>
                   </td>";
            print"</tr>";
        }
        print "</table>";
        print "</div>";
    }else{
        print"<p class='alert alert-danger'>
                Não foi possivel encontrar resultados
            </p>";
    }
?>

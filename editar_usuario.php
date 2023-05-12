<h1>Editar usuario</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    
?>
<div class="card">
    <div class="card-body">
        <h1>contato</h1>
        <form action="?page=salvar" id='formulario' method="POST">
            <input type="hidden" name="acao" value="editar">
            <!-- solicita o id do usuario cadastrado para utilizar na pagina de edicao de cadastro -->
            <input type="hidden" name="id" value="<?php print $row->id; ?>">
            <!-- retorna os dados do usuario nos campos determinados facilitando as alterações -->
            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input class='form-control' type="text" name="nome" id="nome" value="<?php print $row->nome; ?>" placeholder='digite o seu nome...'>
    
            </div>
            <div class="form-group mb-3">
                <label for="data__nascimento">Data de nascimento:</label>
                <input type="date" name="data__nascimento" id="data__nascimento" value="<?php print $row->data_nascimento; ?>" class='form-control'>
    
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php print $row->email; ?>" placeholder='Digite seu e-mail...'>
    
            </div>
            <div class="form-group mb-3">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" class='form-control' value="<?php print $row->telefone; ?>" placeholder='Digite seu telefone...' maxlength='14'>
    
            </div>
            <div class="form-group mb-3">
                <label for="celular">Celular:</label>
                <input type="tel" name="celular" id="celular" class='form-control' value="<?php print $row->celular; ?>" placeholder='Digite seu número de celular...' maxlength='16'>
    
            </div>
            <div class="form-group mb-3">
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" class='form-control' value="<?php print $row->mensagem; ?>" placeholder='Digite a mensagem...'></textarea>
    
            </div>
            <div class="form-group mb-3 text-center">
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
            
        </form>
    </div>
</div>

<script src="js/validacao/validaNome.js"></script>
    <script src="js/validacao/validaNascimento.js"></script>
    <script src="js/validacao/validaEmail.js"></script>
    <script src="js/validacao/validaTelefone.js"></script>
    <script src="js/validacao/validaCelular.js"></script>
    <script src="js/validacao/validaMensagem.js"></script>
    <script src='js/formulario.js'>
 </script>
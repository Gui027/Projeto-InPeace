<h1>Editar Igreja</h1>
<?php
    $sql = "SELECT * FROM Igreja WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->Nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?php print $row->Endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Website</label>
        <input type="text" name="website" value="<?php print $row->Website; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Foto da igreja</label>
        <input type="text" name="foto" value="<?php print $row->Foto; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
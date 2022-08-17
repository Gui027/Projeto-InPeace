<h1>Nova Igreja</h1>
<form action="?page=salvar" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" class="form-control">
    </div>
    <div class="mb-3">
        <label>Website</label>
        <input type="text" name="website" class="form-control">
    </div>
    <div class="mb-3">
        <label>Foto da igreja</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<?php include 'usrlogin-menu.php' ?>



<form method='POST' action='<?=route('usrlog/salvar/'._v($data,"id"))?>'>

<label class='col-md-6'>
    Nome
    <input type="text" class="form-control <?=hasError("nome","is-invalid")?>" name="nome" value="<?=old("nome", _v($data,"nome"))?>" >
    <div class='invalid-feedback'><?=getValidationError("nome") ?></div>
</label>

<label class='col-md-2'>
    Data de nascimento
    <input type="text" class="form-control date <?=hasError("dataNascimento","is-invalid")?>" name="dataNascimento" value="<?=old("dataNascimento", _v($data,"dataNascimento"))?>" >
    <div class='invalid-feedback'><?=getValidationError("dataNascimento") ?></div>
</label>

E-mail
<label class='col-md-2'>
    <E-mail></E-mail>
    <input type="text" class="form-control <?=hasError("email","is-invalid")?>" name="email" value="<?=old("email", _v($data,"email"))?>" >
    <div class='invalid-feedback'><?=getValidationError("email") ?></div>
</label>

    Senha
<label class='col-md-2'>
    <E-mail></E-mail>
    <input type="text" class="form-control" name="senha" value="<?=_v($data,"senha")?>" >
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>

</form>

<table class='table'>

    <tr>
        <th>Editar</th>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("usrlog/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td class="text-light"><?=$item['nome']?></td>
            <td class="text-light"><?=$item['email']?></td>
            <td class="text-light"><?=$item['dataNascimento']?></td>
            <td class="text-light"><?=$item['senha']?></td>
            <td>
                <a href='<?=route("usrlog/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>
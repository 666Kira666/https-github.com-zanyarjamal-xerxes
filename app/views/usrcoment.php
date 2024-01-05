<?php include 'admcoment-menu.php' ?>



<form method='POST' action='<?=route('usrcoment/salvar/'._v($data,"id"))?>'>

    Comentário
<label class='col-md-2'>
    <E-mail></E-mail>
    <input type="text" class="form-control" name="texto" value="<?=_v($data,"texto")?>" >
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("usrcoment")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th class="text-light">Editar</th>
        <th class="text-light">Nome</th>
        <th class="text-light">comentario</th>
        <th class="text-light">identificador</th>
        <th class="text-light">Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("usrcoment/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td class="text-light"><?=$item['nome']?></td>
            <td class="text-light"><?=$item['texto']?></td>
            <td class="text-light"><?=$item['id']?></td>

            <td>
                <a href='<?=route("usrcoment/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>
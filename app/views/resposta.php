<?php include 'admcoment-menu.php' ?>


Resposta
<br>

<form method='POST' action='<?=route('resposta/salvar/'._v($data,"id"))?>'>

<label class='col-md-2'>
    <E-mail></E-mail>
    <input type="text" class="form-control" name="resposta" value="<?=_v($data,"resposta")?>" >
</label>

Resposta ao Comentário N°
<br>

<label class='col-md-2'>
    <E-mail></E-mail>
    <input type="text" class="form-control" name="comentario_id" value="<?=_v($data,"comentario_id")?>" >
</label>

<button class='btn btn-primary col-12 col-md-3 mt-3'>Salvar</button>
<a class='btn btn-secondary col-12 col-md-3 mt-3' href="<?=route("resposta")?>">Novo</a>

</form>

<table class='table'>

    <tr>
        <th class="text-light">Editar</th>
        <th class="text-light">Nome</th>
        <th class="text-light">Resposta</th>
        <th class="text-light">Resposta ao Comentário N°</th>


        <th class="text-light">Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("resposta/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td class="text-light"><?=$item['nome']?></td>
            <td class="text-light"><?=$item['resposta']?></td>
            <td class="text-light"><?=$item['comentario_id']?></td>


            <td>
                <a href='<?=route("resposta/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>
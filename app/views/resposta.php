<?php include 'admcoment-menu.php' ?>


<br>
<br>
<!-- Contact Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Resposta</h2>
<!-- Icon Divider-->
<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
</div>

Resposta (Conteúdo)
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
        <th class="text-secondary">Editar</th>
        <th class="text-secondary">Nome</th>
        <th class="text-secondary">Resposta</th>
        <th class="text-secondary">Resposta ao Comentário N°</th>


        <th class="text-secondary">Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("resposta/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td class="text-secondary"><?=$item['nome']?></td>
            <td class="text-secondary"><?=$item['resposta']?></td>
            <td class="text-secondary"><?=$item['comentario_id']?></td>


            <td>
                <a href='<?=route("resposta/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>
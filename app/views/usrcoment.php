<?php include 'admcoment-menu.php' ?>

<br>
<br>
<!-- Contact Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Comentários</h2>
<!-- Icon Divider-->
<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
</div>

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
        <th class="text-secondary">Editar</th>
        <th class="text-secondary">Nome</th>
        <th class="text-secondary">comentario</th>
        <th class="text-secondary">identificador</th>
        <th class="text-secondary">Deletar</th>
    </tr>

    <?php foreach($lista as $item): ?>

        <tr>
            <td>
                <a href='<?=route("usrcoment/index/{$item['id']}")?>'>Editar</a>
            </td>
            <td class="text-secondary"><?=$item['nome']?></td>
            <td class="text-secondary"><?=$item['texto']?></td>
            <td class="text-secondary"><?=$item['id']?></td>

            <td>
                <a href='<?=route("usrcoment/deletar/{$item['id']}")?>'>Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include 'layout-bottom.php' ?>
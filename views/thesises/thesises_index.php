<div class="btn-group" role="group" aria-label="...">
    <button type="button" class="btn btn-default">Väljapakutud ideed</button>
    <button type="button" class="btn btn-default">Kinnitamisel</button>
    <button type="button" class="btn btn-default">Teostamisel</button>
    <button type="button" class="btn btn-default">Eelnevate aastate lõputööd</button>
</div>
    <? if (empty($thesises)): ?>
        <div class="alert alert-info"><? __('Hetkel lõputööde andmebaas on tühi.') ?></div>
    <? else: ?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-md-1">#</th>
        <th class="col-md-9">Teema</th>
        <th class="col-md-2">Tegevused</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($thesises as $thesis): ?>
        <tr>
            <td><?= $thesis['thesis_id'] ?></td>
            <td><?= $thesis['thesis_title'] ?>  </td>
            <td><a href="thesises/view/<?= $thesis['thesis_id'] ?>/<?= $thesis['thesis_title'] ?>"
                   class="btn btn-default" role="button">Vaatan lähemalt</a></td>
        </tr>
    <? endforeach ?>
    <tbody>
    <? endif ?>
</table>
<?php if ($auth->is_admin): ?>

    <div class="pull-left">
        <button class="btn btn-primary" onclick="window.location.href = 'thesises/add'">
            Sisesta uus
        </button>
    </div>
<?php endif; ?>


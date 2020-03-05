<?php
$this -> load -> view('header');
?>

<h2><?= $title ?></h2>
<table class="table table-striped" >
<?php
foreach($items as $c) {
?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><a href='<?= site_url("welcome/getItemInfo/${c['id']}") ?>'><?= $c['name'] ?></a></td>
        <td><?= $c['cost'] ?></td>
        <td><?= $c['info'] ?></td>
    </tr>
<?php
}
?>
</table>

<?php
$this -> load -> view('footer');
?>
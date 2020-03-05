<?php
$this -> load -> view('header');
?>

<h2><?= $name ?></h2>
<ul>
    <li><?= $id ?></li>
    <li><?= $name ?></li>
    <li><?= $cost ?></li>
    <li><?= $info ?></li>
</ul>

<?php
$this -> load -> view('footer');
?>
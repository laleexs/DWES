<?php


class View
{
private array $data;
public function render(array $data)
{
$this->data = $data; // guarda la data que le envia el controlador para poder mostrarla
?>
<h1><?= $this->data['title'] ?></h1>
<h2><?= $this->data['keyworks'] ?></h2>
<p><?= $this->data['description'] ?></p>
<p><?= $this->data['content'] ?></p>
<?php
}
}

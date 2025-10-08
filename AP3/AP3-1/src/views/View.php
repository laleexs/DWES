<?php

namespace views;

class View
{
    private array $data;
    public function render(array $data)
    {
        echo $this->data['title'] . $this->data['keywords'] . $this->data['description'] . $this->data['content'];
    }
}
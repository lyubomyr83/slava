<?php
namespace app\classes;

class Ccontent extends Mcontent
{
    public function getContent($id)
    {
        $result = $this->prepareContent($id);
        $content = $result->fetch();
        return $content;
    }
}
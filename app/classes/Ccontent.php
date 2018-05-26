<?php


namespace app\classes;

class Ccontent extends Mcontent
{
    public function getContent($id)
    {
        $result = $this->prepareContent($id);
        $content = mysqli_fetch_assoc($result);
        return $content;
    }
}
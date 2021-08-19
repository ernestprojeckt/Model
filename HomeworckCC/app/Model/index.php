<?php


namespace App\Model;



class index extends AbstractModel
{

    public $title =
        [
            "keyone" => 'indextext',
            "keytwo" => '101232322',
            "keytree" => 'dog'
        ];

    public function getindexByTitle($title)
    {

        if (array_key_exists($title, $this->title)) {
            return $this->title[$title];
        } else {
            return false;
        }

    }

    public function list()
    {
        return $this->title;
    }
}
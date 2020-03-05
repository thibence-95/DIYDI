<?php


namespace App\Services;


class Master
{
    public $transform;

    public function __construct(Capitalize $capitalize, SpaceToDash $spaceToDash)
    {
        if (isset($_POST['submit'])) {
            if ($_POST['type'] == 'Capitalize') {
                return $this->transform = $capitalize->Transform($_POST['string']);
            }
            elseif ($_POST['type'] == 'Dash') {
                return $this->transform = $spaceToDash->Transform($_POST['string']);
            }
            else{
                return $this->transform = "Don't leave me hangin', man! Choose something!";
            }
        }
    }
}
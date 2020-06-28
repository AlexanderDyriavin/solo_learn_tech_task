<?php


namespace Tech\Core;


class View
{
    public static function  render(string $view): void
    {
        $viewPath = __DIR__ . "/../View/" . $view . ".tpl.php";
        if (file_exists($viewPath)){
            include  $viewPath;
        }

    }
}
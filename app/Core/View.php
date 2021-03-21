<?php

namespace Tech\Core;

class View
{
    public function __construct()
    {
        //TODO inject FS module to parse the View folders
    }

    public static function render(string $view, array $data = []): void
    {
        if (file_exists(sprintf('%s%s.php', APP_VIEWS_PATH, $view))) {
            require sprintf('%s%s.php', APP_VIEWS_PATH, 'html_blocks/header');
            require sprintf('%s%s.php', APP_VIEWS_PATH, $view);
            require sprintf('%s%s.php', APP_VIEWS_PATH, 'html_blocks/footer');
        }
    }

    public static function buildView(): ViewPage
    {
        //TODO implement build view method
    }
}
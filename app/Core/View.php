<?php


namespace Tech\Core;
class View
{
    public static function render(string $view, array $data = [])
    {
        if (file_exists(sprintf('%s%s.php', APP_VIEWS_PATH, $view))) {
            require sprintf('%s%s.php', APP_VIEWS_PATH, 'html_blocks/header');

            require sprintf('%s%s.php', APP_VIEWS_PATH, $view);
            require sprintf('%s%s.php', APP_VIEWS_PATH, 'html_blocks/footer');
        }

    }
}
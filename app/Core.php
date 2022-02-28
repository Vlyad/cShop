<?php

use JetBrains\PhpStorm\NoReturn;

class Core
{
    #[NoReturn] public function Redirect($url): void
    {
        header("Location: $url");
        die();
    }
    #[NoReturn] public function Refresh($time, $url): void
    {
        header("Refresh: $time url=$url");
        die();
    }
    public function Clean($data): string
    {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
    public function CheckInput($variable): string
    {
        $this->$variable = $variable ?? NULL;
        return $this->$variable;
    }
}
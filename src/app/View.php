<?php

namespace App;

use App\Exception\ViewNotFoundException;

class View
{

    /**
     * @param string $view
     */
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public static function make(string $view, array $params = [])
    {
        return new static($view, $params);
    }

    public function render(string $withLayout) {
        $viewPath = VIEW_PATH . '/' .$this->view . '.php';
        if(! file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }

        foreach ($this->params as $key => $value) {
            $$key = $value;
            var_dump($$key);
        };
        ob_start();

        if(file_exists(VIEW_PATH.'/'. $withLayout . '.php')) {
            //content
            include(VIEW_PATH.'/'. $withLayout . '.php');
            include $viewPath;
            return (string) ob_get_clean();
        }else {
            include $viewPath;
            return (string) ob_get_clean();
        }
    }

    public function __toString(): string
    {
        return $this->render('123123');
    }
    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
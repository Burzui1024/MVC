<?php


namespace wfm;


abstract class Controller
{
    public array $data = [];
    public array $meta = [];
    public string|false $layout = '';
    public string $views = '';
    public object $model;

    public function __construct(public $route = [])
    {

    }

    public function getModel()
    {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        if (class_exists($model)) {
            $this->model = new $model();
        }
    }

    /**
     * Если пустая строка то оставляем ее если нет берем данные из массива $route с ключом 'action'
     */
    public function getView()
    {
        $this->views = $this->views ?: $this->route['action'];
        (new View($this->route,$this->layout,$this->views,$this->meta))->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta = [
            'title' => $title, 'description' => $description, 'keywords' => $keywords
        ];
    }

}
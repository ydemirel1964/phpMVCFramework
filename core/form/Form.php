<?php
namespace app\core\form;

class Form
{
    public static function begin($action, $method)
    {
        return "<form action='$action' method='$method'>";
    }
    public static function end()
    {
        return "</form>";
    }
}
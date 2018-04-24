<?php
// namespace Core;


class View
{
	public function __construct()
	{

	}


    public function render($template, $layout = null)
    {        
        $content = $this->getTemplatePath($template);
        

        if ($layout) {
            require $this->getTemplatePath($layout);
        } else {
            require $content;
        }
    }


    public function getTemplatePath($template)
    {
        require_once '../app/libs/functions.php';
        return str_replace('\\', '/', ROOT_DIR).'/src/views'.$template.'/index.php';
    }


}
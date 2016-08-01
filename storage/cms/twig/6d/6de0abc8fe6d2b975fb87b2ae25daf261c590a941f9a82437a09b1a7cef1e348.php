<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/layouts/fallback.htm */
class __TwigTemplate_7da65c84a15fa812d1dee96cdbece29c7e8557d3128dc5d6856e00e697f3ac76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/

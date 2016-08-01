<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/partials/searchResults/pagination.htm */
class __TwigTemplate_f825b2bdd8a8eae6107caac9c2fd234ac6b93acafea4e0fdb0fef4a50f9cdd75 extends Twig_Template
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
        if ($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "hasPages", array())) {
            // line 2
            echo "    ";
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/partials/searchResults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if results.hasPages %}*/
/*     {{ results | raw }}*/
/* {% endif %}*/

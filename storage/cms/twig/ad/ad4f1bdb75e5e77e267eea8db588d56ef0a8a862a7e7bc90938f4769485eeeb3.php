<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/pages/search.htm */
class __TwigTemplate_55103979de84e60fd8f5a600270adfb1c6844524cb63c309d1e25f1fcbebbf9e extends Twig_Template
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
        echo "<h2>Search results for ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["searchResults"]) ? $context["searchResults"] : null), "query", array()), "html", null, true);
        echo "</h2>

";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
/* <h2>Search results for {{ searchResults.query }}</h2>*/
/* */
/* {% component 'searchResults' %}*/

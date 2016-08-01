<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/partials/searchResults/no-results.htm */
class __TwigTemplate_b0c73a732ce2ebea94c991f1627da586d9a2cd797443f25979a4ac9525c6674f extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "noResultsMessage", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/partials/searchResults/no-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <p>{{ __SELF__.noResultsMessage }}</p>*/

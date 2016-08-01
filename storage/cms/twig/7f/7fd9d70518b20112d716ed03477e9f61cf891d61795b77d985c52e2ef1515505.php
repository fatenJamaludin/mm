<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/partials/searchResults/default.htm */
class __TwigTemplate_1558e92bd2cc01ae97ec009c0542f5ec2683c962c28bb78bcf8dac8dacf2f8f4 extends Twig_Template
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
        $context["results"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "results", array());
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::searchresult.htm")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::no-results.htm")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = (isset($context["results"]) ? $context["results"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::pagination.htm")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/partials/searchResults/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  42 => 8,  40 => 7,  31 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set results = __SELF__.results %}*/
/* */
/* {% for result in results %}*/
/*     {# Display all results #}*/
/*     {% partial __SELF__ ~ '::searchresult.htm' result = result %}*/
/* {% else %}*/
/*     {# No results found #}*/
/*     {% partial __SELF__ ~ '::no-results.htm' %}*/
/* {% endfor %}*/
/* */
/* {% partial __SELF__ ~ '::pagination.htm' results = results %}*/

<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/partials/menu-items.htm */
class __TwigTemplate_6793996717617331c6a58565ae542e55c9871754847a4f44733434243fa05cf3 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li 
            class=\"";
            // line 4
            echo ((($this->getAttribute($context["item"], "isActive", array()) || $this->getAttribute($context["item"], "isChildActive", array()))) ? ("active") : (""));
            echo " 
            ";
            // line 5
            echo (($this->getAttribute($context["item"], "items", array())) ? ("dropdown") : (""));
            echo "\"
        >
            <a 
                ";
            // line 8
            if ($this->getAttribute($context["item"], "items", array())) {
                echo "class=\"dropdown-toggle\" data-toggle=\"dropdown\"";
            }
            echo " 
                href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "

                ";
            // line 13
            if ($this->getAttribute($context["item"], "items", array())) {
                echo "<span class=\"caret\"></span>";
            }
            // line 14
            echo "            </a>

            ";
            // line 16
            if ($this->getAttribute($context["item"], "items", array())) {
                // line 17
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = $this->getAttribute($context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('CMS')->partialFunction("menu-items"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "            ";
            }
            // line 19
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/partials/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  77 => 19,  74 => 18,  67 => 17,  65 => 16,  61 => 14,  57 => 13,  52 => 11,  47 => 9,  41 => 8,  35 => 5,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <ul class="{{ class }}">*/
/*     {% for item in items %}*/
/*         <li */
/*             class="{{ item.isActive or item.isChildActive ? 'active' : '' }} */
/*             {{ item.items ? 'dropdown' : '' }}"*/
/*         >*/
/*             <a */
/*                 {% if item.items %}class="dropdown-toggle" data-toggle="dropdown"{% endif %} */
/*                 href="{{ item.url }}"*/
/*             >*/
/*                 {{ item.title }}*/
/* */
/*                 {% if item.items %}<span class="caret"></span>{% endif %}*/
/*             </a>*/
/* */
/*             {% if item.items %}*/
/*                 {% partial 'menu-items' items=item.items class='dropdown-menu' %}*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/

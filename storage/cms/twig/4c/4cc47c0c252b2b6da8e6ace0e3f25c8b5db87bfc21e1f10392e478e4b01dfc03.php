<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_b5f33e6d9199cb685a7cecbe18b4b5230cfc15ed2f05f48d9be1920eaf113506 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("siteSearchInclude"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/less/theme.less"));
        // line 14
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <form action=\"";
        // line 17
        echo $this->env->getExtension('System')->appFilter("/search");
        echo "\" method=\"get\">
            <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
            <button type=\"submit\">FIND</button>
        </form>
        <!-- Nav -->
        ";
        // line 22
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["staticMenu"]) ? $context["staticMenu"] : null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav"        ;
        echo $this->env->getExtension('CMS')->partialFunction("menu-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "  

        ";
        // line 24
        $context["jumbotronTexture"] = twig_random($this->env, array(0 => "carbon", 1 => "dustnscratches", 2 => "elegant", 3 => "grunge", 4 => "leather", 5 => "lines", 6 => "plaid", 7 => "wood"));
        // line 25
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url(";
        // line 28
        echo $this->env->getExtension('CMS')->themeFilter((("assets/images/textures/" . (isset($context["jumbotronTexture"]) ? $context["jumbotronTexture"] : null)) . ".png"));
        echo ")\">
                <div class=\"container\">
                    <h1>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"container\">
                ";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "            </div>
        </section>

        <!-- Footer 
        <footer id=\"layout-footer\">
            ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "        </footer>-->

        <!-- Scripts -->
        <script src=\"";
        // line 45
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js"));
        // line 60
        echo "\"></script>
        ";
        // line 61
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 62
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  122 => 61,  119 => 60,  117 => 45,  112 => 42,  108 => 41,  101 => 36,  99 => 35,  92 => 31,  88 => 30,  83 => 28,  78 => 25,  76 => 24,  67 => 22,  59 => 17,  54 => 14,  51 => 12,  48 => 11,  44 => 10,  38 => 7,  34 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>{% component 'siteSearchInclude' %}*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>October CMS - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/less/theme.less'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         <form action="{{ '/search' | app }}" method="get">*/
/*             <input name="q" type="text" placeholder="What are you looking for?" autocomplete="off">*/
/*             <button type="submit">FIND</button>*/
/*         </form>*/
/*         <!-- Nav -->*/
/*         {% partial 'menu-items' items=staticMenu.menuItems class='nav navbar-nav' %}  */
/* */
/*         {% set jumbotronTexture = random(['carbon', 'dustnscratches', 'elegant', 'grunge', 'leather', 'lines', 'plaid', 'wood']) %}*/
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             <div class="jumbotron" style="background-image:url({{ ('assets/images/textures/'~jumbotronTexture~'.png')|theme }})">*/
/*                 <div class="container">*/
/*                     <h1>{{ this.page.title }}</h1>*/
/*                     <p>{{ this.page.description }}</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="container">*/
/*                 {% page %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         <!-- Footer */
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>-->*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/javascript/app.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}        */
/*     </body>*/
/* </html>*/

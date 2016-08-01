<?php

/* D:\xampp\htdocs\october_faten/themes/rainlab-vanilla/layouts/static-layout.htm */
class __TwigTemplate_8e0c858dbbdd14b4a60e9aaca43022d1f06c5425230359e11cd5a0067dea5eee extends Twig_Template
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
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>

        <!-- Bootstrap core CSS -->
        <link 
            rel=\"stylesheet\" 
            href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        <!-- Theme CSS -->
        <link href=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    </head>

    <body>
        <div class=\"container\">
            <!-- Static navbar -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" 
                                data-toggle=\"collapse\" 
                                data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Static Pages Demo</a>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        ";
        // line 36
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["topMenuLeft"]) ? $context["topMenuLeft"] : null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "nav navbar-nav"        ;
        echo $this->env->getExtension('CMS')->partialFunction("menu-items"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div> <!-- /container -->

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8\">
                    <!-- 
                        We will place the page contents here
                    -->
                </div>

                <div class=\"col-sm-3 col-sm-offset-1\">
                    <div class=\"sidebar\">
                        <!-- 
                            The blog category list will be displayed here
                        -->
                    </div>
                </div>
            </div>
        </div>

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\october_faten/themes/rainlab-vanilla/layouts/static-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 37,  62 => 36,  39 => 16,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>{{ this.page.title }}</title>*/
/* */
/*         <!-- Bootstrap core CSS -->*/
/*         <link */
/*             rel="stylesheet" */
/*             href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* */
/*         <!-- Theme CSS -->*/
/*         <link href="{{ 'assets/css/theme.css'|theme }}" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="container">*/
/*             <!-- Static navbar -->*/
/*             <div class="navbar navbar-default" role="navigation">*/
/*                 <div class="container-fluid">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" */
/*                                 data-toggle="collapse" */
/*                                 data-target=".navbar-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="#">Static Pages Demo</a>*/
/*                     </div>*/
/*                     <div class="navbar-collapse collapse">*/
/*                         {% partial 'menu-items' items=topMenuLeft.menuItems class='nav navbar-nav' %}*/
/*                     </div><!--/.nav-collapse -->*/
/*                 </div><!--/.container-fluid -->*/
/*             </div>*/
/*         </div> <!-- /container -->*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8">*/
/*                     <!-- */
/*                         We will place the page contents here*/
/*                     -->*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-3 col-sm-offset-1">*/
/*                     <div class="sidebar">*/
/*                         <!-- */
/*                             The blog category list will be displayed here*/
/*                         -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/

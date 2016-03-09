<?php

/* AriiCoreBundle::base.html.twig */
class __TwigTemplate_dec28ef72a9eabd1b162607e76f539358d00359f325b88c1cc9569f9b24cb6cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style_plus' => array($this, 'block_style_plus'),
            'dhtmlx' => array($this, 'block_dhtmlx'),
            'dhtmlx_plus' => array($this, 'block_dhtmlx_plus'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        ";
        // line 8
        $this->displayBlock('style_plus', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('dhtmlx', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('dhtmlx_plus', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            html, body {
                width: 100%;      /*provides the correct work of a full-screen layout*/ 
                height: 100%;     /*provides the correct work of a full-screen layout*/
//                overflow: hidden; /*hides the default body's space*/
                margin: 0px;      /*hides the body's scrolls*/
            }
        </style>
        ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Ari'i";
    }

    // line 8
    public function block_style_plus($context, array $blocks = array())
    {
    }

    // line 9
    public function block_dhtmlx($context, array $blocks = array())
    {
    }

    // line 10
    public function block_dhtmlx_plus($context, array $blocks = array())
    {
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 23,  97 => 20,  92 => 10,  87 => 9,  82 => 8,  76 => 6,  70 => 25,  67 => 24,  65 => 23,  61 => 21,  59 => 20,  46 => 11,  43 => 10,  40 => 9,  38 => 8,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ari'i{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*         {% block style_plus %}{% endblock %}*/
/*         {% block dhtmlx %}{% endblock %}*/
/*         {% block dhtmlx_plus %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style>*/
/*             html, body {*/
/*                 width: 100%;      /*provides the correct work of a full-screen layout*//*  */
/*                 height: 100%;     /*provides the correct work of a full-screen layout*//* */
/* //                overflow: hidden; /*hides the default body's space*//* */
/*                 margin: 0px;      /*hides the body's scrolls*//* */
/*             }*/
/*         </style>*/
/*         {% block head %}{% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block script %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

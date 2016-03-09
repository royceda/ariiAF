<?php

/* AriiCoreBundle::doc.html.twig */
class __TwigTemplate_55d3afba387b1bd3cb61ae4fdd9ac1fdd8582de6ca1160198d94bd5d4dfff65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiCoreBundle::doc.html.twig", 1);
        $this->blocks = array(
            'dhtmlx' => array($this, 'block_dhtmlx'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AriiCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_dhtmlx($context, array $blocks = array())
    {
        // line 3
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle::doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "AriiCoreBundle::base.html.twig" %}*/
/* {% block dhtmlx %}*/
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">*/
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">*/
/* <!-- Latest compiled and minified JavaScript -->*/
/* <!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->*/
/* {% endblock dhtmlx %}*/
/* */

<?php

/* AriiCoreBundle:Templates:bootstrap.html.twig */
class __TwigTemplate_38785c1e0aab74d45ba64a703e812095c5b42d3b882d3879c8ce939ef33347e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AriiCoreBundle::doc.html.twig", "AriiCoreBundle:Templates:bootstrap.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AriiCoreBundle::doc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Optional theme -->
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<body>
<div class=\"container-fluid\">
";
        // line 14
        echo $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "content", array());
        echo "
</div>    
</body>
";
    }

    public function getTemplateName()
    {
        return "AriiCoreBundle:Templates:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 12,  51 => 11,  45 => 9,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* {# src/Arii/JIDBundle/Resources/views/Default/history.html.twig #}*/
/* {% extends "AriiCoreBundle::doc.html.twig" %}*/
/* {% block head %}*/
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">*/
/* <!-- Optional theme -->*/
/* <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">*/
/* <!-- Latest compiled and minified JavaScript -->*/
/* <!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->*/
/* {% endblock %} */
/* {% block body %}*/
/* <body>*/
/* <div class="container-fluid">*/
/* {{ doc.content | raw }}*/
/* </div>    */
/* </body>*/
/* {% endblock %}*/
/* */

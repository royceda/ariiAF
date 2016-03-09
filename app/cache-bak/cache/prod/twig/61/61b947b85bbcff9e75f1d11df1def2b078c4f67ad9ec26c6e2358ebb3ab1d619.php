<?php

/* AriiUserBundle::layout.html.twig */
class __TwigTemplate_08c4c076dec1abc97f7250ecd068cb7ee390221ffee030fac6f5560ff546c5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AriiCoreBundle::base.html.twig", "AriiUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'dhtmlx' => array($this, 'block_dhtmlx'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AriiUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  38 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "AriiCoreBundle::base.html.twig" %}*/
/* {% block dhtmlx %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('dhtmlx/skins/terrace/dhtmlx.css') }}" />*/
/*     <script src="{{ asset('dhtmlx/codebase/dhtmlx.js') }}" type="text/javascript"></script>*/
/* {% endblock dhtmlx %}*/
/* {% block body %}*/
/* {% endblock body %}*/
/* {% block script %}*/
/* {% endblock script %}*/
/*             */

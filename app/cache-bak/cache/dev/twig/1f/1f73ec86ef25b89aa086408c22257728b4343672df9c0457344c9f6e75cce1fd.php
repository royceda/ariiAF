<?php

/* AriiUserBundle::layout.html.twig */
class __TwigTemplate_c85d4a884b23a168ad72d226e17ab16d07e015086abc319a3e771fc9e8106327 extends Twig_Template
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
        $__internal_eeb511d661c25c071a9b0e6a71a5a95773610f09770b4c7b51702472cc7a3e9e = $this->env->getExtension("native_profiler");
        $__internal_eeb511d661c25c071a9b0e6a71a5a95773610f09770b4c7b51702472cc7a3e9e->enter($__internal_eeb511d661c25c071a9b0e6a71a5a95773610f09770b4c7b51702472cc7a3e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AriiUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb511d661c25c071a9b0e6a71a5a95773610f09770b4c7b51702472cc7a3e9e->leave($__internal_eeb511d661c25c071a9b0e6a71a5a95773610f09770b4c7b51702472cc7a3e9e_prof);

    }

    // line 2
    public function block_dhtmlx($context, array $blocks = array())
    {
        $__internal_3779f42030bfaaee016bf73774f4eaf938cc388b406a63803338f5309b2c5c55 = $this->env->getExtension("native_profiler");
        $__internal_3779f42030bfaaee016bf73774f4eaf938cc388b406a63803338f5309b2c5c55->enter($__internal_3779f42030bfaaee016bf73774f4eaf938cc388b406a63803338f5309b2c5c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_3779f42030bfaaee016bf73774f4eaf938cc388b406a63803338f5309b2c5c55->leave($__internal_3779f42030bfaaee016bf73774f4eaf938cc388b406a63803338f5309b2c5c55_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3102f8cb6be1b94dcd8ad25419254ab31915e29bf855fd6e0c81599d72c12255 = $this->env->getExtension("native_profiler");
        $__internal_3102f8cb6be1b94dcd8ad25419254ab31915e29bf855fd6e0c81599d72c12255->enter($__internal_3102f8cb6be1b94dcd8ad25419254ab31915e29bf855fd6e0c81599d72c12255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3102f8cb6be1b94dcd8ad25419254ab31915e29bf855fd6e0c81599d72c12255->leave($__internal_3102f8cb6be1b94dcd8ad25419254ab31915e29bf855fd6e0c81599d72c12255_prof);

    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        $__internal_4817510d2ccdb341a3f988f5f0fa19a149a04278b52690de94a5c3a840dd819e = $this->env->getExtension("native_profiler");
        $__internal_4817510d2ccdb341a3f988f5f0fa19a149a04278b52690de94a5c3a840dd819e->enter($__internal_4817510d2ccdb341a3f988f5f0fa19a149a04278b52690de94a5c3a840dd819e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_4817510d2ccdb341a3f988f5f0fa19a149a04278b52690de94a5c3a840dd819e->leave($__internal_4817510d2ccdb341a3f988f5f0fa19a149a04278b52690de94a5c3a840dd819e_prof);

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
        return array (  67 => 8,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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

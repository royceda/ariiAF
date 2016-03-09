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
        $__internal_886279adf0546fcd2cf153304d7f49767b79e4d1c181977a8a5ecbc3952326ab = $this->env->getExtension("native_profiler");
        $__internal_886279adf0546fcd2cf153304d7f49767b79e4d1c181977a8a5ecbc3952326ab->enter($__internal_886279adf0546fcd2cf153304d7f49767b79e4d1c181977a8a5ecbc3952326ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AriiUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886279adf0546fcd2cf153304d7f49767b79e4d1c181977a8a5ecbc3952326ab->leave($__internal_886279adf0546fcd2cf153304d7f49767b79e4d1c181977a8a5ecbc3952326ab_prof);

    }

    // line 2
    public function block_dhtmlx($context, array $blocks = array())
    {
        $__internal_e42464b650ceef3d599da0a04e1edb064d8f6f2c858506c9b8976abe481b3b2f = $this->env->getExtension("native_profiler");
        $__internal_e42464b650ceef3d599da0a04e1edb064d8f6f2c858506c9b8976abe481b3b2f->enter($__internal_e42464b650ceef3d599da0a04e1edb064d8f6f2c858506c9b8976abe481b3b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/skins/terrace/dhtmlx.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dhtmlx/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e42464b650ceef3d599da0a04e1edb064d8f6f2c858506c9b8976abe481b3b2f->leave($__internal_e42464b650ceef3d599da0a04e1edb064d8f6f2c858506c9b8976abe481b3b2f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dbfd01253f1d05815ed705c9b2c68f10df4e8dcb6e4df41022d92dd26ae2613 = $this->env->getExtension("native_profiler");
        $__internal_0dbfd01253f1d05815ed705c9b2c68f10df4e8dcb6e4df41022d92dd26ae2613->enter($__internal_0dbfd01253f1d05815ed705c9b2c68f10df4e8dcb6e4df41022d92dd26ae2613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0dbfd01253f1d05815ed705c9b2c68f10df4e8dcb6e4df41022d92dd26ae2613->leave($__internal_0dbfd01253f1d05815ed705c9b2c68f10df4e8dcb6e4df41022d92dd26ae2613_prof);

    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        $__internal_897d1376b7429a3f439918121b2b72808445bb63e1c44ad1efe799d290451672 = $this->env->getExtension("native_profiler");
        $__internal_897d1376b7429a3f439918121b2b72808445bb63e1c44ad1efe799d290451672->enter($__internal_897d1376b7429a3f439918121b2b72808445bb63e1c44ad1efe799d290451672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_897d1376b7429a3f439918121b2b72808445bb63e1c44ad1efe799d290451672->leave($__internal_897d1376b7429a3f439918121b2b72808445bb63e1c44ad1efe799d290451672_prof);

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

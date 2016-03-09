<?php

/* AriiCoreBundle::base.html.twig */
class __TwigTemplate_680bd6f817e2676a9099d2ae39b7a8fff9f5c2a443eccfa8a9748fda2b0a8755 extends Twig_Template
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
        $__internal_661e200c62e7e2152d9fe422ebb7a9a1671e70c693dee5d9160e453ac72bc80b = $this->env->getExtension("native_profiler");
        $__internal_661e200c62e7e2152d9fe422ebb7a9a1671e70c693dee5d9160e453ac72bc80b->enter($__internal_661e200c62e7e2152d9fe422ebb7a9a1671e70c693dee5d9160e453ac72bc80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AriiCoreBundle::base.html.twig"));

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
        
        $__internal_661e200c62e7e2152d9fe422ebb7a9a1671e70c693dee5d9160e453ac72bc80b->leave($__internal_661e200c62e7e2152d9fe422ebb7a9a1671e70c693dee5d9160e453ac72bc80b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e48a0cfffa53fa77026d9530f4dc39d5ca7c9037573238a72f4e5f1f6856b112 = $this->env->getExtension("native_profiler");
        $__internal_e48a0cfffa53fa77026d9530f4dc39d5ca7c9037573238a72f4e5f1f6856b112->enter($__internal_e48a0cfffa53fa77026d9530f4dc39d5ca7c9037573238a72f4e5f1f6856b112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ari'i";
        
        $__internal_e48a0cfffa53fa77026d9530f4dc39d5ca7c9037573238a72f4e5f1f6856b112->leave($__internal_e48a0cfffa53fa77026d9530f4dc39d5ca7c9037573238a72f4e5f1f6856b112_prof);

    }

    // line 8
    public function block_style_plus($context, array $blocks = array())
    {
        $__internal_602e7a8c6dbe38d5499fcf3506b94a82389fecc7ea17c622d6f1db9b77d17cae = $this->env->getExtension("native_profiler");
        $__internal_602e7a8c6dbe38d5499fcf3506b94a82389fecc7ea17c622d6f1db9b77d17cae->enter($__internal_602e7a8c6dbe38d5499fcf3506b94a82389fecc7ea17c622d6f1db9b77d17cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style_plus"));

        
        $__internal_602e7a8c6dbe38d5499fcf3506b94a82389fecc7ea17c622d6f1db9b77d17cae->leave($__internal_602e7a8c6dbe38d5499fcf3506b94a82389fecc7ea17c622d6f1db9b77d17cae_prof);

    }

    // line 9
    public function block_dhtmlx($context, array $blocks = array())
    {
        $__internal_5cc9c827333797bcf3f01e51132f308436d4189a457c93250cfe928b8cb8d37f = $this->env->getExtension("native_profiler");
        $__internal_5cc9c827333797bcf3f01e51132f308436d4189a457c93250cfe928b8cb8d37f->enter($__internal_5cc9c827333797bcf3f01e51132f308436d4189a457c93250cfe928b8cb8d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx"));

        
        $__internal_5cc9c827333797bcf3f01e51132f308436d4189a457c93250cfe928b8cb8d37f->leave($__internal_5cc9c827333797bcf3f01e51132f308436d4189a457c93250cfe928b8cb8d37f_prof);

    }

    // line 10
    public function block_dhtmlx_plus($context, array $blocks = array())
    {
        $__internal_21679d0c291f6c3fe3bc99c40b6d7f1c5e67ad1e4ff2bfd24cad0d076e0889c4 = $this->env->getExtension("native_profiler");
        $__internal_21679d0c291f6c3fe3bc99c40b6d7f1c5e67ad1e4ff2bfd24cad0d076e0889c4->enter($__internal_21679d0c291f6c3fe3bc99c40b6d7f1c5e67ad1e4ff2bfd24cad0d076e0889c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx_plus"));

        
        $__internal_21679d0c291f6c3fe3bc99c40b6d7f1c5e67ad1e4ff2bfd24cad0d076e0889c4->leave($__internal_21679d0c291f6c3fe3bc99c40b6d7f1c5e67ad1e4ff2bfd24cad0d076e0889c4_prof);

    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7447625af21f52f340c813ea56646adccbd1186082c586a588535fb5a46763d = $this->env->getExtension("native_profiler");
        $__internal_d7447625af21f52f340c813ea56646adccbd1186082c586a588535fb5a46763d->enter($__internal_d7447625af21f52f340c813ea56646adccbd1186082c586a588535fb5a46763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d7447625af21f52f340c813ea56646adccbd1186082c586a588535fb5a46763d->leave($__internal_d7447625af21f52f340c813ea56646adccbd1186082c586a588535fb5a46763d_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c47ed82e021c65abd5642567b051ada2c72bdbeed911eaf3d21428dee4baacd = $this->env->getExtension("native_profiler");
        $__internal_9c47ed82e021c65abd5642567b051ada2c72bdbeed911eaf3d21428dee4baacd->enter($__internal_9c47ed82e021c65abd5642567b051ada2c72bdbeed911eaf3d21428dee4baacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c47ed82e021c65abd5642567b051ada2c72bdbeed911eaf3d21428dee4baacd->leave($__internal_9c47ed82e021c65abd5642567b051ada2c72bdbeed911eaf3d21428dee4baacd_prof);

    }

    // line 24
    public function block_script($context, array $blocks = array())
    {
        $__internal_f069c9140123fc789f6c156b4cbc718191a65f09d9fa69aae579fffcda0f01e0 = $this->env->getExtension("native_profiler");
        $__internal_f069c9140123fc789f6c156b4cbc718191a65f09d9fa69aae579fffcda0f01e0->enter($__internal_f069c9140123fc789f6c156b4cbc718191a65f09d9fa69aae579fffcda0f01e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_f069c9140123fc789f6c156b4cbc718191a65f09d9fa69aae579fffcda0f01e0->leave($__internal_f069c9140123fc789f6c156b4cbc718191a65f09d9fa69aae579fffcda0f01e0_prof);

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
        return array (  149 => 24,  138 => 23,  127 => 20,  116 => 10,  105 => 9,  94 => 8,  82 => 6,  73 => 25,  70 => 24,  68 => 23,  64 => 21,  62 => 20,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  36 => 6,  29 => 1,);
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

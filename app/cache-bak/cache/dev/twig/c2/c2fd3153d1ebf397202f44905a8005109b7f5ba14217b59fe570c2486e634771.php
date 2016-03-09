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
        $__internal_53d20c1e5b81f7db7c976f57a1cf78efe01f204ae9e12ce95204a2fb542973ab = $this->env->getExtension("native_profiler");
        $__internal_53d20c1e5b81f7db7c976f57a1cf78efe01f204ae9e12ce95204a2fb542973ab->enter($__internal_53d20c1e5b81f7db7c976f57a1cf78efe01f204ae9e12ce95204a2fb542973ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AriiCoreBundle::base.html.twig"));

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
        
        $__internal_53d20c1e5b81f7db7c976f57a1cf78efe01f204ae9e12ce95204a2fb542973ab->leave($__internal_53d20c1e5b81f7db7c976f57a1cf78efe01f204ae9e12ce95204a2fb542973ab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dd8c050d62d30329c1cc6530b2b8510290b022e09567b3ace49c052e0e9e93f = $this->env->getExtension("native_profiler");
        $__internal_9dd8c050d62d30329c1cc6530b2b8510290b022e09567b3ace49c052e0e9e93f->enter($__internal_9dd8c050d62d30329c1cc6530b2b8510290b022e09567b3ace49c052e0e9e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ari'i";
        
        $__internal_9dd8c050d62d30329c1cc6530b2b8510290b022e09567b3ace49c052e0e9e93f->leave($__internal_9dd8c050d62d30329c1cc6530b2b8510290b022e09567b3ace49c052e0e9e93f_prof);

    }

    // line 8
    public function block_style_plus($context, array $blocks = array())
    {
        $__internal_789285f2abaeec9df6e46fefd50a6d90aa0d8ffa66e694aa4597279c66f2bed4 = $this->env->getExtension("native_profiler");
        $__internal_789285f2abaeec9df6e46fefd50a6d90aa0d8ffa66e694aa4597279c66f2bed4->enter($__internal_789285f2abaeec9df6e46fefd50a6d90aa0d8ffa66e694aa4597279c66f2bed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style_plus"));

        
        $__internal_789285f2abaeec9df6e46fefd50a6d90aa0d8ffa66e694aa4597279c66f2bed4->leave($__internal_789285f2abaeec9df6e46fefd50a6d90aa0d8ffa66e694aa4597279c66f2bed4_prof);

    }

    // line 9
    public function block_dhtmlx($context, array $blocks = array())
    {
        $__internal_904c7b013e3f657db30c446006eed314e19381b75a9d591661d20c1dfb15b26b = $this->env->getExtension("native_profiler");
        $__internal_904c7b013e3f657db30c446006eed314e19381b75a9d591661d20c1dfb15b26b->enter($__internal_904c7b013e3f657db30c446006eed314e19381b75a9d591661d20c1dfb15b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx"));

        
        $__internal_904c7b013e3f657db30c446006eed314e19381b75a9d591661d20c1dfb15b26b->leave($__internal_904c7b013e3f657db30c446006eed314e19381b75a9d591661d20c1dfb15b26b_prof);

    }

    // line 10
    public function block_dhtmlx_plus($context, array $blocks = array())
    {
        $__internal_2d2f12bcf8bd1df6b75ea1c91e6aadc1709b0ba698a420721a7e348570ffd369 = $this->env->getExtension("native_profiler");
        $__internal_2d2f12bcf8bd1df6b75ea1c91e6aadc1709b0ba698a420721a7e348570ffd369->enter($__internal_2d2f12bcf8bd1df6b75ea1c91e6aadc1709b0ba698a420721a7e348570ffd369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dhtmlx_plus"));

        
        $__internal_2d2f12bcf8bd1df6b75ea1c91e6aadc1709b0ba698a420721a7e348570ffd369->leave($__internal_2d2f12bcf8bd1df6b75ea1c91e6aadc1709b0ba698a420721a7e348570ffd369_prof);

    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b5bd3d9b798155afdc7aca926ebabf1dedbf2c2a6210242c8e8528edc0d00ee = $this->env->getExtension("native_profiler");
        $__internal_3b5bd3d9b798155afdc7aca926ebabf1dedbf2c2a6210242c8e8528edc0d00ee->enter($__internal_3b5bd3d9b798155afdc7aca926ebabf1dedbf2c2a6210242c8e8528edc0d00ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3b5bd3d9b798155afdc7aca926ebabf1dedbf2c2a6210242c8e8528edc0d00ee->leave($__internal_3b5bd3d9b798155afdc7aca926ebabf1dedbf2c2a6210242c8e8528edc0d00ee_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_be66a4ed68080a59311eab4c6115d38a51e3ed1dfc2d5dfb06de38552b54a4f8 = $this->env->getExtension("native_profiler");
        $__internal_be66a4ed68080a59311eab4c6115d38a51e3ed1dfc2d5dfb06de38552b54a4f8->enter($__internal_be66a4ed68080a59311eab4c6115d38a51e3ed1dfc2d5dfb06de38552b54a4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be66a4ed68080a59311eab4c6115d38a51e3ed1dfc2d5dfb06de38552b54a4f8->leave($__internal_be66a4ed68080a59311eab4c6115d38a51e3ed1dfc2d5dfb06de38552b54a4f8_prof);

    }

    // line 24
    public function block_script($context, array $blocks = array())
    {
        $__internal_17361be641fe40bd9aebc6f9bcf01ee1634c8284b7d9e2ab8511b200e4f6acd6 = $this->env->getExtension("native_profiler");
        $__internal_17361be641fe40bd9aebc6f9bcf01ee1634c8284b7d9e2ab8511b200e4f6acd6->enter($__internal_17361be641fe40bd9aebc6f9bcf01ee1634c8284b7d9e2ab8511b200e4f6acd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_17361be641fe40bd9aebc6f9bcf01ee1634c8284b7d9e2ab8511b200e4f6acd6->leave($__internal_17361be641fe40bd9aebc6f9bcf01ee1634c8284b7d9e2ab8511b200e4f6acd6_prof);

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

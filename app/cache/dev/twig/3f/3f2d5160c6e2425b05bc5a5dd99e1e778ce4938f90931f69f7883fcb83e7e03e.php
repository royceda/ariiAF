<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_60cef7181bf351cf766f93cc781634ff41f66de70694b0e065389110169a319a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f1c792ae11528c6ef9670e6a93cc99fc0aef8c32a40160acd001042d4c9da10 = $this->env->getExtension("native_profiler");
        $__internal_9f1c792ae11528c6ef9670e6a93cc99fc0aef8c32a40160acd001042d4c9da10->enter($__internal_9f1c792ae11528c6ef9670e6a93cc99fc0aef8c32a40160acd001042d4c9da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1c792ae11528c6ef9670e6a93cc99fc0aef8c32a40160acd001042d4c9da10->leave($__internal_9f1c792ae11528c6ef9670e6a93cc99fc0aef8c32a40160acd001042d4c9da10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e626d7b21d614bb275323e40599022285ffaa827b192f679e332accc81f6ac14 = $this->env->getExtension("native_profiler");
        $__internal_e626d7b21d614bb275323e40599022285ffaa827b192f679e332accc81f6ac14->enter($__internal_e626d7b21d614bb275323e40599022285ffaa827b192f679e332accc81f6ac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e626d7b21d614bb275323e40599022285ffaa827b192f679e332accc81f6ac14->leave($__internal_e626d7b21d614bb275323e40599022285ffaa827b192f679e332accc81f6ac14_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_884de2414aeda9d8d4fd7a03cb43459d52429da633caaf7bd888c0c9f3f8e2a8 = $this->env->getExtension("native_profiler");
        $__internal_884de2414aeda9d8d4fd7a03cb43459d52429da633caaf7bd888c0c9f3f8e2a8->enter($__internal_884de2414aeda9d8d4fd7a03cb43459d52429da633caaf7bd888c0c9f3f8e2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_884de2414aeda9d8d4fd7a03cb43459d52429da633caaf7bd888c0c9f3f8e2a8->leave($__internal_884de2414aeda9d8d4fd7a03cb43459d52429da633caaf7bd888c0c9f3f8e2a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e708b230b4cf24d5552555b193737366235087b5d7fb087b98586d339220aaae = $this->env->getExtension("native_profiler");
        $__internal_e708b230b4cf24d5552555b193737366235087b5d7fb087b98586d339220aaae->enter($__internal_e708b230b4cf24d5552555b193737366235087b5d7fb087b98586d339220aaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e708b230b4cf24d5552555b193737366235087b5d7fb087b98586d339220aaae->leave($__internal_e708b230b4cf24d5552555b193737366235087b5d7fb087b98586d339220aaae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

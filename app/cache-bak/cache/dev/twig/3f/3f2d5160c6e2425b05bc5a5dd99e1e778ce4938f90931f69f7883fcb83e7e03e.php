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
        $__internal_08d4f279e4e94ae8346f2dd88a0be20fe3f75c497943d37203847258c056be3f = $this->env->getExtension("native_profiler");
        $__internal_08d4f279e4e94ae8346f2dd88a0be20fe3f75c497943d37203847258c056be3f->enter($__internal_08d4f279e4e94ae8346f2dd88a0be20fe3f75c497943d37203847258c056be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d4f279e4e94ae8346f2dd88a0be20fe3f75c497943d37203847258c056be3f->leave($__internal_08d4f279e4e94ae8346f2dd88a0be20fe3f75c497943d37203847258c056be3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_487e59db20357bf1df64f7ed401a007ff66f46cff1604cacd4af2b97793a4718 = $this->env->getExtension("native_profiler");
        $__internal_487e59db20357bf1df64f7ed401a007ff66f46cff1604cacd4af2b97793a4718->enter($__internal_487e59db20357bf1df64f7ed401a007ff66f46cff1604cacd4af2b97793a4718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_487e59db20357bf1df64f7ed401a007ff66f46cff1604cacd4af2b97793a4718->leave($__internal_487e59db20357bf1df64f7ed401a007ff66f46cff1604cacd4af2b97793a4718_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f811a25e1d562e81a13c77fa4f6880e5da85c1a834568c46fe5e5d0e722f0f5c = $this->env->getExtension("native_profiler");
        $__internal_f811a25e1d562e81a13c77fa4f6880e5da85c1a834568c46fe5e5d0e722f0f5c->enter($__internal_f811a25e1d562e81a13c77fa4f6880e5da85c1a834568c46fe5e5d0e722f0f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f811a25e1d562e81a13c77fa4f6880e5da85c1a834568c46fe5e5d0e722f0f5c->leave($__internal_f811a25e1d562e81a13c77fa4f6880e5da85c1a834568c46fe5e5d0e722f0f5c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b449efe65ea1a4f029e933408cf5eb9253efe0a0ccc1e4817843459f43cad97f = $this->env->getExtension("native_profiler");
        $__internal_b449efe65ea1a4f029e933408cf5eb9253efe0a0ccc1e4817843459f43cad97f->enter($__internal_b449efe65ea1a4f029e933408cf5eb9253efe0a0ccc1e4817843459f43cad97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b449efe65ea1a4f029e933408cf5eb9253efe0a0ccc1e4817843459f43cad97f->leave($__internal_b449efe65ea1a4f029e933408cf5eb9253efe0a0ccc1e4817843459f43cad97f_prof);

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

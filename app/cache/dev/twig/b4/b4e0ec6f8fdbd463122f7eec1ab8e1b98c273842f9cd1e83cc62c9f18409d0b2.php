<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_17445efdffb28fed18a222329daf357d64f64e6749d03c6ef9a72ce7e48e6d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99f473eb3a0d14a54fdbea2ee702b5a61ff453225eb72d75d8a8da3d4500fa01 = $this->env->getExtension("native_profiler");
        $__internal_99f473eb3a0d14a54fdbea2ee702b5a61ff453225eb72d75d8a8da3d4500fa01->enter($__internal_99f473eb3a0d14a54fdbea2ee702b5a61ff453225eb72d75d8a8da3d4500fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_99f473eb3a0d14a54fdbea2ee702b5a61ff453225eb72d75d8a8da3d4500fa01->leave($__internal_99f473eb3a0d14a54fdbea2ee702b5a61ff453225eb72d75d8a8da3d4500fa01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

<?php

/* AriiUserBundle:Security:ribbon.json.twig */
class __TwigTemplate_2f4b5faf26e521b86b06cce555909884cd126d85b29ec1fefe91042fb35771f8 extends Twig_Template
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
        // line 1
        echo "{
   \"items\":
   [
        {   
            type:       \"block\", 
            text:       \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "\", 
            text_pos:   \"top\", 
            list:
                [
                   {   
                        type:   \"button\", 
                        id:     \"home\",
                        text:   \"\", 
                        isbig:  true, 
                        img:    \"48/arii.png\"
                    },
                    {   
                         type:   \"buttonSelect\", 
                         id:     \"lang\",
                         text:   \"\", 
                         img:    \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo ".png\",
                         items: [
";
        // line 23
        $context["routeParams"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route_params"), "method");
        echo "                         
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "fr", 1 => "en"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 25
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) != $context["lang"])) {
                // line 26
                echo "    ";
                if ($this->getAttribute((isset($context["routeParams"]) ? $context["routeParams"] : null), "_locale", array(), "array", true, true)) {
                    // line 27
                    echo "    ";
                    $context["routeParams"] = twig_array_merge((isset($context["routeParams"]) ? $context["routeParams"] : null), array("_locale" => $context["lang"]));
                    // line 28
                    echo "    ";
                }
                // line 29
                echo "            { id: \"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo "\", text: \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("lang." . $context["lang"])), "html", null, true);
                echo "\", img: \"";
                echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                echo ".png\" },
        ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                         ]
                    }
                ]
        }
   ]
}
";
    }

    public function getTemplateName()
    {
        return "AriiUserBundle:Security:ribbon.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  79 => 31,  69 => 29,  66 => 28,  63 => 27,  60 => 26,  57 => 25,  53 => 24,  49 => 23,  44 => 21,  26 => 6,  19 => 1,);
    }
}
/* {*/
/*    "items":*/
/*    [*/
/*         {   */
/*             type:       "block", */
/*             text:       "{{ "Home" | trans }}", */
/*             text_pos:   "top", */
/*             list:*/
/*                 [*/
/*                    {   */
/*                         type:   "button", */
/*                         id:     "home",*/
/*                         text:   "", */
/*                         isbig:  true, */
/*                         img:    "48/arii.png"*/
/*                     },*/
/*                     {   */
/*                          type:   "buttonSelect", */
/*                          id:     "lang",*/
/*                          text:   "", */
/*                          img:    "{{ app.request.locale }}.png",*/
/*                          items: [*/
/* {% set routeParams = app.request.get('_route_params') %}                         */
/*     {% for lang in ['fr','en'] %}*/
/*         {% if app.request.locale != lang %}*/
/*     {% if routeParams['_locale'] is defined %}*/
/*     {%set routeParams = routeParams|merge({'_locale': lang}) %}*/
/*     {% endif %}*/
/*             { id: "{{ lang }}", text: "{{ ('lang.' ~ lang ) | trans }}", img: "{{ lang }}.png" },*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*                          ]*/
/*                     }*/
/*                 ]*/
/*         }*/
/*    ]*/
/* }*/
/* */

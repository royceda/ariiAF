<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a4164d8fb680adabc684e7a71cd5637378413dc6bd85cbeae2a49730201f689d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AriiUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'style_plus' => array($this, 'block_style_plus'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AriiUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65234003aa067224b2deea91c2e7497bfec29517feb8d513611a13b2f1449376 = $this->env->getExtension("native_profiler");
        $__internal_65234003aa067224b2deea91c2e7497bfec29517feb8d513611a13b2f1449376->enter($__internal_65234003aa067224b2deea91c2e7497bfec29517feb8d513611a13b2f1449376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65234003aa067224b2deea91c2e7497bfec29517feb8d513611a13b2f1449376->leave($__internal_65234003aa067224b2deea91c2e7497bfec29517feb8d513611a13b2f1449376_prof);

    }

    // line 4
    public function block_style_plus($context, array $blocks = array())
    {
        $__internal_b33aa9f2ca68fa50279328ab7eccdccb6b61f16b20bb2d4fbaa9112251b8f9f7 = $this->env->getExtension("native_profiler");
        $__internal_b33aa9f2ca68fa50279328ab7eccdccb6b61f16b20bb2d4fbaa9112251b8f9f7->enter($__internal_b33aa9f2ca68fa50279328ab7eccdccb6b61f16b20bb2d4fbaa9112251b8f9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style_plus"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap-theme.min.css\">
";
        
        $__internal_b33aa9f2ca68fa50279328ab7eccdccb6b61f16b20bb2d4fbaa9112251b8f9f7->leave($__internal_b33aa9f2ca68fa50279328ab7eccdccb6b61f16b20bb2d4fbaa9112251b8f9f7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_292a59d66fd031cf4bf3ec25496750e6bc344bd92cc7ccb14d46c73e3b55489e = $this->env->getExtension("native_profiler");
        $__internal_292a59d66fd031cf4bf3ec25496750e6bc344bd92cc7ccb14d46c73e3b55489e->enter($__internal_292a59d66fd031cf4bf3ec25496750e6bc344bd92cc7ccb14d46c73e3b55489e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
div#objToAttach {
\twidth: 100%;
\theight: 100%;
\toverflow: auto;
}

.dhx_dataview {
\toverflow-y: auto !important;
}
.dhx_dataview_default_item,
.dhx_dataview_default_item_selected {
\tposition: relative;
\tborder-width: 0px !important;
\tbackground: none !important;
\tcursor: default;
}
.dhx_dataview div.dhxdataview_placeholder:first-child {
\tmargin-top: 2px;
}
.menu_item {
\tposition: relative;
\theight: 60px;
\tbackground-color: #f5f5f5;
\tmargin: 3px 2px 0px 5px;
\tborder-bottom: 1px dotted #ccc;
\tbackground-repeat: no-repeat;
\tbackground-position: 18px 4px;
\tcolor: #333333;  
        width: 100%
}
.menu_item:hover {
\tbackground-color: #f0f0f0;
\tborder-color: #bbb;
}
.dhx_dataview_default_item_selected .menu_item {
\tbackground-color: #B6BADF;
\tborder-color: #aaa;
\tcolor: #2e2e2e;
}
.menu_item.inbox {
\tbackground-image: url(../icons/folder-downloads.png);
}
.menu_item.fav {
\tbackground-image: url(../icons/folder-favorites.png);
}
.menu_item.drafts {
\tbackground-image: url(../icons/folder-txt.png);
}
.menu_item.outbox {
\tbackground-image: url(../icons/folder-activities.png);
}
.menu_item.sent {
\tbackground-image: url(../icons/mail-folder-sent.png);
}
.menu_item.trash {
\tbackground-image: url(../icons/user-trash.png);
}
.menu_item.contacts {
\tbackground-image: url(../icons/folder-image-people.png);
}
.menu_item_text {
\tposition: relative;
\tmargin-left: 12px;
\theight: 60px;
\tline-height: 56px;
\tfont-family: \"Open Sans\", sans-serif, Arial;
\tfont-weight: 400;
\tfont-size: 16px;
\tcolor: inherit;
}
label { display: block; width: 200px; }
.dhxtree_dhx_terrace .standartTreeRow {
      font-size: 14px !important;
      }
.dhxtree_dhx_terrace .standartTreeRow_lor {
      font-size: 14px !important;
      }
</style>
<script type=\"text/javascript\">
dhtmlxEvent(window,\"load\",function() { 
    globalLayout = new dhtmlXLayoutObject(document.body,\"3J\");  
    globalLayout.cells(\"a\").hideHeader();
    globalLayout.cells(\"a\").setWidth(360);
    globalLayout.cells(\"b\").hideHeader();
    globalLayout.cells(\"c\").setText(\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "\");
";
        // line 95
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 96
            echo "    globalLayout.cells(\"c\").setHeight(350);    
";
        } else {
            // line 98
            echo "    globalLayout.cells(\"c\").setHeight(265);    
";
        }
        // line 100
        echo "/*    
    globalToolbar = globalLayout.cells(\"a\").attachToolbar();
    globalToolbar.setIconsPath( \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/ariicore/images/menu/"), "html", null, true);
        echo "\" );
    globalToolbar.loadStruct(\"";
        // line 103
        echo $this->env->getExtension('routing')->getUrl("xml_User_toolbar");
        echo "?route=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\");
*/
    myRibbon = globalLayout.cells(\"a\").attachRibbon(); 
    myRibbon.setIconPath( \"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ariicore/images/ribbon/"), "html", null, true);
        echo "\" );
    myRibbon.loadStruct(\"";
        // line 107
        echo $this->env->getExtension('routing')->getUrl("json_User_ribbon");
        echo "\");

    myDocs = globalLayout.cells(\"a\").attachAccordion();
    myDocs.addItem( \"Home\", \"";
        // line 110
        echo "Ari'i";
        echo "\", true);

    globalLayout.cells(\"b\").attachURL(\"";
        // line 112
        echo $this->env->getExtension('routing')->getUrl("html_Core_readme");
        echo "\");

    myTree = myDocs.cells(\"Home\").attachTree();
    myTree.setImagesPath(\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ariicore/images/tree/"), "html", null, true);
        echo "\");
    myTree.load(\"";
        // line 116
        echo $this->env->getExtension('routing')->getUrl("xml_docs_tree");
        echo "?route=arii_Core_index\");
    myTree.setItemStyle(0,\"font-size: 16px !important\")
    myTree.attachEvent(\"onClick\",function(id){
        globalLayout.cells(\"b\").attachURL(\"";
        // line 119
        echo $this->env->getExtension('routing')->getUrl("html_doc_view");
        echo "?doc=\"+id);
    })

//    globalLayout.cells(\"b\").attachObject(\"objToAttach\");  
    
//    myPop = new dhtmlXPopup();
//    myForm = myPop.attachObject(formToAttach);

    globalLayout.cells(\"c\").attachObject(formToAttach);

    myRibbon.attachEvent(\"onClick\", function(id) {
        switch(id) {
            case 'fr':
                ";
        // line 132
        $context["routeParams"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method");
        // line 133
        echo "                ";
        if ($this->getAttribute((isset($context["routeParams"]) ? $context["routeParams"] : null), "_locale", array(), "array", true, true)) {
            // line 134
            echo "                ";
            $context["routeParams"] = twig_array_merge((isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")), array("_locale" => "fr"));
            // line 135
            echo "                ";
        }
        echo "                
                window.location = \"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams"))), "html", null, true);
        echo "\";            
                break;
            case 'en':
                ";
        // line 139
        $context["routeParams"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method");
        // line 140
        echo "                ";
        if ($this->getAttribute((isset($context["routeParams"]) ? $context["routeParams"] : null), "_locale", array(), "array", true, true)) {
            // line 141
            echo "                ";
            $context["routeParams"] = twig_array_merge((isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")), array("_locale" => "en"));
            // line 142
            echo "                ";
        }
        echo "                
                window.location = \"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams"))), "html", null, true);
        echo "\";            
                break;
            default:
                alert(id);
        }
    });
});

</script>
<div id=\"formToAttach\" style=\"margin: 10px;\"/>
";
        // line 153
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 154
            echo "<div id=\"ObjError\" class=\"container-fluid\">
<div class=\"alert alert-danger\" role=\"alert\">
  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Error:</span>
";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
</div>
";
        }
        // line 162
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_check");
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
  <div class=\"form-group\">
    <label for=\"username\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"_username\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"operator\"/>
  </div>
  <div class=\"form-group\">
    <label for=\"password\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"/>
  </div>
  <div class=\"checkbox\">
    <label for=\"remember_me\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
    ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </label>
  </div>
  <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
</div>
<div id=\"objToAttach\" style=\"align:center; vertical-align: center; font-family: Tahoma; font-size: 10px; height: 100%; overflow: auto; display: none;\">
    <center>
            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/ariicore/images/arii.jpg"), "html", null, true);
        echo "\"/>
    </center>
</div>
";
        
        $__internal_292a59d66fd031cf4bf3ec25496750e6bc344bd92cc7ccb14d46c73e3b55489e->leave($__internal_292a59d66fd031cf4bf3ec25496750e6bc344bd92cc7ccb14d46c73e3b55489e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 183,  315 => 178,  309 => 175,  300 => 169,  294 => 166,  290 => 165,  285 => 163,  280 => 162,  273 => 158,  267 => 154,  265 => 153,  252 => 143,  247 => 142,  244 => 141,  241 => 140,  239 => 139,  233 => 136,  228 => 135,  225 => 134,  222 => 133,  220 => 132,  204 => 119,  198 => 116,  194 => 115,  188 => 112,  183 => 110,  177 => 107,  173 => 106,  165 => 103,  161 => 102,  157 => 100,  153 => 98,  149 => 96,  147 => 95,  143 => 94,  56 => 9,  50 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# src/Arii/JIDBundle/Resources/views/Default/history.html.twig #}*/
/* {% extends "AriiUserBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block style_plus %}*/
/* <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">*/
/* <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">*/
/* {% endblock style_plus %}*/
/* {% block body %}*/
/* <style>*/
/* div#objToAttach {*/
/* 	width: 100%;*/
/* 	height: 100%;*/
/* 	overflow: auto;*/
/* }*/
/* */
/* .dhx_dataview {*/
/* 	overflow-y: auto !important;*/
/* }*/
/* .dhx_dataview_default_item,*/
/* .dhx_dataview_default_item_selected {*/
/* 	position: relative;*/
/* 	border-width: 0px !important;*/
/* 	background: none !important;*/
/* 	cursor: default;*/
/* }*/
/* .dhx_dataview div.dhxdataview_placeholder:first-child {*/
/* 	margin-top: 2px;*/
/* }*/
/* .menu_item {*/
/* 	position: relative;*/
/* 	height: 60px;*/
/* 	background-color: #f5f5f5;*/
/* 	margin: 3px 2px 0px 5px;*/
/* 	border-bottom: 1px dotted #ccc;*/
/* 	background-repeat: no-repeat;*/
/* 	background-position: 18px 4px;*/
/* 	color: #333333;  */
/*         width: 100%*/
/* }*/
/* .menu_item:hover {*/
/* 	background-color: #f0f0f0;*/
/* 	border-color: #bbb;*/
/* }*/
/* .dhx_dataview_default_item_selected .menu_item {*/
/* 	background-color: #B6BADF;*/
/* 	border-color: #aaa;*/
/* 	color: #2e2e2e;*/
/* }*/
/* .menu_item.inbox {*/
/* 	background-image: url(../icons/folder-downloads.png);*/
/* }*/
/* .menu_item.fav {*/
/* 	background-image: url(../icons/folder-favorites.png);*/
/* }*/
/* .menu_item.drafts {*/
/* 	background-image: url(../icons/folder-txt.png);*/
/* }*/
/* .menu_item.outbox {*/
/* 	background-image: url(../icons/folder-activities.png);*/
/* }*/
/* .menu_item.sent {*/
/* 	background-image: url(../icons/mail-folder-sent.png);*/
/* }*/
/* .menu_item.trash {*/
/* 	background-image: url(../icons/user-trash.png);*/
/* }*/
/* .menu_item.contacts {*/
/* 	background-image: url(../icons/folder-image-people.png);*/
/* }*/
/* .menu_item_text {*/
/* 	position: relative;*/
/* 	margin-left: 12px;*/
/* 	height: 60px;*/
/* 	line-height: 56px;*/
/* 	font-family: "Open Sans", sans-serif, Arial;*/
/* 	font-weight: 400;*/
/* 	font-size: 16px;*/
/* 	color: inherit;*/
/* }*/
/* label { display: block; width: 200px; }*/
/* .dhxtree_dhx_terrace .standartTreeRow {*/
/*       font-size: 14px !important;*/
/*       }*/
/* .dhxtree_dhx_terrace .standartTreeRow_lor {*/
/*       font-size: 14px !important;*/
/*       }*/
/* </style>*/
/* <script type="text/javascript">*/
/* dhtmlxEvent(window,"load",function() { */
/*     globalLayout = new dhtmlXLayoutObject(document.body,"3J");  */
/*     globalLayout.cells("a").hideHeader();*/
/*     globalLayout.cells("a").setWidth(360);*/
/*     globalLayout.cells("b").hideHeader();*/
/*     globalLayout.cells("c").setText("{{ "Login" | trans }}");*/
/* {%if error %}*/
/*     globalLayout.cells("c").setHeight(350);    */
/* {% else %}*/
/*     globalLayout.cells("c").setHeight(265);    */
/* {% endif %}*/
/* /*    */
/*     globalToolbar = globalLayout.cells("a").attachToolbar();*/
/*     globalToolbar.setIconsPath( "{{ asset('/bundles/ariicore/images/menu/') }}" );*/
/*     globalToolbar.loadStruct("{{ url('xml_User_toolbar') }}?route={{ app.request.attributes.get('_route') }}");*/
/* *//* */
/*     myRibbon = globalLayout.cells("a").attachRibbon(); */
/*     myRibbon.setIconPath( "{{ asset('bundles/ariicore/images/ribbon/') }}" );*/
/*     myRibbon.loadStruct("{{ url('json_User_ribbon') }}");*/
/* */
/*     myDocs = globalLayout.cells("a").attachAccordion();*/
/*     myDocs.addItem( "Home", "{{ "Ari'i" }}", true);*/
/* */
/*     globalLayout.cells("b").attachURL("{{ url('html_Core_readme') }}");*/
/* */
/*     myTree = myDocs.cells("Home").attachTree();*/
/*     myTree.setImagesPath("{{ asset('bundles/ariicore/images/tree/') }}");*/
/*     myTree.load("{{ url('xml_docs_tree') }}?route=arii_Core_index");*/
/*     myTree.setItemStyle(0,"font-size: 16px !important")*/
/*     myTree.attachEvent("onClick",function(id){*/
/*         globalLayout.cells("b").attachURL("{{ url('html_doc_view') }}?doc="+id);*/
/*     })*/
/* */
/* //    globalLayout.cells("b").attachObject("objToAttach");  */
/*     */
/* //    myPop = new dhtmlXPopup();*/
/* //    myForm = myPop.attachObject(formToAttach);*/
/* */
/*     globalLayout.cells("c").attachObject(formToAttach);*/
/* */
/*     myRibbon.attachEvent("onClick", function(id) {*/
/*         switch(id) {*/
/*             case 'fr':*/
/*                 {% set routeParams = app.request.get('_route_params') %}*/
/*                 {% if routeParams['_locale'] is defined %}*/
/*                 {%set routeParams = routeParams|merge({'_locale': 'fr'}) %}*/
/*                 {% endif %}                */
/*                 window.location = "{{ path(app.request.get('_route'), routeParams) }}";            */
/*                 break;*/
/*             case 'en':*/
/*                 {% set routeParams = app.request.get('_route_params') %}*/
/*                 {% if routeParams['_locale'] is defined %}*/
/*                 {%set routeParams = routeParams|merge({'_locale': 'en'}) %}*/
/*                 {% endif %}                */
/*                 window.location = "{{ path(app.request.get('_route'), routeParams) }}";            */
/*                 break;*/
/*             default:*/
/*                 alert(id);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* </script>*/
/* <div id="formToAttach" style="margin: 10px;"/>*/
/* {%if error %}*/
/* <div id="ObjError" class="container-fluid">*/
/* <div class="alert alert-danger" role="alert">*/
/*   <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/*   <span class="sr-only">Error:</span>*/
/* {{ error.message | trans }}*/
/* </div>*/
/* </div>*/
/* {% endif %}*/
/* <form action="{{ url("fos_user_security_check") }}" method="post">*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*   <div class="form-group">*/
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" class="form-control"  id="username" name="_username" value="{{ last_username }}" placeholder="operator"/>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" class="form-control" id="password" name="_password"/>*/
/*   </div>*/
/*   <div class="checkbox">*/
/*     <label for="remember_me">*/
/*     <input type="checkbox" id="remember_me" name="_remember_me" checked/>*/
/*     {{ 'security.login.remember_me'|trans }}</label>*/
/*     </label>*/
/*   </div>*/
/*   <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-default">{{ 'security.login.submit'|trans }}</button>*/
/* </form>*/
/* </div>*/
/* <div id="objToAttach" style="align:center; vertical-align: center; font-family: Tahoma; font-size: 10px; height: 100%; overflow: auto; display: none;">*/
/*     <center>*/
/*             <img src="{{ asset('/bundles/ariicore/images/arii.jpg') }}"/>*/
/*     </center>*/
/* </div>*/
/* {% endblock %}*/
/* */

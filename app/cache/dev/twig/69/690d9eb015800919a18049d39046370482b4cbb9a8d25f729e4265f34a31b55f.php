<?php

/* SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig */
class __TwigTemplate_f9462b05d7623ddd0c89df88ce08b58e0069eacdc51207315cb742f32f72bc82 extends Twig_Template
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
        $__internal_e16b2e7d3c0917f7e2324cfe2f2bc4519b22823158ae9fc8bf3f21884e8ed539 = $this->env->getExtension("native_profiler");
        $__internal_e16b2e7d3c0917f7e2324cfe2f2bc4519b22823158ae9fc8bf3f21884e8ed539->enter($__internal_e16b2e7d3c0917f7e2324cfe2f2bc4519b22823158ae9fc8bf3f21884e8ed539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        echo "
<p>
    <div class=\"btn-group\">
        <a type=\"button\" class=\"btn ";
        // line 4
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "list")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => array("context" => array("value" => ((array_key_exists("current_category", $context)) ? ((($this->getAttribute($this->getAttribute((isset($context["current_category"]) ? $context["current_category"] : null), "context", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["current_category"]) ? $context["current_category"] : null), "context", array(), "any", false, true), "id", array()), "")) : (""))) : ("")))))), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-list\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("classification.list_mode", array(), "SonataClassificationBundle"), "html", null, true);
        echo "
        </a>
        <a type=\"button\" class=\"btn ";
        // line 7
        if (((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")) == "tree")) {
            echo "btn-info active";
        } else {
            echo "btn-default";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree"), "method"), "html", null, true);
        echo "\">
            <i class=\"fa fa-sitemap\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("classification.tree_mode", array(), "SonataClassificationBundle"), "html", null, true);
        echo "
        </a>
    </div>
</p>
";
        
        $__internal_e16b2e7d3c0917f7e2324cfe2f2bc4519b22823158ae9fc8bf3f21884e8ed539->leave($__internal_e16b2e7d3c0917f7e2324cfe2f2bc4519b22823158ae9fc8bf3f21884e8ed539_prof);

    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  43 => 7,  38 => 5,  28 => 4,  22 => 1,);
    }
}
/* {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active'}, 'list') }}*/
/* <p>*/
/*     <div class="btn-group">*/
/*         <a type="button" class="btn {% if mode == 'list' %}btn-info active{% else %}btn-default{% endif %}" href="{{ admin.generateUrl('list', { 'filter': { 'context': { 'value': current_category is defined ? current_category.context.id|default('') : '' }}}) }}">*/
/*             <i class="fa fa-list"></i> {{ 'classification.list_mode'|trans({}, 'SonataClassificationBundle') }}*/
/*         </a>*/
/*         <a type="button" class="btn {% if mode == 'tree' %}btn-info active{% else %}btn-default{% endif %}" href="{{ admin.generateUrl('tree') }}">*/
/*             <i class="fa fa-sitemap"></i> {{ 'classification.tree_mode'|trans({}, 'SonataClassificationBundle') }}*/
/*         </a>*/
/*     </div>*/
/* </p>*/
/* */

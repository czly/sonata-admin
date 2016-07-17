<?php

/* SonataMediaBundle:Block:block_gallery_list.html.twig */
class __TwigTemplate_491396d9f10e8aa20ce5565149133bb0016ca1bd64eb45f5b0a410f13792658c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_gallery_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_849d36374c6126db1ddd1b0251826d69737a234dc5d6e6eac831a6eabaeb1a3f = $this->env->getExtension("native_profiler");
        $__internal_849d36374c6126db1ddd1b0251826d69737a234dc5d6e6eac831a6eabaeb1a3f->enter($__internal_849d36374c6126db1ddd1b0251826d69737a234dc5d6e6eac831a6eabaeb1a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_gallery_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849d36374c6126db1ddd1b0251826d69737a234dc5d6e6eac831a6eabaeb1a3f->leave($__internal_849d36374c6126db1ddd1b0251826d69737a234dc5d6e6eac831a6eabaeb1a3f_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_579013a53faa32325f0305a1a0dfcd5a9470d83306e58faf06cdd619573ade1e = $this->env->getExtension("native_profiler");
        $__internal_579013a53faa32325f0305a1a0dfcd5a9470d83306e58faf06cdd619573ade1e->enter($__internal_579013a53faa32325f0305a1a0dfcd5a9470d83306e58faf06cdd619573ade1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "    <div class=\"panel panel-default panel-gallery-list\">
        ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()))) {
            // line 6
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 10
        echo "
        <div class=\"panel-body\">
            <div class=\"list-group\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 14
            echo "                    ";
            if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "edit", 2 => array("id" => $this->getAttribute($context["gallery"], "id", array()), "context" => $this->getAttribute($context["gallery"], "context", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 16
                if ($this->getAttribute($context["gallery"], "enabled", array())) {
                    // line 17
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_gallery_enabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 19
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_gallery_disabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 21
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_gallery_view", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 28
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                    <span class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_galleries_found", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>

            ";
        // line 33
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
            // line 34
            echo "                ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "context", array())) {
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "list", 2 => array("context" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "context", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 38
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "list"), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 41
            echo "            ";
        }
        // line 42
        echo "        </div>
    </div>
";
        
        $__internal_579013a53faa32325f0305a1a0dfcd5a9470d83306e58faf06cdd619573ade1e->leave($__internal_579013a53faa32325f0305a1a0dfcd5a9470d83306e58faf06cdd619573ade1e_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  135 => 38,  126 => 35,  123 => 34,  121 => 33,  117 => 31,  108 => 29,  103 => 28,  97 => 25,  92 => 24,  85 => 21,  79 => 19,  73 => 17,  71 => 16,  66 => 15,  63 => 14,  58 => 13,  53 => 10,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="panel panel-default panel-gallery-list">*/
/*         {% if settings.title is not empty %}*/
/*             <div class="panel-heading">*/
/*                 <h4 class="panel-title"><i class="fa fa-globe"></i> {{ settings.title }}</h4>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel-body">*/
/*             <div class="list-group">*/
/*                 {% for gallery in pager.getResults() %}*/
/*                     {% if settings.mode == 'admin' and sonata_admin is defined %}*/
/*                         <a href="{{ sonata_admin.url('sonata.media.admin.gallery', 'edit', { 'id': gallery.id, 'context': gallery.context }) }}" class="list-group-item">*/
/*                             {% if gallery.enabled %}*/
/*                                 <span class="label label-success pull-right">{{ 'label_gallery_enabled'|trans({}, 'SonataMediaBundle') }}</span>*/
/*                             {% else %}*/
/*                                 <span class="label label-danger pull-right">{{ 'label_gallery_disabled'|trans({}, 'SonataMediaBundle') }}</span>*/
/*                             {% endif %}*/
/*                             {{ gallery.name }}*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ url('sonata_media_gallery_view', { 'id': gallery.id }) }}" class="list-group-item">*/
/*                             {{ gallery.name }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     <span class="list-group-item">{{ 'no_galleries_found'|trans({}, 'SonataMediaBundle') }}</span>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             {% if settings.mode == 'admin' and sonata_admin is defined %}*/
/*                 {% if settings.context %}*/
/*                     <a href="{{ sonata_admin.url('sonata.media.admin.gallery', 'list', {context:settings.context }) }}" class="btn btn-primary btn-block"><i class="fa fa-list"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a href="{{ sonata_admin.url('sonata.media.admin.gallery', 'list') }}" class="btn btn-primary btn-block"><i class="fa fa-list"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

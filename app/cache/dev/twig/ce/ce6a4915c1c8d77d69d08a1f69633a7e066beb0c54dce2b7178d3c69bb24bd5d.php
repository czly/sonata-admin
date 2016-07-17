<?php

/* SonataClassificationBundle:Block:base_block_tags.html.twig */
class __TwigTemplate_f2d2bc2d0c83abf86dbd21e58eff873622b4b95536e9c7bedcd153cbca7a55bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'tag_link' => array($this, 'block_tag_link'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataClassificationBundle:Block:base_block_tags.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c233739b8be3047c5f3bb99f0245dc343c4787f865f1e3ef933002fe2584c15 = $this->env->getExtension("native_profiler");
        $__internal_9c233739b8be3047c5f3bb99f0245dc343c4787f865f1e3ef933002fe2584c15->enter($__internal_9c233739b8be3047c5f3bb99f0245dc343c4787f865f1e3ef933002fe2584c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataClassificationBundle:Block:base_block_tags.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c233739b8be3047c5f3bb99f0245dc343c4787f865f1e3ef933002fe2584c15->leave($__internal_9c233739b8be3047c5f3bb99f0245dc343c4787f865f1e3ef933002fe2584c15_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4032f0904ae010df0143418990a6f211d17be9e4d2d38fb7c1c6bbdb719febc5 = $this->env->getExtension("native_profiler");
        $__internal_4032f0904ae010df0143418990a6f211d17be9e4d2d38fb7c1c6bbdb719febc5->enter($__internal_4032f0904ae010df0143418990a6f211d17be9e4d2d38fb7c1c6bbdb719febc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"panel panel-default panel-tag-list\">
        ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()))) {
            // line 17
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-tags\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 21
        echo "
        <div class=\"panel-body\">
            ";
        // line 23
        if (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")))) {
            // line 24
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 25
                echo "                    ";
                $this->displayBlock('tag_link', $context, $blocks);
                // line 28
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        } else {
            // line 30
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_tags_found", array(), "SonataClassificationBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 32
        echo "        </div>
    </div>
";
        
        $__internal_4032f0904ae010df0143418990a6f211d17be9e4d2d38fb7c1c6bbdb719febc5->leave($__internal_4032f0904ae010df0143418990a6f211d17be9e4d2d38fb7c1c6bbdb719febc5_prof);

    }

    // line 25
    public function block_tag_link($context, array $blocks = array())
    {
        $__internal_c88d3c3095b5556dd4e45e92809031abbfeface34b938077e8557a90c5f4ad9c = $this->env->getExtension("native_profiler");
        $__internal_c88d3c3095b5556dd4e45e92809031abbfeface34b938077e8557a90c5f4ad9c->enter($__internal_c88d3c3095b5556dd4e45e92809031abbfeface34b938077e8557a90c5f4ad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tag_link"));

        // line 26
        echo "                        <span class=\"label label-default\"><i class=\"fa fa-tag\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "name", array()), "html", null, true);
        echo "</span>
                    ";
        
        $__internal_c88d3c3095b5556dd4e45e92809031abbfeface34b938077e8557a90c5f4ad9c->leave($__internal_c88d3c3095b5556dd4e45e92809031abbfeface34b938077e8557a90c5f4ad9c_prof);

    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:Block:base_block_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  113 => 25,  104 => 32,  98 => 30,  95 => 29,  81 => 28,  78 => 25,  60 => 24,  58 => 23,  54 => 21,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  19 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="panel panel-default panel-tag-list">*/
/*         {% if settings.title is not empty %}*/
/*             <div class="panel-heading">*/
/*                 <h4 class="panel-title"><i class="fa fa-tags"></i> {{ settings.title }}</h4>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel-body">*/
/*             {% if tags|length %}*/
/*                 {% for t in tags %}*/
/*                     {% block tag_link %}*/
/*                         <span class="label label-default"><i class="fa fa-tag"></i> {{ t.name }}</span>*/
/*                     {% endblock %}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 <p>{{ 'no_tags_found'|trans({}, 'SonataClassificationBundle') }}</p>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

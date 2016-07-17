<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b1fd70689140d7e5ed92c19423372ab735032c22ed41e9ccc2dd8a0ba89028a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cbf1c4143ecf5e62d037bf9266868a888d0765422e1110877a3d408587b6273 = $this->env->getExtension("native_profiler");
        $__internal_9cbf1c4143ecf5e62d037bf9266868a888d0765422e1110877a3d408587b6273->enter($__internal_9cbf1c4143ecf5e62d037bf9266868a888d0765422e1110877a3d408587b6273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_9cbf1c4143ecf5e62d037bf9266868a888d0765422e1110877a3d408587b6273->leave($__internal_9cbf1c4143ecf5e62d037bf9266868a888d0765422e1110877a3d408587b6273_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_688c7d4b97cce351c1471a01184800c17c0d9a1e028fba6c2436c0e612f1586a = $this->env->getExtension("native_profiler");
        $__internal_688c7d4b97cce351c1471a01184800c17c0d9a1e028fba6c2436c0e612f1586a->enter($__internal_688c7d4b97cce351c1471a01184800c17c0d9a1e028fba6c2436c0e612f1586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_688c7d4b97cce351c1471a01184800c17c0d9a1e028fba6c2436c0e612f1586a->leave($__internal_688c7d4b97cce351c1471a01184800c17c0d9a1e028fba6c2436c0e612f1586a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */

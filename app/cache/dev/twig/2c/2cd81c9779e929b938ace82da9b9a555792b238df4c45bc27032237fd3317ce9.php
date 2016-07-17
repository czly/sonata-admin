<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_dc9214ac6d24656a949fd0ad7ebd0412bf324d9991f19c89b4aa053e2bffb1e3 extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d50922d1e19cf312c65c4428a22953e902fc5c173408be690ef9a5e0f6e70e = $this->env->getExtension("native_profiler");
        $__internal_09d50922d1e19cf312c65c4428a22953e902fc5c173408be690ef9a5e0f6e70e->enter($__internal_09d50922d1e19cf312c65c4428a22953e902fc5c173408be690ef9a5e0f6e70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d50922d1e19cf312c65c4428a22953e902fc5c173408be690ef9a5e0f6e70e->leave($__internal_09d50922d1e19cf312c65c4428a22953e902fc5c173408be690ef9a5e0f6e70e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_08076a9eefad8176c72b6c800d080dc9a89a6233b291658ffff7b3a5ef624de6 = $this->env->getExtension("native_profiler");
        $__internal_08076a9eefad8176c72b6c800d080dc9a89a6233b291658ffff7b3a5ef624de6->enter($__internal_08076a9eefad8176c72b6c800d080dc9a89a6233b291658ffff7b3a5ef624de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_08076a9eefad8176c72b6c800d080dc9a89a6233b291658ffff7b3a5ef624de6->leave($__internal_08076a9eefad8176c72b6c800d080dc9a89a6233b291658ffff7b3a5ef624de6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_abcb2840530d9b0868609340f52c8f98184a53c454633c121ef3f83c803ebe00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46fc37421d6f538956134ded73e39ee4f03d683de1925c0aec0c089c4eb6dfab = $this->env->getExtension("native_profiler");
        $__internal_46fc37421d6f538956134ded73e39ee4f03d683de1925c0aec0c089c4eb6dfab->enter($__internal_46fc37421d6f538956134ded73e39ee4f03d683de1925c0aec0c089c4eb6dfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_46fc37421d6f538956134ded73e39ee4f03d683de1925c0aec0c089c4eb6dfab->leave($__internal_46fc37421d6f538956134ded73e39ee4f03d683de1925c0aec0c089c4eb6dfab_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_1429e87f07b44179ad2b0ab7b74f3e6c21740825ac31d6642a0c11f91751014f = $this->env->getExtension("native_profiler");
        $__internal_1429e87f07b44179ad2b0ab7b74f3e6c21740825ac31d6642a0c11f91751014f->enter($__internal_1429e87f07b44179ad2b0ab7b74f3e6c21740825ac31d6642a0c11f91751014f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) &&  !(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_1429e87f07b44179ad2b0ab7b74f3e6c21740825ac31d6642a0c11f91751014f->leave($__internal_1429e87f07b44179ad2b0ab7b74f3e6c21740825ac31d6642a0c11f91751014f_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_147b6ceabb7773d1e5a88153ce9e6d715011a0f2754cbb7683166b4ed0071bbf = $this->env->getExtension("native_profiler");
        $__internal_147b6ceabb7773d1e5a88153ce9e6d715011a0f2754cbb7683166b4ed0071bbf->enter($__internal_147b6ceabb7773d1e5a88153ce9e6d715011a0f2754cbb7683166b4ed0071bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && (isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_147b6ceabb7773d1e5a88153ce9e6d715011a0f2754cbb7683166b4ed0071bbf->leave($__internal_147b6ceabb7773d1e5a88153ce9e6d715011a0f2754cbb7683166b4ed0071bbf_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_f92b2c1f39916f046ca88ff6b5e778d31ecefa814d1aa5d6bd9ca27953614881 = $this->env->getExtension("native_profiler");
        $__internal_f92b2c1f39916f046ca88ff6b5e778d31ecefa814d1aa5d6bd9ca27953614881->enter($__internal_f92b2c1f39916f046ca88ff6b5e778d31ecefa814d1aa5d6bd9ca27953614881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('ivory_ckeditor')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('ivory_ckeditor')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), array("auto_inline" =>         // line 51
(isset($context["auto_inline"]) ? $context["auto_inline"] : $this->getContext($context, "auto_inline")), "inline" =>         // line 52
(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "input_sync" =>         // line 53
(isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
(isset($context["filebrowsers"]) ? $context["filebrowsers"] : $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if ((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_f92b2c1f39916f046ca88ff6b5e778d31ecefa814d1aa5d6bd9ca27953614881->leave($__internal_f92b2c1f39916f046ca88ff6b5e778d31ecefa814d1aa5d6bd9ca27953614881_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_4fcaf469030090c17e00e764bd9b0a06d51c3a9718934b3fd122766d3b0793c3 = $this->env->getExtension("native_profiler");
        $__internal_4fcaf469030090c17e00e764bd9b0a06d51c3a9718934b3fd122766d3b0793c3->enter($__internal_4fcaf469030090c17e00e764bd9b0a06d51c3a9718934b3fd122766d3b0793c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_4fcaf469030090c17e00e764bd9b0a06d51c3a9718934b3fd122766d3b0793c3->leave($__internal_4fcaf469030090c17e00e764bd9b0a06d51c3a9718934b3fd122766d3b0793c3_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 48,  226 => 64,  222 => 62,  220 => 61,  217 => 60,  213 => 58,  211 => 57,  207 => 55,  205 => 54,  204 => 53,  203 => 52,  202 => 51,  201 => 50,  198 => 49,  196 => 48,  193 => 47,  184 => 45,  180 => 44,  177 => 43,  168 => 41,  164 => 40,  161 => 39,  152 => 37,  148 => 36,  143 => 34,  140 => 33,  136 => 31,  134 => 30,  131 => 29,  127 => 27,  125 => 26,  122 => 25,  119 => 24,  113 => 22,  111 => 21,  107 => 20,  102 => 18,  99 => 17,  96 => 16,  90 => 15,  79 => 11,  76 => 10,  70 => 9,  59 => 5,  57 => 4,  49 => 2,  43 => 1,  36 => 15,  33 => 14,  31 => 9,  28 => 8,  26 => 1,);
    }
}
/* {% block ckeditor_widget %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*     {% if enable and not async %}*/
/*         {{ block('_ckeditor_javascript') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block ckeditor_javascript %}*/
/*     {% if enable and async %}*/
/*         {{ block('_ckeditor_javascript') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block _ckeditor_javascript %}*/
/*     {% if autoload %}*/
/*         <script type="text/javascript">*/
/*             var CKEDITOR_BASEPATH = "{{ ckeditor_base_path(base_path) }}";*/
/*         </script>*/
/*         <script type="text/javascript" src="{{ ckeditor_js_path(js_path) }}"></script>*/
/*         {% if jquery %}*/
/*             <script type="text/javascript" src="{{ ckeditor_js_path(jquery_path) }}"></script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     <script type="text/javascript">*/
/*         {% if jquery %}*/
/*             $(function () {*/
/*         {% endif %}*/
/* */
/*         {% if require_js %}*/
/*             require(['ckeditor'], function() {*/
/*         {% endif %}*/
/* */
/*         {{ ckeditor_destroy(id) }}*/
/* */
/*         {% for plugin_name, plugin in plugins %}*/
/*             {{ ckeditor_plugin(plugin_name, plugin) }}*/
/*         {% endfor %}*/
/* */
/*         {% for style_name, style in styles %}*/
/*             {{ ckeditor_styles_set(style_name, style) }}*/
/*         {% endfor %}*/
/* */
/*         {% for template_name, template in templates %}*/
/*             {{ ckeditor_template(template_name, template) }}*/
/*         {% endfor %}*/
/* */
/*         {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}*/
/* */
/*         {{ ckeditor_widget(id, config, {*/
/*             auto_inline: auto_inline,*/
/*             inline: inline,*/
/*             input_sync: input_sync,*/
/*             filebrowsers: filebrowsers*/
/*         }) }}*/
/* */
/*         {% if require_js %}*/
/*             });*/
/*         {% endif %}*/
/* */
/*         {% if jquery %}*/
/*             });*/
/*         {% endif %}*/
/*     </script>*/
/* {% endblock %}*/
/* */

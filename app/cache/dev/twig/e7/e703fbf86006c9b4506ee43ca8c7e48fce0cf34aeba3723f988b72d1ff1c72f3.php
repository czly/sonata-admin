<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_1f443cba9bc58894ff8060a08bb83b6f333d0be2049861b24ae94449f42fc377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
            'sonata_simple_formatter_type_widget' => array($this, 'block_sonata_simple_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_513f51ba07395d83b5c42bbb50da999a1f52ccbc7b826af58ee661a7b10302fe = $this->env->getExtension("native_profiler");
        $__internal_513f51ba07395d83b5c42bbb50da999a1f52ccbc7b826af58ee661a7b10302fe->enter($__internal_513f51ba07395d83b5c42bbb50da999a1f52ccbc7b826af58ee661a7b10302fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Form:formatter.html.twig"));

        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
        
        $__internal_513f51ba07395d83b5c42bbb50da999a1f52ccbc7b826af58ee661a7b10302fe->leave($__internal_513f51ba07395d83b5c42bbb50da999a1f52ccbc7b826af58ee661a7b10302fe_prof);

    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_d46041e2763ef97ea6b9e99a6d34da044e8001031f60943be67c17dbd6ca4e45 = $this->env->getExtension("native_profiler");
        $__internal_d46041e2763ef97ea6b9e99a6d34da044e8001031f60943be67c17dbd6ca4e45->enter($__internal_d46041e2763ef97ea6b9e99a6d34da044e8001031f60943be67c17dbd6ca4e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_formatter_type_widget"));

        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), 'widget');
        echo "
        ";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["format_field_options"]) ? $context["format_field_options"] : $this->getContext($context, "format_field_options")), "choices", array())) > 1)) {
            // line 7
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
            echo "</i>
        ";
        }
        // line 9
        echo "    </div>

    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), 'widget');
        echo "

    <script>
        var ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance = false;

        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var isInstanceActive = isInstanceActive || function(instance){
                return instance && instance.status !== \"destroyed\";
            };

            jQuery('#";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').parents(\"form\").on('click', function(event) {
                if (isInstanceActive(";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance)) {
                    ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance.updateElement();
                }
            });

            jQuery('#";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();
                if (isInstanceActive(";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance)) {
                    ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance.destroy();
                }

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance = ";
        echo $this->env->getExtension('ivory_ckeditor')->renderWidget($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 58
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars", array()), "id", array()), (isset($context["ckeditor_configuration"]) ? $context["ckeditor_configuration"] : $this->getContext($context, "ckeditor_configuration")));
        // line 59
        echo ";
                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
        
        $__internal_d46041e2763ef97ea6b9e99a6d34da044e8001031f60943be67c17dbd6ca4e45->leave($__internal_d46041e2763ef97ea6b9e99a6d34da044e8001031f60943be67c17dbd6ca4e45_prof);

    }

    // line 78
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_bbf77290593f4710ddcff7cd1816a41903c5e46c99e1174e57c130c1a6c3a7a9 = $this->env->getExtension("native_profiler");
        $__internal_bbf77290593f4710ddcff7cd1816a41903c5e46c99e1174e57c130c1a6c3a7a9->enter($__internal_bbf77290593f4710ddcff7cd1816a41903c5e46c99e1174e57c130c1a6c3a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_simple_formatter_type_widget"));

        // line 79
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->

    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "');

            ";
        // line 93
        if (((isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "textile")) {
            // line 94
            echo "                elms.markItUp(markitup_sonataTextileSettings);
            ";
        } elseif ((        // line 95
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "markdown")) {
            // line 96
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);
            ";
        } elseif ((        // line 97
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "bbcode")) {
            // line 98
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);
            ";
        } elseif ((        // line 99
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "rawhtml")) {
            // line 100
            echo "                elms.markItUp(markitup_sonataHtmlSettings);
            ";
        } elseif ((        // line 101
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "richhtml")) {
            // line 102
            echo "                ";
            echo $this->env->getExtension('ivory_ckeditor')->renderWidget($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), (isset($context["ckeditor_configuration"]) ? $context["ckeditor_configuration"] : $this->getContext($context, "ckeditor_configuration")));
            echo ";
            ";
        }
        // line 104
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "html", null, true);
        echo "');
            }

        });
    </script>
";
        
        $__internal_bbf77290593f4710ddcff7cd1816a41903c5e46c99e1174e57c130c1a6c3a7a9->leave($__internal_bbf77290593f4710ddcff7cd1816a41903c5e46c99e1174e57c130c1a6c3a7a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 108,  224 => 104,  218 => 102,  216 => 101,  213 => 100,  211 => 99,  208 => 98,  206 => 97,  203 => 96,  201 => 95,  198 => 94,  196 => 93,  191 => 91,  179 => 82,  174 => 79,  168 => 78,  157 => 73,  141 => 59,  139 => 58,  136 => 57,  113 => 37,  109 => 36,  104 => 34,  100 => 33,  93 => 29,  89 => 28,  85 => 27,  69 => 14,  63 => 11,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 2,  36 => 1,  29 => 78,  26 => 77,  24 => 1,);
    }
}
/* {% block sonata_formatter_type_widget %}*/
/* */
/*     <!-- widget: sonata_formatter_type_widget -->*/
/*     <div style="margin-bottom: 5px;">*/
/*         {{ form_widget(form.children[format_field]) }}*/
/*         {% if format_field_options.choices|length > 1 %}*/
/*             <i>{{ "please_select_format_method"|trans({}, "SonataFormatterBundle") }}</i>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {{ form_widget(form.children[source_field]) }}*/
/* */
/*     <script>*/
/*         var {{ source_id }}_rich_instance = false;*/
/* */
/*         jQuery(document).ready(function() {*/
/* */
/*             // This code requires CKEDITOR and jQuery MarkItUp*/
/*             if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {*/
/*                 return;*/
/*             }*/
/* */
/*             var isInstanceActive = isInstanceActive || function(instance){*/
/*                 return instance && instance.status !== "destroyed";*/
/*             };*/
/* */
/*             jQuery('#{{ form.children[format_field].vars.id }}').parents("form").on('click', function(event) {*/
/*                 if (isInstanceActive({{ source_id }}_rich_instance)) {*/
/*                     {{ source_id }}_rich_instance.updateElement();*/
/*                 }*/
/*             });*/
/* */
/*             jQuery('#{{ form.children[format_field].vars.id }}').change(function(event) {*/
/*                 var elms = jQuery('#{{ form.children[source_field].vars.id }}');*/
/*                 elms.markItUpRemove();*/
/*                 if (isInstanceActive({{ source_id }}_rich_instance)) {*/
/*                     {{ source_id }}_rich_instance.destroy();*/
/*                 }*/
/* */
/*                 var val = jQuery(this).val();*/
/*                 var appendClass = val;*/
/*                 switch(val) {*/
/*                     case 'textile':*/
/*                         elms.markItUp(markitup_sonataTextileSettings);*/
/*                         break;*/
/*                     case 'markdown':*/
/*                         elms.markItUp(markitup_sonataMarkdownSettings);*/
/*                         break;*/
/*                     case 'bbcode':*/
/*                         elms.markItUp(markitup_sonataBBCodeSettings);*/
/*                         break;*/
/*                     case 'rawhtml':*/
/*                         elms.markItUp(markitup_sonataHtmlSettings);*/
/*                         appendClass = 'html';*/
/*                         break;*/
/*                     case 'richhtml':*/
/*                         {{ source_id }}_rich_instance = {{*/
/*                             ckeditor_widget(form.children[source_field].vars.id, ckeditor_configuration)*/
/*                         }};*/
/*                 }*/
/* */
/*                 var parent = elms.parents('div.markItUp');*/
/* */
/*                 if (parent) {*/
/*                     for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {*/
/*                         parent.removeClass(name)*/
/*                     }*/
/* */
/*                     parent.addClass(appendClass);*/
/*                 }*/
/*             });*/
/* */
/*             jQuery('#{{ form.children[format_field].vars.id }}').trigger('change');*/
/*         });*/
/*     </script>*/
/* {% endblock sonata_formatter_type_widget %}*/
/* */
/* {% block sonata_simple_formatter_type_widget %}*/
/* */
/*     <!-- widget: sonata_simple_formatter_type_widget -->*/
/* */
/*     {{ form_widget(form) }}*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             // This code requires CKEDITOR and jQuery MarkItUp*/
/*             if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {*/
/*                 return;*/
/*             }*/
/* */
/*             var elms = jQuery('#{{ form.vars.id }}');*/
/* */
/*             {% if format == 'textile' %}*/
/*                 elms.markItUp(markitup_sonataTextileSettings);*/
/*             {% elseif format == 'markdown' %}*/
/*                 elms.markItUp(markitup_sonataMarkdownSettings);*/
/*             {% elseif format == 'bbcode' %}*/
/*                 elms.markItUp(markitup_sonataBBCodeSettings);*/
/*             {% elseif format == 'rawhtml' %}*/
/*                 elms.markItUp(markitup_sonataHtmlSettings);*/
/*             {% elseif format == 'richhtml' %}*/
/*                 {{ ckeditor_widget(form.vars.id, ckeditor_configuration) }};*/
/*             {% endif %}*/
/* */
/*             var parent = elms.parents('div.markItUp');*/
/* */
/*             if (parent) {*/
/*                 parent.addClass('{{ format }}');*/
/*             }*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock sonata_simple_formatter_type_widget %}*/
/* */

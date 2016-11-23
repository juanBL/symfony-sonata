<?php

/* :Admin:edit.html.twig */
class __TwigTemplate_cae4cd75b13ef4a48826dcbdf199037dde4a97f2ae0383c2addf5d9114007477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", ":Admin:edit.html.twig", 1);
        $this->blocks = array(
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c520682f0c1118b37de23ef43ac3a0b4b30f89e9e738b6d4c33ecb920b5735b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c520682f0c1118b37de23ef43ac3a0b4b30f89e9e738b6d4c33ecb920b5735b7->enter($__internal_c520682f0c1118b37de23ef43ac3a0b4b30f89e9e738b6d4c33ecb920b5735b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c520682f0c1118b37de23ef43ac3a0b4b30f89e9e738b6d4c33ecb920b5735b7->leave($__internal_c520682f0c1118b37de23ef43ac3a0b4b30f89e9e738b6d4c33ecb920b5735b7_prof);

    }

    // line 3
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_64459f26e981f12b5cf690271bcab195d4957f251c9648a734017703f6949e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64459f26e981f12b5cf690271bcab195d4957f251c9648a734017703f6949e64->enter($__internal_64459f26e981f12b5cf690271bcab195d4957f251c9648a734017703f6949e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 4
        echo "    <div class=\"sonata-ba-form-actions well well-small form-actions\">
    ";
        // line 5
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 39
        echo "    </div>
";
        
        $__internal_64459f26e981f12b5cf690271bcab195d4957f251c9648a734017703f6949e64->leave($__internal_64459f26e981f12b5cf690271bcab195d4957f251c9648a734017703f6949e64_prof);

    }

    // line 5
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_a0b32abd0cc57697fbf0a66c4830bc2d60c0526a439bca6cfbb11345d617ab5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b32abd0cc57697fbf0a66c4830bc2d60c0526a439bca6cfbb11345d617ab5d->enter($__internal_a0b32abd0cc57697fbf0a66c4830bc2d60c0526a439bca6cfbb11345d617ab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 7
            echo "            ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 8
                echo "                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
            ";
            } else {
                // line 10
                echo "                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
            ";
            }
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            ";
            if ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 14
                echo "                <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                </button>
            ";
            }
            // line 19
            echo "            ";
            if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                // line 20
                echo "
                ";
                // line 21
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 22
                    echo "                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                ";
                }
                // line 24
                echo "
                ";
                // line 25
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 26
                    echo "                    <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 28
                echo "            ";
            } else {
                // line 29
                echo "                ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 30
                    echo "                    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                ";
                }
                // line 32
                echo "                ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 33
                    echo "                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                ";
                }
                // line 35
                echo "                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
            ";
            }
            // line 37
            echo "        ";
        }
        // line 38
        echo "    ";
        
        $__internal_a0b32abd0cc57697fbf0a66c4830bc2d60c0526a439bca6cfbb11345d617ab5d->leave($__internal_a0b32abd0cc57697fbf0a66c4830bc2d60c0526a439bca6cfbb11345d617ab5d_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 38,  148 => 37,  142 => 35,  136 => 33,  133 => 32,  127 => 30,  124 => 29,  121 => 28,  113 => 26,  111 => 25,  108 => 24,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 16,  84 => 14,  81 => 13,  78 => 12,  72 => 10,  66 => 8,  63 => 7,  60 => 6,  54 => 5,  46 => 39,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}

{% block formactions %}
    <div class=\"sonata-ba-form-actions well well-small form-actions\">
    {% block sonata_form_actions %}
        {% if app.request.isxmlhttprequest %}
            {% if admin.id(object) is not null %}
                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
            {% else %}
                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
            {% endif %}
        {% else %}
            {% if admin.supportsPreviewMode %}
                <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                    <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                    {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                </button>
            {% endif %}
            {% if admin.id(object) is not null %}

                {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                {% endif %}

                {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}
                    <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                {% endif %}
            {% else %}
                {% if admin.hasroute('edit') and admin.isGranted('EDIT') %}
                    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                {% endif %}
                {% if admin.hasroute('list') and admin.isGranted('LIST') %}
                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                {% endif %}
                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
            {% endif %}
        {% endif %}
    {% endblock %}
    </div>
{% endblock formactions %}
", ":Admin:edit.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/app/Resources/views/Admin/edit.html.twig");
    }
}

<?php

/* :Admin:edit_regalo.html.twig */
class __TwigTemplate_902aea339dd2051b284d4fd6462bd8b2aa41680062795c1463d853020846d73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", ":Admin:edit_regalo.html.twig", 1);
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
        $__internal_27de25d453496297ae5ab57140cfe05d2488cea4482b6468887da1dcc90d4fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27de25d453496297ae5ab57140cfe05d2488cea4482b6468887da1dcc90d4fa0->enter($__internal_27de25d453496297ae5ab57140cfe05d2488cea4482b6468887da1dcc90d4fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:edit_regalo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27de25d453496297ae5ab57140cfe05d2488cea4482b6468887da1dcc90d4fa0->leave($__internal_27de25d453496297ae5ab57140cfe05d2488cea4482b6468887da1dcc90d4fa0_prof);

    }

    // line 3
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_9ab91aa369ac1488cf104639a1646c6bb48ac7523e64f1c4c7f0ed44886f6fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab91aa369ac1488cf104639a1646c6bb48ac7523e64f1c4c7f0ed44886f6fb3->enter($__internal_9ab91aa369ac1488cf104639a1646c6bb48ac7523e64f1c4c7f0ed44886f6fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 4
        echo "    <div class=\"sonata-ba-form-actions well well-small form-actions\">
    ";
        // line 5
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 44
        echo "    </div>
";
        
        $__internal_9ab91aa369ac1488cf104639a1646c6bb48ac7523e64f1c4c7f0ed44886f6fb3->leave($__internal_9ab91aa369ac1488cf104639a1646c6bb48ac7523e64f1c4c7f0ed44886f6fb3_prof);

    }

    // line 5
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_4cb7d00e5648b82dceb56370863b91c5d2b7926845d86c67cc4f950bf4ce7853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb7d00e5648b82dceb56370863b91c5d2b7926845d86c67cc4f950bf4ce7853->enter($__internal_4cb7d00e5648b82dceb56370863b91c5d2b7926845d86c67cc4f950bf4ce7853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

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
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 26
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    <a class=\"btn btn-danger\" href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 28
                echo "                

                ";
                // line 30
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
                    // line 31
                    echo "                    <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 33
                echo "            ";
            } else {
                // line 34
                echo "                ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 35
                    echo "                    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                ";
                }
                // line 37
                echo "                ";
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 38
                    echo "                    <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                ";
                }
                // line 40
                echo "                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
            ";
            }
            // line 42
            echo "        ";
        }
        // line 43
        echo "    ";
        
        $__internal_4cb7d00e5648b82dceb56370863b91c5d2b7926845d86c67cc4f950bf4ce7853->leave($__internal_4cb7d00e5648b82dceb56370863b91c5d2b7926845d86c67cc4f950bf4ce7853_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:edit_regalo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 43,  166 => 42,  160 => 40,  154 => 38,  151 => 37,  145 => 35,  142 => 34,  139 => 33,  131 => 31,  129 => 30,  125 => 28,  118 => 27,  113 => 26,  111 => 25,  108 => 24,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  88 => 16,  84 => 14,  81 => 13,  78 => 12,  72 => 10,  66 => 8,  63 => 7,  60 => 6,  54 => 5,  46 => 44,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

                {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}
                    {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                    <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
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
", ":Admin:edit_regalo.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/app/Resources/views/Admin/edit_regalo.html.twig");
    }
}

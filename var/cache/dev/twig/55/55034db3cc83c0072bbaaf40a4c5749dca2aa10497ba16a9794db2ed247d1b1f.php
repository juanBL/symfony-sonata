<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_6e69a9e65ccbf75255d1191c243b6a80559be16997a769c2e02b472a5ebdcab8 extends Twig_Template
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
        $__internal_9bf72a58c3f03f0d9befaebeb22a8eab050e7a65ea0a75c36efc7a3d52963356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf72a58c3f03f0d9befaebeb22a8eab050e7a65ea0a75c36efc7a3d52963356->enter($__internal_9bf72a58c3f03f0d9befaebeb22a8eab050e7a65ea0a75c36efc7a3d52963356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9bf72a58c3f03f0d9befaebeb22a8eab050e7a65ea0a75c36efc7a3d52963356->leave($__internal_9bf72a58c3f03f0d9befaebeb22a8eab050e7a65ea0a75c36efc7a3d52963356_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_modal.html.twig");
    }
}

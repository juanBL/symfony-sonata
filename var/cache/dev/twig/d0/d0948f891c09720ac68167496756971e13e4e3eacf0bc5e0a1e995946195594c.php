<?php

/* :Admin:configuracion.html.twig */
class __TwigTemplate_111c3704532e2622cca1ef098e0eec218f23a21b89029ac963abec293f063cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), ":Admin:configuracion.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc26a5cbe3903de5a9084e90663e8d3a0ac3759657586ef6447481cf3294d21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc26a5cbe3903de5a9084e90663e8d3a0ac3759657586ef6447481cf3294d21d->enter($__internal_fc26a5cbe3903de5a9084e90663e8d3a0ac3759657586ef6447481cf3294d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:configuracion.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc26a5cbe3903de5a9084e90663e8d3a0ac3759657586ef6447481cf3294d21d->leave($__internal_fc26a5cbe3903de5a9084e90663e8d3a0ac3759657586ef6447481cf3294d21d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_172af35af178668e83547004df05c4fd3713db465385f5c27d6cf1a2c9613a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172af35af178668e83547004df05c4fd3713db465385f5c27d6cf1a2c9613a45->enter($__internal_172af35af178668e83547004df05c4fd3713db465385f5c27d6cf1a2c9613a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">Configuración</h4>
            </div>
            <div class=\"box-body my-edit\">
                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_172af35af178668e83547004df05c4fd3713db465385f5c27d6cf1a2c9613a45->leave($__internal_172af35af178668e83547004df05c4fd3713db465385f5c27d6cf1a2c9613a45_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:configuracion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  52 => 12,  48 => 11,  39 => 4,  33 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends base_template %}

{% block content %}
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">Configuración</h4>
            </div>
            <div class=\"box-body my-edit\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", ":Admin:configuracion.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/app/Resources/views/Admin/configuracion.html.twig");
    }
}

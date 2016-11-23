<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a858868b5c715ba7cb31d6f697ec34924091d497a26779e56f7d086ae406b317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c856ae8bb484b8dd035d940d68822ebac7f1276b49b76ada5c7a07fb7e344b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c856ae8bb484b8dd035d940d68822ebac7f1276b49b76ada5c7a07fb7e344b95->enter($__internal_c856ae8bb484b8dd035d940d68822ebac7f1276b49b76ada5c7a07fb7e344b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c856ae8bb484b8dd035d940d68822ebac7f1276b49b76ada5c7a07fb7e344b95->leave($__internal_c856ae8bb484b8dd035d940d68822ebac7f1276b49b76ada5c7a07fb7e344b95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00f405279b475fed07c7ee810e15f1fcdbdc7a24452e6769d9cd4fd5d96df2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f405279b475fed07c7ee810e15f1fcdbdc7a24452e6769d9cd4fd5d96df2b1->enter($__internal_00f405279b475fed07c7ee810e15f1fcdbdc7a24452e6769d9cd4fd5d96df2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_00f405279b475fed07c7ee810e15f1fcdbdc7a24452e6769d9cd4fd5d96df2b1->leave($__internal_00f405279b475fed07c7ee810e15f1fcdbdc7a24452e6769d9cd4fd5d96df2b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71eef250333b38d50f1a3a4b62aa7f960cf43bb4148da9cfbceefc7f9f1f86a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71eef250333b38d50f1a3a4b62aa7f960cf43bb4148da9cfbceefc7f9f1f86a4->enter($__internal_71eef250333b38d50f1a3a4b62aa7f960cf43bb4148da9cfbceefc7f9f1f86a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71eef250333b38d50f1a3a4b62aa7f960cf43bb4148da9cfbceefc7f9f1f86a4->leave($__internal_71eef250333b38d50f1a3a4b62aa7f960cf43bb4148da9cfbceefc7f9f1f86a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_135aa16505616d2dc7d5d676f47d13729c79bcdf51e21bda756a05e5c219bd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135aa16505616d2dc7d5d676f47d13729c79bcdf51e21bda756a05e5c219bd02->enter($__internal_135aa16505616d2dc7d5d676f47d13729c79bcdf51e21bda756a05e5c219bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_135aa16505616d2dc7d5d676f47d13729c79bcdf51e21bda756a05e5c219bd02->leave($__internal_135aa16505616d2dc7d5d676f47d13729c79bcdf51e21bda756a05e5c219bd02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

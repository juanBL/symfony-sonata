<?php

/* :Admin:layout.html.twig */
class __TwigTemplate_99444f88e72d1d4622f1c7cae5b5025dc56e646ab8b26fd7fa35c8f3a31e4114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", ":Admin:layout.html.twig", 1);
        $this->blocks = array(
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d3f28a0d85cb31cadda4830dcecabc1ea6a9a0bf1bf9a8df28b94d165b2f42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3f28a0d85cb31cadda4830dcecabc1ea6a9a0bf1bf9a8df28b94d165b2f42d->enter($__internal_7d3f28a0d85cb31cadda4830dcecabc1ea6a9a0bf1bf9a8df28b94d165b2f42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3f28a0d85cb31cadda4830dcecabc1ea6a9a0bf1bf9a8df28b94d165b2f42d->leave($__internal_7d3f28a0d85cb31cadda4830dcecabc1ea6a9a0bf1bf9a8df28b94d165b2f42d_prof);

    }

    // line 3
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_61ca2f14033042b77ef8977db36745ba0da25aa1242e6f813689ea0c51952918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ca2f14033042b77ef8977db36745ba0da25aa1242e6f813689ea0c51952918->enter($__internal_61ca2f14033042b77ef8977db36745ba0da25aa1242e6f813689ea0c51952918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        
        $__internal_61ca2f14033042b77ef8977db36745ba0da25aa1242e6f813689ea0c51952918->leave($__internal_61ca2f14033042b77ef8977db36745ba0da25aa1242e6f813689ea0c51952918_prof);

    }

    // line 6
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_0f976d16cf31313c7307b658eb2340f697bdefa5b78bc6ba7e1dedbf1fdf66ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f976d16cf31313c7307b658eb2340f697bdefa5b78bc6ba7e1dedbf1fdf66ea->enter($__internal_0f976d16cf31313c7307b658eb2340f697bdefa5b78bc6ba7e1dedbf1fdf66ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        
        $__internal_0f976d16cf31313c7307b658eb2340f697bdefa5b78bc6ba7e1dedbf1fdf66ea->leave($__internal_0f976d16cf31313c7307b658eb2340f697bdefa5b78bc6ba7e1dedbf1fdf66ea_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block sonata_sidebar_search %}
{% endblock %}

{% block side_bar_after_nav_content %}
{% endblock %}

", ":Admin:layout.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/app/Resources/views/Admin/layout.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36f179b35f75b4569c25258759f826e2449b5b95cf92383c71dbcff6eca45b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77ee871e086aa173d7a58331870064a6b26aad314445e2152aa9380733326cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ee871e086aa173d7a58331870064a6b26aad314445e2152aa9380733326cc2->enter($__internal_77ee871e086aa173d7a58331870064a6b26aad314445e2152aa9380733326cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ee871e086aa173d7a58331870064a6b26aad314445e2152aa9380733326cc2->leave($__internal_77ee871e086aa173d7a58331870064a6b26aad314445e2152aa9380733326cc2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bc7f66c6a39533f94d0210163f35cc4ceb4933641bee76e3a1c04e849fd9ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc7f66c6a39533f94d0210163f35cc4ceb4933641bee76e3a1c04e849fd9ae7->enter($__internal_2bc7f66c6a39533f94d0210163f35cc4ceb4933641bee76e3a1c04e849fd9ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bc7f66c6a39533f94d0210163f35cc4ceb4933641bee76e3a1c04e849fd9ae7->leave($__internal_2bc7f66c6a39533f94d0210163f35cc4ceb4933641bee76e3a1c04e849fd9ae7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21305521f4c5e41067080cb29eaf17f5ca920a45ea77fafaed60cff82e5b15c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21305521f4c5e41067080cb29eaf17f5ca920a45ea77fafaed60cff82e5b15c3->enter($__internal_21305521f4c5e41067080cb29eaf17f5ca920a45ea77fafaed60cff82e5b15c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21305521f4c5e41067080cb29eaf17f5ca920a45ea77fafaed60cff82e5b15c3->leave($__internal_21305521f4c5e41067080cb29eaf17f5ca920a45ea77fafaed60cff82e5b15c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b6996734b4d58b93f68cc9a49f5d8f48d7e02403d4553502dec86321d5226be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6996734b4d58b93f68cc9a49f5d8f48d7e02403d4553502dec86321d5226be->enter($__internal_6b6996734b4d58b93f68cc9a49f5d8f48d7e02403d4553502dec86321d5226be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b6996734b4d58b93f68cc9a49f5d8f48d7e02403d4553502dec86321d5226be->leave($__internal_6b6996734b4d58b93f68cc9a49f5d8f48d7e02403d4553502dec86321d5226be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

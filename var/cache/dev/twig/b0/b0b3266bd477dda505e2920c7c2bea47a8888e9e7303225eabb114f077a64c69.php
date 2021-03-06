<?php

/* base.html.twig */
class __TwigTemplate_39564d6a649b2a0e6a09aab5330cc3de1b3efc989e0f7f4c20d14a7198c99f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b017710479486164faf2cc4c41bed5a1b9c8573939d30513d1382b08160329ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b017710479486164faf2cc4c41bed5a1b9c8573939d30513d1382b08160329ab->enter($__internal_b017710479486164faf2cc4c41bed5a1b9c8573939d30513d1382b08160329ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b017710479486164faf2cc4c41bed5a1b9c8573939d30513d1382b08160329ab->leave($__internal_b017710479486164faf2cc4c41bed5a1b9c8573939d30513d1382b08160329ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b95b8ad439752207c922d1083837313d460bafee1bffd210b9d2e8ca14052d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b95b8ad439752207c922d1083837313d460bafee1bffd210b9d2e8ca14052d0->enter($__internal_8b95b8ad439752207c922d1083837313d460bafee1bffd210b9d2e8ca14052d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b95b8ad439752207c922d1083837313d460bafee1bffd210b9d2e8ca14052d0->leave($__internal_8b95b8ad439752207c922d1083837313d460bafee1bffd210b9d2e8ca14052d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_789ecd58f037e3e97e28dab4b30532169ff264cb0ade265235823383eef72cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789ecd58f037e3e97e28dab4b30532169ff264cb0ade265235823383eef72cb0->enter($__internal_789ecd58f037e3e97e28dab4b30532169ff264cb0ade265235823383eef72cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_789ecd58f037e3e97e28dab4b30532169ff264cb0ade265235823383eef72cb0->leave($__internal_789ecd58f037e3e97e28dab4b30532169ff264cb0ade265235823383eef72cb0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a7be52c077eaa015fef038d8f75583195993c2d761a6dab48d2dabfd82b3340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7be52c077eaa015fef038d8f75583195993c2d761a6dab48d2dabfd82b3340->enter($__internal_0a7be52c077eaa015fef038d8f75583195993c2d761a6dab48d2dabfd82b3340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a7be52c077eaa015fef038d8f75583195993c2d761a6dab48d2dabfd82b3340->leave($__internal_0a7be52c077eaa015fef038d8f75583195993c2d761a6dab48d2dabfd82b3340_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8219068e2b6297371bd8c05203c223da0bee75ab3f49e328fd551b44c3119aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8219068e2b6297371bd8c05203c223da0bee75ab3f49e328fd551b44c3119aa8->enter($__internal_8219068e2b6297371bd8c05203c223da0bee75ab3f49e328fd551b44c3119aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8219068e2b6297371bd8c05203c223da0bee75ab3f49e328fd551b44c3119aa8->leave($__internal_8219068e2b6297371bd8c05203c223da0bee75ab3f49e328fd551b44c3119aa8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/app/Resources/views/base.html.twig");
    }
}

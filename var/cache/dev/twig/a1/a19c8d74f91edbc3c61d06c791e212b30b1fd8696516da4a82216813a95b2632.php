<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_eb896c98ef4898844861c4262b7791924c47d65e48d8c19709a2ac878398332e extends Twig_Template
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
        $__internal_ec02e80645f5902058d192178f9c7f732c542a03cb5943d305e180897e68764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec02e80645f5902058d192178f9c7f732c542a03cb5943d305e180897e68764a->enter($__internal_ec02e80645f5902058d192178f9c7f732c542a03cb5943d305e180897e68764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec02e80645f5902058d192178f9c7f732c542a03cb5943d305e180897e68764a->leave($__internal_ec02e80645f5902058d192178f9c7f732c542a03cb5943d305e180897e68764a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}

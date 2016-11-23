<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b221dc9c0edd9b1d2cae4d5bb05a711d61bb0147e387700c1874d2eacd403194 extends Twig_Template
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
        $__internal_9338330fb13c7e197f8e09557f7d4ac5238e3e511a18ffc558a4ef2ab2741d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9338330fb13c7e197f8e09557f7d4ac5238e3e511a18ffc558a4ef2ab2741d3e->enter($__internal_9338330fb13c7e197f8e09557f7d4ac5238e3e511a18ffc558a4ef2ab2741d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_9338330fb13c7e197f8e09557f7d4ac5238e3e511a18ffc558a4ef2ab2741d3e->leave($__internal_9338330fb13c7e197f8e09557f7d4ac5238e3e511a18ffc558a4ef2ab2741d3e_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}

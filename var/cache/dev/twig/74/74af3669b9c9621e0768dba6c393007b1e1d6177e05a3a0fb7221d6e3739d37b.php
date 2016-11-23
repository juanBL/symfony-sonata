<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_9d7371461d6f1e79dc00e9dad8baf77d7a6bd6a8e4910c6c19af89bc91a104f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56835a487c7a37277927a1a5c3409fd01b712058f3b6e38c8ae1b1bcfcd9d058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56835a487c7a37277927a1a5c3409fd01b712058f3b6e38c8ae1b1bcfcd9d058->enter($__internal_56835a487c7a37277927a1a5c3409fd01b712058f3b6e38c8ae1b1bcfcd9d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_56835a487c7a37277927a1a5c3409fd01b712058f3b6e38c8ae1b1bcfcd9d058->leave($__internal_56835a487c7a37277927a1a5c3409fd01b712058f3b6e38c8ae1b1bcfcd9d058_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_fb7f1dc3a881b9a4f109fd94c693f5a21403a0543a26b393bc246ef91415355a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7f1dc3a881b9a4f109fd94c693f5a21403a0543a26b393bc246ef91415355a->enter($__internal_fb7f1dc3a881b9a4f109fd94c693f5a21403a0543a26b393bc246ef91415355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_fb7f1dc3a881b9a4f109fd94c693f5a21403a0543a26b393bc246ef91415355a->leave($__internal_fb7f1dc3a881b9a4f109fd94c693f5a21403a0543a26b393bc246ef91415355a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/media/juan/LinuxDatos/symfony-proyects/sonatademo/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffd030f735de95e8043117e523ee73d2851b467f35002060f27d7723d6305d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9907c99a67543d85d5638ab6754166b4a0a7fcbe1c532a4c8e44674cf349671a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9907c99a67543d85d5638ab6754166b4a0a7fcbe1c532a4c8e44674cf349671a->enter($__internal_9907c99a67543d85d5638ab6754166b4a0a7fcbe1c532a4c8e44674cf349671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_50ce606814bc17f115449367652e14869c486cb8a3211012226f7c635091fc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ce606814bc17f115449367652e14869c486cb8a3211012226f7c635091fc3a->enter($__internal_50ce606814bc17f115449367652e14869c486cb8a3211012226f7c635091fc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9907c99a67543d85d5638ab6754166b4a0a7fcbe1c532a4c8e44674cf349671a->leave($__internal_9907c99a67543d85d5638ab6754166b4a0a7fcbe1c532a4c8e44674cf349671a_prof);

        
        $__internal_50ce606814bc17f115449367652e14869c486cb8a3211012226f7c635091fc3a->leave($__internal_50ce606814bc17f115449367652e14869c486cb8a3211012226f7c635091fc3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ad3e4e40e82a41cb6a25024c1e8530abeb5b318d016baa3b03ab70da42817a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad3e4e40e82a41cb6a25024c1e8530abeb5b318d016baa3b03ab70da42817a7->enter($__internal_8ad3e4e40e82a41cb6a25024c1e8530abeb5b318d016baa3b03ab70da42817a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55f162b20930ed8d437919a0a1869d79df5b5049deff1596dc6748eeb331c397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f162b20930ed8d437919a0a1869d79df5b5049deff1596dc6748eeb331c397->enter($__internal_55f162b20930ed8d437919a0a1869d79df5b5049deff1596dc6748eeb331c397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_55f162b20930ed8d437919a0a1869d79df5b5049deff1596dc6748eeb331c397->leave($__internal_55f162b20930ed8d437919a0a1869d79df5b5049deff1596dc6748eeb331c397_prof);

        
        $__internal_8ad3e4e40e82a41cb6a25024c1e8530abeb5b318d016baa3b03ab70da42817a7->leave($__internal_8ad3e4e40e82a41cb6a25024c1e8530abeb5b318d016baa3b03ab70da42817a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

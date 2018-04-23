<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_196832fa2fa07d66052d5ad9fe575c25ebfe62d20536a8519e4e90c0e50af02a extends Twig_Template
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
        $__internal_c669274d20a5d0b227c1c6784b3de0e9be0237cdf30fd2cab924a2e6c0cb02c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c669274d20a5d0b227c1c6784b3de0e9be0237cdf30fd2cab924a2e6c0cb02c8->enter($__internal_c669274d20a5d0b227c1c6784b3de0e9be0237cdf30fd2cab924a2e6c0cb02c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3169d9467c28e5cff2329da4377d4c4da341e1c1004891a3c8a5a7c26d9b3c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3169d9467c28e5cff2329da4377d4c4da341e1c1004891a3c8a5a7c26d9b3c27->enter($__internal_3169d9467c28e5cff2329da4377d4c4da341e1c1004891a3c8a5a7c26d9b3c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c669274d20a5d0b227c1c6784b3de0e9be0237cdf30fd2cab924a2e6c0cb02c8->leave($__internal_c669274d20a5d0b227c1c6784b3de0e9be0237cdf30fd2cab924a2e6c0cb02c8_prof);

        
        $__internal_3169d9467c28e5cff2329da4377d4c4da341e1c1004891a3c8a5a7c26d9b3c27->leave($__internal_3169d9467c28e5cff2329da4377d4c4da341e1c1004891a3c8a5a7c26d9b3c27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b23d6a4a964562aa4dcea71fe29b9c2abab2d3933f91134488e1fc2c925218f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b23d6a4a964562aa4dcea71fe29b9c2abab2d3933f91134488e1fc2c925218f->enter($__internal_1b23d6a4a964562aa4dcea71fe29b9c2abab2d3933f91134488e1fc2c925218f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db4551e144d66145dbe31ff4e308854e84a7e9342da76a6cb3325a1771094573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4551e144d66145dbe31ff4e308854e84a7e9342da76a6cb3325a1771094573->enter($__internal_db4551e144d66145dbe31ff4e308854e84a7e9342da76a6cb3325a1771094573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_db4551e144d66145dbe31ff4e308854e84a7e9342da76a6cb3325a1771094573->leave($__internal_db4551e144d66145dbe31ff4e308854e84a7e9342da76a6cb3325a1771094573_prof);

        
        $__internal_1b23d6a4a964562aa4dcea71fe29b9c2abab2d3933f91134488e1fc2c925218f->leave($__internal_1b23d6a4a964562aa4dcea71fe29b9c2abab2d3933f91134488e1fc2c925218f_prof);

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

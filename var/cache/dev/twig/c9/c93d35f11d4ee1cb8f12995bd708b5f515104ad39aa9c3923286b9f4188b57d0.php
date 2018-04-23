<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1892a9a8d5a096f5e9b99d0ab3ffe5277b3aa3e6fe02ba2a4dc4cf0c0bc45960 extends Twig_Template
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
        $__internal_1789c08290a41cbe7e07dcaff7d1233ec3f0c211ff8de669cec6147d94e38f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1789c08290a41cbe7e07dcaff7d1233ec3f0c211ff8de669cec6147d94e38f45->enter($__internal_1789c08290a41cbe7e07dcaff7d1233ec3f0c211ff8de669cec6147d94e38f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b2e664ff60fe244cfc4172b0e0515ec8d0eeb59aeba42adf73ca05823a6f82d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e664ff60fe244cfc4172b0e0515ec8d0eeb59aeba42adf73ca05823a6f82d0->enter($__internal_b2e664ff60fe244cfc4172b0e0515ec8d0eeb59aeba42adf73ca05823a6f82d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1789c08290a41cbe7e07dcaff7d1233ec3f0c211ff8de669cec6147d94e38f45->leave($__internal_1789c08290a41cbe7e07dcaff7d1233ec3f0c211ff8de669cec6147d94e38f45_prof);

        
        $__internal_b2e664ff60fe244cfc4172b0e0515ec8d0eeb59aeba42adf73ca05823a6f82d0->leave($__internal_b2e664ff60fe244cfc4172b0e0515ec8d0eeb59aeba42adf73ca05823a6f82d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_615d48eb0c867a6f67e111b304ea9b683e1d5aead2a9060a46b0f3fd3896ea35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615d48eb0c867a6f67e111b304ea9b683e1d5aead2a9060a46b0f3fd3896ea35->enter($__internal_615d48eb0c867a6f67e111b304ea9b683e1d5aead2a9060a46b0f3fd3896ea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_19df981c4ad2ea91bac5323b845dea61d8d5d1c2d79c4d2d4190c1a79595b4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19df981c4ad2ea91bac5323b845dea61d8d5d1c2d79c4d2d4190c1a79595b4b8->enter($__internal_19df981c4ad2ea91bac5323b845dea61d8d5d1c2d79c4d2d4190c1a79595b4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19df981c4ad2ea91bac5323b845dea61d8d5d1c2d79c4d2d4190c1a79595b4b8->leave($__internal_19df981c4ad2ea91bac5323b845dea61d8d5d1c2d79c4d2d4190c1a79595b4b8_prof);

        
        $__internal_615d48eb0c867a6f67e111b304ea9b683e1d5aead2a9060a46b0f3fd3896ea35->leave($__internal_615d48eb0c867a6f67e111b304ea9b683e1d5aead2a9060a46b0f3fd3896ea35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe9c7bb598ebc70957a7a1dedf3f940205e8db9834f3dfc210c635da6dd9b22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9c7bb598ebc70957a7a1dedf3f940205e8db9834f3dfc210c635da6dd9b22a->enter($__internal_fe9c7bb598ebc70957a7a1dedf3f940205e8db9834f3dfc210c635da6dd9b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a32ee3f41a931afa25699595a8ab793ec029d71432a0b4f0f0d3df2872cef29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32ee3f41a931afa25699595a8ab793ec029d71432a0b4f0f0d3df2872cef29f->enter($__internal_a32ee3f41a931afa25699595a8ab793ec029d71432a0b4f0f0d3df2872cef29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a32ee3f41a931afa25699595a8ab793ec029d71432a0b4f0f0d3df2872cef29f->leave($__internal_a32ee3f41a931afa25699595a8ab793ec029d71432a0b4f0f0d3df2872cef29f_prof);

        
        $__internal_fe9c7bb598ebc70957a7a1dedf3f940205e8db9834f3dfc210c635da6dd9b22a->leave($__internal_fe9c7bb598ebc70957a7a1dedf3f940205e8db9834f3dfc210c635da6dd9b22a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7a2ca40eb67fca6aa18d6cc5bdf1d3779df08d35f33f7ffd32ceb8e5ea50cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a2ca40eb67fca6aa18d6cc5bdf1d3779df08d35f33f7ffd32ceb8e5ea50cbd->enter($__internal_c7a2ca40eb67fca6aa18d6cc5bdf1d3779df08d35f33f7ffd32ceb8e5ea50cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b7d2a4446a06bb2cee0c79b28ed1e6306ba6852eb81fa4886eb023859a5965f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7d2a4446a06bb2cee0c79b28ed1e6306ba6852eb81fa4886eb023859a5965f->enter($__internal_2b7d2a4446a06bb2cee0c79b28ed1e6306ba6852eb81fa4886eb023859a5965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b7d2a4446a06bb2cee0c79b28ed1e6306ba6852eb81fa4886eb023859a5965f->leave($__internal_2b7d2a4446a06bb2cee0c79b28ed1e6306ba6852eb81fa4886eb023859a5965f_prof);

        
        $__internal_c7a2ca40eb67fca6aa18d6cc5bdf1d3779df08d35f33f7ffd32ceb8e5ea50cbd->leave($__internal_c7a2ca40eb67fca6aa18d6cc5bdf1d3779df08d35f33f7ffd32ceb8e5ea50cbd_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6fbda74d417a358470c0f670c9bc2c6171f9beb182692398da2eeba5e36fd608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_604b040fee86ecbee36557dcce7b2709ef25b95d4e8ccd1c3c6b28352b3e5a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604b040fee86ecbee36557dcce7b2709ef25b95d4e8ccd1c3c6b28352b3e5a23->enter($__internal_604b040fee86ecbee36557dcce7b2709ef25b95d4e8ccd1c3c6b28352b3e5a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_17c06a08c4270f815e4bb4d06c98a3a29231b503fe28012d0579143be7488727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c06a08c4270f815e4bb4d06c98a3a29231b503fe28012d0579143be7488727->enter($__internal_17c06a08c4270f815e4bb4d06c98a3a29231b503fe28012d0579143be7488727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604b040fee86ecbee36557dcce7b2709ef25b95d4e8ccd1c3c6b28352b3e5a23->leave($__internal_604b040fee86ecbee36557dcce7b2709ef25b95d4e8ccd1c3c6b28352b3e5a23_prof);

        
        $__internal_17c06a08c4270f815e4bb4d06c98a3a29231b503fe28012d0579143be7488727->leave($__internal_17c06a08c4270f815e4bb4d06c98a3a29231b503fe28012d0579143be7488727_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c879b248f8fe2d95cbed68c0294c253b1e17cc985a6289ad6f29119dd25ecad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c879b248f8fe2d95cbed68c0294c253b1e17cc985a6289ad6f29119dd25ecad->enter($__internal_8c879b248f8fe2d95cbed68c0294c253b1e17cc985a6289ad6f29119dd25ecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca3b734d4c5508e0d2db350238775612e6fd02e8c46ad57e4710ed1c062b5ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3b734d4c5508e0d2db350238775612e6fd02e8c46ad57e4710ed1c062b5ff8->enter($__internal_ca3b734d4c5508e0d2db350238775612e6fd02e8c46ad57e4710ed1c062b5ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ca3b734d4c5508e0d2db350238775612e6fd02e8c46ad57e4710ed1c062b5ff8->leave($__internal_ca3b734d4c5508e0d2db350238775612e6fd02e8c46ad57e4710ed1c062b5ff8_prof);

        
        $__internal_8c879b248f8fe2d95cbed68c0294c253b1e17cc985a6289ad6f29119dd25ecad->leave($__internal_8c879b248f8fe2d95cbed68c0294c253b1e17cc985a6289ad6f29119dd25ecad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b7271af79c4187c4c01fd7ada74966e0bb41b8a2a138f0190bdc0702feaa784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7271af79c4187c4c01fd7ada74966e0bb41b8a2a138f0190bdc0702feaa784->enter($__internal_9b7271af79c4187c4c01fd7ada74966e0bb41b8a2a138f0190bdc0702feaa784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b0cbdc7eaf75ede7f47de86f464c2d534afa94241629666366f738c96e76ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0cbdc7eaf75ede7f47de86f464c2d534afa94241629666366f738c96e76ede->enter($__internal_7b0cbdc7eaf75ede7f47de86f464c2d534afa94241629666366f738c96e76ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7b0cbdc7eaf75ede7f47de86f464c2d534afa94241629666366f738c96e76ede->leave($__internal_7b0cbdc7eaf75ede7f47de86f464c2d534afa94241629666366f738c96e76ede_prof);

        
        $__internal_9b7271af79c4187c4c01fd7ada74966e0bb41b8a2a138f0190bdc0702feaa784->leave($__internal_9b7271af79c4187c4c01fd7ada74966e0bb41b8a2a138f0190bdc0702feaa784_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6af2c7e7963ff88b874f4d30997bf4ec8fca13ea8c761d0a21e8de1a775786f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af2c7e7963ff88b874f4d30997bf4ec8fca13ea8c761d0a21e8de1a775786f5->enter($__internal_6af2c7e7963ff88b874f4d30997bf4ec8fca13ea8c761d0a21e8de1a775786f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd73a42f32ecae2f4958116b4a4be1d57161da1c88ee2d34bb02b6142e10761f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd73a42f32ecae2f4958116b4a4be1d57161da1c88ee2d34bb02b6142e10761f->enter($__internal_fd73a42f32ecae2f4958116b4a4be1d57161da1c88ee2d34bb02b6142e10761f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd73a42f32ecae2f4958116b4a4be1d57161da1c88ee2d34bb02b6142e10761f->leave($__internal_fd73a42f32ecae2f4958116b4a4be1d57161da1c88ee2d34bb02b6142e10761f_prof);

        
        $__internal_6af2c7e7963ff88b874f4d30997bf4ec8fca13ea8c761d0a21e8de1a775786f5->leave($__internal_6af2c7e7963ff88b874f4d30997bf4ec8fca13ea8c761d0a21e8de1a775786f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

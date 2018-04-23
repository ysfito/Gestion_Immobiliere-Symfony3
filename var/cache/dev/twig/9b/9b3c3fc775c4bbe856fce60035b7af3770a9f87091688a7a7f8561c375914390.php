<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58a89fcd9d1d2b389a8f887c34869fb6fac02c2738e8203a37423d5f92163395 extends Twig_Template
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
        $__internal_e6f3a0dbeec17263cb8936ea42e6864f1df5bc5c369c4d9c64244c4006e09687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f3a0dbeec17263cb8936ea42e6864f1df5bc5c369c4d9c64244c4006e09687->enter($__internal_e6f3a0dbeec17263cb8936ea42e6864f1df5bc5c369c4d9c64244c4006e09687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3339b33d8049cea418eff6aa621ca55cbf3e3ee50867ab12376b3d9ad9e82f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3339b33d8049cea418eff6aa621ca55cbf3e3ee50867ab12376b3d9ad9e82f83->enter($__internal_3339b33d8049cea418eff6aa621ca55cbf3e3ee50867ab12376b3d9ad9e82f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f3a0dbeec17263cb8936ea42e6864f1df5bc5c369c4d9c64244c4006e09687->leave($__internal_e6f3a0dbeec17263cb8936ea42e6864f1df5bc5c369c4d9c64244c4006e09687_prof);

        
        $__internal_3339b33d8049cea418eff6aa621ca55cbf3e3ee50867ab12376b3d9ad9e82f83->leave($__internal_3339b33d8049cea418eff6aa621ca55cbf3e3ee50867ab12376b3d9ad9e82f83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e1689ae4e46a127b77097ace21d903d1629fcdd48ea528ff0ce7f9e8ccdefad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1689ae4e46a127b77097ace21d903d1629fcdd48ea528ff0ce7f9e8ccdefad->enter($__internal_5e1689ae4e46a127b77097ace21d903d1629fcdd48ea528ff0ce7f9e8ccdefad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_101da022347a93a8208a406ebb2b25fdd42971238610bd33e60c89e210c59e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101da022347a93a8208a406ebb2b25fdd42971238610bd33e60c89e210c59e6d->enter($__internal_101da022347a93a8208a406ebb2b25fdd42971238610bd33e60c89e210c59e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_101da022347a93a8208a406ebb2b25fdd42971238610bd33e60c89e210c59e6d->leave($__internal_101da022347a93a8208a406ebb2b25fdd42971238610bd33e60c89e210c59e6d_prof);

        
        $__internal_5e1689ae4e46a127b77097ace21d903d1629fcdd48ea528ff0ce7f9e8ccdefad->leave($__internal_5e1689ae4e46a127b77097ace21d903d1629fcdd48ea528ff0ce7f9e8ccdefad_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff752db466f6e8617b6bd7074240174abf7550a0d4a4aeedd4cf47459f3248d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff752db466f6e8617b6bd7074240174abf7550a0d4a4aeedd4cf47459f3248d7->enter($__internal_ff752db466f6e8617b6bd7074240174abf7550a0d4a4aeedd4cf47459f3248d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d88100f50f78b3c59a6c481f33abe63581e8d15dba9edf07be8c1a7c96240e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d88100f50f78b3c59a6c481f33abe63581e8d15dba9edf07be8c1a7c96240e8->enter($__internal_3d88100f50f78b3c59a6c481f33abe63581e8d15dba9edf07be8c1a7c96240e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3d88100f50f78b3c59a6c481f33abe63581e8d15dba9edf07be8c1a7c96240e8->leave($__internal_3d88100f50f78b3c59a6c481f33abe63581e8d15dba9edf07be8c1a7c96240e8_prof);

        
        $__internal_ff752db466f6e8617b6bd7074240174abf7550a0d4a4aeedd4cf47459f3248d7->leave($__internal_ff752db466f6e8617b6bd7074240174abf7550a0d4a4aeedd4cf47459f3248d7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ddbc272560ae6086957864ae304ebb0d935150334271a00b7f5813e60fcf2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddbc272560ae6086957864ae304ebb0d935150334271a00b7f5813e60fcf2a3->enter($__internal_0ddbc272560ae6086957864ae304ebb0d935150334271a00b7f5813e60fcf2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f2a22ef4cc22466c62f73d6395bfac22fb81d704adcf49032b5f03c41a03c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2a22ef4cc22466c62f73d6395bfac22fb81d704adcf49032b5f03c41a03c8a->enter($__internal_4f2a22ef4cc22466c62f73d6395bfac22fb81d704adcf49032b5f03c41a03c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4f2a22ef4cc22466c62f73d6395bfac22fb81d704adcf49032b5f03c41a03c8a->leave($__internal_4f2a22ef4cc22466c62f73d6395bfac22fb81d704adcf49032b5f03c41a03c8a_prof);

        
        $__internal_0ddbc272560ae6086957864ae304ebb0d935150334271a00b7f5813e60fcf2a3->leave($__internal_0ddbc272560ae6086957864ae304ebb0d935150334271a00b7f5813e60fcf2a3_prof);

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

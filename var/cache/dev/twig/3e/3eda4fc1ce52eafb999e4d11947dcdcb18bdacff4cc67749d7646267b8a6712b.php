<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eece7aaf9cf4ab19829b0f59efba08cd1842ee6117ce3ce7f88922f313caca32 extends Twig_Template
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
        $__internal_76e2099f94bd8ecf78b3b92ad4d20c284596fd0cb53bba30040175082f81fb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e2099f94bd8ecf78b3b92ad4d20c284596fd0cb53bba30040175082f81fb27->enter($__internal_76e2099f94bd8ecf78b3b92ad4d20c284596fd0cb53bba30040175082f81fb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b29bd42ac9abe72139b359e195e71de70078213a8ec6935270de937432a35eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b29bd42ac9abe72139b359e195e71de70078213a8ec6935270de937432a35eb->enter($__internal_0b29bd42ac9abe72139b359e195e71de70078213a8ec6935270de937432a35eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e2099f94bd8ecf78b3b92ad4d20c284596fd0cb53bba30040175082f81fb27->leave($__internal_76e2099f94bd8ecf78b3b92ad4d20c284596fd0cb53bba30040175082f81fb27_prof);

        
        $__internal_0b29bd42ac9abe72139b359e195e71de70078213a8ec6935270de937432a35eb->leave($__internal_0b29bd42ac9abe72139b359e195e71de70078213a8ec6935270de937432a35eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_898c06c7c6415a743f5c7bc403d27065fcbda731545bad2cfbb52059907500f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898c06c7c6415a743f5c7bc403d27065fcbda731545bad2cfbb52059907500f2->enter($__internal_898c06c7c6415a743f5c7bc403d27065fcbda731545bad2cfbb52059907500f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4c81a643e204af8a67055517ed50f0c72fdf2c02e156e59a245f5412b4296669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c81a643e204af8a67055517ed50f0c72fdf2c02e156e59a245f5412b4296669->enter($__internal_4c81a643e204af8a67055517ed50f0c72fdf2c02e156e59a245f5412b4296669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c81a643e204af8a67055517ed50f0c72fdf2c02e156e59a245f5412b4296669->leave($__internal_4c81a643e204af8a67055517ed50f0c72fdf2c02e156e59a245f5412b4296669_prof);

        
        $__internal_898c06c7c6415a743f5c7bc403d27065fcbda731545bad2cfbb52059907500f2->leave($__internal_898c06c7c6415a743f5c7bc403d27065fcbda731545bad2cfbb52059907500f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07389771241e38d05dca83b5295b1ebdffc4604e4c5cb50c0b6cfcf6e436f7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07389771241e38d05dca83b5295b1ebdffc4604e4c5cb50c0b6cfcf6e436f7f2->enter($__internal_07389771241e38d05dca83b5295b1ebdffc4604e4c5cb50c0b6cfcf6e436f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc69ab06c6b7eb0b7701dfac1ef990e578c01a036ea6b64956ddb32fac273f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc69ab06c6b7eb0b7701dfac1ef990e578c01a036ea6b64956ddb32fac273f92->enter($__internal_fc69ab06c6b7eb0b7701dfac1ef990e578c01a036ea6b64956ddb32fac273f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc69ab06c6b7eb0b7701dfac1ef990e578c01a036ea6b64956ddb32fac273f92->leave($__internal_fc69ab06c6b7eb0b7701dfac1ef990e578c01a036ea6b64956ddb32fac273f92_prof);

        
        $__internal_07389771241e38d05dca83b5295b1ebdffc4604e4c5cb50c0b6cfcf6e436f7f2->leave($__internal_07389771241e38d05dca83b5295b1ebdffc4604e4c5cb50c0b6cfcf6e436f7f2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6192999c6d3322986f0e5b2e6f4f3dc2fc5b675c163059db99371a139eb5de8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6192999c6d3322986f0e5b2e6f4f3dc2fc5b675c163059db99371a139eb5de8b->enter($__internal_6192999c6d3322986f0e5b2e6f4f3dc2fc5b675c163059db99371a139eb5de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_97d056f85b40fa375f06421d3f1a3f036daacbafbf344aac2b39097810fc8914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d056f85b40fa375f06421d3f1a3f036daacbafbf344aac2b39097810fc8914->enter($__internal_97d056f85b40fa375f06421d3f1a3f036daacbafbf344aac2b39097810fc8914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97d056f85b40fa375f06421d3f1a3f036daacbafbf344aac2b39097810fc8914->leave($__internal_97d056f85b40fa375f06421d3f1a3f036daacbafbf344aac2b39097810fc8914_prof);

        
        $__internal_6192999c6d3322986f0e5b2e6f4f3dc2fc5b675c163059db99371a139eb5de8b->leave($__internal_6192999c6d3322986f0e5b2e6f4f3dc2fc5b675c163059db99371a139eb5de8b_prof);

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

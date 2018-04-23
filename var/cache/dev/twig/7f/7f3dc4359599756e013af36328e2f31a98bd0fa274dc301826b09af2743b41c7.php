<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_185d7a3b16582261a96f4433b119929272df65106d2f941cc8e1147e1bb8bf33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e9a099250acad470fd16f954f7b4bb7b971e284c28f0966ea4eb9033d42d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e9a099250acad470fd16f954f7b4bb7b971e284c28f0966ea4eb9033d42d31->enter($__internal_96e9a099250acad470fd16f954f7b4bb7b971e284c28f0966ea4eb9033d42d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d4c532978b8e7e650c0e9dec39f2c2efbd5aaa401934ade924ec9eb9a68797a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c532978b8e7e650c0e9dec39f2c2efbd5aaa401934ade924ec9eb9a68797a4->enter($__internal_d4c532978b8e7e650c0e9dec39f2c2efbd5aaa401934ade924ec9eb9a68797a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e9a099250acad470fd16f954f7b4bb7b971e284c28f0966ea4eb9033d42d31->leave($__internal_96e9a099250acad470fd16f954f7b4bb7b971e284c28f0966ea4eb9033d42d31_prof);

        
        $__internal_d4c532978b8e7e650c0e9dec39f2c2efbd5aaa401934ade924ec9eb9a68797a4->leave($__internal_d4c532978b8e7e650c0e9dec39f2c2efbd5aaa401934ade924ec9eb9a68797a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e9cf4305f0996952ed60ba9c36a0ebb5ad2f641129e30abe1ae6cc236b6c539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9cf4305f0996952ed60ba9c36a0ebb5ad2f641129e30abe1ae6cc236b6c539->enter($__internal_6e9cf4305f0996952ed60ba9c36a0ebb5ad2f641129e30abe1ae6cc236b6c539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7de1df50c23474e2eb43dcef3504c6d049d8c78dc56d44ce6bc97e4850208798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de1df50c23474e2eb43dcef3504c6d049d8c78dc56d44ce6bc97e4850208798->enter($__internal_7de1df50c23474e2eb43dcef3504c6d049d8c78dc56d44ce6bc97e4850208798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7de1df50c23474e2eb43dcef3504c6d049d8c78dc56d44ce6bc97e4850208798->leave($__internal_7de1df50c23474e2eb43dcef3504c6d049d8c78dc56d44ce6bc97e4850208798_prof);

        
        $__internal_6e9cf4305f0996952ed60ba9c36a0ebb5ad2f641129e30abe1ae6cc236b6c539->leave($__internal_6e9cf4305f0996952ed60ba9c36a0ebb5ad2f641129e30abe1ae6cc236b6c539_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_629ef3dfb9725a92b3c2ee58c6c785a99acc8e0e4841070d773155ecee5250f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629ef3dfb9725a92b3c2ee58c6c785a99acc8e0e4841070d773155ecee5250f9->enter($__internal_629ef3dfb9725a92b3c2ee58c6c785a99acc8e0e4841070d773155ecee5250f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b499a497a0399ede447f7869be0cb85db711e858c6c2fd4d046d3efe5420cd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b499a497a0399ede447f7869be0cb85db711e858c6c2fd4d046d3efe5420cd80->enter($__internal_b499a497a0399ede447f7869be0cb85db711e858c6c2fd4d046d3efe5420cd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b499a497a0399ede447f7869be0cb85db711e858c6c2fd4d046d3efe5420cd80->leave($__internal_b499a497a0399ede447f7869be0cb85db711e858c6c2fd4d046d3efe5420cd80_prof);

        
        $__internal_629ef3dfb9725a92b3c2ee58c6c785a99acc8e0e4841070d773155ecee5250f9->leave($__internal_629ef3dfb9725a92b3c2ee58c6c785a99acc8e0e4841070d773155ecee5250f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ad5ea0c5b154cc9d92e5335f85b8138bfe72ea5cdc421db8f3a1c22836fc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ad5ea0c5b154cc9d92e5335f85b8138bfe72ea5cdc421db8f3a1c22836fc15->enter($__internal_13ad5ea0c5b154cc9d92e5335f85b8138bfe72ea5cdc421db8f3a1c22836fc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c87fea9a7e8dd04f70ce3547eb3f8b61dcfd0bc9b8c927686691321d528e3e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87fea9a7e8dd04f70ce3547eb3f8b61dcfd0bc9b8c927686691321d528e3e71->enter($__internal_c87fea9a7e8dd04f70ce3547eb3f8b61dcfd0bc9b8c927686691321d528e3e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c87fea9a7e8dd04f70ce3547eb3f8b61dcfd0bc9b8c927686691321d528e3e71->leave($__internal_c87fea9a7e8dd04f70ce3547eb3f8b61dcfd0bc9b8c927686691321d528e3e71_prof);

        
        $__internal_13ad5ea0c5b154cc9d92e5335f85b8138bfe72ea5cdc421db8f3a1c22836fc15->leave($__internal_13ad5ea0c5b154cc9d92e5335f85b8138bfe72ea5cdc421db8f3a1c22836fc15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

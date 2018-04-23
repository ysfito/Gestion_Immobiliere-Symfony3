<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_84e84cc1cb91d78146469fcc4c051df56df5aa3ecc660f7290fd6eb9004de070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a4f82eedfdf2e72ba07a99161b59c1fd0902f1c31533e75080efd0a101737f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a4f82eedfdf2e72ba07a99161b59c1fd0902f1c31533e75080efd0a101737f->enter($__internal_f3a4f82eedfdf2e72ba07a99161b59c1fd0902f1c31533e75080efd0a101737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fcd45b5b7b219ad0d90b8818a14b78e8048d3a3f3f08d2b38a6d0c4db4096545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd45b5b7b219ad0d90b8818a14b78e8048d3a3f3f08d2b38a6d0c4db4096545->enter($__internal_fcd45b5b7b219ad0d90b8818a14b78e8048d3a3f3f08d2b38a6d0c4db4096545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f3a4f82eedfdf2e72ba07a99161b59c1fd0902f1c31533e75080efd0a101737f->leave($__internal_f3a4f82eedfdf2e72ba07a99161b59c1fd0902f1c31533e75080efd0a101737f_prof);

        
        $__internal_fcd45b5b7b219ad0d90b8818a14b78e8048d3a3f3f08d2b38a6d0c4db4096545->leave($__internal_fcd45b5b7b219ad0d90b8818a14b78e8048d3a3f3f08d2b38a6d0c4db4096545_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27ac3f3fc02f320f4261f3f417e135a95dd918294a272b5a4969a9b9fab2f229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ac3f3fc02f320f4261f3f417e135a95dd918294a272b5a4969a9b9fab2f229->enter($__internal_27ac3f3fc02f320f4261f3f417e135a95dd918294a272b5a4969a9b9fab2f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a971bbc1b18a4faccabaf85a673db845f92d2adebae1bde3615b6dc20e1adf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a971bbc1b18a4faccabaf85a673db845f92d2adebae1bde3615b6dc20e1adf12->enter($__internal_a971bbc1b18a4faccabaf85a673db845f92d2adebae1bde3615b6dc20e1adf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a971bbc1b18a4faccabaf85a673db845f92d2adebae1bde3615b6dc20e1adf12->leave($__internal_a971bbc1b18a4faccabaf85a673db845f92d2adebae1bde3615b6dc20e1adf12_prof);

        
        $__internal_27ac3f3fc02f320f4261f3f417e135a95dd918294a272b5a4969a9b9fab2f229->leave($__internal_27ac3f3fc02f320f4261f3f417e135a95dd918294a272b5a4969a9b9fab2f229_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_93be72f5639ad61450994ee742e18b563bf27767034c13d0f87af7c75af6582f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93be72f5639ad61450994ee742e18b563bf27767034c13d0f87af7c75af6582f->enter($__internal_93be72f5639ad61450994ee742e18b563bf27767034c13d0f87af7c75af6582f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d67e27282c50396c04bee40929ceba6ee50bb3951cd4325ffd96f883f934ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d67e27282c50396c04bee40929ceba6ee50bb3951cd4325ffd96f883f934ec9->enter($__internal_9d67e27282c50396c04bee40929ceba6ee50bb3951cd4325ffd96f883f934ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9d67e27282c50396c04bee40929ceba6ee50bb3951cd4325ffd96f883f934ec9->leave($__internal_9d67e27282c50396c04bee40929ceba6ee50bb3951cd4325ffd96f883f934ec9_prof);

        
        $__internal_93be72f5639ad61450994ee742e18b563bf27767034c13d0f87af7c75af6582f->leave($__internal_93be72f5639ad61450994ee742e18b563bf27767034c13d0f87af7c75af6582f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb28bc1b3a4b16398d2be0c3cc5d5c32fed43326a95b566e6ec82b2b33d41cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb28bc1b3a4b16398d2be0c3cc5d5c32fed43326a95b566e6ec82b2b33d41cd->enter($__internal_3bb28bc1b3a4b16398d2be0c3cc5d5c32fed43326a95b566e6ec82b2b33d41cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e5251773e6c6e72ede2a97217a257225f339b7c0a33a5893fbecaf6fbe38d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e5251773e6c6e72ede2a97217a257225f339b7c0a33a5893fbecaf6fbe38d2->enter($__internal_e0e5251773e6c6e72ede2a97217a257225f339b7c0a33a5893fbecaf6fbe38d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0e5251773e6c6e72ede2a97217a257225f339b7c0a33a5893fbecaf6fbe38d2->leave($__internal_e0e5251773e6c6e72ede2a97217a257225f339b7c0a33a5893fbecaf6fbe38d2_prof);

        
        $__internal_3bb28bc1b3a4b16398d2be0c3cc5d5c32fed43326a95b566e6ec82b2b33d41cd->leave($__internal_3bb28bc1b3a4b16398d2be0c3cc5d5c32fed43326a95b566e6ec82b2b33d41cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

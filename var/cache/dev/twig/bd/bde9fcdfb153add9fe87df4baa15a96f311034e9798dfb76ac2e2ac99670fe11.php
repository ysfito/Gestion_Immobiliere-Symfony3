<?php

/* ::base.html.twig */
class __TwigTemplate_1e8dc91375db9f9c80ac60bd50b8a945ef5803633aaf4cb5e86a72f95f217344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37215b39bddf3e028c00af621b0311711cf49d01c31044e82d3bb81f31a47e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37215b39bddf3e028c00af621b0311711cf49d01c31044e82d3bb81f31a47e99->enter($__internal_37215b39bddf3e028c00af621b0311711cf49d01c31044e82d3bb81f31a47e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b0ec79c80ce90d8203e3d4730e73402dbf29378fedf67a7659da72c7407cf928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ec79c80ce90d8203e3d4730e73402dbf29378fedf67a7659da72c7407cf928->enter($__internal_b0ec79c80ce90d8203e3d4730e73402dbf29378fedf67a7659da72c7407cf928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

      <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 55
        echo "      </head>
    
  <body >
      ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "      
    </body>
        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "
   

</html>
";
        
        $__internal_37215b39bddf3e028c00af621b0311711cf49d01c31044e82d3bb81f31a47e99->leave($__internal_37215b39bddf3e028c00af621b0311711cf49d01c31044e82d3bb81f31a47e99_prof);

        
        $__internal_b0ec79c80ce90d8203e3d4730e73402dbf29378fedf67a7659da72c7407cf928->leave($__internal_b0ec79c80ce90d8203e3d4730e73402dbf29378fedf67a7659da72c7407cf928_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2bb37fb1716f7d8b54aac0510ec57d1dbdfa1f930d2930277bb9d8e3ff020e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bb37fb1716f7d8b54aac0510ec57d1dbdfa1f930d2930277bb9d8e3ff020e2->enter($__internal_b2bb37fb1716f7d8b54aac0510ec57d1dbdfa1f930d2930277bb9d8e3ff020e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b02d5e570bafb17869eeba39d120e87cee0d555b7af12898385fd26c78044400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02d5e570bafb17869eeba39d120e87cee0d555b7af12898385fd26c78044400->enter($__internal_b02d5e570bafb17869eeba39d120e87cee0d555b7af12898385fd26c78044400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "      <meta charset=\"UTF-8\"/>
      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "     <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

   <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
";
        
        $__internal_b02d5e570bafb17869eeba39d120e87cee0d555b7af12898385fd26c78044400->leave($__internal_b02d5e570bafb17869eeba39d120e87cee0d555b7af12898385fd26c78044400_prof);

        
        $__internal_b2bb37fb1716f7d8b54aac0510ec57d1dbdfa1f930d2930277bb9d8e3ff020e2->leave($__internal_b2bb37fb1716f7d8b54aac0510ec57d1dbdfa1f930d2930277bb9d8e3ff020e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08efebff8c7cc98b64f7a27a82789884e330bf69e6db8f19cb98d4ccc688472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08efebff8c7cc98b64f7a27a82789884e330bf69e6db8f19cb98d4ccc688472->enter($__internal_f08efebff8c7cc98b64f7a27a82789884e330bf69e6db8f19cb98d4ccc688472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66cf19f402d75f509ff27c165a4156cb9a32172d1b1f39447bd451ae529b7cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cf19f402d75f509ff27c165a4156cb9a32172d1b1f39447bd451ae529b7cae->enter($__internal_66cf19f402d75f509ff27c165a4156cb9a32172d1b1f39447bd451ae529b7cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_66cf19f402d75f509ff27c165a4156cb9a32172d1b1f39447bd451ae529b7cae->leave($__internal_66cf19f402d75f509ff27c165a4156cb9a32172d1b1f39447bd451ae529b7cae_prof);

        
        $__internal_f08efebff8c7cc98b64f7a27a82789884e330bf69e6db8f19cb98d4ccc688472->leave($__internal_f08efebff8c7cc98b64f7a27a82789884e330bf69e6db8f19cb98d4ccc688472_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73119e682ab74cfad7032c7abc5f75dc0608497465b1a0144a6618e0f477306f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73119e682ab74cfad7032c7abc5f75dc0608497465b1a0144a6618e0f477306f->enter($__internal_73119e682ab74cfad7032c7abc5f75dc0608497465b1a0144a6618e0f477306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_155eba341dcee44354d31af184ce90204e631553f2d74569ab84a18cd78becb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155eba341dcee44354d31af184ce90204e631553f2d74569ab84a18cd78becb9->enter($__internal_155eba341dcee44354d31af184ce90204e631553f2d74569ab84a18cd78becb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!--===============================================================================================-->
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/favicon.png"), "html", null, true);
        echo "\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/themify/themify-icons.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/Linearicons-Free-v1.0.0/icon-font.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/elegant-font/html-css/style.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animate/animate.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/slick/slick.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/lightbox2/css/lightbox.min.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/util.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        <!--===============================================================================================-->
      
        
          ";
        
        $__internal_155eba341dcee44354d31af184ce90204e631553f2d74569ab84a18cd78becb9->leave($__internal_155eba341dcee44354d31af184ce90204e631553f2d74569ab84a18cd78becb9_prof);

        
        $__internal_73119e682ab74cfad7032c7abc5f75dc0608497465b1a0144a6618e0f477306f->leave($__internal_73119e682ab74cfad7032c7abc5f75dc0608497465b1a0144a6618e0f477306f_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaaf3a7043bd7d03e3d00e2d7b7b0004796aac69351124735d72e34ae8051cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaf3a7043bd7d03e3d00e2d7b7b0004796aac69351124735d72e34ae8051cca->enter($__internal_aaaf3a7043bd7d03e3d00e2d7b7b0004796aac69351124735d72e34ae8051cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73c7619338be8d4eafe65dedac7aac68edae39ebba0c036c89843de532c88a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c7619338be8d4eafe65dedac7aac68edae39ebba0c036c89843de532c88a7c->enter($__internal_73c7619338be8d4eafe65dedac7aac68edae39ebba0c036c89843de532c88a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "        
        
       
           
      ";
        
        $__internal_73c7619338be8d4eafe65dedac7aac68edae39ebba0c036c89843de532c88a7c->leave($__internal_73c7619338be8d4eafe65dedac7aac68edae39ebba0c036c89843de532c88a7c_prof);

        
        $__internal_aaaf3a7043bd7d03e3d00e2d7b7b0004796aac69351124735d72e34ae8051cca->leave($__internal_aaaf3a7043bd7d03e3d00e2d7b7b0004796aac69351124735d72e34ae8051cca_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_266f8bf1a96ca1c8561cce3ac56c99d04a92153e987abb728167c43fd23ac5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266f8bf1a96ca1c8561cce3ac56c99d04a92153e987abb728167c43fd23ac5ca->enter($__internal_266f8bf1a96ca1c8561cce3ac56c99d04a92153e987abb728167c43fd23ac5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86a5b452852c8681e71083c3585aa33e7c8e13d37eead743ddb57075bd70842d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a5b452852c8681e71083c3585aa33e7c8e13d37eead743ddb57075bd70842d->enter($__internal_86a5b452852c8681e71083c3585aa33e7c8e13d37eead743ddb57075bd70842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "            
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(\".selection-1\").select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: \$('#dropDownSelect1')
                });
    </script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"js/slick-custom.js\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/lightbox2/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$('.block2-btn-addcart').each(function(){
                    var nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
                    \$(this).on('click', function(){
                        swal(nameProduct, \"is added to cart !\", \"success\");
                    });
                });

                \$('.block2-btn-addwishlist').each(function(){
                    var nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
                    \$(this).on('click', function(){
                        swal(nameProduct, \"is added to wishlist !\", \"success\");
                    });
                });
    </script>

            <!--===============================================================================================-->
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

        

        ";
        
        $__internal_86a5b452852c8681e71083c3585aa33e7c8e13d37eead743ddb57075bd70842d->leave($__internal_86a5b452852c8681e71083c3585aa33e7c8e13d37eead743ddb57075bd70842d_prof);

        
        $__internal_266f8bf1a96ca1c8561cce3ac56c99d04a92153e987abb728167c43fd23ac5ca->leave($__internal_266f8bf1a96ca1c8561cce3ac56c99d04a92153e987abb728167c43fd23ac5ca_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 109,  306 => 91,  301 => 89,  296 => 87,  290 => 84,  279 => 76,  274 => 74,  270 => 73,  265 => 71,  260 => 69,  256 => 67,  247 => 66,  233 => 59,  224 => 58,  209 => 45,  205 => 44,  200 => 42,  195 => 40,  190 => 38,  185 => 36,  180 => 34,  175 => 32,  170 => 30,  165 => 28,  160 => 26,  155 => 24,  150 => 22,  145 => 20,  140 => 18,  128 => 10,  119 => 9,  101 => 7,  89 => 53,  84 => 50,  82 => 9,  77 => 7,  74 => 6,  65 => 5,  51 => 114,  49 => 66,  45 => 64,  43 => 58,  38 => 55,  36 => 5,  30 => 1,);
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
        {% block head %}
      <meta charset=\"UTF-8\"/>
      <title>{% block title %} {% endblock %}</title>

  {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!--===============================================================================================-->
        <link rel=\"icon\" type=\"image/png\" href=\"{{asset('images/icons/favicon.png')}}\"/>
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts/themify/themify-icons.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('fonts/elegant-font/html-css/style.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/animate/animate.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/css-hamburgers/hamburgers.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/animsition/css/animsition.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/select2/select2.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/daterangepicker/daterangepicker.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/slick/slick.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('vendor/lightbox2/css/lightbox.min.css')}}\">
        <!--===============================================================================================-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/util.css')}}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/main.css')}}\">
        <!--===============================================================================================-->
      
        
          {% endblock %}
     <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

   <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
{% endblock %}
      </head>
    
  <body >
      {% block body %}
        
        
       
           
      {% endblock %}
      
    </body>
        {% block javascripts %}
            
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/jquery/jquery-3.2.1.min.js')}}\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/animsition/js/animsition.min.js')}}\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/bootstrap/js/popper.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/select2/select2.min.js')}}\"></script>
            <script type=\"text/javascript\">
                \$(\".selection-1\").select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: \$('#dropDownSelect1')
                });
    </script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/slick/slick.min.js')}}\"></script>
            <script type=\"text/javascript\" src=\"js/slick-custom.js\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/countdowntime/countdowntime.js')}}\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/lightbox2/js/lightbox.min.js')}}\"></script>
            <!--===============================================================================================-->
            <script type=\"text/javascript\" src=\"{{asset('vendor/sweetalert/sweetalert.min.js')}}\"></script>
            <script type=\"text/javascript\">
                \$('.block2-btn-addcart').each(function(){
                    var nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
                    \$(this).on('click', function(){
                        swal(nameProduct, \"is added to cart !\", \"success\");
                    });
                });

                \$('.block2-btn-addwishlist').each(function(){
                    var nameProduct = \$(this).parent().parent().parent().find('.block2-name').html();
                    \$(this).on('click', function(){
                        swal(nameProduct, \"is added to wishlist !\", \"success\");
                    });
                });
    </script>

            <!--===============================================================================================-->
            <script src=\"{{asset('js/main.js')}}\"></script>

        

        {% endblock %}

   

</html>
", "::base.html.twig", "/var/www/html/Hortala/app/Resources/views/base.html.twig");
    }
}

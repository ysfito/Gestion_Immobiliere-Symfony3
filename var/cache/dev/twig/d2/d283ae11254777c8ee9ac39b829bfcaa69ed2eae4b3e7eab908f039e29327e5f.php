<?php

/* HTLImmobilierBundle:Front:catalogue.html.twig */
class __TwigTemplate_834a6910dc5538f50648756e3958f5db4378d5a18482c21cb7b862b1164b6a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutfront.html.twig", "HTLImmobilierBundle:Front:catalogue.html.twig", 1);
        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
            'imgvendre' => array($this, 'block_imgvendre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutfront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ca05018d493776630f79653c941fc2a6c84ba75a7adacba6afd008e11c829ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca05018d493776630f79653c941fc2a6c84ba75a7adacba6afd008e11c829ac->enter($__internal_6ca05018d493776630f79653c941fc2a6c84ba75a7adacba6afd008e11c829ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:catalogue.html.twig"));

        $__internal_0fc428c2b70c6279c78617414a0dbe4f780bbbac7d3409df5d68dcc0b22f2d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc428c2b70c6279c78617414a0dbe4f780bbbac7d3409df5d68dcc0b22f2d69->enter($__internal_0fc428c2b70c6279c78617414a0dbe4f780bbbac7d3409df5d68dcc0b22f2d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTLImmobilierBundle:Front:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca05018d493776630f79653c941fc2a6c84ba75a7adacba6afd008e11c829ac->leave($__internal_6ca05018d493776630f79653c941fc2a6c84ba75a7adacba6afd008e11c829ac_prof);

        
        $__internal_0fc428c2b70c6279c78617414a0dbe4f780bbbac7d3409df5d68dcc0b22f2d69->leave($__internal_0fc428c2b70c6279c78617414a0dbe4f780bbbac7d3409df5d68dcc0b22f2d69_prof);

    }

    // line 3
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_883153d8eb27316d8768e3d68dc271aa2ce285c6e65414e0cbfed7258d9313c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883153d8eb27316d8768e3d68dc271aa2ce285c6e65414e0cbfed7258d9313c9->enter($__internal_883153d8eb27316d8768e3d68dc271aa2ce285c6e65414e0cbfed7258d9313c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_c9003c26c40b0fe967348b1d954093234359e55c3e5456e8ee04e7561da94b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9003c26c40b0fe967348b1d954093234359e55c3e5456e8ee04e7561da94b8a->enter($__internal_c9003c26c40b0fe967348b1d954093234359e55c3e5456e8ee04e7561da94b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 4
        echo "    <section class=\"banner bgwhite p-t-40 p-b-40\">
        
        <div class=\"container-fluid\">
            <div class=\"row\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            echo " 
                <div class=\"col-sm-10 col-md-8 col-lg-5 m-l-r-auto\" >
                 
                    <!-- block1 -->
                    <div class=\"block2-img wrap-pic-w of-hidden pos-relative block2-labelnew thumbnail\">

                              ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 15
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "image", array()), "html", null, true);
                echo "\" alt=\"IMG-PRODUCT\">
                                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                        <div class=\"block2-overlay trans-0-4\">
                            <a href=\"#\" class=\"block2-btn-addwishlist hov-pointer trans-0-4\">
                                <i class=\"icon-wishlist icon_heart_alt\" aria-hidden=\"true\"></i>
                                <i class=\"icon-wishlist icon_heart dis-none\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"block1-wrapbtn w-size2\">
                                <!-- Button -->
                                <div class=\"block2-btn-addcart w-size1 trans-0-4\">
                                    <!-- Button -->
                                    <a class=\"flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 text-white\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
                                        Réserver
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"block2-txt p-t-20\">
                        <a href=\"product-detail.html\" class=\"block2-name dis-block s-text3 p-b-5\">
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "typeBien", array()), "libelle", array()), "html", null, true);
            echo "        
                        </a>
                     
                        <a href=\"product-detail.html\" class=\"block2-name dis-block s-text3 p-b-5 \">
                        </a>
                           ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "


                        <span class=\"block2-price m-text6 p-r-5 \">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "
                        </span>
                      
                    </div>
                    
                </div>
                    
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                    
                    <h1>Aucun Bien disponible</h1>
              
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "              

            </div>
        </div>

    </section>

";
        
        $__internal_c9003c26c40b0fe967348b1d954093234359e55c3e5456e8ee04e7561da94b8a->leave($__internal_c9003c26c40b0fe967348b1d954093234359e55c3e5456e8ee04e7561da94b8a_prof);

        
        $__internal_883153d8eb27316d8768e3d68dc271aa2ce285c6e65414e0cbfed7258d9313c9->leave($__internal_883153d8eb27316d8768e3d68dc271aa2ce285c6e65414e0cbfed7258d9313c9_prof);

    }

    // line 67
    public function block_imgvendre($context, array $blocks = array())
    {
        $__internal_3a0a027b1f8df481eac59cf78b012ed98339b17bdca6a7e3b9cdbd4e784d708b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0a027b1f8df481eac59cf78b012ed98339b17bdca6a7e3b9cdbd4e784d708b->enter($__internal_3a0a027b1f8df481eac59cf78b012ed98339b17bdca6a7e3b9cdbd4e784d708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imgvendre"));

        $__internal_3236ef9bf6cc59ce33ac2b16ab80a329a66ec58159b2e356659e8ae0e725fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3236ef9bf6cc59ce33ac2b16ab80a329a66ec58159b2e356659e8ae0e725fc7e->enter($__internal_3236ef9bf6cc59ce33ac2b16ab80a329a66ec58159b2e356659e8ae0e725fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imgvendre"));

        // line 68
        echo "\t\t

\t\t   ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 71
            echo "\t<div class=\"block4 wrap-pic-w block2-labelsale  thumbnail\">
                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 73
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "image", array()), "html", null, true);
                echo "\" alt=\"IMG-INSTAGRAM\">
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t<a href=\"#\" class=\"block4-overlay sizefull ab-t-l trans-0-4\">
\t\t\t\t\t<span class=\"block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25\">
\t\t\t\t\t\t<i class=\"icon_heart_alt fs-20 p-r-12\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"p-t-2\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "typeBien", array()), "libelle", array()), "html", null, true);
            echo " <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30\">
\t\t\t\t\t\t<p class=\"s-text10 m-b-15 h-size1 of-hidden\">
                                ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "\t\t\t\t\t\t</p>

\t\t\t\t\t\t<span class=\"s-text9\">
\t\t\t\t\t\t\t ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "              ";
        
        $__internal_3236ef9bf6cc59ce33ac2b16ab80a329a66ec58159b2e356659e8ae0e725fc7e->leave($__internal_3236ef9bf6cc59ce33ac2b16ab80a329a66ec58159b2e356659e8ae0e725fc7e_prof);

        
        $__internal_3a0a027b1f8df481eac59cf78b012ed98339b17bdca6a7e3b9cdbd4e784d708b->leave($__internal_3a0a027b1f8df481eac59cf78b012ed98339b17bdca6a7e3b9cdbd4e784d708b_prof);

    }

    public function getTemplateName()
    {
        return "HTLImmobilierBundle:Front:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 92,  214 => 86,  208 => 83,  198 => 78,  193 => 75,  183 => 73,  179 => 72,  176 => 71,  172 => 70,  168 => 68,  159 => 67,  142 => 56,  133 => 52,  120 => 44,  113 => 40,  105 => 35,  93 => 26,  82 => 17,  72 => 15,  68 => 14,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutfront.html.twig' %}

{% block catalogue %}
    <section class=\"banner bgwhite p-t-40 p-b-40\">
        
        <div class=\"container-fluid\">
            <div class=\"row\">
                {% for bien in biens %} 
                <div class=\"col-sm-10 col-md-8 col-lg-5 m-l-r-auto\" >
                 
                    <!-- block1 -->
                    <div class=\"block2-img wrap-pic-w of-hidden pos-relative block2-labelnew thumbnail\">

                              {% for img in bien.images %}
                        <img src=\"{{ asset('images/') }}{{img.image}}\" alt=\"IMG-PRODUCT\">
                                     {% endfor  %}
                        <div class=\"block2-overlay trans-0-4\">
                            <a href=\"#\" class=\"block2-btn-addwishlist hov-pointer trans-0-4\">
                                <i class=\"icon-wishlist icon_heart_alt\" aria-hidden=\"true\"></i>
                                <i class=\"icon-wishlist icon_heart dis-none\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"block1-wrapbtn w-size2\">
                                <!-- Button -->
                                <div class=\"block2-btn-addcart w-size1 trans-0-4\">
                                    <!-- Button -->
                                    <a class=\"flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 text-white\" href=\"{{path('reservation',{id: bien.id})}}\">
                                        Réserver
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"block2-txt p-t-20\">
                        <a href=\"product-detail.html\" class=\"block2-name dis-block s-text3 p-b-5\">
                                    {{bien.typeBien.libelle}}        
                        </a>
                     
                        <a href=\"product-detail.html\" class=\"block2-name dis-block s-text3 p-b-5 \">
                        </a>
                           {{bien.localite.libelle}}


                        <span class=\"block2-price m-text6 p-r-5 \">
                            {{bien.prixLocation}}
                        </span>
                      
                    </div>
                    
                </div>
                    
                {% else %}
                    
                    <h1>Aucun Bien disponible</h1>
              
                {% endfor %}
              

            </div>
        </div>

    </section>

{% endblock %}



{% block imgvendre %}
\t\t

\t\t   {% for bien in biens %}
\t<div class=\"block4 wrap-pic-w block2-labelsale  thumbnail\">
                            {% for img in bien.images %}
\t\t\t\t<img src=\"{{ asset('images/') }}{{img.image}}\" alt=\"IMG-INSTAGRAM\">
                                    {% endfor  %}
\t\t\t\t<a href=\"#\" class=\"block4-overlay sizefull ab-t-l trans-0-4\">
\t\t\t\t\t<span class=\"block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25\">
\t\t\t\t\t\t<i class=\"icon_heart_alt fs-20 p-r-12\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<span class=\"p-t-2\">{{bien.typeBien.libelle}} <br> {{bien.localite.libelle}}</span>
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30\">
\t\t\t\t\t\t<p class=\"s-text10 m-b-15 h-size1 of-hidden\">
                                {{bien.description}}\t\t\t\t\t\t</p>

\t\t\t\t\t\t<span class=\"s-text9\">
\t\t\t\t\t\t\t {{bien.prixLocation}}
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
            {% endfor  %}
              {% endblock %}

", "HTLImmobilierBundle:Front:catalogue.html.twig", "/var/www/html/Hortala/src/HTL/ImmobilierBundle/Resources/views/Front/catalogue.html.twig");
    }
}

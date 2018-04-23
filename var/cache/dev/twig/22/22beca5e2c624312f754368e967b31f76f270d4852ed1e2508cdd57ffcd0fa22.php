<?php

/* ::layoutfront.html.twig */
class __TwigTemplate_de96f66befbd3e8e7e4d993cd75d9c2aa35192c3707f7b9d2c6a8c5b26e96dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layoutfront.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'Header' => array($this, 'block_Header'),
            'slide' => array($this, 'block_slide'),
            'catalogue' => array($this, 'block_catalogue'),
            'imgvendre' => array($this, 'block_imgvendre'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a36212632bf35e1cced26c9e8fcf619845ecd7d39be9e33861e56db053f3221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a36212632bf35e1cced26c9e8fcf619845ecd7d39be9e33861e56db053f3221->enter($__internal_5a36212632bf35e1cced26c9e8fcf619845ecd7d39be9e33861e56db053f3221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutfront.html.twig"));

        $__internal_57c89cefbe055e706aa6533ddd473859cf343edd363455496d3f1628d2dd9679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c89cefbe055e706aa6533ddd473859cf343edd363455496d3f1628d2dd9679->enter($__internal_57c89cefbe055e706aa6533ddd473859cf343edd363455496d3f1628d2dd9679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutfront.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a36212632bf35e1cced26c9e8fcf619845ecd7d39be9e33861e56db053f3221->leave($__internal_5a36212632bf35e1cced26c9e8fcf619845ecd7d39be9e33861e56db053f3221_prof);

        
        $__internal_57c89cefbe055e706aa6533ddd473859cf343edd363455496d3f1628d2dd9679->leave($__internal_57c89cefbe055e706aa6533ddd473859cf343edd363455496d3f1628d2dd9679_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dda0addfdf2407ebd060b6a0df092bba0ab60b5025b30f5f1be38a0887ce85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dda0addfdf2407ebd060b6a0df092bba0ab60b5025b30f5f1be38a0887ce85b->enter($__internal_2dda0addfdf2407ebd060b6a0df092bba0ab60b5025b30f5f1be38a0887ce85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9680064a6ef86c2359186e0d8a4d6bf48b17b24eb6bcca9d261008104e17af38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9680064a6ef86c2359186e0d8a4d6bf48b17b24eb6bcca9d261008104e17af38->enter($__internal_9680064a6ef86c2359186e0d8a4d6bf48b17b24eb6bcca9d261008104e17af38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hortala IMMOBILIER";
        
        $__internal_9680064a6ef86c2359186e0d8a4d6bf48b17b24eb6bcca9d261008104e17af38->leave($__internal_9680064a6ef86c2359186e0d8a4d6bf48b17b24eb6bcca9d261008104e17af38_prof);

        
        $__internal_2dda0addfdf2407ebd060b6a0df092bba0ab60b5025b30f5f1be38a0887ce85b->leave($__internal_2dda0addfdf2407ebd060b6a0df092bba0ab60b5025b30f5f1be38a0887ce85b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_155656d73e3634a48a8c5d84fbc5d69b6087452b574fe0684936b843d42a6d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155656d73e3634a48a8c5d84fbc5d69b6087452b574fe0684936b843d42a6d83->enter($__internal_155656d73e3634a48a8c5d84fbc5d69b6087452b574fe0684936b843d42a6d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f065abf639420c146cf0d3d009cbe96595b677f7c34001739f8ac99059a1525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f065abf639420c146cf0d3d009cbe96595b677f7c34001739f8ac99059a1525->enter($__internal_3f065abf639420c146cf0d3d009cbe96595b677f7c34001739f8ac99059a1525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "      
        ";
        // line 9
        $this->displayBlock('Header', $context, $blocks);
        // line 147
        echo "     
      ";
        // line 148
        $this->displayBlock('slide', $context, $blocks);
        // line 167
        echo "

    <section class=\"banner bgwhite p-t-40 p-b-40 animsition\" id=\"location\">
      ";
        // line 170
        $this->displayBlock('catalogue', $context, $blocks);
        // line 175
        echo "      </section>      
 
 \t

    <div class=\"flex-w row animsition\" style=\"display:flex\">

    ";
        // line 181
        $this->displayBlock('imgvendre', $context, $blocks);
        // line 185
        echo "
      </div>
      
       
      ";
        // line 189
        $this->displayBlock('footer', $context, $blocks);
        // line 359
        echo "
      <!-- Back to top -->
      <div class=\"btn-back-to-top bg0-hov\" id=\"myBtn\">
        <span class=\"symbol-btn-back-to-top\">
          <i class=\"fa fa-angle-double-up\" aria-hidden=\"true\"></i>
        </span>
      </div>

      <!-- Container Selection1 -->
      <div id=\"dropDownSelect1\"></div>

  ";
        
        $__internal_3f065abf639420c146cf0d3d009cbe96595b677f7c34001739f8ac99059a1525->leave($__internal_3f065abf639420c146cf0d3d009cbe96595b677f7c34001739f8ac99059a1525_prof);

        
        $__internal_155656d73e3634a48a8c5d84fbc5d69b6087452b574fe0684936b843d42a6d83->leave($__internal_155656d73e3634a48a8c5d84fbc5d69b6087452b574fe0684936b843d42a6d83_prof);

    }

    // line 9
    public function block_Header($context, array $blocks = array())
    {
        $__internal_dfe4f052479b834afa219567c3ad85bb0f03c77579fcd4f201d11b1f7c46fd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe4f052479b834afa219567c3ad85bb0f03c77579fcd4f201d11b1f7c46fd7a->enter($__internal_dfe4f052479b834afa219567c3ad85bb0f03c77579fcd4f201d11b1f7c46fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_1ef420de3c0da248bea145d5200c769ff6b70c6625190c8d4b32ac3b3e93f0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef420de3c0da248bea145d5200c769ff6b70c6625190c8d4b32ac3b3e93f0e0->enter($__internal_1ef420de3c0da248bea145d5200c769ff6b70c6625190c8d4b32ac3b3e93f0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        // line 10
        echo "      <!-- Header -->
          <header class=\"header1 animsition\">
        <!-- Header desktop -->
        <div class=\"container-menu-header\">
          <div class=\"topbar\">
            <div class=\"topbar-social\">
              <a href=\"#\" class=\"topbar-social-item fa fa-facebook\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-instagram\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-pinterest-p\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-snapchat-ghost\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-youtube-play\"></a>
            </div>

            <span class=\"topbar-child1\">
              Un toit pour tous!
            </span>

            <div class=\"topbar-child2\">
              <span class=\"topbar-email\">
                hortala@gmail.com
              </span>
            </div>
          </div>

          <div class=\"wrap_header\">
            <!-- Logo -->
            <a href=\"index.html\" class=\"logo\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/logo.png"), "html", null, true);
        echo "\" alt=\"IMG-LOGO\">
            </a>


            

            <!-- Menu -->
            <div class=\"wrap_menu\">
              <nav class=\"menu\">
                <ul class=\"main_menu\">
                  <li>
                    <a href=\"#slider\">Acceuil</a> 
                  </li>

                  <li class=\"sale-noti\">
                    <a href=\"#avendre\">A vendre</a>
                  </li>

                  <li>
                    <a href=\"#location\">En Location</a>
                  </li>

                  <li>
                    <a href=\"#footerr\">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>

            <!-- Header Icon -->
            <div class=\"header-icons\">

            <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"#slider\">Acceuil</li>
                    </ol>
                  </nav>

                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                       <li class=\"breadcrumb-item \" aria-current=\"page\">Acceuil</li>
                      <li class=\"breadcrumb-item active\" aria-current=\"#avendre\">A vendre</li>
                    </ol>
                  </nav>

                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                     <li class=\"breadcrumb-item \" aria-current=\"page\">Acceuil</li>
                      <li class=\"breadcrumb-item\" aria-current=\"#avendre\">A vendre</li>
                      <li class=\"breadcrumb-item active\" aria-current=\"#Location\">En Location</li>
                    </ol>
                  </nav>


                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                     
                      <li class=\"breadcrumb-item active\" aria-current=\"#footer\">Contact</li>

                    </ol>
                  </nav>


              
                  
              <a href=\"#\" class=\"header-wrapicon1 dis-block\">
                  <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/icon-header-01.png"), "html", null, true);
        echo "\" class=\"header-icon1\" alt=\"ICON\">
              </a>

              <span class=\"linedivide1\"></span>

              <div class=\"header-wrapicon2\">
                

                <!-- Header cart noti -->
                <div class=\"header-cart header-dropdown\">
                  <ul class=\"header-cart-wrapitem\">
                    <li class=\"header-cart-item\">
                      <div class=\"header-cart-item-img\">
                     <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/item-cart-01.jpg"), "html", null, true);
        echo "\" alt=\"IMG\">
                      </div>
                    </li> 
                  </ul>

                  <div class=\"header-cart-buttons\">
                    <div class=\"header-cart-wrapbtn\">
                      <!-- Button -->
                      <a href=\"cart.html\" class=\"flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4\">
                        View Cart
                      </a>
                    </div>

                    <div class=\"header-cart-wrapbtn\">
                      <!-- Button -->
                      <a href=\"#\" class=\"flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4\">
                        Check Out
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



       
      </header>
 ";
        
        $__internal_1ef420de3c0da248bea145d5200c769ff6b70c6625190c8d4b32ac3b3e93f0e0->leave($__internal_1ef420de3c0da248bea145d5200c769ff6b70c6625190c8d4b32ac3b3e93f0e0_prof);

        
        $__internal_dfe4f052479b834afa219567c3ad85bb0f03c77579fcd4f201d11b1f7c46fd7a->leave($__internal_dfe4f052479b834afa219567c3ad85bb0f03c77579fcd4f201d11b1f7c46fd7a_prof);

    }

    // line 148
    public function block_slide($context, array $blocks = array())
    {
        $__internal_f68a48e0735921e8b51eb408ec1202c59443db6f95cd58b2d0b7c01a840dc11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68a48e0735921e8b51eb408ec1202c59443db6f95cd58b2d0b7c01a840dc11b->enter($__internal_f68a48e0735921e8b51eb408ec1202c59443db6f95cd58b2d0b7c01a840dc11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_e488b1aac452dd9ae70c56f23ca96d34cd8eced53adf125c8bc140b6fc67e1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e488b1aac452dd9ae70c56f23ca96d34cd8eced53adf125c8bc140b6fc67e1a6->enter($__internal_e488b1aac452dd9ae70c56f23ca96d34cd8eced53adf125c8bc140b6fc67e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 149
        echo "      <!-- Slide1 -->
        <section class=\"slide1 animsition\" id=\"slider\">
        <div class=\"wrap-slick1\" >

          <div class=\"slick1\" >

              <div class=\"item-slick1 item1-slick1\" style=\"background-image: url(";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-immobilier.png"), "html", null, true);
        echo ");box-shadow:3px 3px 3px black\">
                 
              <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
               poiuyhg
              </div>

            </div>

          </div>
        </div>
      </section>
   ";
        
        $__internal_e488b1aac452dd9ae70c56f23ca96d34cd8eced53adf125c8bc140b6fc67e1a6->leave($__internal_e488b1aac452dd9ae70c56f23ca96d34cd8eced53adf125c8bc140b6fc67e1a6_prof);

        
        $__internal_f68a48e0735921e8b51eb408ec1202c59443db6f95cd58b2d0b7c01a840dc11b->leave($__internal_f68a48e0735921e8b51eb408ec1202c59443db6f95cd58b2d0b7c01a840dc11b_prof);

    }

    // line 170
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_df18db3deb98589f34ed2b75e265aff11bd55ed5a254f323fa67ffb912c2c438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df18db3deb98589f34ed2b75e265aff11bd55ed5a254f323fa67ffb912c2c438->enter($__internal_df18db3deb98589f34ed2b75e265aff11bd55ed5a254f323fa67ffb912c2c438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_1a95e8d039c0a4b9d15c5add07ebdb815d8800c28c92a28fc2cbc169dc698abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a95e8d039c0a4b9d15c5add07ebdb815d8800c28c92a28fc2cbc169dc698abf->enter($__internal_1a95e8d039c0a4b9d15c5add07ebdb815d8800c28c92a28fc2cbc169dc698abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 171
        echo "   
     
            
   ";
        
        $__internal_1a95e8d039c0a4b9d15c5add07ebdb815d8800c28c92a28fc2cbc169dc698abf->leave($__internal_1a95e8d039c0a4b9d15c5add07ebdb815d8800c28c92a28fc2cbc169dc698abf_prof);

        
        $__internal_df18db3deb98589f34ed2b75e265aff11bd55ed5a254f323fa67ffb912c2c438->leave($__internal_df18db3deb98589f34ed2b75e265aff11bd55ed5a254f323fa67ffb912c2c438_prof);

    }

    // line 181
    public function block_imgvendre($context, array $blocks = array())
    {
        $__internal_f2b17817875f9a371345cbc376225d5b12983eb37683c06a68b48faad4f42ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b17817875f9a371345cbc376225d5b12983eb37683c06a68b48faad4f42ec9->enter($__internal_f2b17817875f9a371345cbc376225d5b12983eb37683c06a68b48faad4f42ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imgvendre"));

        $__internal_5b9f306945e207a5945b6f3bb95f67be953eb9864588fdd47321ac2dc04acb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9f306945e207a5945b6f3bb95f67be953eb9864588fdd47321ac2dc04acb81->enter($__internal_5b9f306945e207a5945b6f3bb95f67be953eb9864588fdd47321ac2dc04acb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "imgvendre"));

        // line 182
        echo "\t\t

\t\t    ";
        
        $__internal_5b9f306945e207a5945b6f3bb95f67be953eb9864588fdd47321ac2dc04acb81->leave($__internal_5b9f306945e207a5945b6f3bb95f67be953eb9864588fdd47321ac2dc04acb81_prof);

        
        $__internal_f2b17817875f9a371345cbc376225d5b12983eb37683c06a68b48faad4f42ec9->leave($__internal_f2b17817875f9a371345cbc376225d5b12983eb37683c06a68b48faad4f42ec9_prof);

    }

    // line 189
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2f52e068e590e3be836ca7978944dc3e79fae347e07c74cda1841aed6df8b2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f52e068e590e3be836ca7978944dc3e79fae347e07c74cda1841aed6df8b2f2->enter($__internal_2f52e068e590e3be836ca7978944dc3e79fae347e07c74cda1841aed6df8b2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c9283d914a5b28a9583cc578abd68d4febdad47f55d699d07d24b2767a88444f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9283d914a5b28a9583cc578abd68d4febdad47f55d699d07d24b2767a88444f->enter($__internal_c9283d914a5b28a9583cc578abd68d4febdad47f55d699d07d24b2767a88444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 190
        echo "      <!-- Footer -->
        <footer class=\"bg6 p-t-45 p-b-43 p-l-45 p-r-45 animsition\" id=\"footerr\">
        <div class=\"flex-w p-b-90\">
          <div class=\"w-size6 p-t-30 p-l-15 p-r-15 respon3\">
            <h4 class=\"s-text12 p-b-30\">
              GET IN TOUCH
            </h4>

            <div>
              <p class=\"s-text7 w-size27\">
                Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
              </p>

              <div class=\"flex-m p-t-30\">
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-facebook\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-instagram\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-pinterest-p\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-snapchat-ghost\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-youtube-play\"></a>
              </div>
            </div>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Categories
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Men
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Women
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Dresses
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Sunglasses
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Links
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Search
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  About Us
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Contact Us
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Returns
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Help
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Track Order
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Returns
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Shipping
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  FAQs
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size8 p-t-30 p-l-15 p-r-15 respon3\">
            <h4 class=\"s-text12 p-b-30\">
              Newsletter
            </h4>

            <form>
              <div class=\"effect1 w-size9\">
                <input class=\"s-text7 bg6 w-full p-b-5\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
                <span class=\"effect1-line\"></span>
              </div>

              <div class=\"w-size2 p-t-20\">
                <!-- Button -->
                <button class=\"flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4\">
                  Subscribe
                </button>
              </div>

            </form>
          </div>
        </div>

        <div class=\"t-center p-l-15 p-r-15\">
          <a href=\"#\">
            <img class=\"h-size2\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/paypal.png"), "html", null, true);
        echo "\" alt=\"IMG-PAYPAL\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/visa.png"), "html", null, true);
        echo "\" alt=\"IMG-VISA\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/mastercard.png"), "html", null, true);
        echo "\" alt=\"IMG-MASTERCARD\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/express.png"), "html", null, true);
        echo "\" alt=\"IMG-EXPRESS\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/discover.png"), "html", null, true);
        echo "\" alt=\"IMG-DISCOVER\">
          </a>

          <div class=\"t-center s-text8 p-t-20\">
            Copyright © 2018 All rights reserved. | Horatala<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
          </div>
        </div>
      </footer>

      ";
        
        $__internal_c9283d914a5b28a9583cc578abd68d4febdad47f55d699d07d24b2767a88444f->leave($__internal_c9283d914a5b28a9583cc578abd68d4febdad47f55d699d07d24b2767a88444f_prof);

        
        $__internal_2f52e068e590e3be836ca7978944dc3e79fae347e07c74cda1841aed6df8b2f2->leave($__internal_2f52e068e590e3be836ca7978944dc3e79fae347e07c74cda1841aed6df8b2f2_prof);

    }

    public function getTemplateName()
    {
        return "::layoutfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 349,  550 => 345,  543 => 341,  536 => 337,  529 => 333,  384 => 190,  375 => 189,  363 => 182,  354 => 181,  341 => 171,  332 => 170,  310 => 155,  302 => 149,  293 => 148,  252 => 116,  236 => 103,  167 => 37,  138 => 10,  129 => 9,  108 => 359,  106 => 189,  100 => 185,  98 => 181,  90 => 175,  88 => 170,  83 => 167,  81 => 148,  78 => 147,  76 => 9,  73 => 8,  64 => 7,  46 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}


        {% block title %}Hortala IMMOBILIER{% endblock %}


  {% block body %}
      
        {% block Header %}
      <!-- Header -->
          <header class=\"header1 animsition\">
        <!-- Header desktop -->
        <div class=\"container-menu-header\">
          <div class=\"topbar\">
            <div class=\"topbar-social\">
              <a href=\"#\" class=\"topbar-social-item fa fa-facebook\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-instagram\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-pinterest-p\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-snapchat-ghost\"></a>
              <a href=\"#\" class=\"topbar-social-item fa fa-youtube-play\"></a>
            </div>

            <span class=\"topbar-child1\">
              Un toit pour tous!
            </span>

            <div class=\"topbar-child2\">
              <span class=\"topbar-email\">
                hortala@gmail.com
              </span>
            </div>
          </div>

          <div class=\"wrap_header\">
            <!-- Logo -->
            <a href=\"index.html\" class=\"logo\">
                <img src=\"{{asset('images/icons/logo.png')}}\" alt=\"IMG-LOGO\">
            </a>


            

            <!-- Menu -->
            <div class=\"wrap_menu\">
              <nav class=\"menu\">
                <ul class=\"main_menu\">
                  <li>
                    <a href=\"#slider\">Acceuil</a> 
                  </li>

                  <li class=\"sale-noti\">
                    <a href=\"#avendre\">A vendre</a>
                  </li>

                  <li>
                    <a href=\"#location\">En Location</a>
                  </li>

                  <li>
                    <a href=\"#footerr\">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>

            <!-- Header Icon -->
            <div class=\"header-icons\">

            <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item active\" aria-current=\"#slider\">Acceuil</li>
                    </ol>
                  </nav>

                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                       <li class=\"breadcrumb-item \" aria-current=\"page\">Acceuil</li>
                      <li class=\"breadcrumb-item active\" aria-current=\"#avendre\">A vendre</li>
                    </ol>
                  </nav>

                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                     <li class=\"breadcrumb-item \" aria-current=\"page\">Acceuil</li>
                      <li class=\"breadcrumb-item\" aria-current=\"#avendre\">A vendre</li>
                      <li class=\"breadcrumb-item active\" aria-current=\"#Location\">En Location</li>
                    </ol>
                  </nav>


                  <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                     
                      <li class=\"breadcrumb-item active\" aria-current=\"#footer\">Contact</li>

                    </ol>
                  </nav>


              
                  
              <a href=\"#\" class=\"header-wrapicon1 dis-block\">
                  <img src=\"{{asset('images/icons/icon-header-01.png')}}\" class=\"header-icon1\" alt=\"ICON\">
              </a>

              <span class=\"linedivide1\"></span>

              <div class=\"header-wrapicon2\">
                

                <!-- Header cart noti -->
                <div class=\"header-cart header-dropdown\">
                  <ul class=\"header-cart-wrapitem\">
                    <li class=\"header-cart-item\">
                      <div class=\"header-cart-item-img\">
                     <img src=\"{{asset('images/item-cart-01.jpg')}}\" alt=\"IMG\">
                      </div>
                    </li> 
                  </ul>

                  <div class=\"header-cart-buttons\">
                    <div class=\"header-cart-wrapbtn\">
                      <!-- Button -->
                      <a href=\"cart.html\" class=\"flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4\">
                        View Cart
                      </a>
                    </div>

                    <div class=\"header-cart-wrapbtn\">
                      <!-- Button -->
                      <a href=\"#\" class=\"flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4\">
                        Check Out
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



       
      </header>
 {% endblock %}
     
      {% block slide %}
      <!-- Slide1 -->
        <section class=\"slide1 animsition\" id=\"slider\">
        <div class=\"wrap-slick1\" >

          <div class=\"slick1\" >

              <div class=\"item-slick1 item1-slick1\" style=\"background-image: url({{asset('images/logo-immobilier.png')}});box-shadow:3px 3px 3px black\">
                 
              <div class=\"wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170\">
               poiuyhg
              </div>

            </div>

          </div>
        </div>
      </section>
   {% endblock %}


    <section class=\"banner bgwhite p-t-40 p-b-40 animsition\" id=\"location\">
      {% block catalogue %}
   
     
            
   {% endblock %}
      </section>      
 
 \t

    <div class=\"flex-w row animsition\" style=\"display:flex\">

    {% block imgvendre %}
\t\t

\t\t    {% endblock %}

      </div>
      
       
      {% block footer %}
      <!-- Footer -->
        <footer class=\"bg6 p-t-45 p-b-43 p-l-45 p-r-45 animsition\" id=\"footerr\">
        <div class=\"flex-w p-b-90\">
          <div class=\"w-size6 p-t-30 p-l-15 p-r-15 respon3\">
            <h4 class=\"s-text12 p-b-30\">
              GET IN TOUCH
            </h4>

            <div>
              <p class=\"s-text7 w-size27\">
                Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
              </p>

              <div class=\"flex-m p-t-30\">
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-facebook\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-instagram\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-pinterest-p\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-snapchat-ghost\"></a>
                <a href=\"#\" class=\"fs-18 color1 p-r-20 fa fa-youtube-play\"></a>
              </div>
            </div>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Categories
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Men
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Women
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Dresses
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Sunglasses
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Links
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Search
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  About Us
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Contact Us
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Returns
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size7 p-t-30 p-l-15 p-r-15 respon4\">
            <h4 class=\"s-text12 p-b-30\">
              Help
            </h4>

            <ul>
              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Track Order
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Returns
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  Shipping
                </a>
              </li>

              <li class=\"p-b-9\">
                <a href=\"#\" class=\"s-text7\">
                  FAQs
                </a>
              </li>
            </ul>
          </div>

          <div class=\"w-size8 p-t-30 p-l-15 p-r-15 respon3\">
            <h4 class=\"s-text12 p-b-30\">
              Newsletter
            </h4>

            <form>
              <div class=\"effect1 w-size9\">
                <input class=\"s-text7 bg6 w-full p-b-5\" type=\"text\" name=\"email\" placeholder=\"email@example.com\">
                <span class=\"effect1-line\"></span>
              </div>

              <div class=\"w-size2 p-t-20\">
                <!-- Button -->
                <button class=\"flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4\">
                  Subscribe
                </button>
              </div>

            </form>
          </div>
        </div>

        <div class=\"t-center p-l-15 p-r-15\">
          <a href=\"#\">
            <img class=\"h-size2\" src=\"{{asset('images/icons/paypal.png')}}\" alt=\"IMG-PAYPAL\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"{{asset('images/icons/visa.png')}}\" alt=\"IMG-VISA\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"{{asset('images/icons/mastercard.png')}}\" alt=\"IMG-MASTERCARD\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"{{asset('images/icons/express.png')}}\" alt=\"IMG-EXPRESS\">
          </a>

          <a href=\"#\">
            <img class=\"h-size2\" src=\"{{asset('images/icons/discover.png')}}\" alt=\"IMG-DISCOVER\">
          </a>

          <div class=\"t-center s-text8 p-t-20\">
            Copyright © 2018 All rights reserved. | Horatala<i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
          </div>
        </div>
      </footer>

      {% endblock %}

      <!-- Back to top -->
      <div class=\"btn-back-to-top bg0-hov\" id=\"myBtn\">
        <span class=\"symbol-btn-back-to-top\">
          <i class=\"fa fa-angle-double-up\" aria-hidden=\"true\"></i>
        </span>
      </div>

      <!-- Container Selection1 -->
      <div id=\"dropDownSelect1\"></div>

  {% endblock %} 

", "::layoutfront.html.twig", "/var/www/html/Hortala/app/Resources/views/layoutfront.html.twig");
    }
}

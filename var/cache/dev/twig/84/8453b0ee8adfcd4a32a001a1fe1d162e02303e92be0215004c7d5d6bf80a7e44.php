<?php

/* base/base.html.twig */
class __TwigTemplate_a4d10c4945e135778847cfb06b90bc48e0a388a786ac3e3a63ab113ab0b90943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
            'article' => array($this, 'block_article'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bcaba58d1c369df59888ebfbfd36d16f2dfab8734cb0e8bfa9968259a1de189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcaba58d1c369df59888ebfbfd36d16f2dfab8734cb0e8bfa9968259a1de189->enter($__internal_7bcaba58d1c369df59888ebfbfd36d16f2dfab8734cb0e8bfa9968259a1de189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_510af6fa11598f5f0d78b42e0de168d8aa0f31d3cb6e928114998aae0cd2c5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510af6fa11598f5f0d78b42e0de168d8aa0f31d3cb6e928114998aae0cd2c5bf->enter($__internal_510af6fa11598f5f0d78b42e0de168d8aa0f31d3cb6e928114998aae0cd2c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
";
        // line 4
        $this->displayBlock('html', $context, $blocks);
        // line 109
        echo "


<!-- <div class=\"dropdown\">
  <button class=\"dropbtn\">Dropdown</button>
  <div class=\"dropdown-content\">
    <a href=\"#\">Link 1</a>
    <a href=\"#\">Link 2</a>
    <a href=\"#\">Link 3</a>
  </div>
</div>  -->
";
        
        $__internal_7bcaba58d1c369df59888ebfbfd36d16f2dfab8734cb0e8bfa9968259a1de189->leave($__internal_7bcaba58d1c369df59888ebfbfd36d16f2dfab8734cb0e8bfa9968259a1de189_prof);

        
        $__internal_510af6fa11598f5f0d78b42e0de168d8aa0f31d3cb6e928114998aae0cd2c5bf->leave($__internal_510af6fa11598f5f0d78b42e0de168d8aa0f31d3cb6e928114998aae0cd2c5bf_prof);

    }

    // line 4
    public function block_html($context, array $blocks = array())
    {
        $__internal_5eea3cfbaece99de72aaf8250b9e7b8aa49100d12c4e4e2cf951c507c3110c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eea3cfbaece99de72aaf8250b9e7b8aa49100d12c4e4e2cf951c507c3110c4c->enter($__internal_5eea3cfbaece99de72aaf8250b9e7b8aa49100d12c4e4e2cf951c507c3110c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_ebff7cb0627070b30696dd424e043c5e3cfce3ddb8eedff12bf817cf72e8546c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebff7cb0627070b30696dd424e043c5e3cfce3ddb8eedff12bf817cf72e8546c->enter($__internal_ebff7cb0627070b30696dd424e043c5e3cfce3ddb8eedff12bf817cf72e8546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 5
        echo "<html>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "
</html>
";
        
        $__internal_ebff7cb0627070b30696dd424e043c5e3cfce3ddb8eedff12bf817cf72e8546c->leave($__internal_ebff7cb0627070b30696dd424e043c5e3cfce3ddb8eedff12bf817cf72e8546c_prof);

        
        $__internal_5eea3cfbaece99de72aaf8250b9e7b8aa49100d12c4e4e2cf951c507c3110c4c->leave($__internal_5eea3cfbaece99de72aaf8250b9e7b8aa49100d12c4e4e2cf951c507c3110c4c_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_70d11cde76c2a4834f6787c3fcbaaa6748911d4e708ff4d3916ac65c11110c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d11cde76c2a4834f6787c3fcbaaa6748911d4e708ff4d3916ac65c11110c2b->enter($__internal_70d11cde76c2a4834f6787c3fcbaaa6748911d4e708ff4d3916ac65c11110c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cdbca80d422e442016c3fc2a75af0a4e13f270cc7bf970665f2475bc6c073f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbca80d422e442016c3fc2a75af0a4e13f270cc7bf970665f2475bc6c073f00->enter($__internal_cdbca80d422e442016c3fc2a75af0a4e13f270cc7bf970665f2475bc6c073f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "    </head>
    ";
        
        $__internal_cdbca80d422e442016c3fc2a75af0a4e13f270cc7bf970665f2475bc6c073f00->leave($__internal_cdbca80d422e442016c3fc2a75af0a4e13f270cc7bf970665f2475bc6c073f00_prof);

        
        $__internal_70d11cde76c2a4834f6787c3fcbaaa6748911d4e708ff4d3916ac65c11110c2b->leave($__internal_70d11cde76c2a4834f6787c3fcbaaa6748911d4e708ff4d3916ac65c11110c2b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a2b764e62df858c918b40624963d1260111cde13e97003e703cb3c2dfa41dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2b764e62df858c918b40624963d1260111cde13e97003e703cb3c2dfa41dba->enter($__internal_9a2b764e62df858c918b40624963d1260111cde13e97003e703cb3c2dfa41dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_988793a93ac22467923be3d41076082040cb4e16dfdb35db91800fbd532a7e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988793a93ac22467923be3d41076082040cb4e16dfdb35db91800fbd532a7e77->enter($__internal_988793a93ac22467923be3d41076082040cb4e16dfdb35db91800fbd532a7e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Éthylopédia";
        
        $__internal_988793a93ac22467923be3d41076082040cb4e16dfdb35db91800fbd532a7e77->leave($__internal_988793a93ac22467923be3d41076082040cb4e16dfdb35db91800fbd532a7e77_prof);

        
        $__internal_9a2b764e62df858c918b40624963d1260111cde13e97003e703cb3c2dfa41dba->leave($__internal_9a2b764e62df858c918b40624963d1260111cde13e97003e703cb3c2dfa41dba_prof);

    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        $__internal_60ad8ce38607a100e08feb4d99274e2b0c78ddc1ef61d7766d50d253179742eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ad8ce38607a100e08feb4d99274e2b0c78ddc1ef61d7766d50d253179742eb->enter($__internal_60ad8ce38607a100e08feb4d99274e2b0c78ddc1ef61d7766d50d253179742eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f9d8bd74ccfbe0fbaec373812e8aa089a2a5a9a1a9590c5c89c604da3154c699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d8bd74ccfbe0fbaec373812e8aa089a2a5a9a1a9590c5c89c604da3154c699->enter($__internal_f9d8bd74ccfbe0fbaec373812e8aa089a2a5a9a1a9590c5c89c604da3154c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 11
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"/script/bar.min.js\"></script>

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/img_site/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/img_site/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/img_site/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/img_site/site.webmanifest\">
        <link rel=\"mask-icon\" href=\"/img_site/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">


        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/reset.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/simplegrid.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Poiret+One\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
        ";
        
        $__internal_f9d8bd74ccfbe0fbaec373812e8aa089a2a5a9a1a9590c5c89c604da3154c699->leave($__internal_f9d8bd74ccfbe0fbaec373812e8aa089a2a5a9a1a9590c5c89c604da3154c699_prof);

        
        $__internal_60ad8ce38607a100e08feb4d99274e2b0c78ddc1ef61d7766d50d253179742eb->leave($__internal_60ad8ce38607a100e08feb4d99274e2b0c78ddc1ef61d7766d50d253179742eb_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_d738259e334e38d22b6bdb0295f1fdac966de979cf9f39e8d0e19e5ca57e5045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d738259e334e38d22b6bdb0295f1fdac966de979cf9f39e8d0e19e5ca57e5045->enter($__internal_d738259e334e38d22b6bdb0295f1fdac966de979cf9f39e8d0e19e5ca57e5045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8d483e68ab06c4d42ee2886792c32d00875f99133bbcaede399f06038451749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d483e68ab06c4d42ee2886792c32d00875f99133bbcaede399f06038451749->enter($__internal_e8d483e68ab06c4d42ee2886792c32d00875f99133bbcaede399f06038451749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <body>
      ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "        <main>
        ";
        // line 53
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "        </main>
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        echo "    </body>
    ";
        
        $__internal_e8d483e68ab06c4d42ee2886792c32d00875f99133bbcaede399f06038451749->leave($__internal_e8d483e68ab06c4d42ee2886792c32d00875f99133bbcaede399f06038451749_prof);

        
        $__internal_d738259e334e38d22b6bdb0295f1fdac966de979cf9f39e8d0e19e5ca57e5045->leave($__internal_d738259e334e38d22b6bdb0295f1fdac966de979cf9f39e8d0e19e5ca57e5045_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_fc21fa6b781193ed7e5c94adae76b26cf94abc2d3c7eb3f574658903396ec714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc21fa6b781193ed7e5c94adae76b26cf94abc2d3c7eb3f574658903396ec714->enter($__internal_fc21fa6b781193ed7e5c94adae76b26cf94abc2d3c7eb3f574658903396ec714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a9543fe59d9a01c4f93c68e814b06ce7bc579f5a26fb00ea76d1cf26315b8b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9543fe59d9a01c4f93c68e814b06ce7bc579f5a26fb00ea76d1cf26315b8b73->enter($__internal_a9543fe59d9a01c4f93c68e814b06ce7bc579f5a26fb00ea76d1cf26315b8b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "        <header>
            <div class=\"bandeau\">
              <h1><div class=\"titre\">Éthylopédia</div></h1>
            </div>

            <!-- rajouter block login/inscription -->
                ";
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 50
        echo "        </header>
        ";
        
        $__internal_a9543fe59d9a01c4f93c68e814b06ce7bc579f5a26fb00ea76d1cf26315b8b73->leave($__internal_a9543fe59d9a01c4f93c68e814b06ce7bc579f5a26fb00ea76d1cf26315b8b73_prof);

        
        $__internal_fc21fa6b781193ed7e5c94adae76b26cf94abc2d3c7eb3f574658903396ec714->leave($__internal_fc21fa6b781193ed7e5c94adae76b26cf94abc2d3c7eb3f574658903396ec714_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e8d3075868f6f2281ba7fcb0f4a7f1d1ab47b2f738ffe1b59c0f009de299c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8d3075868f6f2281ba7fcb0f4a7f1d1ab47b2f738ffe1b59c0f009de299c0a->enter($__internal_8e8d3075868f6f2281ba7fcb0f4a7f1d1ab47b2f738ffe1b59c0f009de299c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6e8d58fbdb3d22ac3208b01dd0096726c2b80bc3a5e7f21104f8ebf400a77c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8d58fbdb3d22ac3208b01dd0096726c2b80bc3a5e7f21104f8ebf400a77c71->enter($__internal_6e8d58fbdb3d22ac3208b01dd0096726c2b80bc3a5e7f21104f8ebf400a77c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "                <nav id=\"nav_bar\">
                    <ul class=\"menu\">
                        <li><img class=\"logo\" src=\"/img_site/Winer.png\" alt=\"winer\" /></li>
                        <li><a href=\"/\" class=\"menu\">Accueil</a></li>
                        <li><a href=\"/alcool\">Alcool</a></li>
                    </ul>
                </nav>
                ";
        
        $__internal_6e8d58fbdb3d22ac3208b01dd0096726c2b80bc3a5e7f21104f8ebf400a77c71->leave($__internal_6e8d58fbdb3d22ac3208b01dd0096726c2b80bc3a5e7f21104f8ebf400a77c71_prof);

        
        $__internal_8e8d3075868f6f2281ba7fcb0f4a7f1d1ab47b2f738ffe1b59c0f009de299c0a->leave($__internal_8e8d3075868f6f2281ba7fcb0f4a7f1d1ab47b2f738ffe1b59c0f009de299c0a_prof);

    }

    // line 53
    public function block_main($context, array $blocks = array())
    {
        $__internal_b70d5c2aadf83f7a97fb4cbaeed74144f500d2bb5937bc544676481de317a148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70d5c2aadf83f7a97fb4cbaeed74144f500d2bb5937bc544676481de317a148->enter($__internal_b70d5c2aadf83f7a97fb4cbaeed74144f500d2bb5937bc544676481de317a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_204bd5aa96bdb106c77461d206dd573a96bb705233cc18d62a2f4a812a505634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204bd5aa96bdb106c77461d206dd573a96bb705233cc18d62a2f4a812a505634->enter($__internal_204bd5aa96bdb106c77461d206dd573a96bb705233cc18d62a2f4a812a505634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 54
        echo "          <div class=\"grid grid-pad\">
            <div class=\"col-8-12\">
              ";
        // line 56
        $this->displayBlock('article', $context, $blocks);
        // line 58
        echo "            </div>
              <aside>
                ";
        // line 60
        $this->displayBlock('sidebar', $context, $blocks);
        // line 73
        echo "              </aside>
          </div>
        ";
        
        $__internal_204bd5aa96bdb106c77461d206dd573a96bb705233cc18d62a2f4a812a505634->leave($__internal_204bd5aa96bdb106c77461d206dd573a96bb705233cc18d62a2f4a812a505634_prof);

        
        $__internal_b70d5c2aadf83f7a97fb4cbaeed74144f500d2bb5937bc544676481de317a148->leave($__internal_b70d5c2aadf83f7a97fb4cbaeed74144f500d2bb5937bc544676481de317a148_prof);

    }

    // line 56
    public function block_article($context, array $blocks = array())
    {
        $__internal_7c133347015b82a05b3a3b10e7d7c1b0db104424383dd11484b842928828fa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c133347015b82a05b3a3b10e7d7c1b0db104424383dd11484b842928828fa50->enter($__internal_7c133347015b82a05b3a3b10e7d7c1b0db104424383dd11484b842928828fa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_0c65ad7a46add359a3090e7e922f4fce72b20c5a8d322cb192991c057686072a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c65ad7a46add359a3090e7e922f4fce72b20c5a8d322cb192991c057686072a->enter($__internal_0c65ad7a46add359a3090e7e922f4fce72b20c5a8d322cb192991c057686072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 57
        echo "              ";
        
        $__internal_0c65ad7a46add359a3090e7e922f4fce72b20c5a8d322cb192991c057686072a->leave($__internal_0c65ad7a46add359a3090e7e922f4fce72b20c5a8d322cb192991c057686072a_prof);

        
        $__internal_7c133347015b82a05b3a3b10e7d7c1b0db104424383dd11484b842928828fa50->leave($__internal_7c133347015b82a05b3a3b10e7d7c1b0db104424383dd11484b842928828fa50_prof);

    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65443d02fcec23eed08f8a6da8d87be66d09890f5735608dd5b003e9981739d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65443d02fcec23eed08f8a6da8d87be66d09890f5735608dd5b003e9981739d0->enter($__internal_65443d02fcec23eed08f8a6da8d87be66d09890f5735608dd5b003e9981739d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_b6cbc19d675f5f09f8c921737978d2592fca64c64f49692ca9535f5e3c731ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cbc19d675f5f09f8c921737978d2592fca64c64f49692ca9535f5e3c731ead->enter($__internal_b6cbc19d675f5f09f8c921737978d2592fca64c64f49692ca9535f5e3c731ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 61
        echo "                  <div class=\"col-4-12\">
                    <div class=\"sidebar\">
                      <p class=\"titre-top\">TOP 5 ALCOOLS</p>

                      <div class=\"top\">
                          ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 66, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 67
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("alcool_show", array("name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "name", array()))), "html", null, true);
            echo "\"><img src=\"/img_alcool/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["alc"], "imglink", array()), "html", null, true);
            echo "\" class=\"top-img\"></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                      </div>
                    </div>
                  </div>
                ";
        
        $__internal_b6cbc19d675f5f09f8c921737978d2592fca64c64f49692ca9535f5e3c731ead->leave($__internal_b6cbc19d675f5f09f8c921737978d2592fca64c64f49692ca9535f5e3c731ead_prof);

        
        $__internal_65443d02fcec23eed08f8a6da8d87be66d09890f5735608dd5b003e9981739d0->leave($__internal_65443d02fcec23eed08f8a6da8d87be66d09890f5735608dd5b003e9981739d0_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e8b80392435d439a39e3eb2baf9c5e262f6d247f9d41bec9b1f104b34391fbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b80392435d439a39e3eb2baf9c5e262f6d247f9d41bec9b1f104b34391fbd3->enter($__internal_e8b80392435d439a39e3eb2baf9c5e262f6d247f9d41bec9b1f104b34391fbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_927d49ca324da778f2f375ea27f1c0b3a0d46380ffcd431c34cdef6d1c88f164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927d49ca324da778f2f375ea27f1c0b3a0d46380ffcd431c34cdef6d1c88f164->enter($__internal_927d49ca324da778f2f375ea27f1c0b3a0d46380ffcd431c34cdef6d1c88f164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "        <footer>

            <div class=\"footer\">
                <div class=\"grid grid-pad\">
                <div class=\"col-1-3\">
                    <p>©Éthylopédia</p>
                </div>
                <div class=\"col-1-3\">
                    <h6>Nous Suivre...</h6>
                        <a href=\"http://facebook.com\" title=\"facebook\"><img class=\"reseau\" src=\"/img_site/facebook.png\" alt=\"facebook\"></a>
                        <a href=\"http://twitter.com\" title=\"twitter\"><img class=\"reseau\" src=\"/img_site/twitter.png\" alt=\"twitter\"></a>
                        <a href=\"http://instagram.com\" title=\"instagram\"><img class=\"reseau\" src=\"/img_site/instagram.png\" alt=\"instagram\"></a>
                </div>
                <div class=\"col-1-3\">
                    <h6>Contact</h6>
                    <ul>
                        <li>Chemin du Thil</li>
                        <li>80025 Amiens</li>
                        <li>03.22.82.72.72</li>
                        <li><a href=\"contact.html\" title=\"Contact\" class=\"detail\">Plus de détails...</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </footer>
        ";
        
        $__internal_927d49ca324da778f2f375ea27f1c0b3a0d46380ffcd431c34cdef6d1c88f164->leave($__internal_927d49ca324da778f2f375ea27f1c0b3a0d46380ffcd431c34cdef6d1c88f164_prof);

        
        $__internal_e8b80392435d439a39e3eb2baf9c5e262f6d247f9d41bec9b1f104b34391fbd3->leave($__internal_e8b80392435d439a39e3eb2baf9c5e262f6d247f9d41bec9b1f104b34391fbd3_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  374 => 78,  365 => 77,  352 => 69,  341 => 67,  337 => 66,  330 => 61,  321 => 60,  311 => 57,  302 => 56,  290 => 73,  288 => 60,  284 => 58,  282 => 56,  278 => 54,  269 => 53,  252 => 42,  243 => 41,  232 => 50,  230 => 41,  222 => 35,  213 => 34,  202 => 104,  200 => 77,  197 => 76,  195 => 53,  192 => 52,  190 => 34,  187 => 33,  178 => 32,  151 => 11,  142 => 10,  124 => 9,  113 => 29,  111 => 10,  107 => 9,  103 => 7,  94 => 6,  82 => 106,  80 => 32,  77 => 31,  75 => 6,  72 => 5,  63 => 4,  42 => 109,  40 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/base/base.html.twig #}

<!DOCTYPE html>
{% block html %}
<html>
    {% block head %}
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Éthylopédia{% endblock %}</title>
        {% block css %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"/script/bar.min.js\"></script>

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/img_site/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/img_site/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/img_site/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"/img_site/site.webmanifest\">
        <link rel=\"mask-icon\" href=\"/img_site/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#da532c\">
        <meta name=\"theme-color\" content=\"#ffffff\">


        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/reset.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/simplegrid.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Poiret+One\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    {% endblock %}

    {% block body %}
    <body>
      {% block header %}
        <header>
            <div class=\"bandeau\">
              <h1><div class=\"titre\">Éthylopédia</div></h1>
            </div>

            <!-- rajouter block login/inscription -->
                {% block menu %}
                <nav id=\"nav_bar\">
                    <ul class=\"menu\">
                        <li><img class=\"logo\" src=\"/img_site/Winer.png\" alt=\"winer\" /></li>
                        <li><a href=\"/\" class=\"menu\">Accueil</a></li>
                        <li><a href=\"/alcool\">Alcool</a></li>
                    </ul>
                </nav>
                {% endblock %}
        </header>
        {% endblock %}
        <main>
        {% block main %}
          <div class=\"grid grid-pad\">
            <div class=\"col-8-12\">
              {% block article %}
              {% endblock %}
            </div>
              <aside>
                {% block sidebar %}
                  <div class=\"col-4-12\">
                    <div class=\"sidebar\">
                      <p class=\"titre-top\">TOP 5 ALCOOLS</p>

                      <div class=\"top\">
                          {% for alc in alcools %}
                            <a href=\"{{ path('alcool_show', {'name': alc.name }) }}\"><img src=\"/img_alcool/{{ alc.imglink }}\" class=\"top-img\"></a>
                          {% endfor %}
                      </div>
                    </div>
                  </div>
                {% endblock %}
              </aside>
          </div>
        {% endblock %}
        </main>
        {% block footer %}
        <footer>

            <div class=\"footer\">
                <div class=\"grid grid-pad\">
                <div class=\"col-1-3\">
                    <p>©Éthylopédia</p>
                </div>
                <div class=\"col-1-3\">
                    <h6>Nous Suivre...</h6>
                        <a href=\"http://facebook.com\" title=\"facebook\"><img class=\"reseau\" src=\"/img_site/facebook.png\" alt=\"facebook\"></a>
                        <a href=\"http://twitter.com\" title=\"twitter\"><img class=\"reseau\" src=\"/img_site/twitter.png\" alt=\"twitter\"></a>
                        <a href=\"http://instagram.com\" title=\"instagram\"><img class=\"reseau\" src=\"/img_site/instagram.png\" alt=\"instagram\"></a>
                </div>
                <div class=\"col-1-3\">
                    <h6>Contact</h6>
                    <ul>
                        <li>Chemin du Thil</li>
                        <li>80025 Amiens</li>
                        <li>03.22.82.72.72</li>
                        <li><a href=\"contact.html\" title=\"Contact\" class=\"detail\">Plus de détails...</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </footer>
        {% endblock %}
    </body>
    {% endblock %}

</html>
{% endblock %}



<!-- <div class=\"dropdown\">
  <button class=\"dropbtn\">Dropdown</button>
  <div class=\"dropdown-content\">
    <a href=\"#\">Link 1</a>
    <a href=\"#\">Link 2</a>
    <a href=\"#\">Link 3</a>
  </div>
</div>  -->
", "base/base.html.twig", "/home/gperrier/Documents/web/site/templates/base/base.html.twig");
    }
}

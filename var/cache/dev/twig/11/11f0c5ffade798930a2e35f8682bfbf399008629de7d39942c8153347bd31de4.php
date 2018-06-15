<?php

/* base/base.html.twig */
class __TwigTemplate_065d0ba6c0ca5620c28d1fd46e9d9b3f672f7c122e1fca580f070e14c474d540 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
";
        // line 4
        $this->displayBlock('html', $context, $blocks);
        // line 117
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_html($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        // line 114
        echo "
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Éthylopédia";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <body>
      ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "        <main>
        ";
        // line 61
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "        </main>
        ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "    </body>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "        <header>
            <div class=\"bandeau\">
              <h1><div class=\"titre\">Éthylopédia</div></h1>
            </div>

            <!-- rajouter block login/inscription -->
                ";
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        echo "        </header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "                <nav id=\"nav_bar\">
                    <ul class=\"menu\">
                        <li><img class=\"logo\" src=\"/img_site/Winer.png\" alt=\"winer\" /></li>
                        <li><a href=\"/\" class=\"menu\">Accueil</a></li>
                        <li><a href=\"/alcool\">Alcool</a></li>
                        ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 47, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 48
            echo "                        <li><a href=\"/login\">Connexion</a></li>
                        <li><a href=\"/signup\">Inscription</a></li>
                        ";
        }
        // line 51
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 51, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 52
            echo "                        <li><a href=\"/logout\">Déconnexion</a></li>
                        <li id=\"username\"><a href=\"/profile\" title=\"Voir profil\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "getUsername", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        // line 55
        echo "                    </ul>
                </nav>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 62
        echo "          <div class=\"grid grid-pad\">
            <div class=\"col-8-12\">
              ";
        // line 64
        $this->displayBlock('article', $context, $blocks);
        // line 66
        echo "            </div>
              <aside>
                ";
        // line 68
        $this->displayBlock('sidebar', $context, $blocks);
        // line 81
        echo "              </aside>
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_article($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 65
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 69
        echo "                  <div class=\"col-4-12\">
                    <div class=\"sidebar\">
                      <p class=\"titre-top\">TOP 5 ALCOOLS</p>

                      <div class=\"top\">
                          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alcools"]) || array_key_exists("alcools", $context) ? $context["alcools"] : (function () { throw new Twig_Error_Runtime('Variable "alcools" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alc"]) {
            // line 75
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alcool_show", array("name" => twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()))), "html", null, true);
            echo "\"><img src=\"/img_alcool/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "imglink", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alc"], "name", array()), "html", null, true);
            echo "\" class=\"top-img\"></a>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                      </div>
                    </div>
                  </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 86
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 86,  391 => 85,  378 => 77,  365 => 75,  361 => 74,  354 => 69,  345 => 68,  335 => 65,  326 => 64,  314 => 81,  312 => 68,  308 => 66,  306 => 64,  302 => 62,  293 => 61,  281 => 55,  276 => 53,  273 => 52,  270 => 51,  265 => 48,  263 => 47,  256 => 42,  247 => 41,  236 => 58,  234 => 41,  226 => 35,  217 => 34,  206 => 112,  204 => 85,  201 => 84,  199 => 61,  196 => 60,  194 => 34,  191 => 33,  182 => 32,  155 => 11,  146 => 10,  128 => 9,  117 => 29,  115 => 10,  111 => 9,  107 => 7,  98 => 6,  86 => 114,  84 => 32,  81 => 31,  79 => 6,  76 => 5,  67 => 4,  46 => 117,  44 => 4,  40 => 2,);
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
                        {% if not(app.session.get(\"user\")) %}
                        <li><a href=\"/login\">Connexion</a></li>
                        <li><a href=\"/signup\">Inscription</a></li>
                        {% endif %}
                        {% if app.session.get(\"user\") %}
                        <li><a href=\"/logout\">Déconnexion</a></li>
                        <li id=\"username\"><a href=\"/profile\" title=\"Voir profil\">{{app.session.get(\"user\").getUsername}}</a></li>
                        {% endif %}
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
                            <a href=\"{{ path('alcool_show', {'name': alc.name }) }}\"><img src=\"/img_alcool/{{ alc.imglink }}\" title=\"{{alc.name}}\" class=\"top-img\"></a>
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

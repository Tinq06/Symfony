<?php

/* ::layout.html.twig */
class __TwigTemplate_1e07e8b64509b0786f4151efc7d45a832401d92154a88208d6b1bafc54488acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e37a02319d939f75d076ad69a8140fc8b082e94843ec460e165ab6c6c9f88a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e37a02319d939f75d076ad69a8140fc8b082e94843ec460e165ab6c6c9f88a9->enter($__internal_4e37a02319d939f75d076ad69a8140fc8b082e94843ec460e165ab6c6c9f88a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_9997aa53e0989bb3d1115bf28653dba51ab8b2c9dca48a28fb7e6b60ce0ff699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9997aa53e0989bb3d1115bf28653dba51ab8b2c9dca48a28fb7e6b60ce0ff699->enter($__internal_9997aa53e0989bb3d1115bf28653dba51ab8b2c9dca48a28fb7e6b60ce0ff699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>
";
        
        $__internal_4e37a02319d939f75d076ad69a8140fc8b082e94843ec460e165ab6c6c9f88a9->leave($__internal_4e37a02319d939f75d076ad69a8140fc8b082e94843ec460e165ab6c6c9f88a9_prof);

        
        $__internal_9997aa53e0989bb3d1115bf28653dba51ab8b2c9dca48a28fb7e6b60ce0ff699->leave($__internal_9997aa53e0989bb3d1115bf28653dba51ab8b2c9dca48a28fb7e6b60ce0ff699_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f6aaaa6c63d41d55249e1fab0cd8aa6ef02e9720ad71a228e558f84343c87f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f6aaaa6c63d41d55249e1fab0cd8aa6ef02e9720ad71a228e558f84343c87f->enter($__internal_93f6aaaa6c63d41d55249e1fab0cd8aa6ef02e9720ad71a228e558f84343c87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ba56ab29e7d1560b382a30903e58b02171627a8f0893319c609551c8c9ebe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba56ab29e7d1560b382a30903e58b02171627a8f0893319c609551c8c9ebe1b->enter($__internal_2ba56ab29e7d1560b382a30903e58b02171627a8f0893319c609551c8c9ebe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_2ba56ab29e7d1560b382a30903e58b02171627a8f0893319c609551c8c9ebe1b->leave($__internal_2ba56ab29e7d1560b382a30903e58b02171627a8f0893319c609551c8c9ebe1b_prof);

        
        $__internal_93f6aaaa6c63d41d55249e1fab0cd8aa6ef02e9720ad71a228e558f84343c87f->leave($__internal_93f6aaaa6c63d41d55249e1fab0cd8aa6ef02e9720ad71a228e558f84343c87f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c0b85cf3fb735b7322f7885ab95fdfd71e9a523198ffa24fe61137df6b4e812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0b85cf3fb735b7322f7885ab95fdfd71e9a523198ffa24fe61137df6b4e812->enter($__internal_8c0b85cf3fb735b7322f7885ab95fdfd71e9a523198ffa24fe61137df6b4e812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ada5e36016a0591e59de0978bd3fdf99c7ffb14fa236e810a8cd6fe8ad5587f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada5e36016a0591e59de0978bd3fdf99c7ffb14fa236e810a8cd6fe8ad5587f9->enter($__internal_ada5e36016a0591e59de0978bd3fdf99c7ffb14fa236e810a8cd6fe8ad5587f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_ada5e36016a0591e59de0978bd3fdf99c7ffb14fa236e810a8cd6fe8ad5587f9->leave($__internal_ada5e36016a0591e59de0978bd3fdf99c7ffb14fa236e810a8cd6fe8ad5587f9_prof);

        
        $__internal_8c0b85cf3fb735b7322f7885ab95fdfd71e9a523198ffa24fe61137df6b4e812->leave($__internal_8c0b85cf3fb735b7322f7885ab95fdfd71e9a523198ffa24fe61137df6b4e812_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_88aab7e5735f6c26f2b5428ea32f7b3515746b3dc9f568e806bc90be1b54f4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88aab7e5735f6c26f2b5428ea32f7b3515746b3dc9f568e806bc90be1b54f4b5->enter($__internal_88aab7e5735f6c26f2b5428ea32f7b3515746b3dc9f568e806bc90be1b54f4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34076823be54287e76ea6e11dfc3b6c42d4089951c77d45a9bfa230a437cd4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34076823be54287e76ea6e11dfc3b6c42d4089951c77d45a9bfa230a437cd4b9->enter($__internal_34076823be54287e76ea6e11dfc3b6c42d4089951c77d45a9bfa230a437cd4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_34076823be54287e76ea6e11dfc3b6c42d4089951c77d45a9bfa230a437cd4b9->leave($__internal_34076823be54287e76ea6e11dfc3b6c42d4089951c77d45a9bfa230a437cd4b9_prof);

        
        $__internal_88aab7e5735f6c26f2b5428ea32f7b3515746b3dc9f568e806bc90be1b54f4b5->leave($__internal_88aab7e5735f6c26f2b5428ea32f7b3515746b3dc9f568e806bc90be1b54f4b5_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd04263a3764d1812e738c90d58d6d3af354257fec864ead0fa169f9961db8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd04263a3764d1812e738c90d58d6d3af354257fec864ead0fa169f9961db8ce->enter($__internal_cd04263a3764d1812e738c90d58d6d3af354257fec864ead0fa169f9961db8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb6293396c602b4452b0851f6ca53a96c4484b2a11238479a86ecb2f7ccd0210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6293396c602b4452b0851f6ca53a96c4484b2a11238479a86ecb2f7ccd0210->enter($__internal_fb6293396c602b4452b0851f6ca53a96c4484b2a11238479a86ecb2f7ccd0210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_fb6293396c602b4452b0851f6ca53a96c4484b2a11238479a86ecb2f7ccd0210->leave($__internal_fb6293396c602b4452b0851f6ca53a96c4484b2a11238479a86ecb2f7ccd0210_prof);

        
        $__internal_cd04263a3764d1812e738c90d58d6d3af354257fec864ead0fa169f9961db8ce->leave($__internal_cd04263a3764d1812e738c90d58d6d3af354257fec864ead0fa169f9961db8ce_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 58,  185 => 57,  176 => 56,  166 => 45,  157 => 44,  146 => 13,  144 => 12,  135 => 11,  117 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>
", "::layout.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}

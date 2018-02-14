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
        $__internal_aebc60add63e9d6fbf257a8af72bc5c74a25a3db8f82518e06f3ac248a534559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebc60add63e9d6fbf257a8af72bc5c74a25a3db8f82518e06f3ac248a534559->enter($__internal_aebc60add63e9d6fbf257a8af72bc5c74a25a3db8f82518e06f3ac248a534559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b432bb301605bf5026e3ddce55675f149740f649c10e2a06bf61e771121aa271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b432bb301605bf5026e3ddce55675f149740f649c10e2a06bf61e771121aa271->enter($__internal_b432bb301605bf5026e3ddce55675f149740f649c10e2a06bf61e771121aa271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_aebc60add63e9d6fbf257a8af72bc5c74a25a3db8f82518e06f3ac248a534559->leave($__internal_aebc60add63e9d6fbf257a8af72bc5c74a25a3db8f82518e06f3ac248a534559_prof);

        
        $__internal_b432bb301605bf5026e3ddce55675f149740f649c10e2a06bf61e771121aa271->leave($__internal_b432bb301605bf5026e3ddce55675f149740f649c10e2a06bf61e771121aa271_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6ec36b24ccc9e0943a080c908d23084bbdb64e4886e1dbce3b55ff04c098fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ec36b24ccc9e0943a080c908d23084bbdb64e4886e1dbce3b55ff04c098fcf->enter($__internal_f6ec36b24ccc9e0943a080c908d23084bbdb64e4886e1dbce3b55ff04c098fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd1caeb255aa0fc5371b9faf7619d1d77112bfcbd729a14abd3b34a6613e376d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1caeb255aa0fc5371b9faf7619d1d77112bfcbd729a14abd3b34a6613e376d->enter($__internal_dd1caeb255aa0fc5371b9faf7619d1d77112bfcbd729a14abd3b34a6613e376d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_dd1caeb255aa0fc5371b9faf7619d1d77112bfcbd729a14abd3b34a6613e376d->leave($__internal_dd1caeb255aa0fc5371b9faf7619d1d77112bfcbd729a14abd3b34a6613e376d_prof);

        
        $__internal_f6ec36b24ccc9e0943a080c908d23084bbdb64e4886e1dbce3b55ff04c098fcf->leave($__internal_f6ec36b24ccc9e0943a080c908d23084bbdb64e4886e1dbce3b55ff04c098fcf_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eef68af33958675b5ea715926c967c0535333a363268b03f991ebd1dacb68d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef68af33958675b5ea715926c967c0535333a363268b03f991ebd1dacb68d75->enter($__internal_eef68af33958675b5ea715926c967c0535333a363268b03f991ebd1dacb68d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_65352b802ceaa5b16245dfb4ba249f483b562512548a420ab926f68d1727bc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65352b802ceaa5b16245dfb4ba249f483b562512548a420ab926f68d1727bc13->enter($__internal_65352b802ceaa5b16245dfb4ba249f483b562512548a420ab926f68d1727bc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_65352b802ceaa5b16245dfb4ba249f483b562512548a420ab926f68d1727bc13->leave($__internal_65352b802ceaa5b16245dfb4ba249f483b562512548a420ab926f68d1727bc13_prof);

        
        $__internal_eef68af33958675b5ea715926c967c0535333a363268b03f991ebd1dacb68d75->leave($__internal_eef68af33958675b5ea715926c967c0535333a363268b03f991ebd1dacb68d75_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6103eba9061d787a9e9e2f603436cba721ca49e4e8e3c65326c186f8bd277e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6103eba9061d787a9e9e2f603436cba721ca49e4e8e3c65326c186f8bd277e2->enter($__internal_e6103eba9061d787a9e9e2f603436cba721ca49e4e8e3c65326c186f8bd277e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6026b54515ed31cbb8a4f89b5dba566d569e0fef266c10c1b98bb5ebdb514293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6026b54515ed31cbb8a4f89b5dba566d569e0fef266c10c1b98bb5ebdb514293->enter($__internal_6026b54515ed31cbb8a4f89b5dba566d569e0fef266c10c1b98bb5ebdb514293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_6026b54515ed31cbb8a4f89b5dba566d569e0fef266c10c1b98bb5ebdb514293->leave($__internal_6026b54515ed31cbb8a4f89b5dba566d569e0fef266c10c1b98bb5ebdb514293_prof);

        
        $__internal_e6103eba9061d787a9e9e2f603436cba721ca49e4e8e3c65326c186f8bd277e2->leave($__internal_e6103eba9061d787a9e9e2f603436cba721ca49e4e8e3c65326c186f8bd277e2_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad3eb1c9dc1ada8cb11ea9818eb4098d1219cfe95e4fc0fcf4a26e11885de335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3eb1c9dc1ada8cb11ea9818eb4098d1219cfe95e4fc0fcf4a26e11885de335->enter($__internal_ad3eb1c9dc1ada8cb11ea9818eb4098d1219cfe95e4fc0fcf4a26e11885de335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e3e47453af1c42d9ca7177448e4ed89781cc94e2630de6499628745d282e960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3e47453af1c42d9ca7177448e4ed89781cc94e2630de6499628745d282e960->enter($__internal_6e3e47453af1c42d9ca7177448e4ed89781cc94e2630de6499628745d282e960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_6e3e47453af1c42d9ca7177448e4ed89781cc94e2630de6499628745d282e960->leave($__internal_6e3e47453af1c42d9ca7177448e4ed89781cc94e2630de6499628745d282e960_prof);

        
        $__internal_ad3eb1c9dc1ada8cb11ea9818eb4098d1219cfe95e4fc0fcf4a26e11885de335->leave($__internal_ad3eb1c9dc1ada8cb11ea9818eb4098d1219cfe95e4fc0fcf4a26e11885de335_prof);

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

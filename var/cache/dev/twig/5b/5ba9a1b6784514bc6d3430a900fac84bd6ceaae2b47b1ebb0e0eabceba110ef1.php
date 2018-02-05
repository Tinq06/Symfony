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
        $__internal_0434a0ae545981c9d5ee716b08b40e65bc535727f3a606039b324541c51f9732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0434a0ae545981c9d5ee716b08b40e65bc535727f3a606039b324541c51f9732->enter($__internal_0434a0ae545981c9d5ee716b08b40e65bc535727f3a606039b324541c51f9732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_7bb8da5bd558183700c8b992c9c72e2d44500b12733c4a4587c3a5564df56477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb8da5bd558183700c8b992c9c72e2d44500b12733c4a4587c3a5564df56477->enter($__internal_7bb8da5bd558183700c8b992c9c72e2d44500b12733c4a4587c3a5564df56477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_0434a0ae545981c9d5ee716b08b40e65bc535727f3a606039b324541c51f9732->leave($__internal_0434a0ae545981c9d5ee716b08b40e65bc535727f3a606039b324541c51f9732_prof);

        
        $__internal_7bb8da5bd558183700c8b992c9c72e2d44500b12733c4a4587c3a5564df56477->leave($__internal_7bb8da5bd558183700c8b992c9c72e2d44500b12733c4a4587c3a5564df56477_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3252a92d9150fb90b7f8d95e0b38d674f622964b005fe2ebd7adab158724045e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3252a92d9150fb90b7f8d95e0b38d674f622964b005fe2ebd7adab158724045e->enter($__internal_3252a92d9150fb90b7f8d95e0b38d674f622964b005fe2ebd7adab158724045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a64ed69bb4056263bb0c08246f68200b6c2970012c5a6008a6383064c8001dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64ed69bb4056263bb0c08246f68200b6c2970012c5a6008a6383064c8001dc9->enter($__internal_a64ed69bb4056263bb0c08246f68200b6c2970012c5a6008a6383064c8001dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_a64ed69bb4056263bb0c08246f68200b6c2970012c5a6008a6383064c8001dc9->leave($__internal_a64ed69bb4056263bb0c08246f68200b6c2970012c5a6008a6383064c8001dc9_prof);

        
        $__internal_3252a92d9150fb90b7f8d95e0b38d674f622964b005fe2ebd7adab158724045e->leave($__internal_3252a92d9150fb90b7f8d95e0b38d674f622964b005fe2ebd7adab158724045e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd01c397546f4ca94a26ddbc836a0df75d4b27c8e0711ae4c98cc343777f81af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd01c397546f4ca94a26ddbc836a0df75d4b27c8e0711ae4c98cc343777f81af->enter($__internal_bd01c397546f4ca94a26ddbc836a0df75d4b27c8e0711ae4c98cc343777f81af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4b55fd9bb21b40129d36f1e8ea70350517ac43c49d81b409f66cd02222847263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b55fd9bb21b40129d36f1e8ea70350517ac43c49d81b409f66cd02222847263->enter($__internal_4b55fd9bb21b40129d36f1e8ea70350517ac43c49d81b409f66cd02222847263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_4b55fd9bb21b40129d36f1e8ea70350517ac43c49d81b409f66cd02222847263->leave($__internal_4b55fd9bb21b40129d36f1e8ea70350517ac43c49d81b409f66cd02222847263_prof);

        
        $__internal_bd01c397546f4ca94a26ddbc836a0df75d4b27c8e0711ae4c98cc343777f81af->leave($__internal_bd01c397546f4ca94a26ddbc836a0df75d4b27c8e0711ae4c98cc343777f81af_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad090f7f102d9ad944622275d4a02e92640eca0bbbe968ab37d03f078eb78a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad090f7f102d9ad944622275d4a02e92640eca0bbbe968ab37d03f078eb78a4->enter($__internal_5ad090f7f102d9ad944622275d4a02e92640eca0bbbe968ab37d03f078eb78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d7d04f69283b1294d97ba08f4ab57cb3ab401a8a54cab123f4ccd0d38731f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7d04f69283b1294d97ba08f4ab57cb3ab401a8a54cab123f4ccd0d38731f67->enter($__internal_9d7d04f69283b1294d97ba08f4ab57cb3ab401a8a54cab123f4ccd0d38731f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_9d7d04f69283b1294d97ba08f4ab57cb3ab401a8a54cab123f4ccd0d38731f67->leave($__internal_9d7d04f69283b1294d97ba08f4ab57cb3ab401a8a54cab123f4ccd0d38731f67_prof);

        
        $__internal_5ad090f7f102d9ad944622275d4a02e92640eca0bbbe968ab37d03f078eb78a4->leave($__internal_5ad090f7f102d9ad944622275d4a02e92640eca0bbbe968ab37d03f078eb78a4_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_620f38e4aaaf6f395689410559251ad7beb1f49ac0281944e8bb0754b2e8b0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620f38e4aaaf6f395689410559251ad7beb1f49ac0281944e8bb0754b2e8b0fe->enter($__internal_620f38e4aaaf6f395689410559251ad7beb1f49ac0281944e8bb0754b2e8b0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e56df01b0191adecadbf3fdba82e62f4764395bd16e3006b5be0cd8b8ad8820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e56df01b0191adecadbf3fdba82e62f4764395bd16e3006b5be0cd8b8ad8820->enter($__internal_3e56df01b0191adecadbf3fdba82e62f4764395bd16e3006b5be0cd8b8ad8820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_3e56df01b0191adecadbf3fdba82e62f4764395bd16e3006b5be0cd8b8ad8820->leave($__internal_3e56df01b0191adecadbf3fdba82e62f4764395bd16e3006b5be0cd8b8ad8820_prof);

        
        $__internal_620f38e4aaaf6f395689410559251ad7beb1f49ac0281944e8bb0754b2e8b0fe->leave($__internal_620f38e4aaaf6f395689410559251ad7beb1f49ac0281944e8bb0754b2e8b0fe_prof);

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

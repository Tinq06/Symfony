<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_3e9016a5f47a2a1b7dab8991c2e0e400ae099c1dc82ac10cfd5ca53a1124c32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22daf2edaf38ddb95a4c3c563beb4d9523cc0f6c201fe9dff5b1b423e8111dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22daf2edaf38ddb95a4c3c563beb4d9523cc0f6c201fe9dff5b1b423e8111dd8->enter($__internal_22daf2edaf38ddb95a4c3c563beb4d9523cc0f6c201fe9dff5b1b423e8111dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_4e017e67c393238550c6e496ef320716e7b3bee03c2c524899ad315bbf601476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e017e67c393238550c6e496ef320716e7b3bee03c2c524899ad315bbf601476->enter($__internal_4e017e67c393238550c6e496ef320716e7b3bee03c2c524899ad315bbf601476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22daf2edaf38ddb95a4c3c563beb4d9523cc0f6c201fe9dff5b1b423e8111dd8->leave($__internal_22daf2edaf38ddb95a4c3c563beb4d9523cc0f6c201fe9dff5b1b423e8111dd8_prof);

        
        $__internal_4e017e67c393238550c6e496ef320716e7b3bee03c2c524899ad315bbf601476->leave($__internal_4e017e67c393238550c6e496ef320716e7b3bee03c2c524899ad315bbf601476_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ae3ebbdcf047c454dcb80262f880fce40f0984aa13266d71a04a3a8791da091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae3ebbdcf047c454dcb80262f880fce40f0984aa13266d71a04a3a8791da091->enter($__internal_0ae3ebbdcf047c454dcb80262f880fce40f0984aa13266d71a04a3a8791da091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3db7ec49ef669c793b8c287c52410109a728d9b7366c96890941c590aa5a15c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db7ec49ef669c793b8c287c52410109a728d9b7366c96890941c590aa5a15c5->enter($__internal_3db7ec49ef669c793b8c287c52410109a728d9b7366c96890941c590aa5a15c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3db7ec49ef669c793b8c287c52410109a728d9b7366c96890941c590aa5a15c5->leave($__internal_3db7ec49ef669c793b8c287c52410109a728d9b7366c96890941c590aa5a15c5_prof);

        
        $__internal_0ae3ebbdcf047c454dcb80262f880fce40f0984aa13266d71a04a3a8791da091->leave($__internal_0ae3ebbdcf047c454dcb80262f880fce40f0984aa13266d71a04a3a8791da091_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fd073f3df6d06f76e904a616de47d323ea29ae353e3ad1fa315cc459c96cd0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd073f3df6d06f76e904a616de47d323ea29ae353e3ad1fa315cc459c96cd0bd->enter($__internal_fd073f3df6d06f76e904a616de47d323ea29ae353e3ad1fa315cc459c96cd0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a46ad751826c5c79b658a6018d1bcfaf815d62ee8613d5178f0e51d27630eaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46ad751826c5c79b658a6018d1bcfaf815d62ee8613d5178f0e51d27630eaaa->enter($__internal_a46ad751826c5c79b658a6018d1bcfaf815d62ee8613d5178f0e51d27630eaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_a46ad751826c5c79b658a6018d1bcfaf815d62ee8613d5178f0e51d27630eaaa->leave($__internal_a46ad751826c5c79b658a6018d1bcfaf815d62ee8613d5178f0e51d27630eaaa_prof);

        
        $__internal_fd073f3df6d06f76e904a616de47d323ea29ae353e3ad1fa315cc459c96cd0bd->leave($__internal_fd073f3df6d06f76e904a616de47d323ea29ae353e3ad1fa315cc459c96cd0bd_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}
", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}

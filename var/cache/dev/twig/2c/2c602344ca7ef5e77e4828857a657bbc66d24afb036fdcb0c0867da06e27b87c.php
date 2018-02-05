<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_b72f240387bb95a62b5edb292927332fda79e719030e2e0b3fcadfc8a8c42fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_686e52872c2dd08ee09a3d93f6a2aa78b06e8f502012756cc53ce430fa7afc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686e52872c2dd08ee09a3d93f6a2aa78b06e8f502012756cc53ce430fa7afc52->enter($__internal_686e52872c2dd08ee09a3d93f6a2aa78b06e8f502012756cc53ce430fa7afc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_44f8c3ab9e930560668af7d83495b470dcb4f85ce773bf0d3a02c8875957fdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f8c3ab9e930560668af7d83495b470dcb4f85ce773bf0d3a02c8875957fdc7->enter($__internal_44f8c3ab9e930560668af7d83495b470dcb4f85ce773bf0d3a02c8875957fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686e52872c2dd08ee09a3d93f6a2aa78b06e8f502012756cc53ce430fa7afc52->leave($__internal_686e52872c2dd08ee09a3d93f6a2aa78b06e8f502012756cc53ce430fa7afc52_prof);

        
        $__internal_44f8c3ab9e930560668af7d83495b470dcb4f85ce773bf0d3a02c8875957fdc7->leave($__internal_44f8c3ab9e930560668af7d83495b470dcb4f85ce773bf0d3a02c8875957fdc7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47475471c7ee8b503614827ccd8e04ad4ade6da8ecc319d6fb4787bb774838e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47475471c7ee8b503614827ccd8e04ad4ade6da8ecc319d6fb4787bb774838e2->enter($__internal_47475471c7ee8b503614827ccd8e04ad4ade6da8ecc319d6fb4787bb774838e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6afc372c40ff401cb94ed6f29704d3be3138a3319d46950dd5512a79d93f5610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afc372c40ff401cb94ed6f29704d3be3138a3319d46950dd5512a79d93f5610->enter($__internal_6afc372c40ff401cb94ed6f29704d3be3138a3319d46950dd5512a79d93f5610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6afc372c40ff401cb94ed6f29704d3be3138a3319d46950dd5512a79d93f5610->leave($__internal_6afc372c40ff401cb94ed6f29704d3be3138a3319d46950dd5512a79d93f5610_prof);

        
        $__internal_47475471c7ee8b503614827ccd8e04ad4ade6da8ecc319d6fb4787bb774838e2->leave($__internal_47475471c7ee8b503614827ccd8e04ad4ade6da8ecc319d6fb4787bb774838e2_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_35f100e984f0750be146a8c052a4528ac5b98f6514445ac864fae632fce43629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f100e984f0750be146a8c052a4528ac5b98f6514445ac864fae632fce43629->enter($__internal_35f100e984f0750be146a8c052a4528ac5b98f6514445ac864fae632fce43629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f0f054f1b3316c3b6b8c827dda7dc44f7c9939bdec0c4c3a8926117b78692bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f054f1b3316c3b6b8c827dda7dc44f7c9939bdec0c4c3a8926117b78692bd8->enter($__internal_f0f054f1b3316c3b6b8c827dda7dc44f7c9939bdec0c4c3a8926117b78692bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_f0f054f1b3316c3b6b8c827dda7dc44f7c9939bdec0c4c3a8926117b78692bd8->leave($__internal_f0f054f1b3316c3b6b8c827dda7dc44f7c9939bdec0c4c3a8926117b78692bd8_prof);

        
        $__internal_35f100e984f0750be146a8c052a4528ac5b98f6514445ac864fae632fce43629->leave($__internal_35f100e984f0750be146a8c052a4528ac5b98f6514445ac864fae632fce43629_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}

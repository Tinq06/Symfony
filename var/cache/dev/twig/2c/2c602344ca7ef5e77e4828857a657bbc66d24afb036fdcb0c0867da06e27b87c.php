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
        $__internal_735cb0aa46953d7596123d2143efa0cc08132c2868e125b90db479bf02a9d914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735cb0aa46953d7596123d2143efa0cc08132c2868e125b90db479bf02a9d914->enter($__internal_735cb0aa46953d7596123d2143efa0cc08132c2868e125b90db479bf02a9d914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_a4b18b5655a19c6b9841ee0ac90fb1653023d582ff725e407b473eb64386ae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b18b5655a19c6b9841ee0ac90fb1653023d582ff725e407b473eb64386ae34->enter($__internal_a4b18b5655a19c6b9841ee0ac90fb1653023d582ff725e407b473eb64386ae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735cb0aa46953d7596123d2143efa0cc08132c2868e125b90db479bf02a9d914->leave($__internal_735cb0aa46953d7596123d2143efa0cc08132c2868e125b90db479bf02a9d914_prof);

        
        $__internal_a4b18b5655a19c6b9841ee0ac90fb1653023d582ff725e407b473eb64386ae34->leave($__internal_a4b18b5655a19c6b9841ee0ac90fb1653023d582ff725e407b473eb64386ae34_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87696c597c35576d72e252bb79d2f3130d86273101b3d04b7cd0dd4abed0a9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87696c597c35576d72e252bb79d2f3130d86273101b3d04b7cd0dd4abed0a9f0->enter($__internal_87696c597c35576d72e252bb79d2f3130d86273101b3d04b7cd0dd4abed0a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dc491f0c6941165391fdb89e538c6a25a7a68ac9806d39592394c70faf24d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc491f0c6941165391fdb89e538c6a25a7a68ac9806d39592394c70faf24d1d->enter($__internal_4dc491f0c6941165391fdb89e538c6a25a7a68ac9806d39592394c70faf24d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4dc491f0c6941165391fdb89e538c6a25a7a68ac9806d39592394c70faf24d1d->leave($__internal_4dc491f0c6941165391fdb89e538c6a25a7a68ac9806d39592394c70faf24d1d_prof);

        
        $__internal_87696c597c35576d72e252bb79d2f3130d86273101b3d04b7cd0dd4abed0a9f0->leave($__internal_87696c597c35576d72e252bb79d2f3130d86273101b3d04b7cd0dd4abed0a9f0_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e9115f4abffa1a600a253f95b90859a3b8e93117e00fef7c724c09dca30cc843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9115f4abffa1a600a253f95b90859a3b8e93117e00fef7c724c09dca30cc843->enter($__internal_e9115f4abffa1a600a253f95b90859a3b8e93117e00fef7c724c09dca30cc843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_62713a391799ea87d5623b188672fa82d39debaec3ad5590cd9e1fd8e4c156ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62713a391799ea87d5623b188672fa82d39debaec3ad5590cd9e1fd8e4c156ad->enter($__internal_62713a391799ea87d5623b188672fa82d39debaec3ad5590cd9e1fd8e4c156ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_62713a391799ea87d5623b188672fa82d39debaec3ad5590cd9e1fd8e4c156ad->leave($__internal_62713a391799ea87d5623b188672fa82d39debaec3ad5590cd9e1fd8e4c156ad_prof);

        
        $__internal_e9115f4abffa1a600a253f95b90859a3b8e93117e00fef7c724c09dca30cc843->leave($__internal_e9115f4abffa1a600a253f95b90859a3b8e93117e00fef7c724c09dca30cc843_prof);

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

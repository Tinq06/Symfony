<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_54388d885ac843eebf8b39d9a0d6bb06ad99aaa5e21ca4a6879ae978404975ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_ab49afadc5009d7e74d69be7e7ba88d28a9922abb09c3010af4bb391be0dd248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab49afadc5009d7e74d69be7e7ba88d28a9922abb09c3010af4bb391be0dd248->enter($__internal_ab49afadc5009d7e74d69be7e7ba88d28a9922abb09c3010af4bb391be0dd248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_39b42c8b0e430c06575bd9662752e68feab669c8b5cbff135e21600cc121120f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b42c8b0e430c06575bd9662752e68feab669c8b5cbff135e21600cc121120f->enter($__internal_39b42c8b0e430c06575bd9662752e68feab669c8b5cbff135e21600cc121120f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab49afadc5009d7e74d69be7e7ba88d28a9922abb09c3010af4bb391be0dd248->leave($__internal_ab49afadc5009d7e74d69be7e7ba88d28a9922abb09c3010af4bb391be0dd248_prof);

        
        $__internal_39b42c8b0e430c06575bd9662752e68feab669c8b5cbff135e21600cc121120f->leave($__internal_39b42c8b0e430c06575bd9662752e68feab669c8b5cbff135e21600cc121120f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cd1d4c08ebda392fdeacb33d4a838357ace3c1b1d041b82f859ede962620e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd1d4c08ebda392fdeacb33d4a838357ace3c1b1d041b82f859ede962620e13->enter($__internal_5cd1d4c08ebda392fdeacb33d4a838357ace3c1b1d041b82f859ede962620e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1acfd5673fa4e9ba30f8e323ae45858751a6f5a3fff7a57f6d12884c650a3527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acfd5673fa4e9ba30f8e323ae45858751a6f5a3fff7a57f6d12884c650a3527->enter($__internal_1acfd5673fa4e9ba30f8e323ae45858751a6f5a3fff7a57f6d12884c650a3527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1acfd5673fa4e9ba30f8e323ae45858751a6f5a3fff7a57f6d12884c650a3527->leave($__internal_1acfd5673fa4e9ba30f8e323ae45858751a6f5a3fff7a57f6d12884c650a3527_prof);

        
        $__internal_5cd1d4c08ebda392fdeacb33d4a838357ace3c1b1d041b82f859ede962620e13->leave($__internal_5cd1d4c08ebda392fdeacb33d4a838357ace3c1b1d041b82f859ede962620e13_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c513c6af5897efea558a374d54e7d764d480ad475f622fe57eb0d8e7377c81d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c513c6af5897efea558a374d54e7d764d480ad475f622fe57eb0d8e7377c81d3->enter($__internal_c513c6af5897efea558a374d54e7d764d480ad475f622fe57eb0d8e7377c81d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_9cf54291372ce5e258795f80ce3d51249e90152f07f4e5c41802545a0d120501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf54291372ce5e258795f80ce3d51249e90152f07f4e5c41802545a0d120501->enter($__internal_9cf54291372ce5e258795f80ce3d51249e90152f07f4e5c41802545a0d120501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous ajouter une nouvelle annonce, merci de ne pas changer
    l'esprit général du site.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

";
        
        $__internal_9cf54291372ce5e258795f80ce3d51249e90152f07f4e5c41802545a0d120501->leave($__internal_9cf54291372ce5e258795f80ce3d51249e90152f07f4e5c41802545a0d120501_prof);

        
        $__internal_c513c6af5897efea558a374d54e7d764d480ad475f622fe57eb0d8e7377c81d3->leave($__internal_c513c6af5897efea558a374d54e7d764d480ad475f622fe57eb0d8e7377c81d3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous ajouter une nouvelle annonce, merci de ne pas changer
    l'esprit général du site.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'accueil
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}

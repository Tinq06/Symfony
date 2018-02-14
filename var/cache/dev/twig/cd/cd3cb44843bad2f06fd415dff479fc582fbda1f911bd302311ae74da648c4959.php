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
        $__internal_7e00b5fa0707c5650163572e161515fe433a83245c74b9512e359fb2b3add93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e00b5fa0707c5650163572e161515fe433a83245c74b9512e359fb2b3add93e->enter($__internal_7e00b5fa0707c5650163572e161515fe433a83245c74b9512e359fb2b3add93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_54e98f4544b5d6fe2be42fdf1fb38d6015d0276d2f361578d4db62b25ca3772c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e98f4544b5d6fe2be42fdf1fb38d6015d0276d2f361578d4db62b25ca3772c->enter($__internal_54e98f4544b5d6fe2be42fdf1fb38d6015d0276d2f361578d4db62b25ca3772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e00b5fa0707c5650163572e161515fe433a83245c74b9512e359fb2b3add93e->leave($__internal_7e00b5fa0707c5650163572e161515fe433a83245c74b9512e359fb2b3add93e_prof);

        
        $__internal_54e98f4544b5d6fe2be42fdf1fb38d6015d0276d2f361578d4db62b25ca3772c->leave($__internal_54e98f4544b5d6fe2be42fdf1fb38d6015d0276d2f361578d4db62b25ca3772c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85adccce1211dd4d7a9f37156413c337d0aca6914939339dde3219d0b8f70117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85adccce1211dd4d7a9f37156413c337d0aca6914939339dde3219d0b8f70117->enter($__internal_85adccce1211dd4d7a9f37156413c337d0aca6914939339dde3219d0b8f70117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7b3fc262708163aa59f53c6b990f1e15ce3af91adecec6588f65e2ef45aa217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b3fc262708163aa59f53c6b990f1e15ce3af91adecec6588f65e2ef45aa217->enter($__internal_b7b3fc262708163aa59f53c6b990f1e15ce3af91adecec6588f65e2ef45aa217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7b3fc262708163aa59f53c6b990f1e15ce3af91adecec6588f65e2ef45aa217->leave($__internal_b7b3fc262708163aa59f53c6b990f1e15ce3af91adecec6588f65e2ef45aa217_prof);

        
        $__internal_85adccce1211dd4d7a9f37156413c337d0aca6914939339dde3219d0b8f70117->leave($__internal_85adccce1211dd4d7a9f37156413c337d0aca6914939339dde3219d0b8f70117_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_25acf848df390ac6e9bb17aff15c74870da23136fcfbf9442fac2d2e837b7017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25acf848df390ac6e9bb17aff15c74870da23136fcfbf9442fac2d2e837b7017->enter($__internal_25acf848df390ac6e9bb17aff15c74870da23136fcfbf9442fac2d2e837b7017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_dc5a81992c97acad3e583e60278b10eee1ba9e4953cab3a8b1c9c14715dd79cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5a81992c97acad3e583e60278b10eee1ba9e4953cab3a8b1c9c14715dd79cf->enter($__internal_dc5a81992c97acad3e583e60278b10eee1ba9e4953cab3a8b1c9c14715dd79cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>

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
        
        $__internal_dc5a81992c97acad3e583e60278b10eee1ba9e4953cab3a8b1c9c14715dd79cf->leave($__internal_dc5a81992c97acad3e583e60278b10eee1ba9e4953cab3a8b1c9c14715dd79cf_prof);

        
        $__internal_25acf848df390ac6e9bb17aff15c74870da23136fcfbf9442fac2d2e837b7017->leave($__internal_25acf848df390ac6e9bb17aff15c74870da23136fcfbf9442fac2d2e837b7017_prof);

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
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Ajouter une annonce</h2>

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

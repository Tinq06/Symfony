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
        $__internal_419521a007b19f331c7e328a12f5f6f6f900681934ec231bfc775842271b2657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419521a007b19f331c7e328a12f5f6f6f900681934ec231bfc775842271b2657->enter($__internal_419521a007b19f331c7e328a12f5f6f6f900681934ec231bfc775842271b2657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_004083e7ad15324f58227d7ccc4c3c76566022c56bd99ab2327a4ddbc4269387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004083e7ad15324f58227d7ccc4c3c76566022c56bd99ab2327a4ddbc4269387->enter($__internal_004083e7ad15324f58227d7ccc4c3c76566022c56bd99ab2327a4ddbc4269387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419521a007b19f331c7e328a12f5f6f6f900681934ec231bfc775842271b2657->leave($__internal_419521a007b19f331c7e328a12f5f6f6f900681934ec231bfc775842271b2657_prof);

        
        $__internal_004083e7ad15324f58227d7ccc4c3c76566022c56bd99ab2327a4ddbc4269387->leave($__internal_004083e7ad15324f58227d7ccc4c3c76566022c56bd99ab2327a4ddbc4269387_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cd0684b6358315dea4c5870b405168a1012b5eead7a16e2b580603f6abead97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd0684b6358315dea4c5870b405168a1012b5eead7a16e2b580603f6abead97->enter($__internal_5cd0684b6358315dea4c5870b405168a1012b5eead7a16e2b580603f6abead97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c65d967cecf16cf4ee963cc27433b4ad5ed8233c94bf1a70ef1b7fc6566989c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65d967cecf16cf4ee963cc27433b4ad5ed8233c94bf1a70ef1b7fc6566989c5->enter($__internal_c65d967cecf16cf4ee963cc27433b4ad5ed8233c94bf1a70ef1b7fc6566989c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c65d967cecf16cf4ee963cc27433b4ad5ed8233c94bf1a70ef1b7fc6566989c5->leave($__internal_c65d967cecf16cf4ee963cc27433b4ad5ed8233c94bf1a70ef1b7fc6566989c5_prof);

        
        $__internal_5cd0684b6358315dea4c5870b405168a1012b5eead7a16e2b580603f6abead97->leave($__internal_5cd0684b6358315dea4c5870b405168a1012b5eead7a16e2b580603f6abead97_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cc0c3d7115257e1225f67b2c391eaf93a10f4b636d28a90ad4bd41e8d39938a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0c3d7115257e1225f67b2c391eaf93a10f4b636d28a90ad4bd41e8d39938a2->enter($__internal_cc0c3d7115257e1225f67b2c391eaf93a10f4b636d28a90ad4bd41e8d39938a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_798e75df640cf89ec932c4e11b979cee52182d81e7cb2ae9c8bbafe2a01d636b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798e75df640cf89ec932c4e11b979cee52182d81e7cb2ae9c8bbafe2a01d636b->enter($__internal_798e75df640cf89ec932c4e11b979cee52182d81e7cb2ae9c8bbafe2a01d636b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_798e75df640cf89ec932c4e11b979cee52182d81e7cb2ae9c8bbafe2a01d636b->leave($__internal_798e75df640cf89ec932c4e11b979cee52182d81e7cb2ae9c8bbafe2a01d636b_prof);

        
        $__internal_cc0c3d7115257e1225f67b2c391eaf93a10f4b636d28a90ad4bd41e8d39938a2->leave($__internal_cc0c3d7115257e1225f67b2c391eaf93a10f4b636d28a90ad4bd41e8d39938a2_prof);

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

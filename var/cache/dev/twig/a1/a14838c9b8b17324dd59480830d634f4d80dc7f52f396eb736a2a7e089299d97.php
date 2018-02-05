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
        $__internal_76a579826127ebaffd8f001a6dbdded67db73862143a21ca09c17db0544a8ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a579826127ebaffd8f001a6dbdded67db73862143a21ca09c17db0544a8ac3->enter($__internal_76a579826127ebaffd8f001a6dbdded67db73862143a21ca09c17db0544a8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_acf2617b3fbb8219b503e8b8d42abec6cb774432932298c7bbe9f89595c26e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf2617b3fbb8219b503e8b8d42abec6cb774432932298c7bbe9f89595c26e79->enter($__internal_acf2617b3fbb8219b503e8b8d42abec6cb774432932298c7bbe9f89595c26e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a579826127ebaffd8f001a6dbdded67db73862143a21ca09c17db0544a8ac3->leave($__internal_76a579826127ebaffd8f001a6dbdded67db73862143a21ca09c17db0544a8ac3_prof);

        
        $__internal_acf2617b3fbb8219b503e8b8d42abec6cb774432932298c7bbe9f89595c26e79->leave($__internal_acf2617b3fbb8219b503e8b8d42abec6cb774432932298c7bbe9f89595c26e79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85063a992d408b1eaf1bd4b99998e613ffcf59863bcc65509c40cf657994ce74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85063a992d408b1eaf1bd4b99998e613ffcf59863bcc65509c40cf657994ce74->enter($__internal_85063a992d408b1eaf1bd4b99998e613ffcf59863bcc65509c40cf657994ce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb084074f9e02e4299ed41d7f885eb6064b132510d35881de7d49c52b761b1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb084074f9e02e4299ed41d7f885eb6064b132510d35881de7d49c52b761b1ba->enter($__internal_eb084074f9e02e4299ed41d7f885eb6064b132510d35881de7d49c52b761b1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eb084074f9e02e4299ed41d7f885eb6064b132510d35881de7d49c52b761b1ba->leave($__internal_eb084074f9e02e4299ed41d7f885eb6064b132510d35881de7d49c52b761b1ba_prof);

        
        $__internal_85063a992d408b1eaf1bd4b99998e613ffcf59863bcc65509c40cf657994ce74->leave($__internal_85063a992d408b1eaf1bd4b99998e613ffcf59863bcc65509c40cf657994ce74_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b91bf42ce4e73c773d0ae9eb953d2220318fa46fbc2542adcb90de060ec4eec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91bf42ce4e73c773d0ae9eb953d2220318fa46fbc2542adcb90de060ec4eec5->enter($__internal_b91bf42ce4e73c773d0ae9eb953d2220318fa46fbc2542adcb90de060ec4eec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1e760b0309bed56266ee1bdc55397c3c22e67c086cacc7bd23849e8610e70ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e760b0309bed56266ee1bdc55397c3c22e67c086cacc7bd23849e8610e70ae6->enter($__internal_1e760b0309bed56266ee1bdc55397c3c22e67c086cacc7bd23849e8610e70ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_1e760b0309bed56266ee1bdc55397c3c22e67c086cacc7bd23849e8610e70ae6->leave($__internal_1e760b0309bed56266ee1bdc55397c3c22e67c086cacc7bd23849e8610e70ae6_prof);

        
        $__internal_b91bf42ce4e73c773d0ae9eb953d2220318fa46fbc2542adcb90de060ec4eec5->leave($__internal_b91bf42ce4e73c773d0ae9eb953d2220318fa46fbc2542adcb90de060ec4eec5_prof);

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

<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9583e77aa9885b0e094efb46882b282afa823438ee0b32d26a3f44fd48b28c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88a23d0fd94762d3000dcf329e463c9506beafb20c5652cbf5c20ebd341562e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a23d0fd94762d3000dcf329e463c9506beafb20c5652cbf5c20ebd341562e7->enter($__internal_88a23d0fd94762d3000dcf329e463c9506beafb20c5652cbf5c20ebd341562e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_e89aabd7897a6d05b885ec690b73a4dcbf2ea8a0aac88ed018ba023b3d8dcf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89aabd7897a6d05b885ec690b73a4dcbf2ea8a0aac88ed018ba023b3d8dcf4b->enter($__internal_e89aabd7897a6d05b885ec690b73a4dcbf2ea8a0aac88ed018ba023b3d8dcf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>
";
        
        $__internal_88a23d0fd94762d3000dcf329e463c9506beafb20c5652cbf5c20ebd341562e7->leave($__internal_88a23d0fd94762d3000dcf329e463c9506beafb20c5652cbf5c20ebd341562e7_prof);

        
        $__internal_e89aabd7897a6d05b885ec690b73a4dcbf2ea8a0aac88ed018ba023b3d8dcf4b->leave($__internal_e89aabd7897a6d05b885ec690b73a4dcbf2ea8a0aac88ed018ba023b3d8dcf4b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
  Ici se trouvera le formulaire.
</div>
", "OCPlatformBundle:Advert:form.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}

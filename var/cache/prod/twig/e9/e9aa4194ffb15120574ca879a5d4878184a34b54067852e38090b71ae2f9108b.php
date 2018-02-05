<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_4b137ab90e7f1137abe1f0764d4f97a6dc2e9d56203b47f79d0b1af918712e49 extends Twig_Template
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
        $__internal_e55c3603914a5596fe7c809abf9cb7415970a0289affd1a5c995b797a2a5d19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55c3603914a5596fe7c809abf9cb7415970a0289affd1a5c995b797a2a5d19c->enter($__internal_e55c3603914a5596fe7c809abf9cb7415970a0289affd1a5c995b797a2a5d19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "
<html>
  <body>
    Hello World!
  </body>
</html>";
        
        $__internal_e55c3603914a5596fe7c809abf9cb7415970a0289affd1a5c995b797a2a5d19c->leave($__internal_e55c3603914a5596fe7c809abf9cb7415970a0289affd1a5c995b797a2a5d19c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}

<html>
  <body>
    Hello World!
  </body>
</html>", "OCPlatformBundle:Default:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}

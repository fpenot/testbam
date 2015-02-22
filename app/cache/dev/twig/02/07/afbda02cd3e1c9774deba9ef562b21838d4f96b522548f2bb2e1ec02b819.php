<?php

/* eBAMObjectMgtBundle:Company:view.html.twig */
class __TwigTemplate_0207afbda02cd3e1c9774deba9ef562b21838d4f96b522548f2bb2e1ec02b819 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Affichage de la compagnie ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
\t\t<h1>Affichage d'une compagnie</h1>

\t\t<p>
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "\t\t\t\t<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</p>

\t\t<p>
\t\t\tIci nous pourrons consulter la compagnie ayant comme id : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br />
\t\t\tMais pour l'instant, nous ne savons pas encore le faire, cela viendra !
\t\t</p>
\t\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "eBAMObjectMgtBundle:Company:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  46 => 13,  37 => 11,  33 => 10,  24 => 4,  19 => 1,);
    }
}

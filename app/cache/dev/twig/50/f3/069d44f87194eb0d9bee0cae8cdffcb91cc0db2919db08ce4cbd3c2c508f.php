<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_50f3069d44f87194eb0d9bee0cae8cdffcb91cc0db2919db08ce4cbd3c2c508f extends Twig_Template
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
        // line 2
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  125 => 51,  122 => 50,  117 => 48,  113 => 37,  110 => 36,  103 => 11,  100 => 10,  94 => 8,  88 => 53,  86 => 48,  74 => 38,  72 => 36,  56 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  63 => 18,  60 => 30,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  120 => 49,  109 => 27,  102 => 26,  97 => 25,  92 => 21,  85 => 19,  71 => 17,  68 => 16,  66 => 33,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 7,);
    }
}

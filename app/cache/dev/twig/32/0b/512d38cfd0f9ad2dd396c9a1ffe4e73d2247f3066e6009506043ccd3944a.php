<?php

/* SdzBlogBundle:Blog:article.html.twig */
class __TwigTemplate_320b512d38cfd0f9ad2dd396c9a1ffe4e73d2247f3066e6009506043ccd3944a extends Twig_Template
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
";
        // line 4
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter($this->getContext($context, "accueil"), false)) : (false));
        // line 5
        echo "
<h2>
  ";
        // line 8
        echo "  ";
        if ((!(null === $this->getAttribute($this->getContext($context, "article"), "image")))) {
            // line 9
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "url")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "image"), "alt"), "html", null, true);
            echo "\" />
  ";
        }
        // line 11
        echo "
  ";
        // line 13
        echo "  ";
        if ($this->getContext($context, "accueil")) {
            // line 14
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "
  ";
        }
        // line 18
        echo "</h2>

<i>Le ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "d/m/Y"), "html", null, true);
        echo ", par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "auteur"), "html", null, true);
        echo ".</i>
";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "articleCompetences"), "count") > 0)) {
            // line 23
            echo "   \t<i>
      Competences :
      ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "article"), "articleCompetences"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 26
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "categorie"), "competence"), "nom"), "html", null, true);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </i>
";
        }
        // line 30
        echo "<div class=\"well\">
  ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "contenu"), "html", null, true);
        echo "
</div>

";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "categories"), "count") > 0)) {
            // line 36
            echo "  <div class=\"well well-small\">
    <p><i>
      Catégories :
      ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "article"), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 40
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "nom"), "html", null, true);
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
                // line 41
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </i></p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  155 => 41,  149 => 40,  132 => 39,  127 => 36,  119 => 31,  116 => 30,  112 => 28,  98 => 27,  75 => 25,  69 => 22,  59 => 18,  53 => 16,  45 => 14,  28 => 8,  24 => 5,  22 => 4,  25 => 6,  19 => 2,  125 => 35,  122 => 50,  117 => 48,  113 => 37,  110 => 36,  103 => 11,  100 => 10,  94 => 8,  88 => 53,  86 => 48,  74 => 38,  72 => 36,  56 => 29,  38 => 13,  36 => 10,  31 => 9,  23 => 2,  63 => 20,  60 => 30,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  120 => 49,  109 => 27,  102 => 26,  97 => 25,  92 => 26,  85 => 19,  71 => 23,  68 => 16,  66 => 33,  48 => 14,  42 => 13,  39 => 11,  32 => 6,  29 => 7,);
    }
}

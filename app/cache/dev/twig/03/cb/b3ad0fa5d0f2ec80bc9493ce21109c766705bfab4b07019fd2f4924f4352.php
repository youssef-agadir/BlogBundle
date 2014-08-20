<?php

/* SdzBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_03cbb3ad0fa5d0f2ec80bc9493ce21109c766705bfab4b07019fd2f4924f4352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 13
        $this->env->loadTemplate("SdzBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 14
        echo "
  <p>
    Vous éditez un article déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>

  <p>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  97 => 25,  155 => 41,  132 => 39,  127 => 36,  53 => 16,  113 => 37,  110 => 36,  100 => 10,  23 => 2,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  553 => 210,  551 => 209,  546 => 207,  543 => 206,  539 => 205,  529 => 197,  525 => 195,  523 => 194,  518 => 193,  514 => 192,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  439 => 158,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  394 => 140,  378 => 137,  370 => 135,  368 => 134,  365 => 133,  361 => 131,  347 => 125,  345 => 124,  333 => 121,  329 => 120,  323 => 117,  317 => 116,  312 => 114,  306 => 113,  300 => 110,  294 => 109,  285 => 105,  280 => 103,  276 => 102,  267 => 101,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 42,  160 => 59,  152 => 54,  148 => 53,  134 => 45,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 31,  102 => 26,  71 => 17,  67 => 17,  63 => 20,  59 => 18,  38 => 13,  94 => 8,  89 => 20,  85 => 19,  75 => 25,  68 => 16,  56 => 29,  87 => 24,  21 => 2,  26 => 6,  93 => 9,  88 => 53,  78 => 25,  46 => 12,  27 => 4,  44 => 12,  31 => 9,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 61,  163 => 60,  158 => 67,  156 => 66,  151 => 63,  142 => 49,  138 => 54,  136 => 56,  121 => 46,  117 => 48,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 5,  25 => 6,  19 => 2,  79 => 18,  72 => 36,  69 => 20,  47 => 13,  40 => 9,  37 => 10,  22 => 4,  246 => 99,  157 => 56,  145 => 46,  139 => 48,  131 => 44,  123 => 41,  120 => 30,  115 => 43,  111 => 38,  108 => 36,  101 => 30,  98 => 27,  96 => 31,  83 => 25,  74 => 23,  66 => 15,  55 => 19,  52 => 17,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 68,  168 => 72,  164 => 58,  162 => 57,  154 => 58,  149 => 40,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 35,  122 => 50,  116 => 30,  112 => 28,  109 => 27,  106 => 36,  103 => 11,  99 => 31,  95 => 28,  92 => 21,  86 => 48,  82 => 22,  80 => 20,  73 => 17,  64 => 17,  60 => 23,  57 => 11,  54 => 17,  51 => 14,  48 => 14,  45 => 14,  42 => 10,  39 => 9,  36 => 10,  33 => 6,  30 => 5,);
    }
}

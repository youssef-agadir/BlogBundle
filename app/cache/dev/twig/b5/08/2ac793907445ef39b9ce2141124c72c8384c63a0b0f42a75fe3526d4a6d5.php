<?php

/* SdzBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_b5082ac793907445ef39b9ce2141124c72c8384c63a0b0f42a75fe3526d4a6d5 extends Twig_Template
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
<h3>Formulaire d'article</h3>

<div class=\"well\">
  <form method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 41,  132 => 39,  127 => 36,  53 => 16,  113 => 37,  110 => 36,  100 => 10,  23 => 2,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  553 => 210,  551 => 209,  546 => 207,  543 => 206,  539 => 205,  529 => 197,  525 => 195,  523 => 194,  518 => 193,  514 => 192,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  439 => 158,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  394 => 140,  378 => 137,  370 => 135,  368 => 134,  365 => 133,  361 => 131,  347 => 125,  345 => 124,  333 => 121,  329 => 120,  323 => 117,  317 => 116,  312 => 114,  306 => 113,  300 => 110,  294 => 109,  285 => 105,  280 => 103,  276 => 102,  267 => 101,  250 => 100,  239 => 95,  229 => 91,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 75,  184 => 73,  181 => 72,  169 => 42,  160 => 59,  152 => 54,  148 => 53,  134 => 45,  114 => 37,  107 => 33,  76 => 18,  70 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 31,  102 => 32,  71 => 23,  67 => 17,  63 => 20,  59 => 18,  38 => 13,  94 => 8,  89 => 20,  85 => 19,  75 => 25,  68 => 14,  56 => 29,  87 => 24,  21 => 2,  26 => 6,  93 => 9,  88 => 53,  78 => 22,  46 => 12,  27 => 4,  44 => 12,  31 => 9,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 64,  166 => 61,  163 => 60,  158 => 67,  156 => 66,  151 => 63,  142 => 49,  138 => 54,  136 => 56,  121 => 46,  117 => 48,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 5,  25 => 6,  19 => 2,  79 => 18,  72 => 36,  69 => 22,  47 => 13,  40 => 9,  37 => 10,  22 => 4,  246 => 99,  157 => 56,  145 => 46,  139 => 48,  131 => 44,  123 => 41,  120 => 49,  115 => 43,  111 => 38,  108 => 36,  101 => 30,  98 => 27,  96 => 31,  83 => 25,  74 => 38,  66 => 33,  55 => 19,  52 => 17,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 6,  29 => 7,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 64,  173 => 68,  168 => 72,  164 => 58,  162 => 57,  154 => 58,  149 => 40,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 35,  122 => 50,  116 => 30,  112 => 28,  109 => 34,  106 => 36,  103 => 11,  99 => 31,  95 => 28,  92 => 26,  86 => 48,  82 => 22,  80 => 20,  73 => 17,  64 => 17,  60 => 30,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 14,  42 => 13,  39 => 11,  36 => 10,  33 => 6,  30 => 5,);
    }
}

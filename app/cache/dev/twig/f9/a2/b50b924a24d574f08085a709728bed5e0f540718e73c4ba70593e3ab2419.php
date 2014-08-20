<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_f9a2b50b924a24d574f08085a709728bed5e0f540718e73c4ba70593e3ab2419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "majors")), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "majors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, $this->getContext($context, "minors"))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, $this->getContext($context, "majors"))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minors"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  367 => 339,  363 => 153,  358 => 151,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  283 => 115,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  222 => 83,  175 => 58,  170 => 84,  34 => 5,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 134,  384 => 132,  382 => 131,  377 => 129,  374 => 128,  371 => 156,  362 => 124,  359 => 123,  356 => 122,  353 => 328,  350 => 327,  341 => 117,  328 => 139,  324 => 112,  313 => 110,  308 => 287,  305 => 108,  281 => 114,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  186 => 72,  180 => 70,  177 => 69,  161 => 58,  128 => 42,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  297 => 200,  293 => 120,  271 => 190,  258 => 187,  251 => 182,  249 => 92,  77 => 25,  61 => 23,  174 => 74,  167 => 71,  118 => 49,  104 => 37,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  387 => 164,  380 => 158,  373 => 156,  355 => 329,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  325 => 129,  320 => 127,  315 => 131,  303 => 122,  298 => 120,  289 => 196,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  262 => 93,  256 => 96,  248 => 97,  241 => 93,  233 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 76,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 75,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  90 => 37,  84 => 27,  81 => 23,  58 => 14,  97 => 25,  155 => 47,  132 => 39,  127 => 35,  53 => 17,  113 => 40,  110 => 38,  100 => 36,  23 => 2,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  553 => 425,  551 => 424,  546 => 423,  543 => 206,  539 => 205,  529 => 409,  525 => 195,  523 => 194,  518 => 193,  514 => 415,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  439 => 195,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  394 => 168,  378 => 157,  370 => 135,  368 => 126,  365 => 125,  361 => 152,  347 => 119,  345 => 147,  333 => 115,  329 => 131,  323 => 128,  317 => 116,  312 => 130,  306 => 286,  300 => 121,  294 => 109,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 100,  239 => 95,  229 => 87,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 90,  184 => 63,  181 => 65,  169 => 42,  160 => 59,  152 => 46,  148 => 53,  134 => 39,  114 => 36,  107 => 37,  76 => 28,  70 => 26,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 79,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 55,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 29,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 63,  142 => 49,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 6,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 48,  131 => 44,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 15,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 40,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 50,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 11,  99 => 23,  95 => 39,  92 => 31,  86 => 48,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}

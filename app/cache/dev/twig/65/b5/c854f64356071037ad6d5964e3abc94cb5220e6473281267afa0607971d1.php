<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_65b5c854f64356071037ad6d5964e3abc94cb5220e6473281267afa0607971d1 extends Twig_Template
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
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "start"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "end"), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  20 => 1,  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 94,  389 => 160,  386 => 159,  367 => 155,  363 => 153,  358 => 151,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  283 => 115,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  222 => 83,  175 => 58,  170 => 84,  34 => 5,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 134,  384 => 132,  382 => 131,  377 => 129,  374 => 128,  371 => 156,  362 => 124,  359 => 123,  356 => 122,  353 => 149,  350 => 120,  341 => 117,  328 => 139,  324 => 112,  313 => 110,  308 => 109,  305 => 108,  281 => 114,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  186 => 72,  180 => 70,  177 => 69,  161 => 58,  128 => 42,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  297 => 200,  293 => 120,  271 => 190,  258 => 187,  251 => 182,  249 => 92,  77 => 20,  61 => 12,  174 => 74,  167 => 71,  118 => 49,  104 => 31,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  387 => 164,  380 => 158,  373 => 156,  355 => 150,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  325 => 129,  320 => 127,  315 => 131,  303 => 122,  298 => 120,  289 => 196,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  262 => 93,  256 => 96,  248 => 97,  241 => 93,  233 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 76,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 75,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  90 => 42,  84 => 27,  81 => 23,  58 => 18,  97 => 25,  155 => 47,  132 => 39,  127 => 35,  53 => 15,  113 => 48,  110 => 36,  100 => 10,  23 => 2,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  553 => 425,  551 => 424,  546 => 423,  543 => 206,  539 => 205,  529 => 409,  525 => 195,  523 => 194,  518 => 193,  514 => 415,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  439 => 195,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  394 => 168,  378 => 157,  370 => 135,  368 => 126,  365 => 125,  361 => 152,  347 => 119,  345 => 147,  333 => 115,  329 => 131,  323 => 128,  317 => 116,  312 => 130,  306 => 113,  300 => 121,  294 => 109,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 100,  239 => 95,  229 => 87,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 90,  184 => 63,  181 => 65,  169 => 42,  160 => 59,  152 => 46,  148 => 53,  134 => 39,  114 => 36,  107 => 33,  76 => 27,  70 => 24,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 79,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 57,  143 => 55,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 29,  87 => 32,  21 => 2,  26 => 6,  93 => 27,  88 => 24,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 63,  142 => 49,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 5,  25 => 6,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 9,  37 => 7,  22 => 4,  246 => 136,  157 => 56,  145 => 74,  139 => 48,  131 => 44,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 23,  66 => 23,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 40,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 50,  116 => 57,  112 => 28,  109 => 52,  106 => 51,  103 => 11,  99 => 23,  95 => 34,  92 => 28,  86 => 48,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 23,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}

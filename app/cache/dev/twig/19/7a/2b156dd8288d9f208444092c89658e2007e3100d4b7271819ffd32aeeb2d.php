<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_197a2b156dd8288d9f208444092c89658e2007e3100d4b7271819ffd32aeeb2d extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  167 => 71,  118 => 49,  104 => 42,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  387 => 164,  380 => 160,  373 => 156,  355 => 143,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  298 => 120,  289 => 113,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  262 => 98,  256 => 96,  248 => 94,  241 => 90,  233 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  185 => 75,  178 => 64,  172 => 62,  165 => 60,  153 => 69,  150 => 55,  90 => 27,  84 => 24,  81 => 23,  58 => 18,  97 => 25,  155 => 41,  132 => 39,  127 => 36,  53 => 12,  113 => 48,  110 => 36,  100 => 10,  23 => 2,  596 => 225,  590 => 224,  585 => 221,  577 => 218,  573 => 216,  569 => 214,  560 => 212,  556 => 211,  553 => 210,  551 => 209,  546 => 207,  543 => 206,  539 => 205,  529 => 197,  525 => 195,  523 => 194,  518 => 193,  514 => 192,  509 => 189,  503 => 185,  500 => 184,  497 => 183,  495 => 182,  492 => 181,  490 => 180,  487 => 179,  484 => 178,  482 => 177,  479 => 176,  477 => 175,  474 => 174,  471 => 173,  469 => 172,  466 => 171,  464 => 170,  461 => 169,  458 => 168,  456 => 167,  451 => 164,  445 => 160,  442 => 159,  439 => 195,  437 => 157,  432 => 154,  426 => 150,  423 => 149,  420 => 148,  418 => 147,  413 => 144,  399 => 143,  394 => 168,  378 => 137,  370 => 135,  368 => 134,  365 => 133,  361 => 146,  347 => 125,  345 => 124,  333 => 121,  329 => 131,  323 => 128,  317 => 116,  312 => 124,  306 => 113,  300 => 121,  294 => 109,  285 => 105,  280 => 103,  276 => 102,  267 => 101,  250 => 100,  239 => 95,  229 => 85,  218 => 82,  212 => 78,  210 => 77,  205 => 76,  188 => 76,  184 => 73,  181 => 65,  169 => 42,  160 => 59,  152 => 54,  148 => 53,  134 => 54,  114 => 37,  107 => 33,  76 => 31,  70 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 94,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 78,  179 => 69,  159 => 61,  143 => 55,  135 => 53,  119 => 40,  102 => 41,  71 => 17,  67 => 24,  63 => 20,  59 => 14,  38 => 6,  94 => 8,  89 => 20,  85 => 19,  75 => 25,  68 => 16,  56 => 29,  87 => 34,  21 => 2,  26 => 6,  93 => 9,  88 => 53,  78 => 25,  46 => 13,  27 => 3,  44 => 12,  31 => 9,  28 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 61,  163 => 60,  158 => 67,  156 => 58,  151 => 63,  142 => 49,  138 => 56,  136 => 56,  121 => 50,  117 => 48,  105 => 34,  91 => 27,  62 => 23,  49 => 14,  24 => 5,  25 => 6,  19 => 1,  79 => 18,  72 => 36,  69 => 20,  47 => 13,  40 => 9,  37 => 10,  22 => 4,  246 => 93,  157 => 56,  145 => 46,  139 => 48,  131 => 44,  123 => 42,  120 => 30,  115 => 43,  111 => 47,  108 => 36,  101 => 30,  98 => 27,  96 => 37,  83 => 33,  74 => 23,  66 => 23,  55 => 16,  52 => 15,  50 => 10,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 5,  209 => 82,  203 => 73,  199 => 71,  193 => 73,  189 => 71,  187 => 84,  182 => 70,  176 => 63,  173 => 68,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 40,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 50,  116 => 39,  112 => 28,  109 => 27,  106 => 36,  103 => 11,  99 => 31,  95 => 28,  92 => 21,  86 => 48,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 23,  57 => 11,  54 => 17,  51 => 14,  48 => 13,  45 => 10,  42 => 10,  39 => 9,  36 => 10,  33 => 4,  30 => 3,);
    }
}

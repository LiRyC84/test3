<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0890f4f3a67c614d3d3f761ad07cfb773af12afdbcba69993e7327f137c0794b extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  28 => 3,  87 => 20,  46 => 11,  44 => 10,  31 => 5,  25 => 4,  21 => 2,  24 => 2,  19 => 1,  79 => 21,  72 => 16,  69 => 25,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 39,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 13,  52 => 21,  50 => 14,  43 => 6,  41 => 5,  35 => 7,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 14,  54 => 21,  51 => 20,  48 => 9,  45 => 17,  42 => 16,  39 => 16,  36 => 7,  33 => 6,  30 => 3,);
    }
}

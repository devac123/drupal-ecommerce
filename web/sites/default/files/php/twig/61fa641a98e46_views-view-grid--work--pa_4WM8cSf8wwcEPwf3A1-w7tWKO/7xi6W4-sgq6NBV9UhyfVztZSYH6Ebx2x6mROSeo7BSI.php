<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yebo_theme/templates/views/views-view-grid--work--page-1.html.twig */
class __TwigTemplate_3d37a3e56e816c67991743ca097203834137f2b7a98b68b89f2a5e2dc0d14db6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 2));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 3
                echo "\t\t<div class=\"row\">
\t\t\t";
                // line 4
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 4) == 1)) {
                    echo "\t
\t\t\t\t<div class=\"col-md-8 section-1 nopadding\" id=\"work\">
\t\t\t\t\t<div class=\"logo-1 wp1\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t<div class=\"wp4\">
\t\t\t\t\t    
\t\t\t\t\t\t";
                    // line 11
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t<div class=\"thin-sep\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-featured-img seat-red\">
\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 19) == 2)) {
                    echo "\t
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t\t<div class=\"wp5\">
\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 23
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t\t\t<div class=\"thin-sep\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-featured-img seat-black\">
\t\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-8 section-2 nopadding\">
\t\t\t\t\t<div class=\"logo-2 wp2\"></div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 35) == 3)) {
                    echo "\t
\t\t\t\t<div class=\"col-md-4 section-3\">
\t\t\t\t\t<div class=\"logo-3 wp3 animated bounceInLeft\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t<div class=\"wp6 animated fadeInUp\">
\t\t\t\t\t";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-featured-img frame-red\">
\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-4\"></div>
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t</div>
\t\t
\t\t

\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/yebo_theme/templates/views/views-view-grid--work--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  130 => 49,  119 => 41,  109 => 35,  94 => 23,  86 => 19,  75 => 11,  65 => 4,  62 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% for row in items %}
  {% for column in row.content %}
\t\t<div class=\"row\">
\t\t\t{% if loop.index  == 1  %}\t
\t\t\t\t<div class=\"col-md-8 section-1 nopadding\" id=\"work\">
\t\t\t\t\t<div class=\"logo-1 wp1\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t<div class=\"wp4\">
\t\t\t\t\t    
\t\t\t\t\t\t{{column.content}}
\t\t\t\t\t\t<div class=\"thin-sep\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-featured-img seat-red\">
\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if loop.index  == 2  %}\t
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t\t<div class=\"wp5\">
\t\t\t\t\t
\t\t\t\t\t\t\t{{column.content}}
\t\t\t\t\t\t\t<div class=\"thin-sep\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"small-featured-img seat-black\">
\t\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-md-8 section-2 nopadding\">
\t\t\t\t\t<div class=\"logo-2 wp2\"></div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if loop.index  == 3  %}\t
\t\t\t\t<div class=\"col-md-4 section-3\">
\t\t\t\t\t<div class=\"logo-3 wp3 animated bounceInLeft\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-text nopadding\">
\t\t\t\t\t<div class=\"wp6 animated fadeInUp\">
\t\t\t\t\t{{column.content}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-featured-img frame-red\">
\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 section-4\"></div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t
\t\t

\t{% endfor %}
    {% endfor %}", "themes/yebo_theme/templates/views/views-view-grid--work--page-1.html.twig", "C:\\xampp\\htdocs\\ecommerce\\web\\themes\\yebo_theme\\templates\\views\\views-view-grid--work--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 4);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

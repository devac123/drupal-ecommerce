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

/* themes/yebo_theme/templates/page.html.twig */
class __TwigTemplate_02619e6e906489b8a6093a6142c23a2fcba698deb9043409793fabf2f3ecc107 extends \Twig\Template
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
        echo "<body> 
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"responsive-logo\"></div>
\t\t\t\t\t<div class=\"pullcontainer\">
\t\t\t\t\t\t<a href=\"#\" id=\"pull\"><i class=\"fa fa-bars fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<nav>
                        <div class=\"logo-holder\"></div>
                        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 14)) {
            // line 15
            echo "\t\t\t\t\t\t    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_section", [], "any", false, false, true, 21)) {
            // line 22
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_section", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 23
            echo "\t
\t\t\t\t<div class=\"hero\"></div>
\t\t\t";
        }
        // line 26
        echo "\t\t</header>
\t
\t\t</div>
\t      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "introduction", [], "any", false, false, true, 29)) {
            // line 30
            echo "\t\t   <div class=\"container-fluid intro\" id=\"about\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "introduction", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
           </div>
           ";
        }
        // line 38
        echo "<div class=\"container-fluid\">
   ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
</div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4 section-3\">
                <div class=\"logo-3 wp3\"></div>
            </div>
            <div class=\"col-md-4 section-text nopadding\">
                <div class=\"wp6\">
                    <h2 class=\"front-frame\">Retrò Bike - M. Hulot</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
                    <div class=\"thin-sep\"></div>
                </div>
                <div class=\"small-featured-img frame-red\">
                    <div class=\"arrow\"></div>
                </div>
            </div>
            <div class=\"col-md-4 section-4\"></div>
        </div>
    </div>

";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "testimonial", [], "any", false, false, true, 60)) {
            // line 61
            echo "<section class=\"flex-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.</p>
                        </li>
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. </p>
                        </li>
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
        }
        // line 95
        echo "
<div class=\"container-fluid\" id=\"shop\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<section class=\"discover\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"shop-btn\">Discover The Shop</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "newsletter", [], "any", false, false, true, 110)) {
            // line 111
            echo "\t\t<section class=\"sign_up\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 sign-up\">
                        ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t<h2 class=\"logo-header\">Stay on the saddle!</h2>
                            ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "newsletter", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
                            ";
            // line 122
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 127
        echo "\t\t<footer id=\"contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 footer-leftcol\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 132
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
        echo "\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-midcol\">
\t\t\t\t\t\t";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-rightcol\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t
\t</body>

";
    }

    public function getTemplateName()
    {
        return "themes/yebo_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 141,  224 => 136,  217 => 132,  210 => 127,  203 => 122,  199 => 117,  194 => 115,  188 => 111,  186 => 110,  171 => 98,  166 => 95,  130 => 61,  128 => 60,  104 => 39,  101 => 38,  93 => 33,  88 => 30,  86 => 29,  81 => 26,  76 => 23,  70 => 22,  68 => 21,  62 => 17,  56 => 15,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body> 
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"responsive-logo\"></div>
\t\t\t\t\t<div class=\"pullcontainer\">
\t\t\t\t\t\t<a href=\"#\" id=\"pull\"><i class=\"fa fa-bars fa-2x\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t<nav>
                        <div class=\"logo-holder\"></div>
                        {% if page.navbar %}
\t\t\t\t\t\t    {{page.navbar}}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if page.banner_section %}
\t\t\t\t{{page.banner_section}}
\t\t\t{% else %}\t
\t\t\t\t<div class=\"hero\"></div>
\t\t\t{% endif %}
\t\t</header>
\t
\t\t</div>
\t      {% if page.introduction %}
\t\t   <div class=\"container-fluid intro\" id=\"about\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        {{page.introduction}}
                    </div>
                </div>
           </div>
           {% endif %}
<div class=\"container-fluid\">
   {{ page.content }}
</div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-4 section-3\">
                <div class=\"logo-3 wp3\"></div>
            </div>
            <div class=\"col-md-4 section-text nopadding\">
                <div class=\"wp6\">
                    <h2 class=\"front-frame\">Retrò Bike - M. Hulot</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
                    <div class=\"thin-sep\"></div>
                </div>
                <div class=\"small-featured-img frame-red\">
                    <div class=\"arrow\"></div>
                </div>
            </div>
            <div class=\"col-md-4 section-4\"></div>
        </div>
    </div>

{% if page.testimonial %}
<section class=\"flex-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"flexslider\">
                    <ul class=\"slides\">
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.</p>
                        </li>
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. </p>
                        </li>
                        <li>
                            <div class=\"flex-twitter-icon\"></div>
                            <h2 class=\"twitter-post-username\">
                            <a href=\"#\">AOS New York @aod</a> <span>/ 35 min</span>
                            </h2>
                            <p class=\"twitter-post\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{% endif %}

<div class=\"container-fluid\" id=\"shop\">
\t\t\t<div class=\"row\">
\t\t\t\t{{page.gallery}}
\t\t\t</div>
\t\t</div>
\t\t<section class=\"discover\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"shop-btn\">Discover The Shop</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% if page.newsletter %}
\t\t<section class=\"sign_up\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 sign-up\">
                        {{ page.logo }}
\t\t\t\t\t\t<h2 class=\"logo-header\">Stay on the saddle!</h2>
                            {{page.newsletter}}
                            {# <form name=\"signup-form\">
                                <input class=\"signup-input\" type=\"email\" name=\"email_address\" value=\"\" placeholder=\"enter your email...\" title=\"Please enter a valid email address.\" required=\"\">
                                <button type=\"submit\" class=\"submit-btn\">GO</button>
                            </form> #}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{% endif %}
\t\t<footer id=\"contact\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 footer-leftcol\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{page.footer_first}}\t
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-midcol\">
\t\t\t\t\t\t{{page.footer_second}}
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-rightcol\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{page.footer_third}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t
\t</body>

", "themes/yebo_theme/templates/page.html.twig", "C:\\xampp\\htdocs\\ecommerce\\web\\themes\\yebo_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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

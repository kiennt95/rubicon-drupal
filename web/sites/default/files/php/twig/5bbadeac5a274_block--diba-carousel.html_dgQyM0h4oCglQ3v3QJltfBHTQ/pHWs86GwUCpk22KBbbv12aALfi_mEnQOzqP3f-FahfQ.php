<?php

/* modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig */
class __TwigTemplate_6c22292b5ec4362e4360eb4524e71d7b63d5f313679fe6ecbcf0f88a9e810fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 7, "if" => 10, "block" => 19, "for" => 29, "trans" => 61);
        $filters = array("length" => 20, "raw" => 31, "t" => 72);
        $functions = array("attach_library" => 16, "range" => 29, "file_url" => 40, "link" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block', 'for', 'trans'),
                array('length', 'raw', 't'),
                array('attach_library', 'range', 'file_url', 'link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        $context["classes"] = array(0 => "block", 1 => "diba-carousel");
        // line 8
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 10
        if (($context["label"] ?? null)) {
            // line 11
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 13
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "carousel_style", array()) == "diba")) {
            // line 16
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("diba_carousel/diba-style"), "html", null, true));
            echo "
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["els"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "slides", array()));
        // line 21
        echo "    ";
        if ((($context["els"] ?? null) > 0)) {
            // line 22
            echo "      ";
            $context["data_interval"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "data_interval", array());
            // line 23
            echo "      ";
            if ((($context["data_interval"] ?? null) == 0)) {
                // line 24
                echo "        ";
                $context["data_interval"] = "false";
                // line 25
                echo "      ";
            }
            // line 26
            echo "      <div id=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "id", array()), "html", null, true));
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["data_interval"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 27
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "carousel_style", array()) != "without-indicators")) {
                // line 28
                echo "          <ol class=\"carousel-indicators\">
          ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (($context["els"] ?? null) - 1)));
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
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 30
                    echo "            ";
                    $context["class_item"] = (($this->getAttribute($context["loop"], "first", array())) ? ("class=\"active\"") : (""));
                    // line 31
                    echo "            <li data-target=\"#";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "id", array()), "html", null, true));
                    echo "\" data-slide-to=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["i"], "html", null, true));
                    echo "\" ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["class_item"] ?? null)));
                    echo "></li>
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "          </ol>
        ";
            }
            // line 35
            echo "        <div class=\"carousel-inner\">
          ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "slides", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "            ";
                $context["class_item"] = (($this->getAttribute($context["loop"], "first", array())) ? ("class=\"item carousel-item active\"") : ("class=\"item carousel-item\""));
                // line 38
                echo "            <div ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["class_item"] ?? null)));
                echo ">
              ";
                // line 39
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 40
                    echo "                <img src=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["item"], "image", array()))), "html", null, true));
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "title", array())));
                    echo "\" width=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "image_width", array())));
                    echo "\" height=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "image_height", array())));
                    echo "\">
              ";
                }
                // line 42
                echo "              <div class=\"carousel-caption\">
                ";
                // line 43
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 44
                    echo "                  <h2 class=\"caption-title\">
                    ";
                    // line 45
                    if ($this->getAttribute($context["item"], "url", array())) {
                        // line 46
                        echo "                      ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "
                    ";
                    } else {
                        // line 48
                        echo "                      ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "title", array())));
                        echo "
                    ";
                    }
                    // line 50
                    echo "                  </h2>
                ";
                }
                // line 52
                echo "                ";
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 53
                    echo "                  <p class=\"caption-desc\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "description", array())));
                    echo "</p>
                ";
                }
                // line 55
                echo "              </div>
            </div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "carousel_style", array()) == "controls")) {
                // line 59
                echo "            <a class=\"carousel-control-prev left carousel-control\" href=\"#";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "id", array()), "html", null, true));
                echo "\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">";
                // line 61
                echo t("Previous", array());
                echo "</span>
            </a>
            <a class=\"carousel-control-next right carousel-control\" href=\"#";
                // line 63
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "id", array()), "html", null, true));
                echo "\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">";
                // line 65
                echo t("Next", array());
                echo "</span>
            </a>
          ";
            }
            // line 68
            echo "        </div>
      </div>
      ";
            // line 70
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "more_link", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "more_link_text", array()))) {
                // line 71
                echo "        <div class=\"carousel-more-link\">
          ";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink(t($this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "more_link_text", array())), $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "more_link", array()), array("title" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["elements"] ?? null), "content", array()), "config", array()), "more_link_text", array()))), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 75
            echo "    ";
        }
        // line 76
        echo "  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 76,  300 => 75,  294 => 72,  291 => 71,  289 => 70,  285 => 68,  279 => 65,  274 => 63,  269 => 61,  263 => 59,  260 => 58,  244 => 55,  238 => 53,  235 => 52,  231 => 50,  225 => 48,  219 => 46,  217 => 45,  214 => 44,  212 => 43,  209 => 42,  197 => 40,  195 => 39,  190 => 38,  187 => 37,  170 => 36,  167 => 35,  163 => 33,  142 => 31,  139 => 30,  122 => 29,  119 => 28,  117 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  84 => 77,  82 => 19,  79 => 18,  73 => 16,  71 => 15,  65 => 13,  57 => 11,  55 => 10,  51 => 9,  46 => 8,  44 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for diba_carousel.
 */
#}
{% set classes = ['block', 'diba-carousel'] %}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}

  {% if elements.content.config.carousel_style == 'diba' %}
    {{ attach_library('diba_carousel/diba-style') }}
  {% endif %}

  {% block content %}
    {% set els = elements.content.slides|length %}
    {% if els > 0 %}
      {% set data_interval = elements.content.config.data_interval %}
      {% if data_interval == 0 %}
        {% set data_interval = \"false\" %}
      {% endif %}
      <div id=\"{{ elements.content.id }}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"{{ data_interval }}\">
        {% if elements.content.config.carousel_style != 'without-indicators' %}
          <ol class=\"carousel-indicators\">
          {% for i in 0..els-1 %}
            {% set class_item = (loop.first) ? 'class=\"active\"' : '' %}
            <li data-target=\"#{{ elements.content.id }}\" data-slide-to=\"{{ i }}\" {{ class_item|raw }}></li>
          {% endfor %}
          </ol>
        {% endif %}
        <div class=\"carousel-inner\">
          {% for item in elements.content.slides %}
            {% set class_item = (loop.first) ? 'class=\"item carousel-item active\"' : 'class=\"item carousel-item\"' %}
            <div {{ class_item|raw }}>
              {% if item.image %}
                <img src=\"{{ file_url(item.image) }}\" alt=\"{{ item.title|raw }}\" width=\"{{ item.image_width|raw }}\" height=\"{{ item.image_height|raw }}\">
              {% endif %}
              <div class=\"carousel-caption\">
                {% if item.title %}
                  <h2 class=\"caption-title\">
                    {% if item.url %}
                      {{ link(item.title|raw, item.url) }}
                    {% else %}
                      {{ item.title|raw }}
                    {% endif %}
                  </h2>
                {% endif %}
                {% if item.description %}
                  <p class=\"caption-desc\">{{ item.description|raw }}</p>
                {% endif %}
              </div>
            </div>
          {% endfor %}
          {% if elements.content.config.carousel_style == 'controls' %}
            <a class=\"carousel-control-prev left carousel-control\" href=\"#{{ elements.content.id }}\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">{% trans %}Previous{% endtrans %}</span>
            </a>
            <a class=\"carousel-control-next right carousel-control\" href=\"#{{ elements.content.id }}\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">{% trans %}Next{% endtrans %}</span>
            </a>
          {% endif %}
        </div>
      </div>
      {% if elements.content.config.more_link and elements.content.config.more_link_text %}
        <div class=\"carousel-more-link\">
          {{ link(elements.content.config.more_link_text|t, elements.content.config.more_link, {'title': elements.content.config.more_link_text}) }}
        </div>
      {% endif %}
    {% endif %}
  {% endblock %}
</div>
", "modules/contrib/diba_carousel/templates/block--diba-carousel.html.twig", "C:\\xampp\\htdocs\\rubicon-drupal\\web\\modules\\contrib\\diba_carousel\\templates\\block--diba-carousel.html.twig");
    }
}

<?php

/* modules/contrib/betterlogin/templates/page--user--password.html.twig */
class __TwigTemplate_eaadd159c486580d14b6e3d03acf090c2177698dc8da4b7cd2b1c2d1e84280f2 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 21);
        $functions = array("url" => 4, "path" => 21);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
                array('url', 'path')
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

        // line 1
        echo "<div id=\"auth_box\" class=\"password\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\">
        <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo "\" />
      </a>
    </h1>
  </div>

  <div id=\"middle_part\">
    <h2 class=\"title\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>

    ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
        echo "

    ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
  </div>

  <div id=\"bottom_part\">
    <div class=\"login_link\">
      <a href=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login")));
        echo "</a>
    </div>

    <div class=\"register_link\">
      <a href=\"";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Register a new account")));
        echo "</a>
    </div>

    <div class=\"back_link\">
      <a href=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\">&larr; ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back")));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo "</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/betterlogin/templates/page--user--password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  94 => 25,  85 => 21,  77 => 16,  72 => 14,  68 => 13,  63 => 11,  52 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"auth_box\" class=\"password\">
  <div id=\"top_part\">
    <h1 id=\"the_logo\">
      <a href=\"{{ url('<front>') }}\">
        <img src=\"{{ logo }}\" alt=\"{{ site_name }}\" />
      </a>
    </h1>
  </div>

  <div id=\"middle_part\">
    <h2 class=\"title\">{{ title }}</h2>

    {{ page.highlighted }}
    {{ messages }}

    {{ page.content }}
  </div>

  <div id=\"bottom_part\">
    <div class=\"login_link\">
      <a href=\"{{ path('user.login') }}\">{{ 'Login'|t }}</a>
    </div>

    <div class=\"register_link\">
      <a href=\"{{ path('user.register') }}\">{{ 'Register a new account'|t }}</a>
    </div>

    <div class=\"back_link\">
      <a href=\"{{ url('<front>') }}\">&larr; {{ 'Back'|t }} {{ site_name }}</a>
    </div>
  </div>
</div>
", "modules/contrib/betterlogin/templates/page--user--password.html.twig", "C:\\xampp\\htdocs\\rubicon-drupal\\web\\modules\\contrib\\betterlogin\\templates\\page--user--password.html.twig");
    }
}

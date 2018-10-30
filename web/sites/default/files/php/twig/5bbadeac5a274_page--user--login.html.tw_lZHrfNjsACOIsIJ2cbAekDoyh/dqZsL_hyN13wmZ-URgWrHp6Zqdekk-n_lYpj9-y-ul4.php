<?php

/* themes/custom/rubicon/templates/page/page--user--login.html.twig */
class __TwigTemplate_4a6d41316ee8839eae6f155f58c490d0d911617cc3c10ff57ab727041c605e6e extends Twig_Template
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
        $tags = array("block" => 5);
        $filters = array("t" => 9);
        $functions = array("url" => 4, "path" => 9);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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
        echo "<div class=\"login-main-container\">
  <div class=\"login-main-mask\"></div>
  <div class=\"login-main-content\">
    <a class=\"go-back\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
    ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "    <div class=\"login-links text-center\">
      <span><a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Register a new account")));
        echo "</a></span>
      <span>|</span>
      <span><a href=\"";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.pass")));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Forgot your password?")));
        echo "</a></span>
    </div>
  </div>
</div>

";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/rubicon/templates/page/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 6,  77 => 5,  65 => 11,  58 => 9,  55 => 8,  53 => 5,  49 => 4,  44 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"login-main-container\">
  <div class=\"login-main-mask\"></div>
  <div class=\"login-main-content\">
    <a class=\"go-back\" href=\"{{ url('<front>') }}\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
    {% block content %}
      {{ page.content }}
    {% endblock %}
    <div class=\"login-links text-center\">
      <span><a href=\"{{ path('user.register') }}\">{{ 'Register a new account'|t }}</a></span>
      <span>|</span>
      <span><a href=\"{{ path('user.pass') }}\">{{ 'Forgot your password?'|t }}</a></span>
    </div>
  </div>
</div>

", "themes/custom/rubicon/templates/page/page--user--login.html.twig", "C:\\xampp\\htdocs\\rubicon-drupal\\web\\themes\\custom\\rubicon\\templates\\page\\page--user--login.html.twig");
    }
}

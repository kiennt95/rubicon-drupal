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
        $tags = array("block" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
                array(),
                array()
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
  ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 5
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/rubicon/templates/page/page--user--login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  54 => 2,  49 => 5,  47 => 2,  44 => 1,);
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
  {% block content %}
    {{ page.content }}
  {% endblock %}
</div>
", "themes/custom/rubicon/templates/page/page--user--login.html.twig", "C:\\xampp\\htdocs\\rubicon-drupal\\web\\themes\\custom\\rubicon\\templates\\page\\page--user--login.html.twig");
    }
}

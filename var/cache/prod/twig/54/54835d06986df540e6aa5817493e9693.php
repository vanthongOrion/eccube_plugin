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

/* MailMagazine42/Resource/template/admin/mailmagazine.twig */
class __TwigTemplate_3dd8cc6785e25289e91aa1fbf1424240 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            '_admin_customer_mailmaga_flg_row' => [$this, 'block__admin_customer_mailmaga_flg_row'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "@admin/Form/bootstrap_4_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@admin/Form/bootstrap_4_horizontal_layout.html.twig", "MailMagazine42/Resource/template/admin/mailmagazine.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block__admin_customer_mailmaga_flg_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"row mb-2\">
        <div class=\"col-3\">
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, true, 28), "label", [], "any", false, false, true, 28), 28, $this->source)), "html", null, true);
        echo "</span><span class=\"badge bg-primary ms-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"col\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 31, $this->source), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 32, $this->source), 'errors');
        // line 33
        echo "</div>
    </div>";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Resource/template/admin/mailmagazine.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 33,  65 => 32,  63 => 31,  56 => 28,  52 => 26,  48 => 25,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Resource/template/admin/mailmagazine.twig", "/var/www/html/app/Plugin/MailMagazine42/Resource/template/admin/mailmagazine.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 28, "trans" => 28);
        static $functions = array("form_widget" => 31, "form_errors" => 32);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trans'],
                ['form_widget', 'form_errors']
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

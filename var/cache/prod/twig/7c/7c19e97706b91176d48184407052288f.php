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

/* Coupon42/Resource/template/admin/order_edit_coupon.twig */
class __TwigTemplate_e932a0e07e307a225bc0a497c2d2dc13 extends \Eccube\Twig\Template
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
        // line 10
        echo "<script type=\"text/javascript\">
    \$(function () {
        \$(\".c-primaryCol .card\").last().before(\$(\"#coupon\").detach());
    });
</script>
";
        // line 16
        echo "<div id=\"coupon\" class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\">
                    <span class=\"card-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.header"), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#couponArea\" aria-expanded=\"false\" aria-controls=\"couponArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"couponArea\">
        <div class=\"card-body\">
            <label class=\"control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.admin.order_edit.body"), "html", null, true);
        echo "</label>　
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_cd"] ?? null), 30, $this->source), "html", null, true);
        echo "　";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_name"] ?? null), 30, $this->source), "html", null, true);
        echo " ";
        if (($context["coupon_change_status"] ?? null)) {
            echo "<p class=\"text-danger\">注文がキャンセルされたため、クーポンが適用されていません。お支払い合計を変更する場合は、「";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["coupon_name"] ?? null), 30, $this->source), "html", null, true);
            echo "」の明細を手動にて削除してください。</p>";
        }
        // line 31
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/order_edit_coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  68 => 30,  64 => 29,  53 => 21,  46 => 16,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/order_edit_coupon.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/order_edit_coupon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30);
        static $filters = array("escape" => 21, "trans" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
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

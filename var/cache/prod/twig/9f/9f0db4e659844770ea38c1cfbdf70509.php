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

/* Coupon42/Resource/template/admin/regist_category_list_prototype.twig */
class __TwigTemplate_37fa272e6133f74adf4dbae84e655e10 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_parse_4' => [$this, 'block___internal_parse_4'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_parse_4", $context, $blocks));
    }

    public function block___internal_parse_4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"row item_box\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___id\" name=\"coupon[CouponDetails][__name__][id]\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___Category\" name=\"coupon[CouponDetails][__name__][Category]\">
        <input type=\"hidden\" id=\"coupon_CouponDetails___name___coupon_type\" name=\"coupon[CouponDetails][__name__][coupon_type]\">
        <div class=\"col-11 item_detail\">
            <div class=\"item_name_area\">
                <div class=\"item_name fw-bold\">
                    <div id=\"coupon_CouponDetails___name___category_name\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-1 icon_edit\">
            <a class=\"btn btn-ec-actionIcon mr-3 delete-item\" data-bs-toggle=\"modal\" data-bs-toggle=\"tooltip\" data-bs-target=\"#confirmModal\" data-bs-placement=\"top\" title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div><!-- /.item_box -->
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/admin/regist_category_list_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/admin/regist_category_list_prototype.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/admin/regist_category_list_prototype.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("filter" => 1);
        static $filters = array("escape" => 1, "trans" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['filter'],
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

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

/* Coupon42/Resource/template/default/coupon_shopping_item.twig */
class __TwigTemplate_8018d2385509e123a05a2251dae4099b extends \Eccube\Twig\Template
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
        \$('#coupon_button').on(\"click\", function () {
            \$(this).attr('disabled', 'disabled');
            \$.ajax({
                type: 'POST',
                data: \$('#shopping-form').serialize(),
                url: '";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
        echo "',
                success: function(data) {
                    window.location.href = '";
        // line 19
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                },
                error: function() {
                    window.location.href = '";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "';
                }
            });
            return false;
        });

        // append to layout
        \$(\".ec-orderPayment\").last().after(\$(\"#coupon\").detach());
    })
</script>

<div id=\"coupon\" class=\"ec-orderCoupon\">
    <div class=\"ec-rectHeading\">
        <h2>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.header"), "html", null, true);
        echo "</h2>
    </div>
    <div id=\"customer_detail_box\" class=\"column\">
        ";
        // line 38
        if (($context["CouponOrder"] ?? null)) {
            // line 39
            echo "            <strong class=\"ec-color-red\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.use_code", ["%code%" => twig_get_attribute($this->env, $this->source, ($context["CouponOrder"] ?? null), "coupon_cd", [], "any", false, false, true, 39)]), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.message.empty"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "        <p><a class=\"ec-inlineBtn\" id=\"coupon_button\" href=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_coupon_shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_coupon.front.shopping.button.add_coupon"), "html", null, true);
        echo "</a></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Coupon42/Resource/template/default/coupon_shopping_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  89 => 41,  83 => 39,  81 => 38,  75 => 35,  59 => 22,  53 => 19,  48 => 17,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Coupon42/Resource/template/default/coupon_shopping_item.twig", "/var/www/html/app/Plugin/Coupon42/Resource/template/default/coupon_shopping_item.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 35, "trans" => 35);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trans'],
                ['url']
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

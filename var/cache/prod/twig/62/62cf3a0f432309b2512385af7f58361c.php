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

/* Mail/shipping_notify.html.twig */
class __TwigTemplate_1b957d92a245a59457af122b92dad1d1 extends \Eccube\Twig\Template
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
        // line 11
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">商品を発送いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " 様<br>
                            <br>
                            ";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "でございます。<br/>
                            お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。<br/>
                            <br/>
                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, true, 36)) {
            // line 37
            echo "                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                お問い合わせ番号：";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, true, 39), "confirm_url", [], "any", false, false, true, 39)) {
                // line 40
                echo "                                    <br/>
                                    お問い合わせURL：";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, true, 41), "confirm_url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 43
            echo "                                <br/>
                            ";
        }
        // line 45
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "productOrderItems", [], "any", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 49
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "<br/>
                                数量：";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 58
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 59)) {
            // line 60
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 62
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, true, 63), "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana01", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana02", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo " 様<br/>
                            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, true, 71)) {
            // line 72
            echo "                                会社名：";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 74
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "postal_code", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "<br/>
                            住所：";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Pref", [], "any", false, false, true, 75), "name", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr01", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr02", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "phone_number", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "<br/>
                            <br/>
                            配送方法：";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_name", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "<br/>
                            お届け日：";
        // line 79
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, true, 79))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, true, 79)), "html", null, true))));
        echo "<br/>
                            お届け時間：";
        // line 80
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, true, 80)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, true, 80), 80, $this->source), "指定なし")) : ("指定なし")), "html", null, true);
        echo "<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 95
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "Mail/shipping_notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 96,  247 => 95,  240 => 93,  236 => 92,  221 => 80,  217 => 79,  213 => 78,  208 => 76,  202 => 75,  197 => 74,  191 => 72,  189 => 71,  183 => 70,  177 => 69,  169 => 64,  163 => 63,  158 => 62,  152 => 60,  150 => 59,  144 => 58,  138 => 57,  133 => 54,  124 => 51,  116 => 50,  111 => 49,  107 => 48,  102 => 45,  98 => 43,  93 => 41,  90 => 40,  88 => 39,  84 => 38,  81 => 37,  79 => 36,  73 => 33,  66 => 31,  47 => 17,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/shipping_notify.html.twig", "/var/www/html/src/Eccube/Resource/template/default/Mail/shipping_notify.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "for" => 48);
        static $filters = array("escape" => 17, "number_format" => 51, "date_day" => 79, "default" => 80);
        static $functions = array("url" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'number_format', 'date_day', 'default'],
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

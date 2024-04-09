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

/* ProductReview42/Resource/template/default/review.twig */
class __TwigTemplate_5d38a71032a2e1d862fec4bbceda930b extends \Eccube\Twig\Template
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
        echo "
";
        // line 12
        $macros["stars"] = $this->macros["stars"] = $this;
        // line 13
        echo "
";
        // line 20
        echo "
<style type=\"text/css\">

    #product_review_area {
        border-top: 1px solid #E8E8E8;
        padding-bottom: 0;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading {
        cursor: pointer;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #product_review_area .ec-rectHeading.is_active i {
        transform: rotate(180deg);
    }

    #product_review_area .review_list {
        padding-left: 25px;
    }

    #product_review_area .review_list li {
        margin-bottom: 16px;
    }

    #product_review_area .review_list .review_date {
        font-weight: bold;
    }

    #product_review_area .recommend_average {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_level {
        margin-left: 16px;
        color: #DE5D50;
    }

    #product_review_area .review_list .recommend_name {
        margin-left: 16px;
    }

</style>

<script>
    \$(function() {
        \$('#product_review_area').appendTo(\$('.ec-layoutRole__main, .ec-layoutRole__mainWithColumn, .ec-layoutRole__mainBetweenColumn'));

        \$('#product_review_area .ec-rectHeading').on('click', function() {
            \$content = \$('#reviewContent');
            if (\$content.css('display') == 'none') {
                \$(this).addClass('is_active');
                \$content.addClass('is_active');
                \$content.slideDown(300);
            } else {
                \$(this).removeClass('is_active');
                \$content.removeClass('is_active');
                \$content.slideUp(300);
            }
            return false;
        });
    });
</script>

<!--▼レビューエリア-->
<div id=\"product_review_area\">
    <div class=\"ec-role\">
        ";
        // line 90
        $context["positive_avg_star"] = ($context["ProductReviewAvg"] ?? null);
        // line 91
        echo "        ";
        $context["negative_avg_star"] = (5 - ($context["positive_avg_star"] ?? null));
        // line 92
        echo "
        <div class=\"ec-rectHeading is_active\">
            <h4>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.title"), "html", null, true);
        echo "
                <!--平均の星の数-->
                <span class=\"recommend_average\">";
        // line 96
        echo twig_call_macro($macros["stars"], "macro_stars", [($context["positive_avg_star"] ?? null), ($context["negative_avg_star"] ?? null)], 96, $context, $this->getSourceContext());
        echo "</span>
                <!--レビュー数-->
                <span>(";
        // line 98
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ProductReviewCount"] ?? null), 98, $this->source), "html", null, true);
        echo ")</span>
                <span class=\"chevron pull-right\">
                    <i class=\"fas fa-angle-up fa-lg\"></i>
                </span>
            </h4>
        </div>
        <div id=\"reviewContent\">
            ";
        // line 105
        if (($context["ProductReviews"] ?? null)) {
            // line 106
            echo "                <ul class=\"review_list\">
                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ProductReviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductReview"]) {
                // line 108
                echo "                        <li>
                            <p class=\"review_date\">
                                <!--投稿日-->
                                ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "create_date", [], "any", false, false, true, 111), 111, $this->source)), "html", null, true);
                echo "

                                <!--投稿者-->
                                <span class=\"recommend_name\">
                                            ";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_url", [], "any", false, false, true, 115)) {
                    // line 116
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_url", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                    echo "\" rel=\"ugc nofollow\"
                                                   target=\"_blank\">";
                    // line 117
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.name", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_name", [], "any", false, false, true, 117)]), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 119
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.name", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ProductReview"], "reviewer_name", [], "any", false, false, true, 119)]), "html", null, true);
                    echo "
                                            ";
                }
                // line 121
                echo "                                        </span>

                                <!--星の数-->
                                ";
                // line 124
                $context["positive_star"] = twig_get_attribute($this->env, $this->source, $context["ProductReview"], "recommend_level", [], "any", false, false, true, 124);
                // line 125
                echo "                                ";
                $context["negative_star"] = (5 - ($context["positive_star"] ?? null));
                // line 126
                echo "                                <span class=\"recommend_level\">
                                            ";
                // line 127
                echo twig_call_macro($macros["stars"], "macro_stars", [($context["positive_star"] ?? null), ($context["negative_star"] ?? null)], 127, $context, $this->getSourceContext());
                echo "
                                        </span>
                            </p>

                            <!--タイトル-->
                            <strong>";
                // line 132
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "title", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</strong>

                            <!--レビューコメント-->
                            <p>";
                // line 135
                echo twig_nl2br(twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["ProductReview"], "comment", [], "any", false, false, true, 135), 135, $this->source), "html", null, true));
                echo "</p>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductReview'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                </ul>
            ";
        } else {
            // line 140
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.no_review"), "html", null, true);
            echo "</p>
            ";
        }
        // line 142
        echo "        </div>
        <div>
            <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_review_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 144)]), "html", null, true);
        echo "\"
               class=\"ec-inlineBtn--action\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.front.product_detail.post_review"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
<!-- ▲レビューエリア -->
";
    }

    // line 15
    public function macro_stars($__positive__ = null, $__negative__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "positive" => $__positive__,
            "negative" => $__negative__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "    ";
            $context["positive_stars"] = [0 => "", 1 => "★", 2 => "★★", 3 => "★★★", 4 => "★★★★", 5 => "★★★★★"];
            // line 17
            echo "    ";
            $context["negative_stars"] = [0 => "", 1 => "☆", 2 => "☆☆", 3 => "☆☆☆", 4 => "☆☆☆☆", 5 => "☆☆☆☆☆"];
            // line 18
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["positive_stars"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["positive"] ?? null)] ?? null) : null), 18, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["negative_stars"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["negative"] ?? null)] ?? null) : null), 18, $this->source), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ProductReview42/Resource/template/default/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 18,  268 => 17,  265 => 16,  251 => 15,  241 => 145,  237 => 144,  233 => 142,  227 => 140,  223 => 138,  214 => 135,  208 => 132,  200 => 127,  197 => 126,  194 => 125,  192 => 124,  187 => 121,  181 => 119,  176 => 117,  171 => 116,  169 => 115,  162 => 111,  157 => 108,  153 => 107,  150 => 106,  148 => 105,  138 => 98,  133 => 96,  128 => 94,  124 => 92,  121 => 91,  119 => 90,  47 => 20,  44 => 13,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProductReview42/Resource/template/default/review.twig", "/var/www/html/app/Plugin/ProductReview42/Resource/template/default/review.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 12, "set" => 90, "if" => 105, "for" => 107, "macro" => 15);
        static $filters = array("escape" => 94, "trans" => 94, "date_day" => 111, "nl2br" => 135);
        static $functions = array("url" => 144);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'for', 'macro'],
                ['escape', 'trans', 'date_day', 'nl2br'],
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

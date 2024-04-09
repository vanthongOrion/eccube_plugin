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

/* Recommend42/Resource/template/admin/regist.twig */
class __TwigTemplate_bc62316f5c966c3382a5232dd090526b extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["menus"] = [0 => "content", 1 => "plugin_recommend"];
        // line 16
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchProductModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 9
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Recommend42/Resource/template/admin/regist.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.title"), "html", null, true);
    }

    // line 14
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.subtitle"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        .col-sm-2 {
            max-width: none;
        }
    </style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <script type=\"text/javascript\">
        var recommend = JSON.parse('";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["recommend_products"] ?? null), 29, $this->source);
        echo "');

        \$(function() {
            \$('#showSearchProductModal').on('click', function() {
                    var tbody = \$('#searchProductModalList tbody');
                    tbody.children().remove();
                    \$('div.box-footer').remove();
                }
            );

            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id' : \$('#admin_search_product_id').val(),
                        'category_id' : \$('#admin_search_product_category_id').val()
                    },
                    url: '";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_search_product");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#searchProductModalList').html(data);

                    },
                    error: function() {
                        alert('Search product failed.');
                    }
                });
            });
        });
    </script>
";
    }

    // line 64
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\">
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 66), 66, $this->source), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.header"), "html", null, true);
        echo "</span>
                        </div><!-- /.box-header -->

                        <div class=\"card-body\">
                            <div class=\"row\" style=\"display: none;\">
                                <div class=\"col-3\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, true, 77), 77, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, true, 79), 79, $this->source), 'widget');
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, true, 80), 80, $this->source), 'errors');
        echo "
                                </div>
                            </div>

                            ";
        // line 85
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, true, 86), 86, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 88
        if ( !(null === ($context["Product"] ?? null))) {
            // line 89
            echo "                                        <div id=\"product_image\">
                                            <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 90)]), "html", null, true);
            echo "\" id=\"product_image_link\">
                                                <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "mainFileName", [], "any", false, false, true, 91), 91, $this->source)), "save_image"), "html", null, true);
            echo "\" style=\"max-width: 135px;\" id=\"product_image_img\"/>
                                            </a>
                                        </div>
                                        <p id=\"product_name\">
                                            ";
            // line 95
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
                                        </p>
                                        <p id=\"product_code\">
                                            ";
            // line 98
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
                                            ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_min", [], "any", false, false, true, 99) != twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, true, 99))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "code_max", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "
                                            ";
            }
            // line 101
            echo "                                        </p>
                                    ";
        } else {
            // line 103
            echo "                                        <div id=\"product_image\" class=\"d-none\">
                                            <a href=\"\" id=\"product_image_link\">
                                                <img src=\"\" style=\"max-width: 135px;\" id=\"product_image_img\"/>
                                            </a>
                                        </div>
                                        <p id=\"product_name\" class=\"d-none\"></p>
                                        <p id=\"product_code\" class=\"d-none\"></p>
                                    ";
        }
        // line 111
        echo "
                                    <a id=\"showSearchProductModal\" class=\"btn btn-ec-regular me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#searchProductModal\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.search"), "html", null, true);
        echo "</a>
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Product", [], "any", false, false, true, 114), 114, $this->source), 'widget');
        echo "
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Product", [], "any", false, false, true, 115), 115, $this->source), 'errors');
        echo "
                                    <div id=\"warning\" class=\"text-info\"></div>
                                </div>
                            </div>
                            ";
        // line 120
        echo "                            <div class=\"row\">
                                <div class=\"col-3\">";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 121), 121, $this->source), 'label');
        echo "</div>
                                <div class=\"col mb-2\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 123), 123, $this->source), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, true, 124), 124, $this->source), 'errors');
        echo "
                                    <p class=\"text-muted\" style=\"text-align: right\">";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.comment.help", ["%number%" => (($__internal_compile_0 = ($context["eccube_config"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["plugin_recommend.text_area_len"] ?? null) : null)]), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\">
                                    <a class=\"c-baseLink\" href=\"";
        // line 138
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("plugin_recommend_list");
        echo "\">
                                        <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\">
                                        <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.save"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>

    ";
        // line 162
        echo "    <div class=\"modal\" id=\"searchProductModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"searchProductModalLabel\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.product_search.header"), "html", null, true);
        echo "</h4>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, true, 171), 171, $this->source), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code")]]);
        echo "
                    </div>
                    <div class=\"mb-3\">
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, true, 174), 174, $this->source), 'widget');
        echo "
                    </div>
                    <div class=\"text-center mb-3\">
                        <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion\" >";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("plugin_recommend.admin.edit.product_search.button"), "html", null, true);
        echo "</button>
                    </div>
                    <div id=\"searchProductModalList\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Recommend42/Resource/template/admin/regist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 177,  328 => 174,  322 => 171,  314 => 166,  308 => 162,  293 => 145,  284 => 139,  280 => 138,  264 => 125,  260 => 124,  256 => 123,  251 => 121,  248 => 120,  241 => 115,  237 => 114,  232 => 112,  229 => 111,  219 => 103,  215 => 101,  208 => 99,  204 => 98,  198 => 95,  191 => 91,  187 => 90,  184 => 89,  182 => 88,  177 => 86,  174 => 85,  167 => 80,  163 => 79,  158 => 77,  150 => 72,  141 => 66,  138 => 65,  134 => 64,  116 => 49,  93 => 29,  90 => 28,  86 => 27,  77 => 20,  73 => 19,  66 => 14,  59 => 13,  54 => 9,  52 => 17,  50 => 16,  48 => 11,  41 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "Recommend42/Resource/template/admin/regist.twig", "/var/www/html/app/Plugin/Recommend42/Resource/template/admin/regist.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "form_theme" => 16, "if" => 88);
        static $filters = array("escape" => 13, "trans" => 13, "raw" => 29, "no_image_product" => 91);
        static $functions = array("url" => 49, "form_widget" => 66, "form_label" => 77, "form_errors" => 80, "asset" => 91);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if'],
                ['escape', 'trans', 'raw', 'no_image_product'],
                ['url', 'form_widget', 'form_label', 'form_errors', 'asset']
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

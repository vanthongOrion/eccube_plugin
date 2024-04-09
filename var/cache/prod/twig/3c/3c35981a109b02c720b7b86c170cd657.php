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

/* Api42/Resource/template/admin/OAuth/index.twig */
class __TwigTemplate_65e004bbe0faf89e9b754fb8b52680dd extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "api", 2 => "oauth"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/OAuth/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script>
        \$(function() {
            \$('.copy-secret').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this);
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copied"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('hide');
                     }, 3000);
                }
            });
        });
    </script>
";
    }

    // line 41
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.endpoint"), "html", null, true);
        echo "</span></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.authorization_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 55
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("oauth2_authorize");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.token_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("oauth2_token");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\">
                                    <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.api_endpoint"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col mb-2\">
                                <input type=\"text\" class=\"form-control copy-secret\" value=\"";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("api");
        echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"create-client\" class=\"d-block mb-3\">
                    <a class=\"btn btn-ec-regular\" href=\"";
        // line 81
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_oauth_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\" style=\"table-layout:fixed;\">
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.identifier"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.secret"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.scope"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.redirect_uri"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                    ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.grant_type"), "html", null, true);
        echo "
                                </th>
                                <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 108
            echo "                                <tr id=\"client-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "\">
                                    <td class=\"align-middle text-center ps-3\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
            echo "\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <input type=\"text\" class=\"form-control copy-secret\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "Secret", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.copy"), "html", null, true);
            echo "\" readonly>
                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "scopes", [], "any", false, false, true, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["scope"]) {
                // line 117
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["scope"], 117, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scope'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                                    </td>
                                    <td class=\"align-middle text-center\">
                                        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "redirectUris", [], "any", false, false, true, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["redirectUri"]) {
                // line 122
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["redirectUri"], 122, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirectUri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                    </td>
                                    <td class=\"align-middle text-center ps-3\">
                                        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "grants", [], "any", false, false, true, 126), function ($__grant__) use ($context, $macros) { $context["grant"] = $__grant__; return ($context["grant"] != "refresh_token"); }));
            foreach ($context['_seq'] as $context["_key"] => $context["grant"]) {
                // line 127
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["grant"], 127, $this->source), "html", null, true);
                echo "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                                    </td>
                                    <td class=\"align-middle pe-3\">
                                        <div class=\"text-end\">
                                            <div class=\"px-1 d-inline-block\">
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                     data-placement=\"top\" title=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#oauth_delete_";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"oauth_delete_";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                                     role=\"dialog\" aria-labelledby=\"oauth_delete_";
            // line 141
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">
                                                                    ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.delete__confirm_title"), "html", null, true);
            echo "
                                                                </h5>
                                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.delete__confirm_message"), "html", null, true);
            echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                    ";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                                </button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_oauth_delete", ["identifier" => twig_get_attribute($this->env, $this->source, $context["client"], "identifier", [], "any", false, false, true, 159)]), "html", null, true);
            echo "\"
                                                                    ";
            // line 160
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-confirm=\"false\">
                                                                    ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <a class=\"btn btn-ec-conversion ladda-button\" href=\"";
        // line 177
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_oauth_clear_expired_tokens");
        echo "\"
                        ";
        // line 178
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo " data-method=\"delete\" data-confirm=\"false\">
                        ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.oauth.clear_expired_tokens"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Api42/Resource/template/admin/OAuth/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 179,  382 => 178,  378 => 177,  371 => 172,  354 => 161,  350 => 160,  346 => 159,  341 => 157,  334 => 153,  324 => 146,  316 => 141,  312 => 140,  305 => 136,  300 => 134,  293 => 129,  284 => 127,  280 => 126,  276 => 124,  267 => 122,  263 => 121,  259 => 119,  250 => 117,  246 => 116,  238 => 113,  230 => 110,  224 => 108,  220 => 107,  211 => 101,  205 => 98,  199 => 95,  193 => 92,  187 => 89,  174 => 81,  163 => 75,  156 => 71,  145 => 65,  138 => 61,  127 => 55,  120 => 51,  112 => 46,  106 => 42,  102 => 41,  89 => 31,  81 => 26,  72 => 19,  68 => 18,  61 => 16,  54 => 15,  49 => 11,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/OAuth/index.twig", "/var/www/html/app/Plugin/Api42/Resource/template/admin/OAuth/index.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 107);
        static $filters = array("escape" => 15, "trans" => 15, "filter" => 126);
        static $functions = array("url" => 55, "csrf_token_for_anchor" => 160);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trans', 'filter'],
                ['url', 'csrf_token_for_anchor']
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

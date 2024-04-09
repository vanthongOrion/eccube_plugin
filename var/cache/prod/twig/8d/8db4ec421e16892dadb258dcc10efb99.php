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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_bdb83fd37f5ee98dcafda20f12bbeefe extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 6), "unavailable_migrations_count", [], "any", true, true, true, 6)) {
            // line 7
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 7), "unavailable_migrations_count", [], "any", false, false, true, 7);
            // line 8
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 8), "new_migrations", [], "any", false, false, true, 8), 8, $this->source));
            // line 9
            echo "        ";
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 10
                echo "            ";
                $context["executed_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 10), "executed_migrations", [], "any", false, false, true, 10), 10, $this->source));
                // line 11
                echo "            ";
                $context["available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 11), "available_migrations_count", [], "any", false, false, true, 11);
                // line 12
                echo "            ";
                $context["status_color"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("yellow") : (""));
                // line 13
                echo "            ";
                $context["status_color"] = (((($context["new_migrations"] ?? null) > 0)) ? ("red") : (($context["status_color"] ?? null)));
                // line 14
                echo "
            ";
                // line 15
                ob_start(function () { return ''; });
                // line 16
                echo "                ";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 17
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 19
                echo "
            ";
                // line 20
                ob_start(function () { return ''; });
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>";
                // line 23
                (((($context["executed_migrations"] ?? null) > 0)) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 23), "executed_migrations", [], "any", false, false, true, 23)), "version", [], "any", false, false, true, 23), "\\")), "html", null, true))) : (print ("n/a")));
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["executed_migrations"] ?? null), 27, $this->source), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status ";
                // line 31
                echo (((($context["unavailable_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["unavailable_migrations"] ?? null), 31, $this->source), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["available_migrations"] ?? null), 35, $this->source), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status ";
                // line 39
                echo (((($context["new_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-red") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_migrations"] ?? null), 39, $this->source), "html", null, true);
                echo "</span>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "
            ";
                // line 43
                echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
                echo "
        ";
            }
            // line 45
            echo "    ";
        }
    }

    // line 49
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 50), "unavailable_migrations_count", [], "any", true, true, true, 50)) {
            // line 51
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 51), "unavailable_migrations_count", [], "any", false, false, true, 51);
            // line 52
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 52), "new_migrations", [], "any", false, false, true, 52), 52, $this->source));
            // line 53
            echo "        ";
            $context["label"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("label-status-warning") : (""));
            // line 54
            echo "        ";
            $context["label"] = (((($context["new_migrations"] ?? null) > 0)) ? ("label-status-error") : (($context["label"] ?? null)));
            // line 55
            echo "        <span class=\"label ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 55, $this->source), "html", null, true);
            echo "\">
            <span class=\"icon\">";
            // line 56
            echo $this->extensions['Eccube\Twig\Extension\IgnoreTwigSandboxErrorExtension']->twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
            echo "</span>
            <strong>Migrations</strong>
            ";
            // line 58
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 59
                echo "                <span class=\"count\">
                    <span>";
                // line 60
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 63
            echo "        </span>
    ";
        }
    }

    // line 67
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 71), "executed_migrations", [], "any", false, false, true, 71), 71, $this->source)), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 75), "unavailable_migrations_count", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 79), "available_migrations_count", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 83), "new_migrations", [], "any", false, false, true, 83), 83, $this->source)), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 97), "storage", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 99), "table", [], "any", true, true, true, 99)) {
            // line 100
            echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
            // line 102
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 102), "table", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 105
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, true, 105), "column", [], "any", true, true, true, 105)) {
            // line 106
            echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 108), "column", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 111
        echo "    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
        // line 120
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 120), "driver", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
        // line 124
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 124), "name", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 133), "namespaces", [], "any", false, false, true, 133));
        foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
            // line 134
            echo "            <tr>
                <td class=\"font-normal\">";
            // line 135
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["namespace"], 135, $this->source), "html", null, true);
            echo "</td>
                <td class=\"font-normal\">";
            // line 136
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["directory"], 136, $this->source), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 152), "new_migrations", [], "any", false, false, true, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 153
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 153, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, true, 156), "executed_migrations", [], "any", false, false, true, 156)));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 157
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    </table>
";
    }

    // line 162
    public function macro_render_migration($__migration__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 163
            echo "    <tr>
        <td class=\"font-normal\">
            ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 165)) {
                // line 166
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 166), 166, $this->source), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 168
                echo "                ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 170
            echo "        </td>
        <td class=\"font-normal\">";
            // line 171
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "</td>
        <td class=\"font-normal\">
            ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, true, 173)) {
                // line 174
                echo "                <span class=\"label status-error\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 175
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, true, 175)) {
                // line 176
                echo "                <span class=\"label status-warning\">UNAVAILABLE</span>
            ";
            } else {
                // line 178
                echo "                <span class=\"label status-success\">EXECUTED</span>
            ";
            }
            // line 180
            echo "        </td>
        <td class=\"font-normal\">";
            // line 181
            ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, true, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, true, 181)), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal\">";
            // line 182
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", true, true, true, 182)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, true, 182), 182, $this->source), "n/a")) : ("n/a")), "html", null, true);
            echo "</td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 182,  439 => 181,  436 => 180,  432 => 178,  428 => 176,  426 => 175,  423 => 174,  421 => 173,  416 => 171,  413 => 170,  407 => 168,  397 => 166,  395 => 165,  391 => 163,  378 => 162,  373 => 159,  364 => 157,  360 => 156,  357 => 155,  348 => 153,  344 => 152,  329 => 139,  320 => 136,  316 => 135,  313 => 134,  309 => 133,  297 => 124,  290 => 120,  279 => 111,  273 => 108,  269 => 106,  266 => 105,  260 => 102,  256 => 100,  254 => 99,  249 => 97,  232 => 83,  225 => 79,  218 => 75,  211 => 71,  206 => 68,  202 => 67,  196 => 63,  190 => 60,  187 => 59,  185 => 58,  180 => 56,  175 => 55,  172 => 54,  169 => 53,  166 => 52,  163 => 51,  160 => 50,  156 => 49,  151 => 45,  146 => 43,  143 => 42,  135 => 39,  128 => 35,  119 => 31,  112 => 27,  105 => 23,  101 => 21,  99 => 20,  96 => 19,  91 => 17,  86 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "/var/www/html/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/migrations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 3, "if" => 6, "set" => 7, "for" => 133, "macro" => 162);
        static $filters = array("length" => 8, "escape" => 17, "last" => 23, "split" => 23, "reverse" => 156, "file_link" => 166, "date" => 181, "default" => 182);
        static $functions = array("include" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'for', 'macro'],
                ['length', 'escape', 'last', 'split', 'reverse', 'file_link', 'date', 'default'],
                ['include']
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

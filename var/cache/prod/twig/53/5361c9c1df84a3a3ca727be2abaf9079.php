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

/* Securitychecker42/build/000-default.conf */
class __TwigTemplate_aa081cadccf3f23ff914f430aad4e266 extends \Eccube\Twig\Template
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
        // line 1
        echo "<Directory %GITHUB_WORKSPACE%>
        Options FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
</Directory>
<VirtualHost *:80>
\t# The ServerName directive sets the request scheme, hostname and port that
\t# the server uses to identify itself. This is used when creating
\t# redirection URLs. In the context of virtual hosts, the ServerName
\t# specifies what hostname must appear in the request's Host: header to
\t# match this virtual host. For the default virtual host (this file) this
\t# value is not decisive as it is used as a last resort host regardless.
\t# However, you must set it for any further virtual host explicitly.
\t#ServerName www.example.com

\tServerAdmin webmaster@localhost
\tDocumentRoot %GITHUB_WORKSPACE%
\tDirectoryIndex index.php

\t# Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
\t# error, crit, alert, emerg.
\t# It is also possible to configure the loglevel for particular
\t# modules, e.g.
\t#LogLevel info ssl:warn

\tErrorLog \${APACHE_LOG_DIR}/error.log
\tCustomLog \${APACHE_LOG_DIR}/access.log combined

\t# For most configuration files from conf-available/, which are
\t# enabled or disabled at a global level, it is possible to
\t# include a line for only one particular virtual host. For example the
\t# following line enables the CGI configuration for this host only
\t# after it has been globally disabled with \"a2disconf\".
\t#Include conf-available/serve-cgi-bin.conf
    <FilesMatch \\.php\$>
        SetHandler \"proxy:unix:/var/run/php/php%PHP_VERSION%-fpm.sock|fcgi://localhost/\"
    </FilesMatch>
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet";
    }

    public function getTemplateName()
    {
        return "Securitychecker42/build/000-default.conf";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Securitychecker42/build/000-default.conf", "/var/www/html/app/Plugin/Securitychecker42/build/000-default.conf");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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

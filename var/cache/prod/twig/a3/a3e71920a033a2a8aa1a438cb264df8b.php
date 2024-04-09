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

/* Securitychecker42/build/default-ssl.conf */
class __TwigTemplate_351ce2360f54da1e4b91ccebc6ae8f62 extends \Eccube\Twig\Template
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
        echo "<IfModule mod_ssl.c>
\t<VirtualHost _default_:443>
\t\tServerAdmin webmaster@localhost

\t\tDocumentRoot %GITHUB_WORKSPACE%
\t\tDirectoryIndex index.php
\t\t# Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
\t\t# error, crit, alert, emerg.
\t\t# It is also possible to configure the loglevel for particular
\t\t# modules, e.g.
\t\t#LogLevel info ssl:warn

\t\tErrorLog \${APACHE_LOG_DIR}/error.log
\t\tCustomLog \${APACHE_LOG_DIR}/access.log combined

\t\t# For most configuration files from conf-available/, which are
\t\t# enabled or disabled at a global level, it is possible to
\t\t# include a line for only one particular virtual host. For example the
\t\t# following line enables the CGI configuration for this host only
\t\t# after it has been globally disabled with \"a2disconf\".
\t\t#Include conf-available/serve-cgi-bin.conf

\t\t#   SSL Engine Switch:
\t\t#   Enable/Disable SSL for this virtual host.
\t\tSSLEngine on

\t\t#   A self-signed (snakeoil) certificate can be created by installing
\t\t#   the ssl-cert package. See
\t\t#   /usr/share/doc/apache2/README.Debian.gz for more info.
\t\t#   If both key and certificate are stored in the same file, only the
\t\t#   SSLCertificateFile directive is needed.
\t\tSSLCertificateFile\t/etc/ssl/certs/ssl-cert-snakeoil.pem
\t\tSSLCertificateKeyFile /etc/ssl/private/ssl-cert-snakeoil.key

\t\t#   Server Certificate Chain:
\t\t#   Point SSLCertificateChainFile at a file containing the
\t\t#   concatenation of PEM encoded CA certificates which form the
\t\t#   certificate chain for the server certificate. Alternatively
\t\t#   the referenced file can be the same as SSLCertificateFile
\t\t#   when the CA certificates are directly appended to the server
\t\t#   certificate for convinience.
\t\t#SSLCertificateChainFile /etc/apache2/ssl.crt/server-ca.crt

\t\t#   Certificate Authority (CA):
\t\t#   Set the CA certificate verification path where to find CA
\t\t#   certificates for client authentication or alternatively one
\t\t#   huge file containing all of them (file must be PEM encoded)
\t\t#   Note: Inside SSLCACertificatePath you need hash symlinks
\t\t#\t\t to point to the certificate files. Use the provided
\t\t#\t\t Makefile to update the hash symlinks after changes.
\t\t#SSLCACertificatePath /etc/ssl/certs/
\t\t#SSLCACertificateFile /etc/apache2/ssl.crt/ca-bundle.crt

\t\t#   Certificate Revocation Lists (CRL):
\t\t#   Set the CA revocation path where to find CA CRLs for client
\t\t#   authentication or alternatively one huge file containing all
\t\t#   of them (file must be PEM encoded)
\t\t#   Note: Inside SSLCARevocationPath you need hash symlinks
\t\t#\t\t to point to the certificate files. Use the provided
\t\t#\t\t Makefile to update the hash symlinks after changes.
\t\t#SSLCARevocationPath /etc/apache2/ssl.crl/
\t\t#SSLCARevocationFile /etc/apache2/ssl.crl/ca-bundle.crl

\t\t#   Client Authentication (Type):
\t\t#   Client certificate verification type and depth.  Types are
\t\t#   none, optional, require and optional_no_ca.  Depth is a
\t\t#   number which specifies how deeply to verify the certificate
\t\t#   issuer chain before deciding the certificate is not valid.
\t\t#SSLVerifyClient require
\t\t#SSLVerifyDepth  10

\t\t#   SSL Engine Options:
\t\t#   Set various options for the SSL engine.
\t\t#   o FakeBasicAuth:
\t\t#\t Translate the client X.509 into a Basic Authorisation.  This means that
\t\t#\t the standard Auth/DBMAuth methods can be used for access control.  The
\t\t#\t user name is the `one line' version of the client's X.509 certificate.
\t\t#\t Note that no password is obtained from the user. Every entry in the user
\t\t#\t file needs this password: `xxj31ZMTZzkVA'.
\t\t#   o ExportCertData:
\t\t#\t This exports two additional environment variables: SSL_CLIENT_CERT and
\t\t#\t SSL_SERVER_CERT. These contain the PEM-encoded certificates of the
\t\t#\t server (always existing) and the client (only existing when client
\t\t#\t authentication is used). This can be used to import the certificates
\t\t#\t into CGI scripts.
\t\t#   o StdEnvVars:
\t\t#\t This exports the standard SSL/TLS related `SSL_*' environment variables.
\t\t#\t Per default this exportation is switched off for performance reasons,
\t\t#\t because the extraction step is an expensive operation and is usually
\t\t#\t useless for serving static content. So one usually enables the
\t\t#\t exportation for CGI and SSI requests only.
\t\t#   o OptRenegotiate:
\t\t#\t This enables optimized SSL connection renegotiation handling when SSL
\t\t#\t directives are used in per-directory context.
\t\t#SSLOptions +FakeBasicAuth +ExportCertData +StrictRequire
\t\t<FilesMatch \"\\.(cgi|shtml|phtml|php)\$\">
\t\t\t\tSSLOptions +StdEnvVars
\t\t</FilesMatch>
\t\t<Directory /usr/lib/cgi-bin>
\t\t\t\tSSLOptions +StdEnvVars
\t\t</Directory>

\t\t#   SSL Protocol Adjustments:
\t\t#   The safe and default but still SSL/TLS standard compliant shutdown
\t\t#   approach is that mod_ssl sends the close notify alert but doesn't wait for
\t\t#   the close notify alert from client. When you need a different shutdown
\t\t#   approach you can use one of the following variables:
\t\t#   o ssl-unclean-shutdown:
\t\t#\t This forces an unclean shutdown when the connection is closed, i.e. no
\t\t#\t SSL close notify alert is send or allowed to received.  This violates
\t\t#\t the SSL/TLS standard but is needed for some brain-dead browsers. Use
\t\t#\t this when you receive I/O errors because of the standard approach where
\t\t#\t mod_ssl sends the close notify alert.
\t\t#   o ssl-accurate-shutdown:
\t\t#\t This forces an accurate shutdown when the connection is closed, i.e. a
\t\t#\t SSL close notify alert is send and mod_ssl waits for the close notify
\t\t#\t alert of the client. This is 100% SSL/TLS standard compliant, but in
\t\t#\t practice often causes hanging connections with brain-dead browsers. Use
\t\t#\t this only for browsers where you know that their SSL implementation
\t\t#\t works correctly.
\t\t#   Notice: Most problems of broken clients are also related to the HTTP
\t\t#   keep-alive facility, so you usually additionally want to disable
\t\t#   keep-alive for those clients, too. Use variable \"nokeepalive\" for this.
\t\t#   Similarly, one has to force some clients to use HTTP/1.0 to workaround
\t\t#   their broken HTTP/1.1 implementation. Use variables \"downgrade-1.0\" and
\t\t#   \"force-response-1.0\" for this.
\t\t# BrowserMatch \"MSIE [2-6]\" \\
\t\t#\t\tnokeepalive ssl-unclean-shutdown \\
\t\t#\t\tdowngrade-1.0 force-response-1.0

\t\t<FilesMatch \\.php\$>
\t\t\tSetHandler \"proxy:unix:/var/run/php/php%PHP_VERSION%-fpm.sock|fcgi://localhost/\"
\t\t</FilesMatch>
\t</VirtualHost>
</IfModule>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet";
    }

    public function getTemplateName()
    {
        return "Securitychecker42/build/default-ssl.conf";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Securitychecker42/build/default-ssl.conf", "/var/www/html/app/Plugin/Securitychecker42/build/default-ssl.conf");
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

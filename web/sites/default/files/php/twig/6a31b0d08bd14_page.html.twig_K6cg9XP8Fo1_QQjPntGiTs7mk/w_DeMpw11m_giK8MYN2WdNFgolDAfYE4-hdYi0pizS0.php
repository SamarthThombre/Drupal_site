<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/icar_theme/templates/layout/page.html.twig */
class __TwigTemplate_90034e0bd5c99f9f4e9a4d87b81d013b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"layout-container\">

  ";
        // line 4
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <div class=\"site-topbar\">
      ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 6), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 9
        yield "
  <header class=\"site-header\">
    ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 11), "html", null, true);
        yield "
    ";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 12), "html", null, true);
        yield "
  </header>

  <main class=\"site-content\">
    <div class=\"main-content-area\">
      ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), "html", null, true);
        yield "
    </div>
    
    ";
        // line 21
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "      <aside class=\"site-sidebar\">
        ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 23), "html", null, true);
            yield "
      </aside>
    ";
        }
        // line 26
        yield "  </main>

  <footer class=\"site-footer\">
    ";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 29), "html", null, true);
        yield "
  </footer>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/icar_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  98 => 29,  93 => 26,  87 => 23,  84 => 22,  81 => 21,  75 => 17,  67 => 12,  63 => 11,  59 => 9,  53 => 6,  50 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"layout-container\">

  {# Your new Topbar region #}
  {% if page.topbar %}
    <div class=\"site-topbar\">
      {{ page.topbar }}
    </div>
  {% endif %}

  <header class=\"site-header\">
    {{ page.header }}
    {{ page.primary_menu }}
  </header>

  <main class=\"site-content\">
    <div class=\"main-content-area\">
      {{ page.content }}
    </div>
    
    {# Only show the sidebar if it actually has content #}
    {% if page.sidebar %}
      <aside class=\"site-sidebar\">
        {{ page.sidebar }}
      </aside>
    {% endif %}
  </main>

  <footer class=\"site-footer\">
    {{ page.footer }}
  </footer>

</div>
", "themes/icar_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/icar_theme/templates/layout/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4];
        static $filters = ["escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if"],
                [0 => "escape"],
                [],
                $this->source
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

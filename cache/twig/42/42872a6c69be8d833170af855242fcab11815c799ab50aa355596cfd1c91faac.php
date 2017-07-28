<?php

/* partials/footer.html.twig */
class __TwigTemplate_48d9e4208fdcd6eb8e34de5e1efeb92758146be5f80e34bfd735afbf584b4dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "navbarfooter_class", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "navbarfooter_class", array());
        } else {
            echo "section-footer bg-inverse";
        }
        echo "\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          ";
        // line 9
        echo "          <small class=\"media-body media-bottom\">
          &copy; ";
        // line 10
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
        echo "
            </small>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          ";
        // line 16
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 17
        echo "          ";
        // line 18
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "          ";
            // line 27
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
          ";
        // line 29
        $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild", array()))) ? ("active") : (""));
        // line 30
        echo "
          <li class=\"nav-item nav-item-toggable ";
        // line 31
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\">
              <a class=\"nav-link\" href=\"/\">
                  Accueil
              </a>
          </li>
          
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 38
            echo "          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 43
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 44
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 45
                echo "          <li class=\"nav-item nav-item-toggable ";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
              <a class=\"nav-link\" href=\"#";
                // line 46
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
          </li>
          ";
            }
            // line 49
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "          <li><a class=\"scroll-top\" href=\"#totop\">Retour en haut <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
";
    }

    // line 17
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 17,  126 => 50,  120 => 49,  112 => 46,  107 => 45,  104 => 44,  101 => 43,  96 => 42,  85 => 39,  82 => 38,  78 => 37,  69 => 31,  66 => 30,  64 => 29,  61 => 28,  55 => 27,  53 => 19,  48 => 18,  46 => 17,  44 => 16,  35 => 10,  32 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"{% if page.header.navbarfooter_class %}{{ page.header.navbarfooter_class }}{% else %}section-footer bg-inverse{% endif %}\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          {#<div class=\"media-left\">
            <span class=\"media-object icon-logo display-1\"></span>
          </div>#}
          <small class=\"media-body media-bottom\">
          &copy; {{ site.copyright }}
            </small>
        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
          {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
          {% for page in pages.children %}
          {#% if page.visible %}
          {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_page }}\">
              <a class=\"nav-link\" href=\"{{ page.url }}\">
                  {{ page.menu }}<span class=\"sr-only\">(current)</span>
              </a>
          </li>
          {% endif %#}
          {% endfor %}

          {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}

          <li class=\"nav-item nav-item-toggable {{ current_page }}\">
              <a class=\"nav-link\" href=\"/\">
                  Accueil
              </a>
          </li>
          
          {% for mitem in site.menu %}
          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
          </li>
          {% endfor %}
          {% for module in page.collection() %}
          {% if not module.header.hidemenu %}
          {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_module }}\">
              <a class=\"nav-link\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
          </li>
          {% endif %}
          {% endfor %}
          <li><a class=\"scroll-top\" href=\"#totop\">Retour en haut <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
", "partials/footer.html.twig", "/Users/julienfroidefond/Sites/landio/user/themes/landio/templates/partials/footer.html.twig");
    }
}

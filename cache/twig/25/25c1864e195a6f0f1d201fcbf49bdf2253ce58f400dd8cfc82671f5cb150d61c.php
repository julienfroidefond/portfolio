<?php

/* partials/navigation.html.twig */
class __TwigTemplate_b70e71ef28a808a7f1d2354d4c0a2fb3ff4eb5e722d6a15e33ed979108f35709 extends Twig_Template
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
        echo "<nav class=\"navbar ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "navbar_class", array())) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "navbar_class", array());
        } else {
            echo "navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top";
        }
        echo "\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        if ( !$this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "url", array())) {
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        } else {
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "url", array());
        }
        echo "\">
            ";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "icon", array())) {
            echo "<span class=\"icon-";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "icon", array());
            echo "\"></span>";
        }
        // line 5
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text", array())) {
            echo "<span class=\"sr-only\">";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text", array());
            echo "</span>";
        }
        // line 6
        echo "        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                ";
        // line 15
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 16
        echo "                ";
        // line 17
        echo "                ";
        // line 27
        echo "                
                ";
        // line 28
        $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild", array()))) ? ("active") : (""));
        // line 29
        echo "
                <li class=\"nav-item nav-item-toggable ";
        // line 30
        echo (isset($context["current_page"]) ? $context["current_page"] : null);
        echo "\">
                    <a class=\"nav-link\" href=\"/\">
                        Accueil
                    </a>
                </li>

                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 37
            echo "                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"";
            // line 38
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
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 42
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 43
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 44
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
                    <a class=\"nav-link\" href=\"#";
                // line 45
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
                ";
            }
            // line 48
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
                ";
        // line 69
        echo "                ";
        // line 116
        echo "            </ul>
        </div>
        ";
        // line 118
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 119
            echo "        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                ";
            // line 121
            if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array())) {
                // line 122
                echo "                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/";
                // line 123
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array()));
                echo "?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                ";
            }
            // line 126
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "fullname", array()) || $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array()))) {
                // line 127
                echo "                <div class=\"media-body media-middle\">
                    ";
                // line 128
                if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "fullname", array())) {
                    // line 129
                    echo "                    <h5 class=\"media-heading\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "fullname", array());
                    echo "</h5>
                    ";
                }
                // line 131
                echo "                    ";
                if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array())) {
                    // line 132
                    echo "                    <h6>";
                    echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "email", array());
                    echo "</h6>
                    ";
                }
                // line 134
                echo "                </div>
                ";
            }
            // line 136
            echo "            </div>
            <a href=\"";
            // line 137
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"";
            // line 138
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"";
            // line 139
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "userlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 141
                echo "                <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\" class=\"dropdown-item text-uppercase\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "            <a href=\"";
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "url", array());
            echo "/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"";
            // line 144
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/admin/users/";
            echo $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array());
            echo "\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        ";
        }
        // line 150
        echo "    </div>
</nav>
";
    }

    // line 16
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 16,  231 => 150,  220 => 144,  215 => 143,  204 => 141,  200 => 140,  196 => 139,  192 => 138,  188 => 137,  185 => 136,  181 => 134,  175 => 132,  172 => 131,  166 => 129,  164 => 128,  161 => 127,  158 => 126,  152 => 123,  149 => 122,  147 => 121,  143 => 119,  141 => 118,  137 => 116,  135 => 69,  132 => 49,  126 => 48,  118 => 45,  113 => 44,  110 => 43,  107 => 42,  102 => 41,  91 => 38,  88 => 37,  84 => 36,  75 => 30,  72 => 29,  70 => 28,  67 => 27,  65 => 17,  63 => 16,  61 => 15,  50 => 6,  43 => 5,  37 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar {% if page.header.navbar_class %}{{ page.header.navbar_class }}{% else %}navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top{% endif %}\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{% if not site.logo.url %}{{ base_url_absolute }}{% else %}{{ site.logo.url }}{% endif %}\">
            {% if site.logo.icon %}<span class=\"icon-{{ site.logo.icon }}\"></span>{% endif %}
            {% if site.logo.text %}<span class=\"sr-only\">{{ site.logo.text }}</span>{% endif %}
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
                {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
                {#% for page in pages.children %}
                {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"nav-item nav-item-toggable {{ current_page }}\">
                    <a class=\"nav-link\" href=\"{{ page.url }}\">
                        {{ page.menu }}<span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                {% endif %}
                {% endfor %#}
                
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

                {#% if config.plugins.simplesearch.enabled %}
                <li class=\"nav-item nav-item-toggable hidden-sm-up\">
                    <form class=\"navbar-form\">
                        {% include 'partials/simplesearch_searchbox.html.twig' %}
                    </form>
                </li>
                <li class=\"navbar-divider hidden-sm-down\"></li>
                <li class=\"nav-item dropdown nav-dropdown-search hidden-sm-down\">
                    <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"icon-search\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-search\" aria-labelledby=\"dropdownMenu1\">
                        <form class=\"navbar-form\">
                            {% set form2 = true %}
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </form>
                    </div>
                </li>
                {% endif %#}
                {#% if config.plugins.login.enabled %}
                {% if grav.user.username %}
                <li class=\"nav-item dropdown hidden-sm-down textselect-off\">
                    {% if grav.user.email %}
                        <a class=\"nav-link dropdown-toggle nav-dropdown-user\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=40\" class=\"img-circle\" alt=\"Gravatar\"/><span class=\"icon-caret-down\"></span>
                        </a>
                    {% endif %}
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated\" aria-labelledby=\"dropdownMenu2\">
                        <div class=\"media\">
                        {% if grav.user.email %}
                        <div class=\"media-left\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                        </div>
                        {% endif %}
                            {% if grav.user.fullname or grav.user.email %}
                            <div class=\"media-body media-middle\">
                                {% if grav.user.fullname %}
                                <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                                {% endif %}
                                {% if grav.user.email %}
                                <h6>{{ grav.user.email }}</h6>
                                {% endif %}
                            </div>
                            {% endif %}
                        </div>
                        <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
                        <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
                        <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
                        {% for item in site.userlinks %}
                            <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
                        {% endfor %}
                        <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
                        <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                            <span class=\"sr-only\">Edit</span>
                            <span class=\"icon-edit\"></span>
                        </a>
                    </div>
                </li>
                {% else %}
                <li class=\"nav-item nav-item-toggable \">
                    <a class=\"nav-link\" href=\"login\">
                        {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}
                    </a>
                </li>
                {% endif %}
                {% endif %#}
            </ul>
        </div>
        {% if config.plugins.login.enabled and grav.user.username %}
        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                {% if grav.user.email %}
                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                {% endif %}
                {% if grav.user.fullname or grav.user.email %}
                <div class=\"media-body media-middle\">
                    {% if grav.user.fullname %}
                    <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                    {% endif %}
                    {% if grav.user.email %}
                    <h6>{{ grav.user.email }}</h6>
                    {% endif %}
                </div>
                {% endif %}
            </div>
            <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            {% for item in site.userlinks %}
                <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
            {% endfor %}
            <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        {% endif %}
    </div>
</nav>
", "partials/navigation.html.twig", "/Users/julienfroidefond/Sites/portfolio/user/themes/landio/templates/partials/navigation.html.twig");
    }
}

<?php

/* modular/intro.html.twig */
class __TwigTemplate_1de68ca307d9cf7fd35ea2d927711bef4f5d52ef1e4182097df8ce4a2dce4d58 extends Twig_Template
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
        echo "<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array())) {
            // line 4
            echo "            <h3 class=\"wp wp-1\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "</h3>
        ";
        }
        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array())) {
            // line 7
            echo "            <p class=\"lead wp wp-2\">
            ";
            // line 8
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "description", array());
            echo "
            
\t        ";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "techs", array())) {
                // line 11
                echo "\t        \t<br/><br/>
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "techs", array()), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 13
                    echo "                    <div>
        \t            ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 15
                        echo "        \t            \t<span class=\"label label-info\">";
                        echo $context["item"];
                        echo "</span> 
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "\t        ";
            }
            // line 20
            echo "            </p>
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            // line 23
            echo "            <img class=\"img-responsive wp wp-3 animated fadeInUp\" src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
            echo "\">
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "images", array())) {
            // line 27
            echo "            <div id=\"carousel-content\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
              <div class=\"carousel-inner\" role=\"listbox\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 30
                echo "                <div class=\"carousel-item ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\">
                    <img style=\"max-height:400px;margin: auto;\" src=\"";
                // line 31
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $context["testimonial"], array(), "array"), "url", array());
                echo "\" class=\"img-responsive\">
                </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "              </div>
              <ol class=\"carousel-indicators\">
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 37
                echo "                <li ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "class=\"active\"";
                }
                echo " data-target=\"#carousel-content\" data-slide-to=\"";
                echo $this->getAttribute($context["loop"], "index0", array());
                echo "\">
                </li>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "              </ol>
            </div>
          </div>
        ";
        }
        // line 44
        echo "        ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 44,  183 => 40,  161 => 37,  144 => 36,  140 => 34,  123 => 31,  116 => 30,  99 => 29,  95 => 27,  93 => 26,  90 => 25,  84 => 23,  81 => 22,  77 => 20,  74 => 19,  67 => 17,  58 => 15,  54 => 14,  51 => 13,  47 => 12,  44 => 11,  42 => 10,  37 => 8,  34 => 7,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-intro bg-faded text-center hidden-overflow\">
    <div class=\"container\">
        {% if page.header.title  %}
            <h3 class=\"wp wp-1\">{{ page.header.title }}</h3>
        {% endif %}
        {% if page.header.description  %}
            <p class=\"lead wp wp-2\">
            {{ page.header.description }}
            
\t        {% if page.header.techs %}
\t        \t<br/><br/>
                {% for row in page.header.techs|batch(4) %}
                    <div>
        \t            {% for item in row %}
        \t            \t<span class=\"label label-info\">{{item}}</span> 
                        {% endfor %}
                    </div>
                {% endfor %}
\t        {% endif %}
            </p>
        {% endif %}
        {% if page.header.image  %}
            <img class=\"img-responsive wp wp-3 animated fadeInUp\" src=\"{{ page.media[page.header.image].url }}\">
        {% endif %}

        {% if page.header.images  %}
            <div id=\"carousel-content\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"0\">
              <div class=\"carousel-inner\" role=\"listbox\">
                {% for testimonial in page.header.images %}
                <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                    <img style=\"max-height:400px;margin: auto;\" src=\"{{ page.media.images[testimonial].url }}\" class=\"img-responsive\">
                </div>
                {% endfor %}
              </div>
              <ol class=\"carousel-indicators\">
                {% for testimonial in page.header.images %}
                <li {% if loop.first %}class=\"active\"{% endif %} data-target=\"#carousel-content\" data-slide-to=\"{{ loop.index0 }}\">
                </li>
                {% endfor %}
              </ol>
            </div>
          </div>
        {% endif %}
        {{ page.content }}

    </div>
</section>
", "modular/intro.html.twig", "/Users/julienfroidefond/Sites/portfolio/user/themes/landio/templates/modular/intro.html.twig");
    }
}

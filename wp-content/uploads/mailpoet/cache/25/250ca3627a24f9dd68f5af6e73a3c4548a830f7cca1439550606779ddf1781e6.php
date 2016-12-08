<?php

/* settings/mta.html */
class __TwigTemplate_23693b7901c4ba3f2b4643dea73bd93d53bb1cba05aabe4edd3e6f9c95150cea extends Twig_Template
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
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods clearfix\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 46
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 47
        echo "  >
    <h3>
      <img
        src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/img/mailpoet_logo.png\"
        alt=\"MailPoet\"
        width=\"137\"
        height=\"54\"
      />
    </h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 58
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Currently in Closed Beta");
        echo "</strong>
      <br />
      ";
        // line 60
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]Sign up to our newsletter[/link] to get our latest news on our sending service plus other useful tips and tricks."), array("[link]" => "<a href=\"http://www.mailpoet.com/subscribe/\" target=\"_blank\">", "[/link]" => "</a>"));
        // line 66
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 70
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/mailpoet\">";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
  <li
    data-group=\"website\"
    ";
        // line 81
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 82
        echo "  >
    <h3>";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Free, but not recommended");
        echo "</strong>
      <br />
      ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Web hosts generally have a bad reputation as a sender. Your newsletter will probably be considered spam.");
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/website\">";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
  <li
    data-group=\"smtp\"
    ";
        // line 103
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 104
        echo "  >
    <h3>";
        // line 105
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Third-party");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Currently the best solution");
        echo "</strong>
      <br />
      ";
        // line 110
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send with an external email provider. This is usually not free.");
        echo "
      <a
        href=\"http://docs.mailpoet.com/article/154-why-use-an-email-service-provider\"
        target=\"_blank\"
      >";
        // line 114
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more.");
        echo "</a>
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 118
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/smtp\">";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
</ul>

<div id=\"mailpoet_sending_method_setup\">
  <!-- Sending Method: MailPoet -->
  <div
    class=\"mailpoet_sending_method\"
    data-group=\"mailpoet\"
    style=\"display:none;\"
  >
    <h3>";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Already have a key?");
        echo "</h3>
    <table class=\"form-table\">
      <tbody>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_api_key\">
              ";
        // line 142
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"mailpoet_api_key\"
              name=\"mta[mailpoet_api_key]\"
              value=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Sending Method: Website -->
  <div
    class=\"mailpoet_sending_method\"
    data-group=\"website\"
    style=\"display:none;\"
  >
    <table class=\"form-table\">
      <tbody>
          <th scope=\"row\">
            <label for=\"mailpoet_web_host\">
              ";
        // line 169
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <p>
              <!-- sending frequency -->
              <select
                id=\"mailpoet_web_host\"
                name=\"web_host\"
              >
                <option value=\"auto\">
                  ";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Safe default values");
        echo "
                </option>
                <option
                  value=\"manual\"
                  ";
        // line 184
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == "manual")) {
            // line 185
            echo "                    selected=\"selected\"
                  ";
        }
        // line 187
        echo "                >
                  ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
                </option>

                <!-- web hosts -->
                <optgroup
                  label=\"";
        // line 193
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Input your host's recommended sending frequency");
        echo "\"
                >
                ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 196
            echo "                  <option
                    value=\"";
            // line 197
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    ";
            // line 200
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == $context["host_key"])) {
                // line 201
                echo "                      selected=\"selected\"
                    ";
            }
            // line 203
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                </optgroup>
              </select>
              &nbsp;
              <!-- website: sending frequency -->
              <span id=\"mailpoet_website_sending_frequency\"></span>
            </p>

            <!-- website: manual sending frequency -->
            <div id=\"mailpoet_sending_frequency_manual\" style=\"display:none;\">
              <p>
                <input
                  id=\"website_frequency_emails\"
                  type=\"number\"
                  min=\"1\"
                  max=\"1000\"
                  ";
        // line 220
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            // line 221
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        } else {
            // line 223
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        }
        // line 225
        echo "                />
                ";
        // line 226
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
                <select id=\"website_frequency_interval\">
                  ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 229
            echo "                    <option
                      value=\"";
            // line 230
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                      ";
            // line 232
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 233
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array())))) {
                // line 235
                echo "                      selected=\"selected\"
                      ";
            }
            // line 237
            echo "                      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 238
                echo "                        selected=\"selected\"
                      ";
            }
            // line 240
            echo "                    >
                      ";
            // line 241
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                      ";
            // line 242
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()))) {
                // line 243
                echo "                        (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                      ";
            }
            // line 245
            echo "                    </option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                </select>
                <span id=\"mailpoet_website_daily_emails\"></span>
              </p>
              <br />
              <p>
                ";
        // line 252
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> Sending more than the recommended amount of emails? You may break the terms of your web host or provider!");
        echo "'
                <br />
                ";
        // line 254
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please ask your host for the maximum number of emails you are allowed to send per day");
        echo "
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Sending Method: SMTP -->
  <div class=\"mailpoet_sending_method\" data-group=\"smtp\" style=\"display:none;\">
    <table class=\"form-table\">
      <tbody>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 270
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Provider");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp provider -->
            <select
              id=\"mailpoet_smtp_provider\"
              name=\"smtp_provider\"
            >
              <option data-interval=\"5\" data-emails=\"100\" value=\"manual\">
                ";
        // line 280
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom SMTP");
        echo "
              </option>
              <!-- providers -->
              <optgroup label=\"";
        // line 283
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
                ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 285
            echo "                  <option
                    value=\"";
            // line 286
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    data-fields=\"";
            // line 289
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
                    ";
            // line 290
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) == $context["host_key"])) {
                // line 291
                echo "                      selected=\"selected\"
                    ";
            }
            // line 293
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "              </optgroup>
            </select>
          </td>
        </tr>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 302
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp: sending frequency -->
            <p>
              <input
                id=\"smtp_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
                ";
        // line 313
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 314
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        } else {
            // line 316
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 318
        echo "              />
              ";
        // line 319
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"smtp_frequency_interval\">
                ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 322
            echo "                  <option
                    value=\"";
            // line 323
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                    ";
            // line 325
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 326
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array())))) {
                // line 328
                echo "                    selected=\"selected\"
                    ";
            }
            // line 330
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 331
                echo "                      selected=\"selected\"
                    ";
            }
            // line 333
            echo "                  >
                    ";
            // line 334
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                    ";
            // line 335
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array()))) {
                // line 336
                echo "                      (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                    ";
            }
            // line 338
            echo "                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "              </select>
              <span id=\"mailpoet_smtp_daily_emails\"></span>
            </p>
          </td>
        </tr>
        <!-- smtp: host -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"host\">
          <th scope=\"row\">
            <label for=\"settings[mta_host]\">
              ";
        // line 349
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 352
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.:smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_host]\"
              name=\"mta[host]\"
              value=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>
        <!-- smtp: port -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"port\">
          <th scope=\"row\">
            <label for=\"settings[mta_port]\">
              ";
        // line 368
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"number\"
              max=\"65535\"
              min=\"1\"
              maxlength=\"5\"
              style=\"width:5em;\"
              id=\"settings[mta_port]\"
              name=\"mta[port]\"
              value=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon region -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"region\">
          <th scope=\"row\">
            <label for=\"settings[mta_region]\">
              ";
        // line 389
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
            </label>
          </th>
          <td>
            <select
              id=\"settings[mta_region]\"
              name=\"mta[region]\"
              value=\"";
        // line 396
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 398
        echo "\"
            >
              ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 401
            echo "                <option
                  value=\"";
            // line 402
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
                  ";
            // line 403
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()) == $context["server"])) {
                // line 404
                echo "                    selected=\"selected\"
                  ";
            }
            // line 406
            echo "                >
                  ";
            // line 407
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 410
        echo "            </select>
          </td>
        </tr>

        <!-- smtp: amazon access_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"access_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_access_key]\">
              ";
        // line 418
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_access_key]\"

              name=\"mta[access_key]\"
              value=\"";
        // line 428
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 430
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon secret_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"secret_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_secret_key]\">
              ";
        // line 439
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_secret_key]\"

              name=\"mta[secret_key]\"
              value=\"";
        // line 449
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 450
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 451
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: domain -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"domain\">
          <th scope=\"row\">
            <label for=\"settings[mta_domain]\">
              ";
        // line 460
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Domain");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 463
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.:smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_domain]\"
              name=\"mta[domain]\"
              value=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "domain", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>

        <!-- smtp: api key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"api_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_api_key]\">
              ";
        // line 480
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_api_key]\"
              name=\"mta[api_key]\"
              value=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: login -->
        <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\">
          <th scope=\"row\">
            <label for=\"settings[mta_login]\">
              ";
        // line 498
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_login]\"
              name=\"mta[login]\"
              value=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: password -->
        <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\">
          <th scope=\"row\">
            <label for=\"settings[mta_password]\">
              ";
        // line 515
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"password\"
              class=\"regular-text\"
              id=\"settings[mta_password]\"
              name=\"mta[password]\"
              value=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: security protocol -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\">
          <th scope=\"row\">
            <label for=\"settings[mta_encryption]\">
              ";
        // line 532
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
            </label>
          </th>
          <td>
            <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
              <option value=\"\">";
        // line 537
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
              <option
                value=\"ssl\"
                ";
        // line 540
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 541
            echo "                  selected=\"selected\"
                ";
        }
        // line 543
        echo "              >SSL</option>
              <option
                value=\"tls\"
                ";
        // line 546
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "tls")) {
            // line 547
            echo "                  selected=\"selected\"
                ";
        }
        // line 549
        echo "              >TLS</option>
            </select>
          </td>
        </tr>
        <!-- smtp: authentication -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\">
          <th scope=\"row\">
            <label>
              ";
        // line 557
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 560
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off");
        echo "
            </p>
          </th>
          <td>
            <label>
              <input
                type=\"radio\"
                value=\"1\"
                name=\"mta[authentication]\"
                ";
        // line 570
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 571
(isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "1"))) {
            // line 572
            echo "                  checked=\"checked\"
                ";
        }
        // line 574
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
            </label>
            &nbsp;
            <label>
              <input
                type=\"radio\"
                value=\"-1\"
                name=\"mta[authentication]\"
                ";
        // line 582
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "-1")) {
            // line 583
            echo "                  checked=\"checked\"
                ";
        }
        // line 585
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 599
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 602
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Improves your delivery rate by verifying that you're allowed to send emails from your domain");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 607
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 615
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 629
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 640
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 645
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get form data
        var data = \$('#mailpoet_settings_form').serializeObject();
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').serializeObject();
        var mailer = settings.mta;
        mailer.method = getMethodFromGroup(
          (\$('.mailpoet_sending_method:visible').data('group') !== undefined)
          ? \$('.mailpoet_sending_method:visible').data('group')
          : \$('#mta_group').val()
        );

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            'The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab.',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 702
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                text: \"";
        // line 704
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: {
              first_name: \"";
        // line 708
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "display_name", array()), "html", null, true);
        echo "\",
              last_name: \"\",
              email: recipient
            }
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 717
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox.");
        echo "\",
            { scroll: true }
          );
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return error.message; }),
              { scroll: true }
            );
          }
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_smtp_provider').on('change keyup', setProviderForm);
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#website_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('website');
      });
      \$('#website_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('website');
      });

      \$('#smtp_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });
      \$('#smtp_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });

      // save configuration of a sending method
      \$('.mailpoet_mta_setup_save').on('click', function() {
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group'),
          emails = \$('#'+group+'_frequency_emails').val(),
          interval = \$('#'+group+'_frequency_interval').val();

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 759
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method.");
        echo "\"
          );
        } else {
          if(
            group === 'mailpoet'
            && \$('#mailpoet_api_key').val().trim().length === 0
          ) {
            MailPoet.Notice.error(
              \"";
        // line 767
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to specify a MailPoet account key");
        echo "\"
            );
            return false;
          }

          // set new sending method active
          setSendingMethodGroup(group);

          // update sending frequency values
          \$('#mta_frequency_emails').val(emails);
          \$('#mta_frequency_interval').val(interval);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      });

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        // set smtp method value
        \$('#mta_group').val(group);

        var method = getMethodFromGroup(group);

        \$('#mta_method').val(method);
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';
        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'website':
            return 'PHPMail';
          break;
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: \$('#smtp_frequency_emails').val(),
        interval: \$('#smtp_frequency_interval').val()
      });
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var emails =
        host.data('emails') || ";
        // line 901
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 903
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if(host.val() === 'manual' ) {
        // hide  sending frequency
        \$('#mailpoet_website_sending_frequency').hide();
        // show manual sending frequency form
        \$('#mailpoet_sending_frequency_manual').slideDown(200);

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_daily_emails',
          only_daily: true,
          emails: \$('#website_frequency_emails').val(),
          interval: \$('#website_frequency_interval').val()
        });
      } else {
        \$('#mailpoet_sending_frequency_manual').slideUp(200, function() {
          \$('#mailpoet_website_sending_frequency').show();

          \$('#website_frequency_emails').val(emails);
          \$('#website_frequency_interval').val(interval);
        });

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_sending_frequency',
          emails: emails,
          interval: interval
        });
      }
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 983
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 984
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 985
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 986
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });
</script>

";
        // line 1019
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1022
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1473 => 1022,  1471 => 1019,  1435 => 986,  1431 => 985,  1427 => 984,  1423 => 983,  1340 => 903,  1335 => 901,  1198 => 767,  1187 => 759,  1142 => 717,  1130 => 708,  1123 => 704,  1118 => 702,  1058 => 645,  1050 => 640,  1036 => 629,  1028 => 624,  1016 => 615,  1005 => 607,  997 => 602,  991 => 599,  973 => 585,  969 => 583,  967 => 582,  955 => 574,  951 => 572,  949 => 571,  948 => 570,  936 => 560,  930 => 557,  920 => 549,  916 => 547,  914 => 546,  909 => 543,  905 => 541,  903 => 540,  897 => 537,  889 => 532,  878 => 524,  866 => 515,  855 => 507,  843 => 498,  831 => 489,  819 => 480,  808 => 472,  796 => 463,  790 => 460,  779 => 451,  776 => 450,  774 => 449,  761 => 439,  750 => 430,  747 => 429,  745 => 428,  732 => 418,  722 => 410,  713 => 407,  710 => 406,  706 => 404,  704 => 403,  700 => 402,  697 => 401,  693 => 400,  689 => 398,  686 => 397,  684 => 396,  674 => 389,  662 => 380,  647 => 368,  637 => 361,  625 => 352,  619 => 349,  608 => 340,  601 => 338,  595 => 336,  593 => 335,  589 => 334,  586 => 333,  582 => 331,  579 => 330,  575 => 328,  573 => 326,  572 => 325,  568 => 323,  565 => 322,  561 => 321,  556 => 319,  553 => 318,  547 => 316,  541 => 314,  539 => 313,  525 => 302,  516 => 295,  507 => 293,  503 => 291,  501 => 290,  497 => 289,  493 => 288,  489 => 287,  485 => 286,  482 => 285,  478 => 284,  474 => 283,  468 => 280,  455 => 270,  436 => 254,  431 => 252,  424 => 247,  417 => 245,  411 => 243,  409 => 242,  405 => 241,  402 => 240,  398 => 238,  395 => 237,  391 => 235,  389 => 233,  388 => 232,  384 => 230,  381 => 229,  377 => 228,  372 => 226,  369 => 225,  363 => 223,  357 => 221,  355 => 220,  338 => 205,  329 => 203,  325 => 201,  323 => 200,  319 => 199,  315 => 198,  311 => 197,  308 => 196,  304 => 195,  299 => 193,  291 => 188,  288 => 187,  284 => 185,  282 => 184,  275 => 180,  261 => 169,  240 => 151,  228 => 142,  219 => 136,  204 => 124,  195 => 118,  188 => 114,  181 => 110,  176 => 108,  170 => 105,  167 => 104,  163 => 103,  155 => 98,  146 => 92,  139 => 88,  134 => 86,  128 => 83,  125 => 82,  121 => 81,  113 => 76,  104 => 70,  98 => 66,  96 => 60,  91 => 58,  80 => 50,  75 => 47,  71 => 46,  61 => 39,  52 => 33,  41 => 25,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "/Users/Mac/Sites/Works/encyklopedie/wp-content/plugins/mailpoet/views/settings/mta.html");
    }
}

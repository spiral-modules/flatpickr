<extends:spiral:element/>

<block:resources>
    <resource:css href="resources/scripts/spiral/flatpickr.min.css"/>
    <resource:script href="resources/scripts/spiral/flatpickr.min.js"/>
    <resource:script href="resources/scripts/spiral/sf.flatpickr.js"/>
</block:resources>

<block:body>
    <?php #compiled
    //Receiving label content as evaluator variable
    $this->evaluatorVariable('label', '${label}');
    $this->runtimeVariable('config', '${config}');
    if (!empty($label) && $label != "''") {
        ?>
        <block:input-label>
            <span class="${label-class} item-label" node:attributes="prefix:label">${label}</span>
        </block:input-label>
        <?php #compiled
    }
    ?>
    <block:input-body>
        <label class="item-form">
            <input
              type="text"
              name="${name}"
              class="js-sf-flatpickr ${class}"
              <?php if (!empty($config) && $config != "''") { ?>
                  data-config="<?= htmlentities($config, ENT_QUOTES, 'UTF-8') ?>"
              <?php } ?>
              node:attributes/>
        </label>
    </block:input-body>
</block:body>

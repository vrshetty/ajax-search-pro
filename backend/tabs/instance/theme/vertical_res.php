<div class="item item-rlayout item-rlayout-vertical">
    <p><?php echo __('These options are hidden, because the <span>vertical</span> results layout is selected.', 'ajax-search-pro'); ?></p>
    <p><?php echo __('You can change that under the <a href="#402" data-asp-os-highlight="resultstype" tabid="402">Layout Options -> Results layout</a> panel,
        <br>..or choose a <a href="#601" tabid="601">different theme</a> with a different pre-defined layout.', 'ajax-search-pro'); ?></p>
</div>
<div class="item"><?php
    $o = new wpdreamsTextSmall("resultitemheight", __('One result item height', 'ajax-search-pro'), $sd['resultitemheight']);
    $params[$o->getName()] = $o->getData();
    ?>
    <p class="descMsg">
        <?php echo __('Use with units (70px or 50% or auto). Default: <strong>auto</strong>', 'ajax-search-pro'); ?>
    </p>
</div>
<div class="item item-flex-nogrow" style="flex-wrap: wrap;">
    <?php
    $o = new wpdreamsTextSmall("v_res_max_height", __('Result box maximum height', 'ajax-search-pro'), array(
        'icon' => 'desktop',
        'value' => $sd['v_res_max_height']
    ));
    $params[$o->getName()] = $o->getData();
    $o = new wpdreamsTextSmall("v_res_max_height_tablet", '', array(
        'icon' => 'tablet',
        'value' => $sd['v_res_max_height_tablet']
    ));
    $params[$o->getName()] = $o->getData();
    $o = new wpdreamsTextSmall("v_res_max_height_phone", '', array(
        'icon' => 'phone',
        'value' => $sd['v_res_max_height_phone']
    ));
    $params[$o->getName()] = $o->getData();
    ?>
    <div class="descMsg" style="min-width: 100%;flex-wrap: wrap;flex-basis: auto;flex-grow: 1;box-sizing: border-box;">
        <?php echo __('If this value is reached, the scrollbar will definitely trigger. <strong>none</strong> or pixel units, like <strong>800px</strong>. Default: <strong>none</strong>', 'ajax-search-pro'); ?>
    </div>
</div>
<div class="item"><?php
    $o = new wpdreamsTextSmall("itemscount", __('Results box viewport (in item numbers)', 'ajax-search-pro'), $sd['itemscount']);
    $params[$o->getName()] = $o->getData();
    ?>
    <p class="descMsg">
        <?php echo __('Used to calculate the box height. Result box height = (this option) x (average item height)', 'ajax-search-pro'); ?>
    </p>
</div>
<fieldset>
    <legend><?php echo __('Custom scrollbar', 'ajax-search-pro') ?></legend>
    <div class="item item-flex-nogrow">
    <?php
    $o = new wpdreamsYesNo('v_res_overflow_autohide', __('Auto hide the scrollbar?', 'ajax-search-pro'), $sd['v_res_overflow_autohide']);
    $params[$o->getName()] = $o->getData();

    $o = new wpdreamsGradient("v_res_overflow_color", __('Scrollbar color', 'ajax-search-pro'), $sd['v_res_overflow_color']);
    $params[$o->getName()] = $o->getData();
    ?>
    </div>
</fieldset>
<div class="item item-flex-nogrow">
    <?php
    $option_name = "image_width";
    $option_desc = "Image width (px)";
    $o = new wpdreamsTextSmall($option_name, $option_desc,
        $sd[$option_name]);
    $params[$o->getName()] = $o->getData();

    $option_name = "image_height";
    $option_desc = "Image height (px)";
    $o = new wpdreamsTextSmall($option_name, $option_desc,
        $sd[$option_name]);
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $o = new wpdreamsBorder("resultsborder", __('Results box border', 'ajax-search-pro'), $sd['resultsborder']);
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php
    $o = new wpdreamsBoxShadow("resultshadow", __('Results box Shadow', 'ajax-search-pro'), $sd['resultshadow']);
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item"><?php
    $o = new wpdreamsColorPicker("resultsbackground", __('Results box background color', 'ajax-search-pro'), $sd['resultsbackground']);
    $params[$o->getName()] = $o->getData();
    ?></div>
<div class="item"><?php
    $o = new wpdreamsColorPicker("resultscontainerbackground", __('Result items container box background color', 'ajax-search-pro'), $sd['resultscontainerbackground']);
    $params[$o->getName()] = $o->getData();
    ?></div>
<div class="item"><?php
    $o = new wpdreamsGradient("vresulthbg", __('Result item mouse hover box background color', 'ajax-search-pro'), $sd['vresulthbg']);
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item"><?php
    $o = new wpdreamsColorPicker("spacercolor", __('Spacer color between results', 'ajax-search-pro'), $sd['spacercolor']);
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<?php

?>
<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        <?php
        $menuItems[] =[ ['label' => 'ссылка 1', 'url' => ['#']], ['label' => 'ссылка 2', 'url' => ['#']]];
        echo \yii\widgets\Menu::widget(
        [
                'items' => [['label' => 'ссылка 1', 'url' => ['#']], ['label' => 'ссылка 2', 'url' => ['#']]],
            ]
        )
        ?>
    </p>

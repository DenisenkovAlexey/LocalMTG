<?php

use yii\widgets\Menu; ?>
<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        <?php
        echo Menu::widget(
        [
                'items' => [['label' => 'ссылка 1', 'url' => ['test']], ['label' => 'ссылка 2', 'url' => ['#']]],
        ]
        )
        ?>
    </p>

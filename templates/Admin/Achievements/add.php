<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Achievement $achievement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Achievements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achievements form content">
            <?= $this->Form->create($achievement,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Achievement') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                   // echo $this->Form->control('image');
                    echo $this->Form->select('status', [
                        'active' => 'active',
                        'inactive' => 'inactive',
                    ]);

                    echo $this->Form->control('image_file',['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

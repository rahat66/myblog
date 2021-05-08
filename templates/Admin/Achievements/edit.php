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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $achievement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Achievements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achievements form content">
            <?= $this->Form->create($achievement) ?>
            <fieldset>
                <legend><?= __('Edit Achievement') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image');
                    echo $this->Form->select('status', [
                        'active' => 'active',
                        'inactive' => 'inactive',
                    ]);
                   // echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

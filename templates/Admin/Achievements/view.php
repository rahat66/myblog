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
            <?= $this->Html->link(__('Edit Achievement'), ['action' => 'edit', $achievement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Achievement'), ['action' => 'delete', $achievement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Achievements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Achievement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="achievements view content">
            <h3><?= h($achievement->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($achievement->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($achievement->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($achievement->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($achievement->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($achievement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($achievement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($achievement->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

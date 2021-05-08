<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Achievement[]|\Cake\Collection\CollectionInterface $achievements
 */
?>
<div class="achievements index content">
    <?= $this->Html->link(__('New Achievement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Achievements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($achievements as $achievement): ?>
                <tr>
                    <td><?= $this->Number->format($achievement->id) ?></td>
                    <td><?= h($achievement->title) ?></td>
                    <td><?= h($achievement->description) ?></td>
                    <td><?= h($achievement->image) ?></td>
                    <td><?= h($achievement->status) ?></td>
                    <td><?= h($achievement->created) ?></td>
                    <td><?= h($achievement->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $achievement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $achievement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $achievement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $student->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($student->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($student->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($student->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ceated At') ?></th>
                    <td><?= h($student->ceated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($student->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

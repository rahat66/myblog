<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calls Model
 *
 * @method \App\Model\Entity\Call newEmptyEntity()
 * @method \App\Model\Entity\Call newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Call[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Call get($primaryKey, $options = [])
 * @method \App\Model\Entity\Call findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Call patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Call[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Call|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Call saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Call[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Call[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Call[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Call[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CallsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('calls');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->scalar('number')
            ->maxLength('number', 15)
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        return $validator;
    }
}

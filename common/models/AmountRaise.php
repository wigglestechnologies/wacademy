<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "amountRaise".
 *
 * @property int $amountId
 * @property string $amountRaised
 *
 * @property StudentRegistration[] $studentRegistrations
 */
class AmountRaise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'amountRaise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amountRaised'], 'required'],
            [['amountRaised'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'amountId' => 'Amount ID',
            'amountRaised' => 'Amount Raised',
        ];
    }

    /**
     * Gets query for [[StudentRegistrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['amountId' => 'amountId']);
    }
}

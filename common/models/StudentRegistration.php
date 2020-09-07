<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "studentRegistration".
 *
 * @property int $studentRegistrationId
 * @property string $fullName
 * @property int $phoneCode
 * @property string $phoneNumber
 * @property string $email
 * @property int $courseId
 * @property int $scholarship
 * @property int|null $amountId
 *
 * @property AmountRaise $amount
 * @property Course $course
 * @property Country $phoneCode0
 */
class StudentRegistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentRegistration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullName', 'phoneCode', 'phoneNumber', 'email', 'courseId', 'scholarship'], 'required'],
            [['phoneCode', 'courseId', 'scholarship', 'amountId'], 'integer'],
            [['fullName', 'phoneNumber', 'email'], 'string', 'max' => 255],
            [['amountId'], 'exist', 'skipOnError' => true, 'targetClass' => AmountRaise::className(), 'targetAttribute' => ['amountId' => 'amountId']],
            [['courseId'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['courseId' => 'courseId']],
            [['phoneCode'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['phoneCode' => 'countryId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentRegistrationId' => 'Student Registration ID',
            'fullName' => 'Full Name',
            'phoneCode' => 'Phone Code',
            'phoneNumber' => 'Phone Number',
            'email' => 'Email',
            'courseId' => 'Course ID',
            'scholarship' => 'Scholarship',
            'amountId' => 'Amount ID',
        ];
    }

    /**
     * Gets query for [[Amount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAmount()
    {
        return $this->hasOne(AmountRaise::className(), ['amountId' => 'amountId']);
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['courseId' => 'courseId']);
    }

    /**
     * Gets query for [[PhoneCode0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneCode0()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'phoneCode']);
    }
}

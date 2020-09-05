<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $courseId
 * @property string $courseName
 * @property float $coursePrice
 * @property string $courseDuration
 * @property string|null $courseDesc
 *
 * @property StudentRegistration[] $studentRegistrations
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseName', 'coursePrice', 'courseDuration'], 'required'],
            [['coursePrice'], 'number'],
            [['courseDesc'], 'string'],
            [['courseName', 'courseDuration'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'courseId' => 'Course ID',
            'courseName' => 'Course Name',
            'coursePrice' => 'Course Price',
            'courseDuration' => 'Course Duration',
            'courseDesc' => 'Course Desc',
        ];
    }

    /**
     * Gets query for [[StudentRegistrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentRegistrations()
    {
        return $this->hasMany(StudentRegistration::className(), ['courseId' => 'courseId']);
    }
}

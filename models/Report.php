<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $report_id
 * @property string|null $report_name
 * @property int|null $report_group_id
 * @property int|null $report_type
 * @property int|null $is_group
 * @property string|null $description
 * @property string|null $report_data
 * @property int|null $category_id
 * @property string|null $keyword
 * @property int|null $main_query_id
 * @property int|null $owner
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property resource|null $sample_picture
 * @property string|null $sql_after_print
 * @property string|null $url_before_print
 * @property int|null $url_before_print_show
 * @property int|null $url_before_print_x
 * @property int|null $url_before_print_y
 * @property string|null $url_after_print
 * @property int|null $url_after_print_show
 * @property int|null $url_after_print_x
 * @property int|null $url_after_print_y
 * @property string|null $email_subject
 * @property string|null $email_body
 * @property float|null $email_every
 * @property string|null $last_execute
 *
 * @property Fstmt[] $fstmts
 * @property ReportCat $category
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Report $reportGroup
 * @property Report[] $reports
 * @property ReportAccess[] $reportAccesses
 * @property ReportParam[] $reportParams
 * @property ReportProtect $reportProtect
 * @property ReportQuery[] $reportQueries
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id'], 'required'],
            [['report_id', 'report_group_id', 'report_type', 'is_group', 'category_id', 'main_query_id', 'owner', 'created_user_id', 'modified_user_id', 'url_before_print_show', 'url_before_print_x', 'url_before_print_y', 'url_after_print_show', 'url_after_print_x', 'url_after_print_y'], 'integer'],
            [['description', 'report_data', 'sample_picture', 'email_body'], 'string'],
            [['created_time', 'modified_time', 'last_execute'], 'safe'],
            [['email_every'], 'number'],
            [['report_name', 'keyword'], 'string', 'max' => 50],
            [['sql_after_print'], 'string', 'max' => 500],
            [['url_before_print', 'url_after_print'], 'string', 'max' => 250],
            [['email_subject'], 'string', 'max' => 100],
            [['report_id'], 'unique'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['report_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['report_group_id' => 'report_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'report_id' => 'Report ID',
            'report_name' => 'Report Name',
            'report_group_id' => 'Report Group ID',
            'report_type' => 'Report Type',
            'is_group' => 'Is Group',
            'description' => 'Description',
            'report_data' => 'Report Data',
            'category_id' => 'Category ID',
            'keyword' => 'Keyword',
            'main_query_id' => 'Main Query ID',
            'owner' => 'Owner',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'sample_picture' => 'Sample Picture',
            'sql_after_print' => 'Sql After Print',
            'url_before_print' => 'Url Before Print',
            'url_before_print_show' => 'Url Before Print Show',
            'url_before_print_x' => 'Url Before Print X',
            'url_before_print_y' => 'Url Before Print Y',
            'url_after_print' => 'Url After Print',
            'url_after_print_show' => 'Url After Print Show',
            'url_after_print_x' => 'Url After Print X',
            'url_after_print_y' => 'Url After Print Y',
            'email_subject' => 'Email Subject',
            'email_body' => 'Email Body',
            'email_every' => 'Email Every',
            'last_execute' => 'Last Execute',
        ];
    }

    /**
     * Gets query for [[Fstmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFstmts()
    {
        return $this->hasMany(Fstmt::className(), ['report_id' => 'report_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[ReportGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportGroup()
    {
        return $this->hasOne(Report::className(), ['report_id' => 'report_group_id']);
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['report_group_id' => 'report_id']);
    }

    /**
     * Gets query for [[ReportAccesses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportAccesses()
    {
        return $this->hasMany(ReportAccess::className(), ['report_id' => 'report_id']);
    }

    /**
     * Gets query for [[ReportParams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportParams()
    {
        return $this->hasMany(ReportParam::className(), ['report_id' => 'report_id']);
    }

    /**
     * Gets query for [[ReportProtect]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportProtect()
    {
        return $this->hasOne(ReportProtect::className(), ['report_id' => 'report_id']);
    }

    /**
     * Gets query for [[ReportQueries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportQueries()
    {
        return $this->hasMany(ReportQuery::className(), ['report_id' => 'report_id']);
    }
}

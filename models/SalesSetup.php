<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales_setup".
 *
 * @property int $company_id
 * @property int|null $shipment_warehouse_id
 * @property int|null $shipment_carrier_id
 * @property int|null $qty_ordered_restriction
 * @property int|null $qty_shipped_restriction
 * @property int|null $default_show_order
 * @property int|null $default_show_shipment
 * @property int|null $sorder_rpt_cat_id
 * @property int|null $shipment_rpt_cat_id
 * @property int|null $correction_needs_supervisor
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $pos_usage
 * @property string|null $pos_usage_remark
 * @property string|null $dtd
 * @property string|null $non_dtd
 *
 * @property Warehouse $shipmentWarehouse
 * @property Carrier $shipmentCarrier
 * @property ReportCat $sorderRptCat
 * @property ReportCat $shipmentRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Company $company
 */
class SalesSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'shipment_warehouse_id', 'shipment_carrier_id', 'qty_ordered_restriction', 'qty_shipped_restriction', 'default_show_order', 'default_show_shipment', 'sorder_rpt_cat_id', 'shipment_rpt_cat_id', 'correction_needs_supervisor', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['pos_usage', 'pos_usage_remark', 'dtd', 'non_dtd'], 'string'],
            [['company_id'], 'unique'],
            [['shipment_warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['shipment_warehouse_id' => 'warehouse_id']],
            [['shipment_carrier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrier::className(), 'targetAttribute' => ['shipment_carrier_id' => 'carrier_id']],
            [['sorder_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['sorder_rpt_cat_id' => 'category_id']],
            [['shipment_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['shipment_rpt_cat_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'shipment_warehouse_id' => 'Shipment Warehouse ID',
            'shipment_carrier_id' => 'Shipment Carrier ID',
            'qty_ordered_restriction' => 'Qty Ordered Restriction',
            'qty_shipped_restriction' => 'Qty Shipped Restriction',
            'default_show_order' => 'Default Show Order',
            'default_show_shipment' => 'Default Show Shipment',
            'sorder_rpt_cat_id' => 'Sorder Rpt Cat ID',
            'shipment_rpt_cat_id' => 'Shipment Rpt Cat ID',
            'correction_needs_supervisor' => 'Correction Needs Supervisor',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'pos_usage' => 'Pos Usage',
            'pos_usage_remark' => 'Pos Usage Remark',
            'dtd' => 'Dtd',
            'non_dtd' => 'Non Dtd',
        ];
    }

    /**
     * Gets query for [[ShipmentWarehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'shipment_warehouse_id']);
    }

    /**
     * Gets query for [[ShipmentCarrier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentCarrier()
    {
        return $this->hasOne(Carrier::className(), ['carrier_id' => 'shipment_carrier_id']);
    }

    /**
     * Gets query for [[SorderRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorderRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'sorder_rpt_cat_id']);
    }

    /**
     * Gets query for [[ShipmentRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipmentRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'shipment_rpt_cat_id']);
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
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}

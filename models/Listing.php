<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "listing".
 *
 * @property integer $listing_id
 * @property string $listing_num
 * @property string $description
 * @property string $address
 * @property integer $sq_ft
 * @property integer $beds
 * @property double $baths
 * @property integer $garage
 * @property string $img_path
 * @property string $sm_img_path
 * @property integer $price
 * @property integer $is_sold
 * @property integer $pg1_gallery_id
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 */
class Listing extends \app\components\OActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'listing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listing_num', 'description', 'img_path', 'sm_img_path', 'price', 'pg1_gallery_id'], 'required'],
            [['description'], 'string'],
            [['sq_ft', 'beds', 'garage', 'price', 'is_sold', 'pg1_gallery_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['baths'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['listing_num'], 'string', 'max' => 6],
            [['address'], 'string', 'max' => 255],
            [['img_path', 'sm_img_path'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'listing_id' => 'Listing ID',
            'listing_num' => 'Listing Num',
            'description' => 'Description',
            'address' => 'Address',
            'sq_ft' => 'Sq Ft',
            'beds' => 'Beds',
            'baths' => 'Baths',
            'garage' => 'Garage',
            'img_path' => 'Img Path',
            'sm_img_path' => 'Sm Img Path',
            'price' => 'Price',
            'is_sold' => 'Is Sold',
            'pg1_gallery_id' => 'Pg1 Gallery ID',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'update_user_id' => 'Update User ID',
            'update_time' => 'Update Time',
        ];
    }

    /**
     * @inheritdoc
     * @return ListingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ListingQuery(get_called_class());
    }

    public function getSqFt()
    {
        $sq_ft = $this->getAttr('sq_ft');

        return is_null($sq_ft) ? 'N/A' : number_format($sq_ft, 0);
    }

    public function getPrice()
    {
        $price = $this->getAttr('price');
        return is_null($price) ? 'Call for Price' : '$'.number_format($price, 0);
    }

    public function getPrintAttr($attribute_name)
    {
        $attr = $this->getAttr($attribute_name);

        return is_null($attr) ? 'N/A' : $attr;
    }
}

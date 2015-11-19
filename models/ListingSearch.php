<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Listing;

/**
 * ListingSearch represents the model behind the search form about `app\models\Listing`.
 */
class ListingSearch extends Listing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['listing_id', 'price', 'is_sold', 'pg1_gallery_id', 'create_user_id', 'update_user_id'], 'integer'],
            [['listing_num', 'description', 'img_path', 'sm_img_path', 'create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Listing::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'listing_id' => $this->listing_id,
            'price' => $this->price,
            'is_sold' => $this->is_sold,
            'pg1_gallery_id' => $this->pg1_gallery_id,
            'create_user_id' => $this->create_user_id,
            'create_time' => $this->create_time,
            'update_user_id' => $this->update_user_id,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'listing_num', $this->listing_num])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img_path', $this->img_path])
            ->andFilterWhere(['like', 'sm_img_path', $this->sm_img_path]);

        return $dataProvider;
    }
}

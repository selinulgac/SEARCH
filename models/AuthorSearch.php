<?php
namespace kouosl\search\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\search\models\search;
/**
 * EmergencySearch represents the model behind the search form about `kouosl\search\models\Search`.
 */
class LibrarySearch extends Search
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
        ];
    }
    
    public function searchAuthor($params)
    {
        $query = Search::find();
        // add conditions that should always apply 
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ])
        return $dataProvider;
    }
}

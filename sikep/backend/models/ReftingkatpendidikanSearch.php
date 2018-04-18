<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reftingkatpendidikan;

/**
 * ReftingkatpendidikanSearch represents the model behind the search form of `frontend\models\Reftingkatpendidikan`.
 */
class ReftingkatpendidikanSearch extends Reftingkatpendidikan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdRefTingkatPendidikan', 'UrutanTingkatPendidikan', 'IdPangkatGolonganTingkatanPendidikan'], 'integer'],
            [['KodeTingkatPendidikan', 'NamaTingkatPendidikan', 'DeskripsiTingkatPendidikan', 'GolonganMulaiTingkatPendidikan'], 'safe'],
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
        $query = Reftingkatpendidikan::find();

        // add conditions that should always apply here

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
            'IdRefTingkatPendidikan' => $this->IdRefTingkatPendidikan,
            'UrutanTingkatPendidikan' => $this->UrutanTingkatPendidikan,
            'IdPangkatGolonganTingkatanPendidikan' => $this->IdPangkatGolonganTingkatanPendidikan,
        ]);

        $query->andFilterWhere(['like', 'KodeTingkatPendidikan', $this->KodeTingkatPendidikan])
            ->andFilterWhere(['like', 'NamaTingkatPendidikan', $this->NamaTingkatPendidikan])
            ->andFilterWhere(['like', 'DeskripsiTingkatPendidikan', $this->DeskripsiTingkatPendidikan])
            ->andFilterWhere(['like', 'GolonganMulaiTingkatPendidikan', $this->GolonganMulaiTingkatPendidikan]);

        return $dataProvider;
    }
}

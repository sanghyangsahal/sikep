<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Refbiayatransportmutasi;

/**
 * RefbiayatransportmutasiSearch represents the model behind the search form of `backend\models\Refbiayatransportmutasi`.
 */
class RefbiayatransportmutasiSearch extends Refbiayatransportmutasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBiayaTransport', 'KodeSatkerAsalMutasi', 'KodeSatkerTujuanMutasi', 'BiayaDaratTrasnportMutasi', 'BiayaLautTrasnportMutasi', 'UangHarianIiiMutasi', 'UangHarianViMutasi', 'JarakJarakTrasnportMutasi', 'TIketTransportMutasi'], 'integer'],
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
        $query = Refbiayatransportmutasi::find();

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
            'idBiayaTransport' => $this->idBiayaTransport,
            'KodeSatkerAsalMutasi' => $this->KodeSatkerAsalMutasi,
            'KodeSatkerTujuanMutasi' => $this->KodeSatkerTujuanMutasi,
            'BiayaDaratTrasnportMutasi' => $this->BiayaDaratTrasnportMutasi,
            'BiayaLautTrasnportMutasi' => $this->BiayaLautTrasnportMutasi,
            'UangHarianIiiMutasi' => $this->UangHarianIiiMutasi,
            'UangHarianViMutasi' => $this->UangHarianViMutasi,
            'JarakJarakTrasnportMutasi' => $this->JarakJarakTrasnportMutasi,
            'TIketTransportMutasi' => $this->TIketTransportMutasi,
        ]);

        return $dataProvider;
    }
}

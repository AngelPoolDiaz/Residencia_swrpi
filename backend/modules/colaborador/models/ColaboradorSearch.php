<?php

namespace backend\modules\colaborador\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\colaborador\models\Colaborador;

/**
 * ColaboradorSearch represents the model behind the search form of `backend\modules\colaborador\models\Colaborador`.
 */
class ColaboradorSearch extends Colaborador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddocente'], 'integer'],
            [['nombre', 'proyectosinternos_id','tiempocompleto', 'nivelSNI', 'perfilpromep'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Crears data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Colaborador::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinwith('proyectosinternos');

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'iddocente' => $this->iddocente,
            //'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'tiempocompleto', $this->tiempocompleto])
            ->andFilterWhere(['like', 'proyectosinternos.titulo_proyecto', $this->proyectosinternos_id])
            ->andFilterWhere(['like', 'nivelSNI', $this->nivelSNI])
            ->andFilterWhere(['like', 'perfilpromep', $this->perfilpromep]);

        return $dataProvider;
    }
}

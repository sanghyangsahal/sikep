<?php
/**
 * Created by IntelliJ IDEA.
 * User: afm
 * Date: 4/23/2018
 * Time: 8:10 PM
 */

namespace backend\controllers;

use Yii;

use yii\base\DynamicModel;
use yii\web\Controller;

class KomponenController extends Controller{

   public function behaviors()
   {
       return parent::behaviors(); // TODO: Change the autogenerated stub
   }

    public function actionIndex()
    {
        $model = new DynamicModel([
            'email','password','dropdown'
        ]);
        $list = new DynamicModel([
            1 => 'item 1',
            2 => 'item 2',
            3 => 'pada item'
        ]);
        return $this->render('vkomponen',['model' => $model]);
    }
}
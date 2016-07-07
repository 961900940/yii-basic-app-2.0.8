<?php 

namespace app\controllers;
use yii\web\Controller;
use app\models\Test;


//数据库curd控制器
class TestController extends Controller{

	public function actionIndex(){

		//查询数据
		$sql = "select * from test where id = :id";
		$result = Test::findBySql($sql,array(':id'=>'1 or 1=1'))->all();
		//var_dump($result);

		//查询 id =1 的数据
		$res = Test::find()->where(array('id'=>1))->all();
		//var_dump($res);

		// id > 0的数据
		$res = Test::find()->where(['>','id',0])->all();
		//var_dump($res);

		// id>=1 并且 id<=2
		$res = Test::find()->where(['between','id',1,2])->all();
		//var_dump($res);

		// title like '%title%'
		$res = Test::find()->where(['like','title','2'])->all();
		//var_dump($res);

		//查询结果转化为数组
		$res = Test::find()->where(['between','id',1,2])->asArray()->all();
		// var_dump($res);

		//批量查询
		foreach (Test::find()->asArray()->batch(1) as $key => $value) {
			//var_dump($value);
		}


		//添加数据
		$test = new Test;
		$test->title = '111';
		if ($test->hasErrors()) {
			echo "data is error";die;
		}
		//$res = $test ->save();
		var_dump($test->getErrors());					//获取错误信息
		

		//删除数据
		// $res = Test::find()->where(array('id'=>9))->all();
		// $res[0]->delete();

		// $res = Test::deleteAll('id > :id',array(':id'=>'1'));
		// var_dump($res);


		//修改数据
		$test = Test::find()->where(array('id'=>1))->one();
		$test->title = '2222';
		$res = $test ->save();
		var_dump($res);

	}

}
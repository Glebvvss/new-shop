<?php

namespace app\models\db;

use yii\db\ActiveRecord;

class Tags extends ActiveRecord {
	
	public static function tableName() {
		return 'tags';
	}

	public function getTagProduct() {
		return $this->hasOne(TagProduct::className(), ['id_tag' => 'id']);
	}
}
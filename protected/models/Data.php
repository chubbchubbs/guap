<?php

/**
 * This is the model class for table "data".
 *
 * The followings are the available columns in table 'data':
 * @property string $ID
 * @property string $ID_user
 * @property integer $type
 * @property string $date_start
 * @property string $date_finnish
 * @property string $arParams
 */
class Data extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Data the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('ID, ID_user', 'length', 'max'=>20),
			array('arParams', 'length', 'max'=>10),
			array('date_start, date_finnish', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, ID_user, type, date_start, date_finnish, arParams', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ID_user' => 'Id User',
			'type' => 'Type',
			'date_start' => 'Date Start',
			'date_finnish' => 'Date Finnish',
			'arParams' => 'Ar Params',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('ID_user',$this->ID_user,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_finnish',$this->date_finnish,true);
		$criteria->compare('arParams',$this->arParams,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
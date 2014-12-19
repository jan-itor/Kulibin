<?php

/**
 * This is the model class for table "{{pages}}".
 *
 * The followings are the available columns in table '{{pages}}':
 * @property integer $page_id
 * @property string $page_title
 * @property string $page_conent
 * @property integer $page_created
 * @property integer $page_status
 * @property integer $cat_id
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{pages}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('page_title, page_conent, page_status, cat_id', 'required'),
			array('page_created, page_status, cat_id', 'numerical', 'integerOnly'=>true),
			array('page_title', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('page_id, page_title, page_conent, page_created, page_status, cat_id', 'safe', 'on'=>'search'),
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
                    'category'=>array(self::BELONGS_TO,'Categories','cat_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'Page',
			'page_title' => 'Заголовок',
			'page_conent' => 'Содержание',
			'page_created' => 'Дата создания',
			'page_status' => 'Статус',
			'cat_id' => 'Категория',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('page_title',$this->page_title,true);
		$criteria->compare('page_conent',$this->page_conent,true);
		$criteria->compare('page_created',$this->page_created);
		$criteria->compare('page_status',$this->page_status);
		$criteria->compare('cat_id',$this->cat_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   public function beforeSave()
           {
       if($this->isNewRecord)
           $this->page_created=  time ();
       return parent::beforeSave();
           }

   /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

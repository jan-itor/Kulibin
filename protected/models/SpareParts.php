<?php

/**
 * This is the model class for table "{{spare_parts}}".
 *
 * The followings are the available columns in table '{{spare_parts}}':
 * @property integer $spare_id
 * @property string $spare_name
 * @property string $spare_image
 * @property string $spare_descr
 * @property string $spare_mark
 * @property string $spare_model
 * @property string $spare_struct
 * @property integer $spare_price
 */
class SpareParts extends CActiveRecord implements IECartPosition
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{spare_parts}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('spare_name, spare_descr, spare_mark, spare_model, spare_struct, spare_price', 'required'),
			array('spare_price', 'numerical', 'integerOnly'=>true),
			array('spare_name', 'length', 'max'=>25),
			array('spare_struct', 'length', 'max'=>50),
			array('spare_mark, spare_model', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('spare_id, spare_name, spare_descr, spare_mark, spare_model, spare_struct, spare_price', 'safe', 'on'=>'search'),
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
			'spare_id' => 'Spare',
			'spare_name' => 'Spare Name',
			'spare_image' => 'Spare Image',
			'spare_descr' => 'Spare Descr',
			'spare_mark' => 'Spare Mark',
			'spare_model' => 'Spare Model',
			'spare_struct' => 'Spare Struct',
			'spare_price' => 'Spare Price',
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

		$criteria->compare('spare_id',$this->spare_id);
		$criteria->compare('spare_name',$this->spare_name,true);
		$criteria->compare('spare_image',$this->spare_image,true);
		$criteria->compare('spare_descr',$this->spare_descr,true);
		$criteria->compare('spare_mark',$this->spare_mark,true);
		$criteria->compare('spare_model',$this->spare_model,true);
		$criteria->compare('spare_struct',$this->spare_struct,true);
		$criteria->compare('spare_price',$this->spare_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
function getId(){
            return 'SpareParts'.$this->spare_id;
        }

        function getPrice(){
            return $this->spare_price;
        }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SpareParts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string|null $title_small
 * @property string $content
 * @property string $img
 * @property string|null $keywords
 * @property string|null $description
 * @property string $img_bg
 * @property string $name_bg
 */
class Category extends \yii\db\ActiveRecord
{
    public $file_img;
    public $file_img_bg;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'img_bg', 'name_bg'], 'required'],
            [['content'], 'string'],
            [['title', 'title_small', 'img', 'keywords', 'description', 'img_bg', 'name_bg'], 'string', 'max' => 255],
            [['file_img', 'file_img_bg'], 'image', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название типа выключателя',
            'title_small' => 'Сокращенное название',
            'content' => 'Описание',
            'img' => 'Фото категории',
            'file_img' => 'Фото категории',
            'keywords' => 'Ключевики',
            'description' => 'Описание',
            'img_bg' => 'Фото карусели',
            'file_img_bg' => 'Фото карусели',
            'name_bg' => 'Надпись карусели',
        ];
    }

    public function upload($file)
    {
        if ($this->validate()) {
            $file->saveAs('images/' . uniqid() . '_' . $file->baseName . '.' .$file->extension, false);


            return true;
        } else {
            return false;
        }
    }

}

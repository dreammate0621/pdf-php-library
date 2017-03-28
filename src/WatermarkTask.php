<?php

namespace Ilovepdf;


/**
 * Class WatermarkTask
 *
 * @package Ilovepdf
 */
class WatermarkTask extends Task
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
     public $text;

    /**
     * @var strig
     */
    public $image;

    /**
     * @var string
     */
    public $pages;

    /**
     * @var string
     */
    public $vertical_position;
    /**
     * @var string
     */
    public $horizontal_position;

    /**
     * @var integer
     */
    public $vertical_position_adjustment;

    /**
     * @var integer
     */
    public  $horizontal_position_adjustment;

    /**
     * @var boolean
     */
    public $mosaic;

    /**
     * @var integer
     */
    public $rotation;

    /**
     * @var string
     */
    public $font_family;

    /**
     * @var string
     */
    public $font_style;

    /**
     * @var integer
     */
    public $font_size;

    /**
     * @var string
     */
    public $font_color;

    /**
     * @var integer
     */
    public $transparency;

    /**
     * @var string
     */
    public $layer;


    /**
     * WatermarkTask constructor.
     * @param null|string $publicKey
     * @param null|string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool='watermark';
        parent::__construct($publicKey, $secretKey);
    }



    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param strig $image
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param string $pages
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    /**
     * @param string $vertical_position
     */
    public function setVerticalPosition($vertical_position)
    {
        $this->vertical_position = $vertical_position;
        return $this;
    }

    /**
     * @param string $horizontal_position
     */
    public function setHorizontalPosition($horizontal_position)
    {
        $this->horizontal_position = $horizontal_position;
        return $this;
    }

    /**
     * @param int $vertical_position_adjustment
     */
    public function setVerticalPositionAdjustment($vertical_position_adjustment)
    {
        $this->vertical_position_adjustment = $vertical_position_adjustment;
        return $this;
    }

    /**
     * @param int $horizontal_position_adjustment
     */
    public function setHorizontalPositionAdjustment($horizontal_position_adjustment)
    {
        $this->horizontal_position_adjustment = $horizontal_position_adjustment;
        return $this;
    }

    /**
     * @param boolean $mosaic
     */
    public function setMosaic($mosaic)
    {
        $this->mosaic = $mosaic;
        return $this;
    }

    /**
     * @param int $rotation
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * @param string $font_family
     */
    public function setFontFamily($font_family)
    {
        $this->font_family = $font_family;
        return $this;
    }

    /**
     * @param string $font_style
     */
    public function setFontStyle($font_style)
    {
        $this->font_style = $font_style;
        return $this;
    }

    /**
     * @param int $font_size
     */
    public function setFontSize($font_size)
    {
        $this->font_size = $font_size;
        return $this;
    }

    /**
     * @param string $font_color
     */
    public function setFontColor($font_color)
    {
        $this->font_color = $font_color;
        return $this;
    }

    /**
     * @param int $transparency
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
        return $this;
    }

    /**
     * @param string $layer
     */
    public function setLayer($layer)
    {
        $this->layer = $layer;
        return $this;
    }
}

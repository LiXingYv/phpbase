<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2018/7/14
 * Time: 16:00
 */
/**
 * php.ini中需要开启gd库
 * extension=php_gd2.dll
 * mime类型，存放于apache\apache2.4.18\conf\mime.type
 * 画图步骤
 * 1.创建画布
 * 2.取颜色
 * enterprise_simple.用gd库画
 * 4.告知浏览器用什么mime访问
 * 5.输出到浏览器，或保存
 * 6.销毁资源
 * php扩展模块存放位置php\php7.0.enterprise_simple\ext
 */

/**
 * 图像处理函数
 * imagecreatetruecolor //创建一个画布
 * imagecolorallocate 为一副图像分配颜色
 * imagefill填充
 * imageline画线
 */

/**
 * 输出
 * imagepng输出（资源）可以传入两个参数，一个资源，二个路径文件名
 * imagejpeg
 * imagegif
 * imagewbmp
 */

/**
 * 形状
 * imagerectangle 矩形
 * imagefilledrectangle画一个矩形并且填充
 * imagesetpixel画像素
 * imagepolygon多边形
 * imageellipse椭圆
 * imagefilleplygon画一个多边形并且填充
 * imagefilledellipse画一个椭圆并填充
 * imagefilledare饼状图
 */

/**
 * 打开图片生成一个新的图片
 * imagecreatefromjpeg
 * imagecreatefromgif
 * imagecreatefromwbmp
 * imagecreatefrompng
 */

/**
 * 注意
 * 告知浏览器文件的类型
 * header("Content-type:image/png");
 */

/**
 * 旋转
 * imagerotate
 */

/**
 * 写字
 * imagestring水平的画一行字符串不能写中文
 * imagechar 画一个 不能中文
 * imagettftext 可以写汉字（资源，字体大小，角度，坐标x，坐标y，颜色，字体（从本地字体库），你要写的文字）
 */

/**
 * 拷贝并且合并
 * imagecopy
 * imagecopymerge（$dst,$src,152,305,0,0,266,280,100）;
 * 大图  戳  大图的开始坐标x y 小图x y 小图的宽 高 透明度
 * imagecopyresampled($dst,$src,155,310,265,179,300,300,144,127);
 * 大图  小图  大x  大y  小x  小y  缩放  你测出来的宽  高
 */

/**
 * 获取图片的信息
 * 记住
 * getimagesize（'图片资源'）；获取图片的信息
 */

/**
 * 创建图像资源相关函数
 * imagecreatetruecolor
 * imagecreatefromjpeg
 * imagecreatefromgif
 * imagecreatefromwbmp
 * imagecreatefrompng
 * imagecolorallocate
 * imagefilledrectangle
 * imagesetpixel
 * imageline
 * imagerectangle
 * imagepolygon
 *imageellipse
 * imagearc
 *
 * imagefilledrectangle
 * imagefilledpolygon
 * imagefilledpolellipse
 * imagefilledarc
 * imagerotate
 * imagestring
 * imagechar
 * imagettftext
 * imagepng($img,['path'])
 * imagejpeg
 * imagegif
 * imagedestroy
 * imagecopy
 * imagecopymerge
 * imagecopyresampled
 */
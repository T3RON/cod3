-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 08:21 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `thl_ads`
--

CREATE TABLE `thl_ads` (
  `ads_id` int(11) NOT NULL,
  `ads_title` text NOT NULL,
  `ads_img` text NOT NULL,
  `ads_expire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thl_cate`
--

CREATE TABLE `thl_cate` (
  `cate_id` int(11) NOT NULL,
  `cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thl_products`
--

CREATE TABLE `thl_products` (
  `products_id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `meta_description` text NOT NULL,
  `products_url` text NOT NULL,
  `products_code` text,
  `products_tag` text NOT NULL,
  `products_title` text,
  `products_content` text,
  `products_cond` text NOT NULL,
  `products_slide0` text,
  `products_slide1` text NOT NULL,
  `products_slide2` text NOT NULL,
  `products_slide3` text NOT NULL,
  `products_slide4` text NOT NULL,
  `products_guaranteed` text NOT NULL,
  `products_rating` text NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `sub_cate_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thl_products`
--

INSERT INTO `thl_products` (`products_id`, `site_id`, `meta_description`, `products_url`, `products_code`, `products_tag`, `products_title`, `products_content`, `products_cond`, `products_slide0`, `products_slide1`, `products_slide2`, `products_slide3`, `products_slide4`, `products_guaranteed`, `products_rating`, `cate_id`, `sub_cate_id`, `status_id`) VALUES
(126, NULL, 'خرید اینترنتی آینه مانیتور دار خودرو مدل L03 و قیمت انواع سایر لوازم خودرو متفرقه از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های سایر لوازم خودرو متفرقه با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTI5NjQ1NjU=', 'dkp-2964565', '', '                     آینه مانیتور دار خودرو مدل L03             ', '<div class="c-mask js-mask"><div class="c-mask__text c-mask__text--product-summary js-mask__text">                                 این محصول منحصر به فرد که در قالب یک آینه خودرو طراحی شده است، یک آینه با شیشه مخصوص برای شکست شدت نور خودروهای عقبی و راحتی چشم در شب می باشد و کمپانی سازنده برای راحتی کار یک مانیتور 10 اینچ لمسی را بصورت هوشمندانه ای داخل خود آینه طراحی کرده است و قابلیت این دارد که بدون نیاز به تغییر جای دوربینهای جلو و عقب , از داخل خودرو و از طریق مانیتور لمسی تصویر دوربینها را در جهت های بالا و پایین تنظیم کرد تا شما عزیزان به راحتی بتوانید تصاویر دوربین دنده عقب و جلو را در زوایای مختلف به دلخواه ملاحظه بفرمایید.  در مورد قابلیتهای دیگر این محصول باید گفت که شامل یک دوربین با لنز 6 لایه و با کیفیت فول اچ دی برای تصویر برداری از جلوی خودرو و یک دوربین با کیفیت فول اچ دی و لنز 6 لایه دید در شب برای عقب خودرو و بهمراه خطوط نشانگر فاصله اشیا از خودرو در حالت دنده عقب نیز می باشد و نیز دارای یک دستگاه DVR مرکزی که در خود آینه طراحی شده است و بطور خودکار هم زمان با استارت خودرو شروع به ضبط وقایع و تصاویر جلو و عقب خودرو بصورت مداربسته با کیفیت FULL HD می نماید و با توجه به قابلیت اتصال رم تا حجم 128 گیگابایت ضبط تصاویر را برای شما امکان پذیر می نماید.  با توجه به امکان عکس برداری با کیفیت 5 مگاپیکسل قابلیت ثبت عکسهای باکیفیت را برای شما فراهم می کند,این محصول علاوه بر سیستم پارکینگ مانیتورینگ که قابلیت ضبط هوشمند را دارد (ضبط خودکار تصاویر در صورت تشخیص حرکت نزدیک به خودرو در زمان پارک و خاموش بودن خودرو). از سیستم G-Sensor نیز پشتیبانی می نماید, تکنولوژی G-Sensor را می توان هوشمندانه ترین سیستم در طراحی این قبیل دوربین ها دانست که در صورتی که این خودرو خاموش و در حالت پارک رها شده باشد محصول در صورت احساس ضربه و یا لرزش در بدنه خودرو بصورت کاملا اتوماتیک روشن شده و شروع به ضبط صدا و تصاویر دوربینهای جلو و عقب می نماید.  این امر به شما کمک می کند تا در صورتی که خودرو خود را ترک کردید در صورتی که تصادفی با خودرو شما رخ دهد و یا شخصی اقدام به ضربه و یا کشیدن خطوط بر روی بدنه ماشین کند دستگاه با تشخیص لرزش بصورت اتوماتیک با کمک باطری یدکی که در خود محصول جاسازی شده روشن می شود و از اتفاقات رخ داده بصورت مخفیانه تصویر برداری خواهد کرد.                             </div><a data-snt-event="dkProductPageClick"                                    data-snt-params=\'{"item":"tab-show-more-less","item_option":null}\'                                    class="c-mask__handler js-mask_handler" data-updateparantmask="true"><span>ادامه مطلب</span></a></div>', '<ul data-title="ویژگی‌های کالا"><li><span>مناسب برای: </span><span>                                        تمامی خودروها                                    </span></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/121821782.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/121821783.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/121821837.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', '', '', '', '                                     ۴.۵                                     <span class="c-product__engagement-rating-num">                                         (۲)                                     </span>', NULL, NULL, NULL),
(127, NULL, 'خرید اینترنتی شومیز زنانه آیلار مدل 040006012010-138 و قیمت انواع شومیز زنانه آیلار از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های شومیز زنانه آیلار با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTMyNDU2ODI=', 'dkp-3245682', '', '                     شومیز زنانه آیلار مدل 040006012010-138             ', NULL, '<ul data-title="ویژگی‌های کالا"><li><span>جنس: </span><span>                                        پنبه،                                                                            پلی استر                                    </span></li><li><span>قد: </span><span>                                        زیر باسن                                    </span></li><li><span>یقه: </span><span>                                        برگردان                                    </span></li><li class="js-more-attrs c-product__params-more"><span>فرم: </span><span>آزاد</span></li><li class="js-more-attrs c-product__params-more"><span>طرح پارچه: </span><span>طرح دار</span></li><li class="js-more-attrs c-product__params-more"><span>مورد استفاده: </span><span>مجلسیروزمرهرسمی</span></li><li class="js-more-attrs c-product__params-more"><span>قد آستین: </span><span>بلند</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/2f747d6e5780762cf166b746c430032bbb121601_1597813367.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/417b415723a24194cf1197c412327ebe719bd643_1597813371.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/39bf3db9e181b21add2406ab3121776b0e428cd5_1597813373.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/c3311c1e254d2dfc4204c264e1cab52176761ad1_1597813375.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/f5cf014e6d32eb398e04a9b138c6aac58c1ad282_1597813378.jpg?x-oss-process=image/resize,h_1600/quality,q_80', '', '                                     ۵                                     <span class="c-product__engagement-rating-num">                                         (۱)                                     </span>', NULL, NULL, NULL),
(128, NULL, 'خرید اینترنتی شومیز زنانه فینیان مدل Kamra1 و قیمت انواع شومیز زنانه متفرقه از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های شومیز زنانه متفرقه با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTE3Njc4NTY=', 'dkp-1767856', '', '                     شومیز زنانه فینیان مدل Kamra1             ', NULL, '<ul data-title="ویژگی‌های کالا"><li><span>جنس: </span><span>                                        کرپ،                                                                            حریر                                    </span></li><li><span>قد: </span><span>                                        بالای زانو                                    </span></li><li><span>یقه: </span><span>                                        برگردان                                    </span></li><li class="js-more-attrs c-product__params-more"><span>فرم: </span><span>معمولی</span></li><li class="js-more-attrs c-product__params-more"><span>طرح پارچه: </span><span>طرح دار</span></li><li class="js-more-attrs c-product__params-more"><span>مورد استفاده: </span><span>مجلسی</span></li><li class="js-more-attrs c-product__params-more"><span>قد آستین: </span><span>بلند</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/117478181.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/117478183.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/117478190.jpg?x-oss-process=image/resize,h_1600/quality,q_80', '', '', '', '                                     ۴.۳                                     <span class="c-product__engagement-rating-num">                                         (۴)                                     </span>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thl_site`
--

CREATE TABLE `thl_site` (
  `site_id` int(11) NOT NULL,
  `site_title` text NOT NULL,
  `site_tag` text NOT NULL,
  `site_url` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thl_state`
--

CREATE TABLE `thl_state` (
  `state_id` int(11) NOT NULL,
  `state_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thl_sub_cate`
--

CREATE TABLE `thl_sub_cate` (
  `sub_cate_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_cate_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thl_ads`
--
ALTER TABLE `thl_ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `thl_cate`
--
ALTER TABLE `thl_cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `thl_products`
--
ALTER TABLE `thl_products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `thl_site`
--
ALTER TABLE `thl_site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `thl_state`
--
ALTER TABLE `thl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `thl_sub_cate`
--
ALTER TABLE `thl_sub_cate`
  ADD PRIMARY KEY (`sub_cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thl_ads`
--
ALTER TABLE `thl_ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thl_cate`
--
ALTER TABLE `thl_cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thl_products`
--
ALTER TABLE `thl_products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `thl_site`
--
ALTER TABLE `thl_site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thl_state`
--
ALTER TABLE `thl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thl_sub_cate`
--
ALTER TABLE `thl_sub_cate`
  MODIFY `sub_cate_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

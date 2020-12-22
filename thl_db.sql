-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 12:35 PM
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
  `products_params` text NOT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `sub_cate_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thl_products`
--

INSERT INTO `thl_products` (`products_id`, `site_id`, `meta_description`, `products_url`, `products_code`, `products_tag`, `products_title`, `products_content`, `products_cond`, `products_slide0`, `products_slide1`, `products_slide2`, `products_slide3`, `products_slide4`, `products_guaranteed`, `products_rating`, `products_params`, `cate_id`, `sub_cate_id`, `status_id`) VALUES
(126, NULL, 'خرید اینترنتی آینه مانیتور دار خودرو مدل L03 و قیمت انواع سایر لوازم خودرو متفرقه از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های سایر لوازم خودرو متفرقه با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTI5NjQ1NjU=', 'dkp-2964565', '', '                     آینه مانیتور دار خودرو مدل L03             ', '<div class="c-mask js-mask"><div class="c-mask__text c-mask__text--product-summary js-mask__text">                                 این محصول منحصر به فرد که در قالب یک آینه خودرو طراحی شده است، یک آینه با شیشه مخصوص برای شکست شدت نور خودروهای عقبی و راحتی چشم در شب می باشد و کمپانی سازنده برای راحتی کار یک مانیتور 10 اینچ لمسی را بصورت هوشمندانه ای داخل خود آینه طراحی کرده است و قابلیت این دارد که بدون نیاز به تغییر جای دوربینهای جلو و عقب , از داخل خودرو و از طریق مانیتور لمسی تصویر دوربینها را در جهت های بالا و پایین تنظیم کرد تا شما عزیزان به راحتی بتوانید تصاویر دوربین دنده عقب و جلو را در زوایای مختلف به دلخواه ملاحظه بفرمایید.  در مورد قابلیتهای دیگر این محصول باید گفت که شامل یک دوربین با لنز 6 لایه و با کیفیت فول اچ دی برای تصویر برداری از جلوی خودرو و یک دوربین با کیفیت فول اچ دی و لنز 6 لایه دید در شب برای عقب خودرو و بهمراه خطوط نشانگر فاصله اشیا از خودرو در حالت دنده عقب نیز می باشد و نیز دارای یک دستگاه DVR مرکزی که در خود آینه طراحی شده است و بطور خودکار هم زمان با استارت خودرو شروع به ضبط وقایع و تصاویر جلو و عقب خودرو بصورت مداربسته با کیفیت FULL HD می نماید و با توجه به قابلیت اتصال رم تا حجم 128 گیگابایت ضبط تصاویر را برای شما امکان پذیر می نماید.  با توجه به امکان عکس برداری با کیفیت 5 مگاپیکسل قابلیت ثبت عکسهای باکیفیت را برای شما فراهم می کند,این محصول علاوه بر سیستم پارکینگ مانیتورینگ که قابلیت ضبط هوشمند را دارد (ضبط خودکار تصاویر در صورت تشخیص حرکت نزدیک به خودرو در زمان پارک و خاموش بودن خودرو). از سیستم G-Sensor نیز پشتیبانی می نماید, تکنولوژی G-Sensor را می توان هوشمندانه ترین سیستم در طراحی این قبیل دوربین ها دانست که در صورتی که این خودرو خاموش و در حالت پارک رها شده باشد محصول در صورت احساس ضربه و یا لرزش در بدنه خودرو بصورت کاملا اتوماتیک روشن شده و شروع به ضبط صدا و تصاویر دوربینهای جلو و عقب می نماید.  این امر به شما کمک می کند تا در صورتی که خودرو خود را ترک کردید در صورتی که تصادفی با خودرو شما رخ دهد و یا شخصی اقدام به ضربه و یا کشیدن خطوط بر روی بدنه ماشین کند دستگاه با تشخیص لرزش بصورت اتوماتیک با کمک باطری یدکی که در خود محصول جاسازی شده روشن می شود و از اتفاقات رخ داده بصورت مخفیانه تصویر برداری خواهد کرد.                             </div><a data-snt-event="dkProductPageClick"                                    data-snt-params=\'{"item":"tab-show-more-less","item_option":null}\'                                    class="c-mask__handler js-mask_handler" data-updateparantmask="true"><span>ادامه مطلب</span></a></div>', '<ul data-title="ویژگی‌های کالا"><li><span>مناسب برای: </span><span>                                        تمامی خودروها                                    </span></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/121821782.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/121821783.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/121821837.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', '', '', '', '                                     ۴.۵                                     <span class="c-product__engagement-rating-num">                                         (۲)                                     </span>', '', NULL, NULL, NULL),
(127, NULL, 'خرید اینترنتی شومیز زنانه آیلار مدل 040006012010-138 و قیمت انواع شومیز زنانه آیلار از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های شومیز زنانه آیلار با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTMyNDU2ODI=', 'dkp-3245682', '', '                     شومیز زنانه آیلار مدل 040006012010-138             ', NULL, '<ul data-title="ویژگی‌های کالا"><li><span>جنس: </span><span>                                        پنبه،                                                                            پلی استر                                    </span></li><li><span>قد: </span><span>                                        زیر باسن                                    </span></li><li><span>یقه: </span><span>                                        برگردان                                    </span></li><li class="js-more-attrs c-product__params-more"><span>فرم: </span><span>آزاد</span></li><li class="js-more-attrs c-product__params-more"><span>طرح پارچه: </span><span>طرح دار</span></li><li class="js-more-attrs c-product__params-more"><span>مورد استفاده: </span><span>مجلسیروزمرهرسمی</span></li><li class="js-more-attrs c-product__params-more"><span>قد آستین: </span><span>بلند</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/2f747d6e5780762cf166b746c430032bbb121601_1597813367.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/417b415723a24194cf1197c412327ebe719bd643_1597813371.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/39bf3db9e181b21add2406ab3121776b0e428cd5_1597813373.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/c3311c1e254d2dfc4204c264e1cab52176761ad1_1597813375.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/f5cf014e6d32eb398e04a9b138c6aac58c1ad282_1597813378.jpg?x-oss-process=image/resize,h_1600/quality,q_80', '', '                                     ۵                                     <span class="c-product__engagement-rating-num">                                         (۱)                                     </span>', '', NULL, NULL, NULL),
(128, NULL, 'خرید اینترنتی شومیز زنانه فینیان مدل Kamra1 و قیمت انواع شومیز زنانه متفرقه از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های شومیز زنانه متفرقه با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTE3Njc4NTY=', 'dkp-1767856', '', '                     شومیز زنانه فینیان مدل Kamra1             ', NULL, '<ul data-title="ویژگی‌های کالا"><li><span>جنس: </span><span>                                        کرپ،                                                                            حریر                                    </span></li><li><span>قد: </span><span>                                        بالای زانو                                    </span></li><li><span>یقه: </span><span>                                        برگردان                                    </span></li><li class="js-more-attrs c-product__params-more"><span>فرم: </span><span>معمولی</span></li><li class="js-more-attrs c-product__params-more"><span>طرح پارچه: </span><span>طرح دار</span></li><li class="js-more-attrs c-product__params-more"><span>مورد استفاده: </span><span>مجلسی</span></li><li class="js-more-attrs c-product__params-more"><span>قد آستین: </span><span>بلند</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/117478181.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/117478183.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/117478190.jpg?x-oss-process=image/resize,h_1600/quality,q_80', '', '', '', '                                     ۴.۳                                     <span class="c-product__engagement-rating-num">                                         (۴)                                     </span>', '', NULL, NULL, NULL),
(129, NULL, 'خرید اینترنتی هدفون بلوتوثی مانستر مدل iCON ANC و قیمت انواع هدفون، هدست و هندزفری مانستر از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های هدفون، هدست و هندزفری مانستر با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTM3NTIyNDA=', 'dkp-3752240', '', '                     هدفون بلوتوثی مانستر مدل iCON ANC             ', '<div class="c-mask js-mask"><div class="c-mask__text c-mask__text--product-summary js-mask__text">                                 شرکت «مانستر» به‌تازگی محصولی را تحت عنوان «هدفون بلوتوثی مانستر مدل iCON ANC روانه بازار کرده که درواقع یک هدفون بی‌سیم و باسیم است که از طریق فناوری بلوتوث به تلفن‌همراه یا پخش‌کننده صوتی متصل می‌شود. اگر تلفن‌همراه یا پخش‌کننده صوتی شما از بلوتوث پشتیبانی نمی‌کند، جای هیچ‌گونه نگرانی نیست. مهندسان هدفون بلوتوثی مانستر مدل iCON ANC را به درگاه 3.5 میلی‌متری صدا تجهیز کرده‌اند تا به کمک آن بتوان اقدام به اتصال باسیم کرد. جنس پوشش روی کاپ صدای این محصول از چرم مصنوعی است که باعث می‌شود هنگام استفاده بلندمدت از آن احساس خستگی به کاربر منتقل نشود. قسمت هدبند iCON ANC قابلیت تغییر ارتفاع را دارد که این ویژگی باعث می‌شود این هدفون گزینه مناسبی برای همه افراد باشد. گوشی‌ها هم قابلیت چرخش دارند و می‌توانند به صورت مسطح روی گردن قرار بگیرند. این هدفون دارای قابلیت‌های حذف نویز در زمان گوش دادن و صحبت کردن است که می‌تواند ارزش داشتن آن را بسیار بالاتر برود.                             </div><a data-snt-event="dkProductPageClick"                                    data-snt-params=\'{"item":"tab-show-more-less","item_option":null}\'                                    class="c-mask__handler js-mask_handler" data-updateparantmask="true"><span>ادامه مطلب</span></a></div>', '<ul data-title="ویژگی‌های کالا"><li><span>نوع اتصال: </span><span>                                        بی‌سیم                                    </span></li><li><span>نوع گوشی: </span><span>                                        دو گوشی                                    </span></li><li><span>مناسب برای: </span><span>                                        مکالمه،                                                                            گیمینگ،                                                                            ورزش،                                                                            کاربری عمومی                                    </span></li><li class="js-more-attrs c-product__params-more"><span>رابط: </span><span>جک 3.5 میلی‌متریبلوتوث</span></li><li class="js-more-attrs c-product__params-more"><span>باتری: </span><span>دارد</span></li><li class="js-more-attrs c-product__params-more"><span>ویژگی‌های خاص: </span><span>میکروفوننگهدارنده گردنیNoise Cancelling MicrophoneNoise Cancelling Headphone</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/168d53da1ae708f421cacf14c70ab8b2ec3e7f5b_1605336925.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/201fed607dcb61a7cc4ee47dece35823fdb817ce_1605336926.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/3a9df13adedb39bfd96c7575c50f753b93ad7214_1605336932.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/0f3b39e04d740e20bdcb57e1cc435a5686e26f11_1605336935.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', 'https://dkstatics-public.digikala.com/digikala-products/d7af29c45b7ec3dfd5c6ad94c4338ab227101fbf_1605336938.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15', '', '', '', NULL, NULL, NULL),
(130, NULL, 'خرید اینترنتی هدفون بلوتوثی زیلوت مدل B570 و قیمت انواع هدفون، هدست و هندزفری زیلوت از فروشگاه آنلاین دیجی‌کالا. جدیدترین مدل‌های هدفون، هدست و هندزفری زیلوت با بهترین قیمت در دیجی‌کالا', 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTMxOTgzMg==', 'dkp-319832', '', '                     هدفون بلوتوثی زیلوت مدل B570             ', '<div class="c-mask js-mask"><div class="c-mask__text c-mask__text--product-summary js-mask__text">                                 هدفون زیلوت مدل «B570» محصولی خوش‌ساخت از این برند است که با کیفیت‌ صدایی بسیار شفاف و واضح تولید شده است. این محصول از طریق فناوری بلوتوث به تلفن‌همراه یا پخش‌کننده صوتی شما متصل می‌شود و به کمک آن می‌توان بدون ایجاد مزاحمت برای دیگران به موسیقی مورد علاقه خود گوش داد. اگر تلفن‌همراه یا پخش‌کننده صوتی شما از فناوری بلوتوث پشتیبانی نمی‌کند، جای هیچگونه نگرانی نیست. هدفون B570 از طریق جک 3.5 میلی‌متری هم می‌تواند به تلفن‌همراه یا پخش‌کننده صوتی شما متصل می‌شود. پوشش روی گوشی این محصول بسیار نرم است که باعث می‌شود هنگام استفاده بلندمدت از آن احساس خستگی به کاربر دست ندهد. گوشی های این هدفون به گونه ای طراحی شده است که گوشها به راحتی در درون آن قرار گیرند، در هنگام استفاده طولانی مدت از این هدفون دیگری خبری از گوش درد ناشی از فشار گوشی ها نیست. هدفون B570 از محدوده عملکردی تا 10 متر بهره می‌برد B570 انرژی خود را از یک باتری داخلی لیتیوم یونی تامین می‌کند. بر روی این محصول کلیدهای کنترل موسیقی به چشم می‌خورد که به کمک آن می‌توان به کم یا زیاد کردن میزان صدای هدفون و یا تعویض موزیک اقدام کرد. هدفون B570 از یک میکروفن برای برقراری تماس‌های تلفنی هنگام اتصال به تلفن همراه بهره می‌برد.                             </div><a data-snt-event="dkProductPageClick"                                    data-snt-params=\'{"item":"tab-show-more-less","item_option":null}\'                                    class="c-mask__handler js-mask_handler" data-updateparantmask="true"><span>ادامه مطلب</span></a></div>', '<ul data-title="ویژگی‌های کالا"><li><span>نوع اتصال: </span><span>                                        بی‌سیم و باسیم                                    </span></li><li><span>نوع گوشی: </span><span>                                        دو گوشی                                    </span></li><li><span>مناسب برای: </span><span>                                        کاربری عمومی                                    </span></li><li class="js-more-attrs c-product__params-more"><span>رابط: </span><span>جک 3.5 میلی‌متریبلوتوث</span></li><li class="js-more-attrs c-product__params-more"><span>باتری: </span><span>دارد</span></li><li class="c-product__params-more-handler" data-sign="+"><button data-snt-event="dkProductPageClick"                                                             data-snt-params=\'{"item":"more-attributes","item_option":null}\'                                                             class="btn-link-spoiler js-more-attr-button">موارد بیشتر                                                     </button></li></ul><div class="c-product__additional-info"></div>', 'https://dkstatics-public.digikala.com/digikala-products/803340.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/803411.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/803461.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/803514.jpg?x-oss-process=image/resize,h_1600/quality,q_80', 'https://dkstatics-public.digikala.com/digikala-products/803581.jpg?x-oss-process=image/resize,h_1600/quality,q_80', '<span>                 بیش از ۴۶۰ نفر از خریداران این محصول را پیشنهاد داده‌اند             </span>', '                                     ۴.۱                                     <span class="c-product__engagement-rating-num">                                         (۴۸۷)                                     </span>', '<article><h2 class="c-params__headline">                 مشخصات فنی                <span>Zealot B570 Bluetooth Headphone</span></h2><section><h3 class="c-params__title">مشخصات کلی</h3><ul class="c-params__list"><li><div class="c-params__list-key"><span class="block">ابعاد</span></div><div class="c-params__list-value"><span class="block">                                             70×70×170 میلی‌متر                                         </span></div></li><li><div class="c-params__list-key"><span class="block">وزن</span></div><div class="c-params__list-value"><span class="block">                                             300 گرم                                         </span></div></li></ul></section><section><h3 class="c-params__title">مشخصات فنی</h3><ul class="c-params__list"><li><div class="c-params__list-key"><span class="block">نوع اتصال</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              بی‌سیم و باسیم                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع گوشی</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دو گوشی                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">مناسب برای</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              کاربری عمومی                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">رابط</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              جک 3.5 میلی‌متری                                              ,                                                                                                                                                                                                                                                                                                                                                                                                  بلوتوث                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">جنس بدنه</span></div><div class="c-params__list-value"><span class="block">                                             پلاستیک و فلز                                          </span></div></li><li><div class="c-params__list-key"><span class="block">جنس رابط</span></div><div class="c-params__list-value"><span class="block">                                             سیم                                          </span></div></li><li><div class="c-params__list-key"><span class="block">طول کابل</span></div><div class="c-params__list-value"><span class="block">                                             1 متر                                         </span></div></li><li><div class="c-params__list-key"><span class="js-dk-wiki-trigger c-wiki c-wiki__holder block"><a href="#"                                                    class="btn-link-spoiler js-wiki-link c-params__title--remove-underline"                                                    target="_blank">پاسخ فرکانسی</a><div class="c-wiki__container js-dk-wiki"><div class="c-wiki__arrow"></div><p class="c-wiki__text">             پاسخ فرکانسی یک سیستم عبارت است از طیف فرکانسی خروجی سیستم به طیف فرکانسی ورودی.<br />  پاسخ فرکانسی اندازه طیف خروجی یک سیستم یا یک وسیله در پاسخ به یک محرک است و جهت مشخص نمودن ویژگی‌های دینامیکی سیستم به کار می‌رود. فرکانس پاسخگویی مقدار اندازه و فاز خروجی یک تابع فرکانسی است در مقایسه با ورودی یا همان محرکی که به آن (سیستم یا تجهیز) داده می‌شود.         </p></div></span></div><div class="c-params__list-value"><span class="block">                                             20Hz-20kHz هرتز                                         </span></div></li><li><div class="c-params__list-key"><span class="block">مقاومت در برابر آب</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              خیر                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">مقاومت در برابر رطوبت و عرق</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              بله                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">منبع تغذیه هدفون</span></div><div class="c-params__list-value"><span class="block">                                             باطری                                          </span></div></li><li><div class="c-params__list-key"><span class="block">باتری</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع باتری</span></div><div class="c-params__list-value"><span class="block">                                             موبایلی و قابل تعویض                                          </span></div></li><li><div class="c-params__list-key"><span class="block">عمر باتری</span></div><div class="c-params__list-value"><span class="block">                                             در حالت استفاده 10 ساعت در حالت استراحت 2 هفته                                          </span></div></li><li><div class="c-params__list-key"><span class="block">نشانگر LED</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">اقلام همراه هدفون</span></div><div class="c-params__list-value"><span class="block">                                             - کابل شارژ                                          </span></div></li><li><div class="c-params__list-key"><span class="block">سایر مشخصات</span></div><div class="c-params__list-value"><span class="block">                                             - تل نشکن و قابل تنظیم                                            </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     - قابلیت پاسخگویی تماس                                                   </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     - قابلیت اتصال کابل صدا                                                 </span></div></li></ul></section></article>', NULL, NULL, NULL);

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
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
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

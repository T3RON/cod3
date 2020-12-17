-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 11:15 AM
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
  `products_url` text NOT NULL,
  `products_code` text,
  `products_tag` text NOT NULL,
  `products_title` text,
  `products_content` text,
  `products_img` text,
  `cate_id` int(11) DEFAULT NULL,
  `sub_cate_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thl_products`
--

INSERT INTO `thl_products` (`products_id`, `site_id`, `products_url`, `products_code`, `products_tag`, `products_title`, `products_content`, `products_img`, `cate_id`, `sub_cate_id`, `status_id`) VALUES
(84, NULL, 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTMzMDcyOTk=', 'dkp-3307299', '', '                     دزدگیر خودرو استیل میت مدل Ranger-4328 single             ', '<li><div class="c-params__list-key"><span class="block">ابعاد</span></div><div class="c-params__list-value"><span class="block">                                             130x70x30 میلی متر                                         </span></div></li><li><div class="c-params__list-key"><span class="block">وزن</span></div><div class="c-params__list-value"><span class="block">                                             125 گرم                                         </span></div></li><li><div class="c-params__list-key"><span class="block">شیشه بالابر اتوماتیک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">قابلیت اتصال به گوشی موبایل هوشمند</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ندارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">تعداد ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              یک عدد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">قابلیت استارت زدن خودرو</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ندارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">قابلیت ورود بدون کلید</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ساده                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع حسگر</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ضربه ای                                              ,                                                                                                                                                                                                                                                                                                                                                                                                  سوئیچ                                              ,                                                                                                                                                                                                                                                                                                                                                                                                  آلتراسونیک                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع باتری</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              لیتیومی (قابل شارژ)                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">میزان برد</span></div><div class="c-params__list-value"><span class="block">                                             2000 متر                                         </span></div></li><li><div class="c-params__list-key"><span class="block">قفل مرکزی</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">صندوق پران</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">قفل کودک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نصب رایگان در نمایندگی</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ندارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">ابعاد بسته بندی</span></div><div class="c-params__list-value"><span class="block">                                             140x230x280 میلی متر                                         </span></div></li><li><div class="c-params__list-key"><span class="block">وزن بسته بندی</span></div><div class="c-params__list-value"><span class="block">                                             1000 گرم                                         </span></div></li><li><div class="c-params__list-key"><span class="block">اقلام همراه</span></div><div class="c-params__list-value"><span class="block">                                             یک عدد ریموت تصویری و یک عدد ریموت ساده - کیت اصلی - دسته سیم کشی - آنتن - نشانگر LED - رله قطع برق - شارژر فندکی - آژیر - سیم بندی - راهنمای نصب                                          </span></div></li><li><div class="c-params__list-key"><span class="block">سایر توضیحات</span></div><div class="c-params__list-value"><span class="block">                                             دارای یک عدد ریموت اصلی تصویری پنج دکمه با صفحه نمایشگر رنگی و بسیار با کیفیت و یک عدد ریموت یدک ساده                                           </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     نشان دادن مقدار ولتاژ باتری خودرو بر روی ریموت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     مجهز به سیستم ضدسرقت Anti-hijack                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     ریموت تصویری دارای باتری داخلی و قابلیت شارژ                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای شارژر فندكی جهت شارژ ريموتها                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای نشانگر ميزان باطری ريموت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای دكمه صندوق پران بر روی ريموت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای نشانگر ميزان سيگنال آنتن ريموت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای ريموت مجهز به ساعت و زنگ اخطار                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای اخطار باز بودن و یا باز شدن درب خودرو بر روی ریموت به صورت ویبره صدا و عوض شدن رنگ صفحه ی نمایشگر (متفاوت با اخطار های دیگر )                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای اخطار باز بودن و یا باز شدن درب صندوق بر روی ریموت به صورت ویبره صدا و عوض شدن رنگ صفحه ی نمایشگر (متفاوت با اخطار های دیگر )                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای اخطار ضربه به خودرو بر روی ریموت به صورت ویبره صدا و عوض شدن رنگ صفحه ی نمایشگر (متفاوت با اخطار های دیگر )                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای تنظیمات آژیر: می توان برای اخطاری آژیر جدید تنظیم کرد یا آژیر اخطاری را لغو و یا به کلی حذف کرد                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای LED هشدار دهنده دزدگیر ( نصب در داخل اتومبیل )                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     قفل شدن اتوماتيك دربها در هنگام حركت با اولين ترمز                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     نشان دادن وضعیت خودرو از طریق ریموت دزدگیر ( باتری ماشین، درب ها و ... )                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     خاموش کردن خودرو از راه دور                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     هشدار روشن شدن موتور                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     قابلیت ماشین یابی                                                 </span></div></li>', 'https://dkstatics-public.digikala.com/digikala-products/02ca408be1ed3e216ccb96d3d627959f856323bd_1598521608.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80', NULL, NULL, NULL),
(85, NULL, 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/aHR0cHM6Ly93d3cuZGlnaWthbGEuY29tL3Byb2R1Y3QvZGtwLTg5NTUxNA==', 'dkp-895514', '', '                     دزدگیر خودرو زنوتیک مدل پی ال سی کد ریموت PLC Car Alarm Xenotic FM-A8             ', '<li><div class="c-params__list-key"><span class="block">ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">تعداد ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              یک عدد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع ریموت یدک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              تصویری                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع حسگر</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ضربه ای                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نوع باتری</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              نیم قلمی                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">میزان برد</span></div><div class="c-params__list-value"><span class="block">                                             1500 متر                                         </span></div></li><li><div class="c-params__list-key"><span class="block">قفل مرکزی</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">صندوق پران</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">قفل کودک</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              دارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">نصب رایگان در نمایندگی</span></div><div class="c-params__list-value"><span class="block">                                                                                                                              ندارد                                                                                                                                                                            </span></div></li><li><div class="c-params__list-key"><span class="block">اقلام همراه</span></div><div class="c-params__list-value"><span class="block">                                             ریموت یدکی                                           </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     برد اصلی                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     شوک سنسور                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دسته سیم کشی                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     آنتن                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دو عدد باتری نیم قلمی                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     ال ای دی چشمک زن                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     شاسی ریست                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     شاسی کاپوت فلزی                                                 </span></div></li><li><div class="c-params__list-key"><span class="block">سایر توضیحات</span></div><div class="c-params__list-value"><span class="block">                                             برد ریموت ۱۵۰۰ متر                                           </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     دارای ویبره                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     هر دو ریموت تصویری                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     تایمر و ساعت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     نمایشگر میزان باطری                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     خروجی شیشه بالابر                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     ریموت ضد اسکن                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     وضعیت تعمیرگاه                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     خروجی باز کننده صندوق عقب                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     آنتن جداگانه برای افزایش برد ریموت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     خاموش نمودن اتومبیل هنگام سرقت                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     یافتن ماشین در پارکینگ و مکان های شلوغ                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     فعال و قفل شدن درب ها به صورت اتوماتیک                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     تحریک های جداگانه برای کاپوت و صندوق عقب                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     خروجی اولتراسونیک سنسور و حفاظت الکترونیک سیستم                                                  </span></div></li><li><div class="c-params__list-key"></div><div class="c-params__list-value"><span class="block">                                                     فرمان قفل شدن درب ها بعد از روشن شدن خودرو جهت ایمنی کودکان                                                 </span></div></li>', 'https://dkstatics-public.digikala.com/digikala-products/4976605.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80', NULL, NULL, NULL);

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
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
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

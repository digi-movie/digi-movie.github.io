<!DOCTYPE html>
<html lang="fa">
    <?php
    $site_url = $_SERVER["HTTP_HOST"];
    ?>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.png" type="image/ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>اپلیکیشن دیجی موویز</title>
        <meta name="description" content="دانلود و تماشای آنلاین هزاران فیلم، سریال و انیمیشن با زیرنویس فارسی چسبیده در دسته‌بندی‌های مختلف"/>
        <meta name="robots" content="index">
        <meta property="og:locale" content="fa" />
        <meta property="og:title" content="اپلیکیشن اندرویدی دیجی موویز" />
        <meta property="og:description" content="دانلود و تماشای آنلاین هزاران فیلم، سریال و انیمیشن با زیرنویس فارسی چسبیده در دسته‌بندی‌های مختلف" />
        <meta property="og:url" content="https://<?php echo $site_url ?>/app-landing" />
        <meta property="og:site_name" content="اپلیکیشن دیجی موویز" />
        <meta property="og:image" content="https://<?php echo $site_url ?>/app-landing/images/digimoviez-logo.png" />
        <meta property="og:image:secure_url" content="https://<?php echo $site_url ?>/app-landing/images/digimoviez-logo.png" />
        <meta property="og:image:alt" content="اپلیکیشن دیجی موویز" />
        <meta property="og:type" content="website" />
        <link rel="stylesheet" href="styles.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </head>

    <body>
        <header>
            <div class="container">
                <img src="images/appbar-logo.svg" alt="Logo" class="logo">

                <h1>بدون وقفه و مرز تماشا کنید!</h1>
                <p>
                    با استفاده از اپلیکیشن‌های ما، دیجی‌موویز را با همه‌ی فیلم‌ها و سریال‌هایش در دسترس داشته باشید.
                </p>
                <div class="actions">
                    <a href="https://<?php echo $site_url . '/dashboard/' ?>" target="_tab" class="btn secondary">ثبت‌ نام</a>
                    <a href="https://<?php echo $site_url . '/dashboard/subscription/' ?>" target="_tab" class="btn primary">خرید اشتراک</a>
                </div>
            </div>
        </header>

        <div class="separator-container">
            <img src="images/down-circular-button1.png" alt="Separator" class="separator">
        </div>

        <section id="features">


            <div class="feature">
                <img src="images/03.png" alt="Mobile Feature">
                <div class="feature-text">
                    <h2>تو جیب بزار!</h2>
                    <p>بیش از ۳۰ هزار قسمت سریال</p>
                    <a download href="https://<?php echo $site_url . '/app/digimoviez_android_app_v1_1_0.apk' ?>">
                        <button class="btn btn-labeled btn-danger">

                            <span class="btn-text"> دریافت اپلیکیشن اندروید
                            </span>
                            <span class="btn-label">
                                <i class="fab fa-android"></i>
                                </i>
                            </span>

                        </button>
                    </a>
                </div>


            </div>

            <div class="feature">

                <img src="images/06.png" alt="TV Feature">
                <div class="feature-text">
                    <h2>روی دیوار خونه ببین!</h2>
                    <p>تماشای آنلاین بیش از ۹ هزار فیلم و ۳۰ هزار اپیزود سریال</p>
					<a download href="#">
                    <button class="btn btn-labeled btn-danger">
                        <span class="btn-text">دانلود اپلیکیشن اندروید تی وی - به زودی</span>
                        <span class="btn-label">
                            <i class="fas fa-tv" aria-hidden="true">
                            </i>
                        </span>
						</button>
					</a>	
                </div>
                
            </div>


            <div class="feature">
                <img src="images/02.png" alt="Laptop Feature">
                <div class="feature-text">
                    <h2>تو کیفت داشته باش!</h2>
                    <p>پشتیبانی از بیش از ۵۰ هزار فیلم و سریال</p>
                    <button class="btn btn-labeled btn-danger">
                        <span class="btn-text"> دریافت نرم‌افزار مک - به زودی
                        </span>
                        <span class="btn-label">
                            <i class="fas fa-apple-alt" aria-hidden="true">
                            </i>
                        </span>

                    </button>
                </div>
            </div>

            <div class="feature">
                <img src="images/01.png" alt="Tablet Feature">
                <div class="feature-text">
                    <h2>تو ویندوزت فیلم ببین!</h2>
                    <p>بیش از ۵۰۰۰ هزار قسمت سریال</p>
                    <button class="btn btn-labeled btn-danger">
                        <span class="btn-text"> دریافت اپلیکیشن ویندوز - به زودی
                        </span>
                        <span class="btn-label">
                            <i class="fab fa-windows"></i>
                            </i>
                        </span>

                    </button>
                </div>
                

            </div>
        </section>

        <footer>
            <div class="footer-container">
                <div class="social-icons">
                    <a href="https://x.com/digimoviez" target="_blank">
                        <span>
                            <i class="fa fa-brands fa-twitter"></i>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/digimoviez/" target="_blank">
                        <span>
                            <i class=" fa fa-brands fa-instagram">
                            </i>
                        </span>
                    </a>
                    <a href="https://t.me/digimoviezi" target="_blank">
                        <span>
                            <i class="fa fa-brands fa-telegram"></i>
                        </span>
                    </a>
                </div>
                <img src="images/appbar-logo.svg" alt="Digimovie Logo" class="logo">
                <p>تمام حقوق این وب‌سایت متعلق به دیجی مووی می‌باشد.</p>

            </div>
        </footer>
    </body>

</html>
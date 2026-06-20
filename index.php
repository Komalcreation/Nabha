<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
include 'includes/header.php';
?>
<section class="hero">
    <div class="container hero-content">
        <div class="hero-text">
            <h2><?php echo t('Learn Fashion Designing, Stitching & Embroidery', 'ਫੈਸ਼ਨ ਡਿਜ਼ਾਈਨਿੰਗ, ਸਿਲਾਈ ਅਤੇ ਕੜਾਹੀ ਸਿੱਖੋ'); ?></h2>
            <p><?php echo t(
                'Join Komal Creations & Training Center to learn professional stitching, pattern making, cutting, designer dresses, hand embroidery, and painting.',
                'ਕੋਮਲ ਕ੍ਰੀਏਸ਼ਨਜ਼ ਐਂਡ ਟ੍ਰੇਨਿੰਗ ਸੈਂਟਰ ਨਾਲ ਜੁੜੋ ਅਤੇ ਪ੍ਰੋਫੈਸ਼ਨਲ ਸਿਲਾਈ, ਪੈਟਰਨ ਮੇਕਿੰਗ, ਕਟਿੰਗ, ਡਿਜ਼ਾਈਨਰ ਡਰੈੱਸਸ, ਹੱਥ ਕੜਾਹੀ ਅਤੇ ਪੇਂਟਿੰਗ ਸਿੱਖੋ।'
            ); ?></p>
            <a href="courses.php" class="btn"><?php echo t('View Courses', 'ਕੋਰਸ ਵੇਖੋ'); ?></a>
        </div>
        <div class="hero-image">
            <img src="uploads/hero.jpg" alt="Hero Image">
        </div>
    </div>
</section>

<section class="services container">
    <h2><?php echo t('Our Services', 'ਸਾਡੀਆਂ ਸੇਵਾਵਾਂ'); ?></h2>
    <div class="service-list">
        <div class="card">
            <h3><?php echo t('Pattern Making & Cutting', 'ਪੈਟਰਨ ਮੇਕਿੰਗ ਅਤੇ ਕਟਿੰਗ'); ?></h3>
            <p><?php echo t(
                'Learn pattern making and cutting for ladies suits, palazzo, top, gown and lehenga.',
                'ਲੇਡੀਜ਼ ਸੂਟ, ਪਲਾਜ਼ੋ, ਟੌਪ, ਗਾਊਨ ਅਤੇ ਲਹਿੰਗਾ ਲਈ ਪੈਟਰਨ ਮੇਕਿੰਗ ਅਤੇ ਕਟਿੰਗ ਸਿੱਖੋ।'
            ); ?></p>
        </div>
        <div class="card">
            <h3><?php echo t('Hand Embroidery', 'ਹੱਥ ਕੜਾਹੀ'); ?></h3>
            <p><?php echo t(
                'Creative embroidery work and fabric painting classes.',
                'ਕ੍ਰੀਏਟਿਵ ਕੜਾਹੀ ਕੰਮ ਅਤੇ ਕਪੜੇ ਉੱਤੇ ਪੇਂਟਿੰਗ ਦੀਆਂ ਕਲਾਸਾਂ।'
            ); ?></p>
        </div>
        <div class="card">
            <h3><?php echo t('Designer Dresses', 'ਡਿਜ਼ਾਈਨਰ ਡਰੈੱਸਸ'); ?></h3>
            <p><?php echo t(
                'Special training for designer tops, shirts, gowns and all dresses.',
                'ਡਿਜ਼ਾਈਨਰ ਟੌਪ, ਸ਼ਰਟ, ਗਾਊਨ ਅਤੇ ਹੋਰ ਡਰੈੱਸਸ ਲਈ ਖ਼ਾਸ ਟ੍ਰੇਨਿੰਗ।'
            ); ?></p>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <h2><?php echo t('Why Choose Us?', 'ਸਾਨੂੰ ਕਿਉਂ ਚੁਣੋ?'); ?></h2>
        <ul>
            <li><?php echo t('Professional practical training', 'ਪ੍ਰੋਫੈਸ਼ਨਲ ਪ੍ਰੈਕਟੀਕਲ ਟ੍ਰੇਨਿੰਗ'); ?></li>
            <li><?php echo t('Affordable monthly fees', 'ਵਾਜਬ ਮਹੀਨਾਵਾਰ ਫੀਸ'); ?></li>
            <li><?php echo t('Bilingual guidance in English and Punjabi', 'ਅੰਗਰੇਜ਼ੀ ਅਤੇ ਪੰਜਾਬੀ ਦੋਵਾਂ ਵਿੱਚ ਸਹਾਇਤਾ'); ?></li>
            <li><?php echo t('Student enrollment and certificate system', 'ਵਿਦਿਆਰਥੀ ਐਨਰੋਲਮੈਂਟ ਅਤੇ ਸਰਟੀਫਿਕੇਟ ਸਿਸਟਮ'); ?></li>
        </ul>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
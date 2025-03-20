

<?php $__env->startSection("head"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/about_us.css')); ?>">
    <script src="<?php echo e(asset('js/about_us.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("page_content"); ?>
    <div class="banner">
        <img src="<?php echo e(asset('slike/argo_tim.png')); ?>" alt="Argo tim">
    </div>
    <div class="naslov">
        <p class="natpis title3">
            We are a student organization that specializes in robotics, solving complex challenges,
            supporting undergraduate research, and most important of all having fun.
        </p>
        <div class="statistics-container">
            <div class="statistic-block">
                <hr class="solid"><p class="broj title3">24</p> 
                <p class="subheadline">Members</p>
            </div>
            <div class="statistic-block">
                <hr class="solid"><p class="broj title3">4</p>
                <p class="subheadline">Faculties</p>
            </div>
            <div class="statistic-block">
                <hr class="solid"><p class="broj title3">4</p>
                <p class="subheadline">Projects</p>
            </div>
        </div>
    </div>
    <div class="values">
        <h1 class="values_naslov title2Bold">Our Values</h1>

        <div class="values_sekcija">
            <div class="values_podsekcija">
                <h2 class="values_podsekcija_naslov bodyBold">Perform with excellence</h2>
                <p class="footnote">We understand the trust our partners put into us by supporting our projects. With this in mind, we strive to excel in every aspect of our work while promoting a high standard commitment to success. It is not only the highest accomplishments as individuals but also seek to inspire our team members achieve at their highest levels.</p>
            </div>
            <div class="values_podsekcija">
                <img src="<?php echo e(asset('slike/about_us_slika1.jpg')); ?>" alt="Argo tim">
            </div>
        </div>

        <div class="values_sekcija">
            <div class="values_podsekcija">
                <img src="<?php echo e(asset('slike/about_us_slika2.jpg')); ?>" alt="Argo tim">
            </div>
            <div class="values_podsekcija">
                <h2 class="values_podsekcija_naslov">Respect others</h2>
                <p class="footnote">We recognize that our success depends on the talent, skills and expertise of our members and our ability to function as a  tightly integrated team. We appreciate our diversity and believe that respect – for our colleagues, partners, and all those with whom we interact – is an essential element of all positive and productive relationships.</p>
            </div>
        </div>
        
        <div class="values_sekcija">
            <div class="values_podsekcija">
                <h2 class="values_podsekcija_naslov bodyBold">Freedom and responsibility</h2>
                <p class="footnote">We are committed to our projects but we understand that our members comprise of students who have their academic duties and jobs. We allow our members to freely arrange their project responsibilities so they can fulfill their academic duties and to allow them to live their student period to the fullest.</p>
            </div>
            <div class="values_podsekcija">
                <img src="<?php echo e(asset('slike/lazar_predaje.webp')); ?>" alt="Argo tim">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\T470\Desktop\ARGO-WebSite\resources\views/about_us.blade.php ENDPATH**/ ?>
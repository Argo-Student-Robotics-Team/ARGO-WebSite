
<?php $__env->startSection("head"); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("page_content"); ?>
    <div class="banner">
        <img src="<?php echo e(asset('slike/Logo.svg')); ?>" alt="Argo Logo">
        <p class="application-dates">
            1st October - 21st October <br>
        </p>
        <p class="application-information">
            Membership Applications Open
        </p>
        <a href="https://forms.gle/JU4MhyhYA4cqPps27">
            <button class="join-us caption2Bold">
                APPLY NOW
            </button>
        </a>
    </div>
    <div class="content">
        <div class="who">
            <div class="prva">
                <p class="subheadlineBold">
                    [01] WHO WE ARE
                </p>
                <div class="div-naslov">
                    <p class="subheadline">
                        We're a diverse team of thinkers and doers, united by a steadfast commitment to improve our experience
                        in the forefront fields of technology.
                    </p>
                </div>
                <a href="<?php echo e(url('about')); ?>">
                    <button class="learn-more">
                        LEARN MORE
                    </button>
                </a>
            </div>
            <div class="druga">
                <img src="<?php echo e(asset('slike/homepage.webp')); ?>" alt="Team Working Image">
            </div>
        </div>
        <div class="news">
            <p class="subheadlineBold">
                [02] NEWS
            </p>
            <div class="vesti-container">
                <div class="vest" id="vest1">
                    <img src="<?php echo e(asset('slike/Seminar_ObjavaLN.webp')); ?>" alt="Seminar Event">
                    <p class="caption2">
                        Sept 25, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        EVENT
                    </p>
                    <p class="footnote">
                        Exploration of the Red Planet: Human-robot analogue missions in preparations for Mars
                        exploring. Is Mars the next stop for humanity?
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_istra%C5%BEivanje-crvene-planete-ljudsko-robotske-activity-7244749477511630848-MN_Z?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
                <div class="vest" id="vest2">
                    <img src="<?php echo e(asset('slike/ERC_24_Results_IG (1).webp')); ?>" alt="ERC Results">
                    <p class="caption2">
                        Sept 21, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        STORY
                    </p>
                    <p class="footnote">
                        European Rover Challenge competition: The updated competition result moves IPRLxArgo to the 17th place!
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_the-updated-competition-result-moves-iprlxargo-activity-7240405881132068864-oyPh?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
                <div class="vest" id="vest3">
                    <img src="<?php echo e(asset('slike/ERC_24_Results_IG.webp')); ?>" alt="ERC Competition">
                    <p class="caption2">
                        Sept 15, 2024
                    </p>
                    <p class="caption1" id="kategorija">
                        STORY
                    </p>
                    <p class="footnote">
                        Argo x Imperial Planetary Robotics Lab, finished in 18th place at the European Rover Challenge!
                    </p>
                    <a href="https://www.linkedin.com/posts/argo-srt_europe-rover-erc2025-activity-7239599629669945345-CUqC?utm_source=share&utm_medium=member_desktop">
                        <p class="caption2" id="link">Read more</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="join">
            <div class="flex">
                <div class="jedan">
                    <p class="subheadlineBold">
                        [03] PARTNERS
                    </p>
                </div>
            </div>
            <div class="partner">
                <div class="part" id="etf">
                    <img src="<?php echo e(asset('slike/Primarni ZZ ETF Engleski.svg')); ?>" alt="ETF Partner">
                </div>
                <div class="part" id="raf">
                    <img src="<?php echo e(asset('slike/Računarski fakultet.svg')); ?>" alt="RAF Partner">
                </div>
            </div>
            <div class="partner" id="partneri1">
                <?php
                    $partners = [
                        'backpack' => 'backpackflags_flag_225x150_25mm.jpg',
                        'owf' => 'OeWF_Logo_(2017).png',
                        'europe-space' => 'Evropska svemirska fondacija.svg',
                        'osra' => 'OSRA_logo.svg',
                        'digital' => 'digital-serbia-initiative-logo.svg',
                        'robotics' => 'ETF Robotics.svg',
                        'suma' => 'SUMA_CRNA.svg'
                    ];
                ?>

                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="part" id="<?php echo e($id); ?>">
                        <img src="<?php echo e(asset('slike/' . $image)); ?>" alt="<?php echo e(ucfirst(str_replace('-', ' ', $id))); ?> logo">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
        <div class="forma">
            <p class="subheadlineBold">
                [04] JOIN US
            </p>
            <div class="cont">
                <div class="i">
                    <p class="caption1" id="skill">
                        Your unique skillset can help redefine what students can do.
                    </p>
                    <a href="https://forms.gle/JU4MhyhYA4cqPps27">
                        <button class="join-us caption2Bold">
                            JOIN US
                        </button>
                    </a>
                </div>
                <div class="ii">
                    <div class="badabim">
                        <p class="caption1">
                            <span class="bold">Argo</span> is a place for:
                        </p>
                    </div>
                    <div class="titule">
                        <?php $__currentLoopData = ['Roboticists', 'Engineers', 'Makers', 'Innovators', 'Problem Solvers', 'Artists', 'Designers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="caption1"><?php echo e($role); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\T470\Desktop\ARGO-WebSite\resources\views/index.blade.php ENDPATH**/ ?>
<?php
get_header(); // Подключаем header
/*
Template Name:  Blog Large 
*/
?>
<?php if (have_rows('big_template')): ?>
    <?php while (have_rows('big_template')):
        the_row(); ?>
        <div class="mainWrapper">
            <section>
                <div class="bigTemplateWrapper wrapper">
                    <div class="bigTemplate-fullColumn">
                        <?php if ($article_full_name = get_field('article_full_name')): ?>
                            <h1><?php echo esc_html($article_full_name); ?></h1>
                        <?php endif; ?>
                        <?php if ($article_full_name = get_sub_field('article_full_name')): ?>

                        <?php endif; ?>
                        <div class="fullColumn-contentInfo">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'blog_category');
                            if ($terms && !is_wp_error($terms)):
                                // Получаем имя первой категории
                                $category_name = esc_html($terms[0]->name);
                            else:
                                $category_name = 'Без категории'; // Если категории нет
                            endif;
                            ?>
                            <p><?php echo $category_name ?></p>
                            <p><?php echo get_ukrainian_date(get_the_date('Y-m-d')); ?></p>
                        </div>
                        <?php
                        $full_picture_1 = get_sub_field('full_picture_1');
                        if ($full_picture_1): ?>
                            <img src="<?php echo esc_url($full_picture_1['url']); ?>"
                                alt="<?php echo esc_attr($full_picture_1['alt']); ?>" class="fullColumn-mainImage" />
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('text_1')): ?>
                        <?php while (have_rows('text_1')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <?php if ($h1 = get_sub_field('h1')): ?>
                                    <h2 class="fullRowName"><?php echo esc_html($h1); ?></h2>
                                <?php endif; ?>
                                <?php if (have_rows('p')): ?>
                                    <div class="rightColumn">
                                        <?php while (have_rows('p')):
                                            the_row(); ?>
                                            <?php if ($text = get_sub_field('text')): ?>
                                                <p><?php echo esc_html($text); ?>
                                                </p>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('text_picture_1')): ?>
                        <?php while (have_rows('text_picture_1')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <div class="leftColumn">
                                    <?php
                                    $picture = get_sub_field('picture');
                                    if ($picture): ?>
                                        <img src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($picture['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="rightColumn">
                                    <?php if ($h1 = get_sub_field('h1')): ?>
                                        <h2 class="chapterName"><?php echo esc_html($h1); ?></h2>
                                    <?php endif; ?>                 <?php if (have_rows('caption')): ?>
                                        <?php while (have_rows('caption')):
                                            the_row(); ?>
                                            <div class="chapterFactItem">
                                                <?php if ($h2 = get_sub_field('h2')): ?>
                                                    <h3><?php echo esc_html($h2); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($text = get_sub_field('text')): ?>
                                                    <p><?php echo esc_html($text); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('text_2')): ?>
                        <?php while (have_rows('text_2')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <div class="leftColumn"></div>
                                <div class="rightColumn">
                                    <?php if ($h1 = get_sub_field('h1')): ?>
                                        <h2 class="chapterName"><?php echo esc_html($h1); ?></h2>
                                    <?php endif; ?>
                                    <?php if (have_rows('p')): ?>
                                        <?php while (have_rows('p')):
                                            the_row(); ?>
                                            <?php if ($text = get_sub_field('text')): ?>
                                                <p><?php echo esc_html($text); ?>
                                                </p>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('text_3')): ?>
                        <?php while (have_rows('text_3')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <?php if ($h1 = get_sub_field('h1')): ?>
                                    <h2 class="fullRowName"><?php echo esc_html($h1); ?></h2>
                                <?php endif; ?>
                                <?php if (have_rows('p')): ?>
                                    <div class="rightColumn">
                                        <?php while (have_rows('p')):
                                            the_row(); ?>
                                            <?php if ($text = get_sub_field('text')): ?>
                                                <p><?php echo esc_html($text); ?>
                                                </p>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    $full_picture_2 = get_sub_field('full_picture_2');
                    if ($full_picture_2): ?>
                        <div class="bigTemplate-fullColumn smallMargin">
                            <img src="<?php echo esc_url($full_picture_2['url']); ?>"
                                alt="<?php echo esc_attr($full_picture_2['alt']); ?>" class="fullColumn-mainImage" />
                        </div>
                    <?php endif; ?>
                    <?php if (have_rows('text_4')): ?>
                        <?php while (have_rows('text_4')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <div class="leftColumn"></div>
                                <div class="rightColumn">
                                    <?php if (have_rows('facts')): ?>
                                        <div class="smallContent-markList">
                                            <?php while (have_rows('facts')):
                                                the_row(); ?>
                                                <div class="markListItem">
                                                    <div class="checkMarkIcon"></div>
                                                    <?php if ($text = get_sub_field('text')): ?>
                                                        <p><?php echo esc_html($text); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (have_rows('chapter')): ?>
                                        <?php while (have_rows('chapter')):
                                            the_row(); ?>
                                            <div class="chapterFactItem">
                                                <?php if ($h3 = get_sub_field('h3')): ?>
                                                    <h3><?php echo esc_html($h3); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($p = get_sub_field('p')): ?>
                                                    <p><?php echo esc_html($p); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (have_rows('text_picture_2')): ?>
                        <?php while (have_rows('text_picture_2')):
                            the_row(); ?>
                            <div class="bigTemplate-fullRow">
                                <div class="leftColumn">
                                    <?php
                                    $picture = get_sub_field('picture');
                                    if ($picture): ?>
                                        <img src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($picture['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="rightColumn">
                                    <?php if ($h1 = get_sub_field('h1')): ?>
                                        <h2 class="chapterName"><?php echo esc_html($h1); ?></h2>
                                    <?php endif; ?>                 <?php if (have_rows('caption')): ?>
                                        <?php while (have_rows('caption')):
                                            the_row(); ?>
                                            <div class="chapterFactItem">
                                                <?php if ($h2 = get_sub_field('h2')): ?>
                                                    <h3><?php echo esc_html($h2); ?></h3>
                                                <?php endif; ?>
                                                <?php if ($text = get_sub_field('text')): ?>
                                                    <p><?php echo esc_html($text); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="bigTemplate-fullRow">
                        <div class="leftColumn">
                        </div>
                        <div class="rightColumn blogArticleFooter">
                            <div class="blogShareWrapper">
                                <h2>Поділитись</h2>
                                <div class="shareSocials">
                                    <a href="https://www.tiktok.com/@yourprofile" target="_blank" rel="noopener noreferrer"
                                        class="shareItem">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTikTok.svg"
                                            alt="TikTok">
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                        target="_blank" rel="noopener noreferrer" class="shareItem">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerFacebook.svg"
                                            alt="Facebook">
                                    </a>
                                    <a href="https://t.me/share/url?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                        target="_blank" rel="noopener noreferrer" class="shareItem">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerTelegram.svg"
                                            alt="Telegram">
                                    </a>
                                    <a href="https://www.instagram.com/yourprofile" target="_blank" rel="noopener noreferrer"
                                        class="shareItem">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/footerInstagram.svg"
                                            alt="Instagram">
                                    </a>
                                </div>
                            </div>
                            <div class="recentArticlesWrapper">
                                <div class="recentArticleItem">
                                    <div class="recentArticleButton">
                                        <a href="" class="swiperButtonPrev">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <p>Попередня стаття</p>
                                    </div>
                                    <p>УКАБ Агротехнології 2024</p>
                                </div>
                                <div class="recentArticleItem">
                                    <div class="recentArticleButton">
                                        <p>Наступна стаття</p>
                                        <a href="" class="swiperButtonNext">
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 13.5L12.4444 4.05556M13 12.3889V3.5L4.11111 3.5" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                    <p>Як українському аграрію потрапити в світовий ТОП по врожайності сої?</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer(); // Подключаем footer
?>
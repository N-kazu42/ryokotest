        <?php if (!is_front_page()) : ?>
          </div>
          </div>
          </main>
          </div>
          </div>
        <?php endif; ?>
        <footer class="footer" id="footer">
          <div class="footerContents">
            <div class="footerContents-contact">
              <div class="enterprise-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-ryoko-footer.svg" alt="ryoko-sangyo.co" />
              </div>
              <div class="enterprise-detail">
                <p class="name">菱工産業株式会社</p>
                <p class="address">
                〒514-0002 津市島崎町209番地の2
                </p>
              </div>
            </div>
            <div class="footerContents-sitemap">
              <nav class="footer-nav">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'place_footer',
                    'container' => false
                  )
                );
                ?>
              </nav>
            </div>
          </div>
          <p class="copyright">
            <small class="copyright-text">&#169; 2022 RYOKOSANGYO CO.,LTD.</small>
          </p>
        </footer>
        </div><!-- /.container -->
        <?php wp_footer(); ?>
        </body>

        </html>
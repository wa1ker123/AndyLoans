<?php
  /**
   *
   * @package WordPress
   * @subpackage Twenty_Seventeen
   * @since 1.0
   * @version 1.0
   */

  get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="mb-4">Contact Us</h1>
            <p>Got a question? Drop your question the form below and we'll get back to you as soon as possible</p>
          </div>
          <div class="col-12 text-center mx-auto">
            <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]');?>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
<?php
get_footer();

  </article>

  <footer>
    <div class="wrapper">
      <a class="branding" href="/">
        <img src='<?= TEMPLATE_URL ?>/images/fuse-branding-white.png' alt='Fuse | Coworking, Tri-Cities, WA'/>
      </a>
      <p class="legal">
        &copy; Copyright <?= date('Y') ?> Fuse, SPC
        <a href='<?= get_permalink(PRIVACY_POLICY_PAGE_ID) ?>'>Privacy</a>
        <a href='<?= get_permalink(TERMS_OF_USE_PAGE_ID) ?>'>Terms</a>
        <a href='<?= get_permalink(POLICIES_PAGE_ID) ?>'>Policies</a>
        <a href='<?= get_permalink(ANNUAL_REPORT_PAGE_ID) ?>'>Annual Report</a>
      </p>
    </div>
  </footer>

<? wp_footer() ?>
</body>
</html>
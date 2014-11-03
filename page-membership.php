<?php
/* Template Name: Membership Page */
get_header();
the_post();

$checkout_url = get_permalink(MEMBERSHIP_CHECKOUT_PAGE_ID);
?>

<section>
  <div class="wrapper">
    <h1><? the_title() ?></h1>
    <div class="block fourcol">
      <? the_content() ?>
    </div>
  </div>
</section>

<section class="pricing">
  <div class="wrapper">
    <h1>Monthly Packages</h1>
    <table class="wide">
      <thead>
        <tr>
          <th></th>
          <th>Coworking<br>Days</th>
          <th>Seating</th>
          <th>Events</th>
          <th>Conference<br>Room</th>
          <th>Monthly<br>Cost</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr class="odd">
          <th class="alignl">Basic</th>
          <td><mark class="no">No</mark></td>
          <td><mark class="no">No</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="no">No</mark></td>
          <td><strong>$30</strong></td>
          <td class="nopad alignr">
            <a class="btn small"
              href="<?= $checkout_url ?>?level=<?= BASIC_MEMBERSHIP_LEVEL ?>">
              Sign up</a>
          </td>
        </tr>
        <tr class="even">
          <th class="alignl">Hot Desk 1</th>
          <td>10</td>
          <td>Open</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><strong>$75</strong></td>
          <td class="nopad alignr">
            <a class="btn small"
              href="<?= $checkout_url ?>?level=<?= HOT_DESK_1_LEVEL ?>">
              Sign up</a>
          </td>
        </tr>
        <tr class="odd">
          <th class="alignl">Hot Desk 2</th>
          <td>Unlimited</td>
          <td>Open</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><strong>$125</strong></td>
          <td class="nopad alignr">
            <a class="btn small"
              href="<?= $checkout_url ?>?level=<?= HOT_DESK_2_LEVEL ?>">
              Sign up</a>
          </td>
        </tr>
        <tr class="even">
          <th class="alignl">Fixed Desk</th>
          <td>Unlimited</td>
          <td>Reserved</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><strong>$225</strong></td>
          <td class="nopad alignr">
            <a class="btn small"
              href="<?= $checkout_url ?>?level=<?= FIXED_DESK_LEVEL ?>">
              Sign up</a>
          </td>
        </tr>
        <tr class="odd">
          <th class="alignl">Offices</th>
          <td>Unlimited</td>
          <td>Private</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><strong>$400</strong></td>
          <td class="nopad alignr">
            <a class="btn small secondary"
              href="<?= get_permalink(MEMBERSHIP_LEVELS_PAGE_ID) ?>">
              Availability</a>
          </td>
        </tr>
        <tr class="odd">
          <td class="alignl" colspan="7">
            <p class="notes">
              Office prices based on square footage. Fees for additional occupant(s) applies.
            </p>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="narrow">
      <tbody>
        <tr class="odd">
          <td class="alignc">
            <h3>Basic</h3><mark class="price">$30/mo</mark>
            <p class="list"><span>Access to events</span></p>
            <p>
              <a class="btn small"
                href="<?= $checkout_url ?>?level=<?= BASIC_MEMBERSHIP_LEVEL ?>">
                Sign up</a>
            </p>
          </td>
        </tr>
        <tr class="even">
          <td class="alignc">
            <h3>Hot Desk 1</h3><mark class="price">$75/mo</mark>
            <p class="list">
              Open Seating, 10 coworking days, acceess to events and conference rooms.
            </p>
            <p>
              <a class="btn small"
                href="<?= $checkout_url ?>?level=<?= HOT_DESK_1_LEVEL ?>">
                Sign up</a>
            </p>
          </td>
        </tr>
        <tr class="odd">
          <td class="alignc">
            <h3>Hot Desk 2</h3><mark class="price">$125/mo</mark>
            <p class="list">
              Open Seating, unlimited coworking days, acceess to events and conference rooms.
            </p>
            <p>
              <a class="btn small"
                href="<?= $checkout_url ?>?level=<?= HOT_DESK_2_LEVEL ?>">
                Sign up</a>
            </p>
          </td>
        </tr>
        <tr class="even">
          <td class="alignc">
            <h3>Fixed Desk</h3><mark class="price">$225/mo</mark>
            <p class="list">
              Reserved seating, unlimited coworking days, lockable desk, acceess to events and conference rooms.
            </p>
            <p>
              <a class="btn small"
                href="<?= $checkout_url ?>?level=<?= FIXED_DESK_LEVEL ?>">
                Sign up</a>
            </p>
          </td>
        </tr>
        <tr class="odd">
          <td class="alignc">
            <h3>Offices</h3><mark class="price">$400+/mo</mark>
            <p class="list">
              Private room, unlimited coworking days, acceess to events and conference rooms.
            </p>
            <p class="notes">
              Prices based on square footage. Fees for additional occupants applies.
            </p>
            <p>
              <a class="btn small secondary"
                href="<?= get_permalink(MEMBERSHIP_LEVELS_PAGE_ID) ?>">
                Availability</a>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?
get_footer();

<?php
/* Template Name: Membership Page */
get_header();
the_post();
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
          <th class="alignr">Monthly<br>Cost</th>
        </tr>
      </thead>
      <tbody>
        <tr class="odd">
          <th class="alignl">Basic</th>
          <td><mark class="no">No</mark></td>
          <td><mark class="no">No</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="no">No</mark></td>
          <th class="alignr">$30</th>
        </tr>
        <tr class="even">
          <th class="alignl">Hot Desk 1</th>
          <td>10</td>
          <td>Open</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <th class="alignr">$75</th>
        </tr>
        <tr class="odd">
          <th class="alignl">Hot Desk 2</th>
          <td>Unlimited</td>
          <td>Open</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <th class="alignr">$125</th>
        </tr>
        <tr class="even">
          <th class="alignl">Fixed Desk</th>
          <td>Unlimited</td>
          <td>Reserved</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <th class="alignr">$225</th>
        </tr>
        <tr class="odd">
          <th class="alignl">Offices</th>
          <td>Unlimited</td>
          <td>Private</td>
          <td><mark class="yes">Yes</mark></td>
          <td><mark class="yes">Yes</mark></td>
          <th class="alignr">$400+</th>
        </tr>
        <tr class="odd">
          <td class="alignl" colspan="6">
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
          </td>
        </tr>
        <tr class="even">
          <td class="alignc">
            <h3>Hot Desk 1</h3><mark class="price">$75/mo</mark>
            <p class="list">
              Open Seating, 10 coworking days, acceess to events and conference rooms.
            </p>
          </td>
        </tr>
        <tr class="odd">
          <td class="alignc">
            <h3>Hot Desk 2</h3><mark class="price">$125/mo</mark>
            <p class="list">
              Open Seating, unlimited coworking days, acceess to events and conference rooms.
            </p>
          </td>
        </tr>
        <tr class="even">
          <td class="alignc">
            <h3>Fixed Desk</h3><mark class="price">$225/mo</mark>
            <p class="list">
              Reserved seating, unlimited coworking days, lockable desk, acceess to events and conference rooms.
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
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?
get_footer();

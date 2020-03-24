<template>
  <div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-lg-12">
  <div class="section-filters-bar v5">
  <!-- SECTION FILTERS BAR ACTIONS -->
  <div class="section-filters-bar-actions">
  <!-- FILTER TABS -->
  <div class="filter-tabs">
  <!-- FILTER TAB -->
  <div class="filter-tab active">
    <!-- FILTER TAB TEXT -->
    <p class="filter-tab-text">Topics Started</p>
    <!-- /FILTER TAB TEXT -->
  </div>
  <!-- /FILTER TAB -->

  <!-- FILTER TAB -->
  <div class="filter-tab">
    <!-- FILTER TAB TEXT -->
    <p class="filter-tab-text">My Replies</p>
    <!-- /FILTER TAB TEXT -->
  </div>
  <!-- /FILTER TAB -->

  <!-- FILTER TAB -->
  <div class="filter-tab">
    <!-- FILTER TAB TEXT -->
    <p class="filter-tab-text">Liked Topics</p>
    <!-- /FILTER TAB TEXT -->
  </div>
  <!-- /FILTER TAB -->
  </div>
  <!-- /FILTER TABS -->

  <!-- FORM -->
  <form class="form">
  <!-- FORM SELECT -->
  <div class="form-select">
    <label for="forum-filter-category">Filter By</label>
    <select id="forum-filter-category" name="forum_filter_category">
      <option value="0">Topics Started</option>
      <option value="1">My Replies</option>
      <option value="2">Liked Topics</option>
    </select>
    <!-- FORM SELECT ICON -->
    <svg class="form-select-icon icon-small-arrow">
      <use xlink:href="#svg-small-arrow"></use>
    </svg>
    <!-- /FORM SELECT ICON -->
  </div>
  <!-- /FORM SELECT -->
  </form>
  <!-- /FORM -->
  </div>
  <!-- /SECTION FILTERS BAR ACTIONS -->

  <!-- SECTION FILTERS BAR ACTIONS -->
  <div class="section-filters-bar-actions">
  <!-- FORM -->
  <form class="form">
  <!-- FORM ITEM -->
  <div class="form-item split medium">
    <!-- FORM SELECT -->
    <div class="form-select small">
      <label for="forum-filter-order">Order By</label>
      <select id="forum-filter-order" onchange="getrevelance($(this).value)" name="forum_filter_order">
        <option value="0">Newest First</option>
        <option value="1">Oldest First</option>
      </select>
      <!-- FORM SELECT ICON -->
      <svg class="form-select-icon icon-small-arrow">
        <use xlink:href="#svg-small-arrow"></use>
      </svg>
      <!-- /FORM SELECT ICON -->
    </div>
    <!-- /FORM SELECT -->

    <!-- BUTTON -->
    <button class="button primary">Apply Filter</button>
    <!-- /BUTTON -->
  </div>
  <!-- /FORM ITEM -->
  </form>
  <!-- /FORM -->
  </div>
  <!-- /SECTION FILTERS BAR ACTIONS -->
  </div>

  </div>
  </div>
  </div>
</template>

<script>
export default {

      data() {

          return {
            orderby: '',
          };
      },
      methods: {
        getOrderBy(this.orderby){
           
        }
      }

  }
</script>

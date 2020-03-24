
<div class="section-pager-bar-wrap align-right">

  <div class="section-pager-bar">

    <div class="section-pager">

    @if ($paginator->onFirstPage())
    <div class="section-pager-controls">

      <div class="slider-control left disabled">

        <svg class="slider-control-icon icon-small-arrow">
          <use xlink:href="#svg-small-arrow"></use>
        </svg>
    
      </div>
    </div>
    @else
    <div class="section-pager-item">

      <p class="section-pager-item-text"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></p>

    </div>

    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
        <div class="section-pager-item active">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text"><span class="disabled">&laquo;</span></p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <div class="section-pager-item active">
                  <!-- SECTION PAGER ITEM TEXT -->
                  <p class="section-pager-item-text"><span><a href="{{ $url }}">{{ $page }}</a></span></p>
                  <!-- /SECTION PAGER ITEM TEXT -->
                </div>


                @else
                <div class="section-pager-item ">
                  <!-- SECTION PAGER ITEM TEXT -->
                  <p class="section-pager-item-text"><a href="{{ $url }}">{{ $page }}</a></p>
                  <!-- /SECTION PAGER ITEM TEXT -->
                </div>


                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <div class="section-pager-item">
      <!-- SECTION PAGER ITEM TEXT -->
      <p class="section-pager-item-text">
        <a href="{{ $paginator->nextPageUrl() }}" rel="next"> &raquo;</a></p>
        <!-- /SECTION PAGER ITEM TEXT -->
      </div>


    @else
    <div class="section-pager-item active">
      <!-- SECTION PAGER ITEM TEXT -->
      <p class="section-pager-item-text"><span class="disabled"> &raquo;</span></p>
      <!-- /SECTION PAGER ITEM TEXT -->
    </div>
    @endif
</ul>



    </div>
    <!-- /SECTION PAGER CONTROLS -->
  </div>
  <!-- /SECTION PAGER BAR -->
</div>
<!-- /SECTION PAGER BAR WRAP -->
